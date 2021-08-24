<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body',
        'detail_foodname',
        'detail_cafeURL',
];
    
   public function getPaginateByLimit(int $limit_count = 10) 
   {

    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
   }
   
}
   
