<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasFactory;

    protected $table = 'table_blog';
    protected $fillable = ['title','slug','content','viewer'];
    public $timestamps = false;

    public function sluggable():array {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
