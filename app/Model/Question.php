<?php

namespace App\Model;

use App\Model\Category;
use App\Model\Reply;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	public function getRouteKeyName()
	{
		return 'slug';
	}

	protected $guarded=[];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function replies()
	{
		return $this->hasMany(Reply::class);
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function getPathAttribute()
	{
		return asset("api/question/$this->slug");
	}
}
