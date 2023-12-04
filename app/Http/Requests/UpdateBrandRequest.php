<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //потрібно додати айді поточного запису що редагується до правила.
            //Тоді фреймворк під капотом зробить запит у БД з виключенням цього айді, що
            //дасть нам змогу уникнути Unique помилки.
            'name' => 'required|max:100|min:2|unique:brands,name,'.$this->brand->id,
            'country' => 'required',
            'description' => 'required',
        ];
    }
}
