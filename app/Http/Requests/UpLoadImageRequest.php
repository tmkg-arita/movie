<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpLoadImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * (ユーザーがこの要求を行うことを許可されているかどうかを確認します。)
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * (リクエストに適用される検証ルールを取得します。)
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'image|mimes:jpg,jpeg,png|max:2048',
            "fils.*.[image]" =>   'require|image|mimes:jpg,jpeg,png|max:2048'
         ];
    }
    public function messages()
    {
       return [ 'image' =>'指定されたファイルが画像ではありません',
        'mimes' =>'指定された拡張子(jpg/jpeg/png)ではありません',
        'max' =>'ファイルサイズは2MB以内にして下さい。',
       ];
    }

}
