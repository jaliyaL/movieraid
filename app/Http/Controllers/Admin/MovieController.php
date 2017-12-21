<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use Validator;
use Intervention;

class MovieController extends Controller
{
    public function movieList(){
       $movies = Image::all();
       //dd($users);
       return view('admin.pages.movies',compact('movies'));
    }

    public function movieListAjax(){
       $movies = Image::all();
       
       return response()->json([
		    'movies' => $movies
		]);
    }

    public function getAddForm(){
       return view('admin.pages.add-movie');
    }

    public function addMovie(Request $request)
    {
    
        /*$rules = [
            'name' => 'required'
        ];
        $photos = count($this->input('photos'));
        foreach(range(0, $photos) as $index) {
            $rules['photos.' . $index] = 'image|mimes:jpeg,bmp,png|max:2000';
        }*/

        $validator = Validator::make($request->all(), 
        	[
		         /*'photos.*' => 'required|mimes:jpg,jpeg,png,bmp|max:20000',*/
		         'movie_name' => 'required|unique:images,title',
		         'photos' => 'required|mimes:jpg,jpeg,png,bmp|max:20000',
		    ]
		    ,
		    [
		    /*	'photos.*.required' => 'Please upload an image',
		        'photos.*.mimes' => 'Only jpeg,png and bmp images are allowed',
		        'photos.*.max' => 'Sorry! Maximum allowed size for an image is 20MB',*/
		        'photos.required' => 'Please upload an image',
		        'photos.mimes' => 'Only jpeg,png and bmp images are allowed',
		        'photos.max' => 'Sorry! Maximum allowed size for an image is 20MB',
		        'movie_name' => 'Please enter Movie name',
		    ]
		);

		if ($validator->fails()) {
		        return redirect('/add-movie')->withErrors($validator);
		}else{
			   	//foreach ($request->photos as $photo) {  

			//dd($request->all());

	    		$extension = $request->photos->getClientOriginalExtension();
	    		$imagename = $request->photos->getClientOriginalName();
	    		$title = md5($imagename);
	    		$filename = $title.'.'.$extension;

	    		$destinationPath = public_path('/img/models');

	    		//thumb 600*400
	            $thumb_600 = Intervention::make($request->photos->getRealPath())->resize(600,400);
	            $thumb_600->save($destinationPath.'/W600H400/'.$filename,80);

	            //thumb 150*110
	            $thumb_150 = Intervention::make($request->photos->getRealPath())->resize(150,110);
	            $thumb_150->save($destinationPath.'/W150H110/'.$filename,80);

	            //thumb 50*39
	            $thumb_50 = Intervention::make($request->photos->getRealPath())->resize(50,39);
	            $thumb_50->save($destinationPath.'/W50H39/'.$filename,80);

	            //move original image
	            $request->photos->move($destinationPath,$filename);

	    		$image = new Image;
	    		$image->country = 'sl';
		        $image->title = $request->movie_name;
		        $image->filename = $filename;
		        $image->save();
	        //}
		}

        return redirect()->back()->with('success', 'New Movie Add !');;
    }

    public function updateMovieName(Request $request){

    	$this->validate($request, [
	        'newmovie' => 'required|unique:images,title,'.$request->input('oldmovie.id'),
   		]); 

        $movie = Image::find($request->input('oldmovie.id'));
        $movie->title = $request->input('newmovie');
        $movie->save();

        return response()->json([
		    'message' => 'Movie Updated successfully',
		    'movie' => $movie
		]);
    	
    	//return response()->json(['message' => $request->all()]);
    }

}
