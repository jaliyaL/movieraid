<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
   protected $table = 'games';

   protected $fillable = [
       'winner',
       'loser'
   ];

   public function winnerTitle()
   {
        return $this->belongsTo('App\Image','winner','id');
   }

   public function loserTitle()
   {
        return $this->belongsTo('App\Image','loser','id');
   }

   public function userName()
   {
        return $this->belongsTo('App\User','user','id');
   }


   public static function expectedScore($R2Score,$R1Score)
   {
      return (1 / (1 + pow(10, (($R2Score - $R1Score) / 400))));
   }

   public static function winnerNewScore($score, $expected, $k=24)
   {
   	  return $score + $k * (1 - $expected);
   }

   public static function losserNewScore($score, $expected, $k=24)
   {
   	  return $score + $k * (0 - $expected);
   }

   public static function rank($score, $losses, $wins)
   {
   	  if(($score==0 || $losses==0 || $wins==0)){
   	  	return 0;
   	  }
   	  return $score / (1 + ($losses / $wins));
   }
}
