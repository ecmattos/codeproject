<?php

namespace CodeProject\Validators;

use Prettus\Validator\LaravelValidator;

class ProjectTaskValidator extends LaravelValidator
{
	protected $rules = [
		'name'          => 'required',
		'project_id'	=> 'required|integer',
		'start_date'    => 'required|date',
		'due_date'      => 'date',
		'status'        => 'required'
	];
}