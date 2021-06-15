<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Img extends Model
{
    use SoftDeletes;

    protected $fillable = ['desktop', 'mobile', 'miniatura', 'post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
