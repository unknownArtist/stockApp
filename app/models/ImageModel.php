<?php

class ImageModel extends Eloquent {
	    protected $table = 'images';

    public function tags()
    {
        return $this->belongsToMany('Tag','image_tag','image_id');
    }
    public function peopleAttribute()
    {
        return $this->hasMany('PeopleAttributes','image_id');
    }

    public static function incrementDownload($id)
    {
        $image = ImageModel::find($id);
        $image->downloaded  = $image->downloaded + 1;
        $image->save();
        return;
    }
    public static function incrementView($id)
    {
        $view = new Views();
        $view->user_id = Sentry::getUser()->id;
        $view->image_id = $id;
        $view->save();
        return;
    }
    public static function savePsdOrAi($image)
    {
        $images = new ImageModel();

        $images->image_name    = 'image-'.rand().".".$image->getClientOriginalExtension();
        $images->image_type    = $image->getClientOriginalExtension();
        $images->description   = Input::get('description');
        $images->user_id	   = Sentry::getUser()->id;
        $images->image_size    = $image->getSize();
        $images->slug          = ImageModel::slugify(Input::get('image'));
        $images->color         = Input::get('color');
        $images->editorial     = Input::get('editorial');
        $images->save();
        $upload_path = $_SERVER['DOCUMENT_ROOT'] ."/uploads/".$image->getClientOriginalExtension();
        if (!is_dir($upload_path))
            // Make a file directory for saving images
            File::makeDirectory($upload_path);

        if($image->move($upload_path))
        {
            return true;
        }else
        {
            return false;
        }

    }
    public static function search()
    {
        $search_term        = Input::get('search-term');
        $search_cat         = Input::get('search_category');
        $orientation        = Input::get('orientation');
        $contributor_name   = Input::get('contributor-name');
        $image_type         = Input::get('image_type');
        $editorial          = Input::get('editorial');
        $color              = Input::get('color');
        $exclude_keywords   = Input::get('exclude_keywords');
        $people_number      = Input::get('people_number');
        $people             = Input::get('people');
        $people_age         = Input::get('people_age');
        $gender             = Input::get('people_gender');
        $ethnicity          = Input::get('people_ethnicity');
        $image_tag          = Input::get('image_tag');


        $query = NULL;
        $query = new ImageModel();

        if($search_term)
        { 
            $query = $query->where('slug','LIKE','%'.$search_term.'%')
                           ->orWhere('description','LIKE','%'.$search_term.'%')
                           ->orderBy('id','DESC');

        }
        if($orientation != 'all-orientations')
        {
            $query = $query->where('orientation',$orientation);

        }
        if($editorial)
        {
            $query = $query->where('editorial',$editorial);
        }
        if($exclude_keywords)
        {
          $query = $query->where('slug','NOT LIKE', '%'.$exclude_keywords.'%')
                         ->where('description','NOT LIKE', '%'.$exclude_keywords.'%');
        }
        if($color)
        {
            $query = $query->where('color',$color);
        }
        if(!empty($image_type) && $image_type != 'all')
        {
            if($image_type == 'ai' || $image_type == 'psd')
            {
                $query = $query->where('image_type',$image_type);
            }else
                {
                    $query = $query->where('image_type','!=','ai')
                                   ->where('image_type','!=','psd');
                }
        }
        if($contributor_name)
        {
            $query = $query->leftJoin('user_meta','user_meta.user_id','=','images.user_id')
                           ->where('first_name','LIKE','%'.$contributor_name.'%')
                           ->orWhere('last_name','LIKE','%'.$contributor_name.'%')
                           ->distinct();
        }
        if($search_cat)
        {
            $query = $query->leftJoin('categories','categories.image_id','=','images.id')
                            ->where('categories.category_name',$search_cat);
        }
        if($people_number)
        {
            if($people_number == 4)
            {
                $query = $query->leftJoin('people_attributes','people_attributes.image_id','=','images.id')
                    ->where('people_attributes.number_of_people','=',4);
            }else
            {
                $query = $query->leftJoin('people_attributes','people_attributes.image_id','=','images.id')
                           ->where('people_attributes.number_of_people','=',$people_number);
            }
        }
        if($people)
        {
            if($people == 2)
            {
                $query = $query->leftJoin('people_attributes as p2','p2.image_id','=','images.id')
                               ->where('p2.number_of_people','>',0);
            }else
            {
                $query = $query->leftJoin('people_attributes as p1','p1.image_id','=','images.id')
                               ->where('p1.number_of_people','=',null);
            }
        }
        if($gender)
        {
            $query = $query->leftJoin('people_attributes as pg','pg.image_id','=','images.id')
                           ->where('pg.gender','=',$gender);
        }
        if($people_age)
        {

            $query = $query->leftJoin('people_attributes as pa','pa.image_id','=','images.id')
                           ->where('pa.age','=',$people_age);
        }
        if($ethnicity)
        {
            $query = $query->leftJoin('people_attributes as pe','pe.image_id','=','images.id')
                           ->where('pe.ethnicity','=',$ethnicity);
        }
        if($image_tag)
        {  
            $query = $query->leftJoin('image_tag','image_tag.image_id','=','images.id')
                           ->where('image_tag.tag_id','=',$image_tag);
        }
        if(isset($query))
        {
            if(Input::get('search_type') == 'new')
            {
               $query = $query->select('images.id','images.slug','images.image_name')
                              ->orderBy('id','DESC'); 
            }
            if(Input::get('search_type') == 'random')
            {
               $query = $query->select('images.id','images.slug','images.image_name')
                              ->orderByRaw('RAND()'); 
            }
            if(Input::get('search_type') == 'popular')
            {  
               $query = $query->join('views','views.image_id','=','images.id')
                              ->select(DB::raw('MAX(views.image_id) as id'),DB::raw('COUNT(*) as viewed'),'images.slug','images.image_name')
                              ->groupBy('views.image_id')
                              ->orderBy('viewed','DESC');
            }
            if(!Input::get('search_type'))
            {  
                $query = $query->select('images.id','images.slug','images.image_name');
            }
            if(!$search_term)
            {   
                $query =  $query->orderBy('id','DESC');
            }

            return $query->paginate(100);
        }else
        {   
            return false;
        }
    }

// Function which is making image name ( provided by USER) into slugs for pretty URLs and for Better SEO
    static public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

        // trim
        $text = trim($text, '-');

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        if (empty($text))
        {
            return 'n-a';
        }

        return $text;
    }
    // un slugigy is opposite of Slugify
     public static function unSlugify($text)
    {
       return ucwords(str_replace('-', ' ',$text));
    }
    public static function getImage($id)
    {
        return ImageModel::where('images.id',$id)
                            ->where('images.id',$id)
                            ->leftJoin('categories','images.id','=','categories.image_id')
                            ->distinct()
                            ->select(
                                    'images.image_name',
                                    'images.slug',
                                    'images.id',
                                    'images.user_id',
                                    'images.orientation',
                                    'images.image_type',
                                    'categories.category_name'
                                    )
                            ->get();
    }
    public function getTagsSuggestion($image_id)
    {
        $tags = ImageTags::where('image_id',$image_id)
                  ->leftJoin('tags','tags.id','=','image_tag.tag_id')
                  ->distinct()
                  ->select('tag_name','tags.id')
                  ->get();
        foreach ($tags as $key => $tag) 
        {
            echo "<a href=/search?image_tag=".$tag->id."&".self::getQueryString().">".$tag->tag_name."</a>";   
        }
    }

    public static function getQueryString($paginate = NULL)
    {
        if($paginate)
        {
            return array
            (
                'search_term'        => Input::get('search-term'),
                'search_cat'         => Input::get('search_category'),
                'orientation'        => Input::get('orientation'),
                'contributor_name'   => Input::get('contributor-name'),
                'image_type'         => Input::get('image_type'),
                'editorial'          => Input::get('editorial'),
                'color'              => Input::get('color'),
                'exclude_keywords'   => Input::get('exclude_keywords'),
                'people_number'      => Input::get('people_number'),
                'people'             => Input::get('people'),
                'gender'             => Input::get('people_gender'),
                'ethnicity'          => Input::get('people_ethnicity')
             );
        } else
            {
                $search_term        = Input::get('search-term');
                $search_cat         = Input::get('search_category');
                $orientation        = Input::get('orientation');
                $contributor_name   = Input::get('contributor-name');
                $image_type         = Input::get('image_type');
                $editorial          = Input::get('editorial');
                $color              = Input::get('color');
                $exclude_keywords   = Input::get('exclude_keywords');
                $people_number      = Input::get('people_number');
                $people             = Input::get('people');
                $gender             = Input::get('people_gender');
                $ethnicity          = Input::get('people_ethnicity');

                $resultQuery = "search_category=$search_cat&editorial=$editorial&image_type=$image_type&orientation=$orientation&exclude_keywords=$exclude_keywords&contributor-name=$contributor_name&people_gender=$gender&people_age=$people&people_ethnicity=$ethnicity&people_number=$people_number&color=$color&search-term=$search_term";
                return $resultQuery;
            }
    }
    public static function getImageType($image_id)
    {
        $image = self::find($image_id);

        return $image->image_type;
    }
}

