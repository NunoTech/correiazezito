<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes, hasFactory;

    protected $fillable =  ['title', 'subtitle', 'slug', 'text'];


    public function imgs()
    {
        return $this->hasMany(Img::class);
    }

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
