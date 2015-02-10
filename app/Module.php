<?php

namespace LearnerApi;


class Module extends Model {
	protected $timestamps = false;

	protected $table = 'modules';

	protected $fillable = ['titre', 'description', 'img'];
}