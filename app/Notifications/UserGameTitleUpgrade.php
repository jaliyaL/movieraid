<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;

class UserGameTitleUpgrade extends Notification
{
    use Queueable;

    private $user;
    private $userGameTitle;
    private $score;

    public function __construct($user,$userGameTitle,$score)
    {
        $this->user = $user;
        $this->userGameTitle = $userGameTitle;
        $this->score = $score;
    }

    public function via($notifiable)
    {
        return ['database','broadcast'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'type' => 'title_upgrade',
            'header' => 'Congratulations !',
            'body1' => 'You scored '.$this->score. ' marks and earned',
            'body2' => 'the title '.$this->userGameTitle
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'type' => 'title_upgrade',
            'header' => 'Congratulations !',
            'body1' => 'You scored '.$this->score. ' marks and earned',
            'body2' => 'the title '.$this->userGameTitle,
            'created_at' => ''
        ]);
    }


    public function toMail($notifiable)
    {

      return (new MailMessage)
           ->greeting('Congratulations !!')
           ->line('You scored '. $this->score . ' Marks & Earned the Title '. $this->userGameTitle);

    }
}
