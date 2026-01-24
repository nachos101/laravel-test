<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['name','artist','genre','release_date','cover_image_url','price'];

}
