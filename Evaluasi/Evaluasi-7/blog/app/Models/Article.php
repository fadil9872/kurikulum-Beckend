<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    protected $table = 'article' ;
    protected $fillable = ['judul', 'penulis', 'kategori', 'subject'];
}
