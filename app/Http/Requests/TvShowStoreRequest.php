<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TvShowStoreRequest extends FormRequest
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
            'name' => 'required',
            'summary' => 'required|max:50',
            'image' => 'required|url',
            'premiered' => 'date',
            'rating' => 'integer|between:1,10'
        ];
    }
}
