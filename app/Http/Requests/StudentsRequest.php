<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Uppercase;
use App\Rules\ValidMobailNumber;

class StudentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8|max:32',
            'address' => ['required', new Uppercase()],
            'adderss2' => 'required',
            'city' => 'required',
            'state' => 'required|in:Dhaka,Rajshahi,Ragpur',
            'zip' => ['required', new ValidMobailNumber()],
            'condition' => 'accepted',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email Filed is Required!!!',
            'email.email' => 'Must Be Use @ And Before gmail.com',
            'password.required' => 'Password Has Be Required',
            'address.required' => 'Address Has Be Required',
            'adderss2.required' => 'Address2 Has Required',
            'city.required' => 'City Has Be Required',
            'state.required' => 'State Has Be Required',
            'zip.required' => 'Zip Has Be Required',
            'condition.accepted' => 'Condition Has Be Required',
        ];
    }
}
