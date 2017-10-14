<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   public  $fillable = ['name', 'parent_id'];


   public function childs(){
   		return $this->hasMany('App\Category','parent_id','id');
   }
    public function parent(){
   		return $this->belongsTo('App\Category','parent_id','id');
   }

   public function posts(){
   		return $this->hasMany('App\Post');
   }
}
