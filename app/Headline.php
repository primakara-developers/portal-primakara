<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headline extends Model
{
    //
	protected $fillable = ['article_id'];

	public function articles() {
    return $this->belongsTo('App\Article', 'article_id');

	}
}
