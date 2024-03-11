<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    protected function create(array $data){
        return User::create([
            'over_name'=>$data['over_name'],
            'under_name'=>$data['under_name'],
            'username'=>$data['username'],
            'mail_address'=>$data['mail_address'],
            'password'=>Hash::make($data['password'])
        ]);
    }

    public function registerView(){
        return view('auth/register');
    }

    public function register(RegisterRequest $request){
        $data=$request->input();
        $this->create($data);
        return redirect('/top');
    }
}
