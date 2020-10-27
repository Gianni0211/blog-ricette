<?php

namespace App\Models;

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

    public function addLikeToPost($user){

        //Togle like
        foreach( $this->likes as $like){
            if($like->id == $user->id){
                return $this->likes()->detach($user);
            }
        }

        return $this->likes()->attach($user);
    }
    
    
}
