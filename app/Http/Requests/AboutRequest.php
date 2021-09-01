<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
    "description"=>"required",
    "qualification"=>"required",
    "description2"=>"required",
    "birthday"=>"required",
    "siteweb"=>"required",
    "phone"=>"required",
    "city"=>"required",
    "age"=>"required",
    "degree"=>"required",
    "email"=>"required",
    "status"=>"required",
    "description3"=>"required",
        ];
    }

    public function messages()
    {
        return ["description.required"=>"be better plz",
        "qualification.required"=>"be better plz",
        "description2.required"=>"be better plz",
        "birthday.required"=>"be better plz",
        "siteweb.required"=>"be better plz",
        "phone.required"=>"be better plz",
        "city.required"=>"be better plz",
        "age.required"=>"be better plz",
        "degree.required"=>"be better plz",
        "email.required"=>"be better plz",
        "status.required"=>"be better plz",
        "description3.required"=>"be better plz"];
    }
}
