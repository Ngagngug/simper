<?php

use Cartalyst\Sentry\Users\Eloquent\User as SentryUserModel;

class Petugase extends SentryUserModel {
// Add your validation rules here
	public static $rules = [
		'first_name' => 'required',
		'last_name' => 'required',
		'email' => 'required|email|unique:users,email,:id',
		'password' => 'required|min:5',
	];

	// Add your validation rules here
	public static $verifikasirules = [
	];

	public static $rulespass = [
		'first_name' => 'required',
		'last_name' => 'required',
		'email' => 'required',
		'password' => 'required|min:5',
	];

	public function updateRules()
    {
        $rules = static::$rules;
        foreach ($rules as $field => $rule) {
            // replace :id with $model->id
            $rules[$field] = str_replace(':id', $this->getKey(), $rule);
        }
        return $rules;
    }

	// Don't forget to fill this array
	protected $fillable = ['first_name', 'last_name', 'email', 'password'];
	//protected $fillable = ['nama'];

}