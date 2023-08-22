<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'post.title' => 'required|string|max:100',   //requiredが「入力されてること」、stringが「文字列であること」、maxが長さに制限を書けることを表している」
            'post.body' => 'required|string|max:4000',   //    |    で仕切る
        ];
    }
}