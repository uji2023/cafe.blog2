<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class PostRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'post.title' => 'required|string|max:50',
            'post.detail_place' => 'required|string|max:500',
            'post.detail_cafeURL' => 'max:200',
            'post.detail_foodname' => 'required|string|max:100',
            'post.image' => 'required'|'image',
        ];
    }
}
