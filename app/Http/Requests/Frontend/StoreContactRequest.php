<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
	public function rules()
	{
		return [
			'name' => 'required',
			'email' => 'required',
			'phone' => 'required',
			'note' => 'required'
		];
	}

	public function authorize()
	{
		return true;
	}
}