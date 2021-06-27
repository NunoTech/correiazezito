<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Img extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['path', 'post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
