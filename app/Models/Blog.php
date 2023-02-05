<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'table_blog';
    protected $fillable = ['user_id','title','slug','content','viewer'];
    public $timestamps = false;
}
