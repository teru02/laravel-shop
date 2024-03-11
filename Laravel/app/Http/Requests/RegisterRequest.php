<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
            'over_name'=>'required|max:30|string',
            'under_name'=>'required|max:30|string',
            'username'=>'required|max:30|string',
            'mail_address'=>'required|max:100|email|unique:users,mail_address',
            'password'=>'required|max:50|min:8',
            'password_confirmation'=>'required|same:password',
        ];
    }

    public function messages(){
        return[
            'over_name.required' => '姓は必ず入力してください。',
            'over_name.max' => '姓は30文字以内で入力してください。',
            'over_name.string' => '姓は文字型で入力してください。',
            'under_name.required' => '名は必ず入力してください。',
            'under_name.max' => '名は30文字以内で入力してください。',
            'under_name.string' => '名は文字型で入力してください。',
            'username.required' => 'ユーザー名は必ず入力してください。',
            'username.max' => 'ユーザー名は30文字以内で入力してください。',
            'username.string' => 'ユーザー名は文字型で入力してください。',
            'mail_address.required' => 'メールアドレスは必ず入力してください。',
            'mail_address.max' => 'メールアドレスは100文字以内で入力してください。',
            'mail_address.email' => '無効なメールアドレスです。',
            'mail_address.unique' => 'すでに使用されているメールアドレスです。',
            'password.required' => 'パスワードは必ず入力してください。',
            'password.min' => 'パスワードは8文字以上で入力してください。',
            'password.max' => 'パスワードは50文字以内で入力してください。',
            'password_confirmation.required'=>'パスワード確認は必須です。',
            'password_confirmation.same'=>'パスワードと一致しません。'
        ];
    }
}
