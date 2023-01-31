<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            "title"=>"required|min:3|max:100",
            "description"=>"min:10",
            "thumb"=>"url",
            "price"=>"required|numeric",
            "series"=>"required|max:50",
            "sale_date"=>"date|required",
            "type"=>"required"
        ];
    }


    public function messages()
    {
        return [
            "title.required"=>"E' necessario inserire un titolo!",
            "title.min"=>"Titolo troppo corto.",
            "title.max"=>"Titolo troppo lungo.",
            "price.required"=>"Il prezzo è obbligatorio",
            "price.numeric"=>"Il prezzo deve essere un numero"
        ];
    }
}
