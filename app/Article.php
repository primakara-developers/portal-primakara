<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
    	'article_cover',
    	'article_title',
    	'article_slug',
    	'article_content',
    	'is_headline',
    	'headline_at',
    	'category_id',
    	'user_id'
    ];
}
