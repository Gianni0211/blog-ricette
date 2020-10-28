<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','body','img', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function likesCount(){
        return $this->likes->count();
    }

    public function toggleLikeToPost($user){

        //Togle like
        foreach( $this->likes as $like){
            if($like->id == $user->id){
                return $this->likes()->detach($user);
            }
        }

        return $this->likes()->attach($user);
    }

    static function mostLikedFour(){
      
       return  self::all()->sortByDesc('likes')->slice(0,4);
     
    }
    

    public function tags(){

        return $this->belongsToMany(Tag::class);
    }

    static function postTag(Tag $tag){

        $category = self::all();

        $arr = [];

        foreach ($category as $cat) {
           if($cat->tags->contains($tag)){
               array_push($arr, $cat);
           } 
            
        }
        return $arr;
    }
    
}
