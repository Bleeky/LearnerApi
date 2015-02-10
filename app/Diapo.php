<?php

namespace LearnerApi;

use Illuminate\Database\Eloquent\Model;

class Diapo extends Model {
	protected $table = 'diapos';

	public $timestamps = false;

	protected $fillable = ['content'];

	public function module()
	{
		return $this->belongsTo('LearnerApi\Module');
	}
	public function prev()
	{
		return $this->hasOne('LearnerApi\Diapo', 'prev_id');
	}
	public function next()
	{
		return $this->hasOne('LearnerApi\Diapo', 'next_id');
	}
}