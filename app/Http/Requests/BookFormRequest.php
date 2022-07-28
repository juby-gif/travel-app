<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'location' => 'required',
            'guests' => 'required',
            'arrivals' => 'required',
            'leaving' => 'required'
        ];
    }

    protected function prepareForValidation() {

        $this->merge([
            'name' => strip_tags($this['name']),
            'email' => strip_tags($this['email']),
            'phone' => strip_tags($this['phone']),
            'address' => strip_tags($this['address']),
            'location' => strip_tags($this['location']),
            'guests' => strip_tags($this['guests']),
            'arrivals' => strip_tags($this['arrivals']),
            'leaving' => strip_tags($this['leaving'])
        ]);

    }
}
