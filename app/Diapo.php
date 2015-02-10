<?php

namespace LearnerApi;


class Diapo extends Model {
	protected $table = 'diapos';

	protected $timestamps = false;

	protected $fillable = ['order', 'content'];

	public function module()
	{
		return $this->belongsTo('LearnerApi\Module');
	}
}