<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\Image;
use Intervention;
use Validator;

class ImageController extends Controller
{
    public function getUploadForm()
    {
    	$images = Image::all();
    	//dd($images);
    	return view('pages.upload',['images'=>$images]);
    }

    public function uploadImages(Request $request)
    {
    
        /*$rules = [
            'name' => 'required'
        ];
        $photos = count($this->input('photos'));
        foreach(range(0, $photos) as $index) {
            $rules['photos.' . $index] = 'image|mimes:jpeg,bmp,png|max:2000';
        }*/

        $validator = Validator::make($request->all(), [
		    'photos.*' => 'required|mimes:jpg,jpeg,png,bmp|max:20000',
		    ],[
		        'photos.*.required' => 'Please upload an image',
		        'photos.*.mimes' => 'Only jpeg,png and bmp images are allowed',
		        'photos.*.max' => 'Sorry! Maximum allowed size for an image is 20MB',
		    ]
		);

		if ($validator->fails()) {
		        return redirect('/images')->withErrors($validator);
		}else{
			   	foreach ($request->photos as $photo) {   	

	    		$extension = $photo->getClientOriginalExtension();
	    		$imagename = $photo->getClientOriginalName();
	    		$title = md5($imagename);
	    		$filename = $title.'.'.$extension;

	    		$destinationPath = public_path('/img/models');

	    		//thumb 600*400
	            $thumb_600 = Intervention::make($photo->getRealPath())->resize(600,400);
	            $thumb_600->save($destinationPath.'/W600H400/'.$filename,80);

	            //thumb 150*110
	            $thumb_150 = Intervention::make($photo->getRealPath())->resize(150,110);
	            $thumb_150->save($destinationPath.'/W150H110/'.$filename,80);

	            //move original image
	            $photo->move($destinationPath,$filename);

	    		$image = new Image;
	    		$image->country = 'sl';
		        $image->title = $title;
		        $image->filename = $filename;
		        $image->save();
	        }
		}

        return redirect()->back();
    }

    /*public function add(){
		        $file = Request::file('file');
		        $extension = $file->getClientOriginalExtension();
		        Storage::disk('local')->put($file->getFilename().'.'.$extension, File::get($file));

		        $entry = new \App\File();
		        $entry->mime = $file->getClientMimeType();
		        $entry->original_filename = $file->getClientOriginalName();
		        $entry->filename = $file->getFilename().'.'.$extension;
		        $entry->save();

		        $product = new Product();
		        $product->file_id=$entry->id;
		        $product->name=Request::input('name');
		        $product->description=Request::input('description');
		        $product->price=Request::input('price');
		        $product->imageurl=Request::input('imageurl');
		        $product->save();

		        return redirect('/products');
    }*/
}
