<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content'
    ];

    public static function generate_slug($title) {
        $slug = Str::slug($title, '-');
        $base_slug = $slug;
        $post_presente = Post::where('slug', $slug)->first();
        $id = 2;
        while ($post_presente) {
            $slug = $base_slug . '-' . $id;
            $id++;
            $post_presente = Post::where('slug', $slug)->first();
        }

        return $slug;
    }
}
