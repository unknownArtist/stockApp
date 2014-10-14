<?php

class Tag extends \Eloquent {
	protected $table = 'tags';
    protected $fillable = array('tag_name');
    public $timestamps = false;

    public function images()
    {
        return $this->belongsToMany('ImageModel', 'image_tag');
    }

    public static function saveTags($images)
    {
        $allTags = Input::get('tags');
        // we are getting tags in string format like >> hello, world, how, are, you
        $tags = explode(',',$allTags);
        foreach($tags as $tag)
        {
            $findTag = self::where('tag_name',$tag);

            if($findTag->count() < 1)
            {
                $tag = new Tag(array('tag_name' => $tag));
                $images->tags()->save($tag); 
            }else
                {
                    $tagId = Tag::where('tag_name',$tag)->get();
                    ImageTags::create(array('image_id' => $images->id,'tag_id'=> $tagId[0]->id));
                }
            
        }
    }

}