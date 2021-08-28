<?php

namespace Fibdesign\Blog\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return (auth()->check());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'title' => 'required | max:250',
            'subtitle' => 'required | max:250',
            'description' => 'required',
            'tags' => 'nullable',
            'popular' => 'required',
            'category_id' => 'required'
        ];



        if ($this->getMethod() == 'POST'){
            $rules += ['thumbnail' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:3000'];
        }else{
            $rules += ['thumbnail' => 'nullable|max:3000'];
        }

        return $rules;
    }
}
