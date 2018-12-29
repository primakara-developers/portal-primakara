<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
    	'post_cover',
    	'post_title',
    	'post_slug',
    	'post_content',
    	'is_headline',
    	'headline_at',
    	'category_id',
    	'user_id'
	];
	
	public function categories() {
		return $this->belongsTo('App\Category');
	}

	public function user() {
		return $this->belongsTo('App\User');
	}
}
