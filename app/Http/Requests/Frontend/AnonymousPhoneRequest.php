<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class AnonymousPhoneRequest extends FormRequest
{
	public function rules()
	{
		return [
			//
		];
	}

	public function authorize()
	{
		return true;
	}
}