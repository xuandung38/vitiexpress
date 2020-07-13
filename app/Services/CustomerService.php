<?php


namespace App\Services;


use App\Models\CustomerContact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CustomerService
{
	/**
	 * @param $params
	 * @return mixed
	 */
	public function searchCustomerContact($params)
	{
		$query =  CustomerContact::get();
		if(!empty($params['id'])) {
			$query->where('id', $params['id']);
		}
		if(!empty($params['email'])) {
			$query->where('email', $params['email']);
		}
		if(!empty($params['phone'])) {
			$query->where('phone', $params['phone']);
		}
		if(!empty($params['search'])) {
			$query->where(function ($query) use ($params) {
				$query->where('id', $params['search'])
					->orWhere('email', 'like', '%' . $params['search'] . '%')
					->orWhere('phone', 'like', '%' . $params['search'] . '%')
					->orWhere('name', 'like', '%' . $params['search'] . '%');
			});
		}
		if(!empty($params['except_id'])) {
			$query->where('id', '<>', $params['except_id']);
		}
		return $query->paginate(config('app.pagination'));
	}
	/**
	 * @param $attributes
	 * @return mixed
	 */
	public function createCustomerContact(array $attributes)
	{
		if (empty($attributes['password'])) {
			$attributes['password'] = Hash::make(Str::random(16));
		}
		return DB::transaction(function () use ($attributes) {
			$customerContact = new CustomerContact($attributes);
			$customerContact->save();
			return $customerContact;
		});
	}

	/**
	 * @param CustomerContact $customerContact
	 * @param array $attributes
	 * @return mixed
	 */
	public function updateCustomerContact(CustomerContact $customerContact, array $attributes)
	{
		return DB::transaction(function () use ($attributes, $customerContact) {
			$customerContact->update($attributes);
			return $customerContact;
		});
	}

	/**
	 * @param  CustomerContact  $customerContact
	 * @return mixed
	 */
	public function deleteCustomerContact(CustomerContact $customerContact)
	{
		return DB::transaction(function () use ($customerContact) {
			return $customerContact->delete();
		});
	}
}