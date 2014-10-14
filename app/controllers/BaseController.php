<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function sendEmail($to,$data = array())
	{
		Mail::send('emails.'.$data['template'], $data, function($message) use($to,$data)
		{
    		$message->from('rooott@gmail.com')
    				->to($to, 'John Smith')->subject($data['subject']);
		});
    }
	public function imageCrop($image,$width,$height,$path,$slug,$desiredImagename=Null,$id=Null)
	{ 	

        $img = Input::file($image);
        $ext = $img->getClientOriginalExtension();

        if (Input::hasFile($image)) {
            $upload_path = $_SERVER['DOCUMENT_ROOT'] . "/uploads/".$path;

            if (!is_dir($upload_path))
            File::makeDirectory($upload_path);

            //stockfree-frog-in-a-tree-1.jpg
        if($desiredImagename)
        {
            $imageName = $desiredImagename;
        }else
            {
               $imageName = "stockfree-".$slug."-".$id.".".$ext;
            }
        try {
                if($width && $height)
                {   
                    $success = Image::make($img)
                        ->resize($width, $height,function ($constraint) {
                            $constraint->aspectRatio();
                        })
                        // ->insert($_SERVER['DOCUMENT_ROOT'].'/images/bar.png','center')
                        ->save($upload_path."/".$imageName);

                }else
                {
                       $success = Image::make($img)
                                                  ->insert($_SERVER['DOCUMENT_ROOT'].'/images/bar.png','center')
                                                  ->save($upload_path."/". $imageName);
                }
                if ($success) {
                    try {
                        
                        return $imageName;
                    } catch (Sentry\SentryException $e) {
                        
                        return false;
                    }
                } else {
                    return false;
                }
            } catch (Exception $e) {
                return false;
            }
        }
        return false;
    }

    public function getDimensions($image)
    {
        $img = getimagesize(Input::file($image));
        return array('width'=>$img[0],'height'=> $img[1]);
    }
    public function getOrientation($image)
    {  
        $size = getimagesize(Input::file($image));
        if ($size[0] < $size[1])
        {
           return 'portrait';
        }
        else if ($size[1] < $size[0]) {
        return 'landscape';
        }
        else {
        return 'square';
        }
    }
    public function getFileSize($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;

    }

}
