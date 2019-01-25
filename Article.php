<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Article extends Model
{

    public $incrementing = false;


    protected $fillable =[
      'id','category_name','name','description','price'
    ];

    public function categories(){
      return $this->belongsToMany(Category::class);
    }
}
