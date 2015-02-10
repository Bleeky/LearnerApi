<?php

namespace LearnerApi;

use Illuminate\Database\Eloquent\Model;

class Module extends Model {
	public $timestamps = false;

	protected $table = 'modules';

	protected $fillable = ['title', 'description', 'img'];
}