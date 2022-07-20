<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;


class AuthController extends Controller
{
    /**
     * Registro de usuario
     */
    public function signUp(UserStoreRequest $request)
    {

        User::create([
            'name' => $request->name,
            'business' => $request->business,
            'email' => 'email-'.uniqid().'@email.com',
            'password' => '',
        ]);

        return view('greeting', ['name' => $request->name]);

    }


}