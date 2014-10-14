<?php

class ImageController extends \BaseController {

    public function downloadImage()
    {   
        $image_id = Request::segment(2);
        $image_name = Request::segment(4);
        $download = new Download();
        $download->user_id = Sentry::getUser()->id;
        $download->image_id = $image_id;
        $download->save();

        $file= public_path()."/uploads/large/".$image_name;
        $headers = array(
              'Content-Type: image/'.ImageModel::getImageType($image_id)
            );
        return Response::download($file,$image_name,$headers);
    }
    public function getViewImage()
    {
        // Request segement function will fetch the 2nd argument of URL
        $id         =  Request::segment(2);
        $user_id    =  Sentry::getUser()->id;
        $downloaded =  Download::where('image_id',$id)->count();
        $views      =  Views::where('image_id',$id)->count();
        ImageModel::incrementView($id); // Just icremenent view which is saving user_id in views table..
        $image = ImageModel::getImage($id); 
        
        return View::make('pages.images-display')
                   ->with('downloaded',$downloaded)
                   ->with('views',$views)
                   ->with('images',$image);
    }
	public function getImageUpload()
	{
        return View::make('pages.image-upload')
                   ->with('categories',Config::get('lists.imagecategory'));
	}
	public function postImageUpload()
	{
		$image = Input::file('image');
        // Get image extension

        $fields = array(
				'image'             => $image,
                'image_name'        => Input::get('image_name'),
                'age'               => Input::get('people_age'),
                'gender'            => Input::get('people_gender'),
                'num_of_people'     => Input::get('people_number'),
                'description'       => Input::get('description'),
                'tags'              => Input::get('tags'),
                'termsandconditions'=> Input::get('termsandconditions'),
                'ethnicity'         => Input::get('people_ethnicity'),
			);
			$rules = array(
				// Image must be required; must be less than 10mb and match these types jpeg,png,gif,bmp,tiff,ai,psd

                'image_name'        => 'Required',
                'description'       => 'Required',
                'image'	            => 'Required|Max:10000|mimes:jpeg,jpg,png,gif,bmp,tiff,ai',
                'tags'              => 'Required',
                'termsandconditions'=> 'Required'

            );

        //if number of peoples are more than Zero or 1 or greater THEN we need to apply these rules
            if(!empty($fields['num_of_people']))
            {
                $rules['age']       = 'Required';
                $rules['gender']    = 'Required';
                $rules['ethnicity'] = 'Required';
            }

        $v = Validator::make($fields, $rules);
        if($v->fails())
        {
            Toastr::error($v->errors()->first());
            return Redirect::to('user/image/upload')->withInput();
        }else
        {
            $extension = $image->getClientOriginalExtension();
            if($extension == 'psd' || $extension == 'ai')
            {
                // if PSD of AI is uploaded we just have to save them no need to crop them
                $save = ImageModel::savePsdOrAi($image);
                if($save)
                    Toastr::success("You successfully uploaded the file");
                return Redirect::to('user/image/upload');
            }

            unset($fields['termsandconditions']);
            $images = new ImageModel();
            $image_slug = ImageModel::slugify($fields['image_name']);

                $images->orientation   = $this->getOrientation('image');
                $images->height        = $this->getDimensions('image')['height'];
                $images->width         = $this->getDimensions('image')['width'];
                $images->image_size    = $this->getFileSize($image->getSize());
                $images->image_type    = $image->getClientOriginalExtension();
                $images->description   = Input::get('description');
                $images->user_id	   = Sentry::getUser()->id;
                $images->slug          = $fields['image_name'];
                $images->color         = Input::get('color');
                $images->editorial     = Input::get('editorial');


            if($images->save())
            {
                $image_name = $this->imageCrop('image',100,100,'thumbnail',$image_slug,'',$images->id); // this function is written in BaseController.php
                $this->imageCrop('image',600,400,'medium','',$image_name);
                $this->imageCrop('image','','','large','',$image_name);

                $images->image_name    = $image_name;
                $images->update();

                // if image is save, Now save categories
                $category = new Category();
                $category->category_name = Input::get('category');
                $category->image_id = $images->id;

                if($category->save())
                {
                    //if category is saved, Now save Tags
                    Tag::saveTags($images); // function written in Tag Model which  saves all tags
                }
                if(!empty($fields['num_of_people']))
                {
                    //if number of peoples are more than Zero or 1 or greater THEN we need save below submitted data
                    $peopleAttr = new PeopleAttributes();
                    $peopleAttr->image_id = $images->id;
                    $peopleAttr->ethnicity = Input::get('people_ethnicity');
                    $peopleAttr->number_of_people = Input::get('people_number');
                    $peopleAttr->gender = Input::get('people_gender');
                    $peopleAttr->age = Input::get('people_age');
                    $peopleAttr->save();
                }
            }
            Toastr::success('You successfully uploaded an image');
            return Redirect::to('user/image/upload');
        }
    }
    public function getTagSuggestions()
    { 
           
            $tag_results = Tag::select('tag_name')->distinct()->get();
            
            return Response::json($tag_results,200);
    }
}
