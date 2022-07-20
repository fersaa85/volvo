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
            'email' => $request->email,
            'password' => '',
        ]);

        return view('greeting', ['name' => $request->name]);
/*
        $recaptcha = (new GoogleRecaptcha('6LdhsyggAAAAAL0d8vonQxrfI4UdlizR0GHtW7u9'))
            ->verify($request->input('g-recaptcha-response'), $request->ip());

        if (!$recaptcha->isSuccess()) {
            return response()->json([
                'message' => $recaptcha->getErrorCodes()
            ], 401);
        }

        $user = User::where("email", $request->email)->first();

        if($user === null){
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => '',
                'last_name' => $request->last_name,
                'phone' => $request->phone,
                //'birthday' => $request->birthday,
                'age' => $request->age,
            ]);
        }

        $workout = Workout::where('date_start', '>', date('Y-m-d H:i:s'))->first();
        if(WorkoutUser::where('workout_id', $workout->id)->where('user_id', $user->id)->first() === null){
            WorkoutUser::create([
                'workout_id' => $workout->id,
                'user_id' => $user->id,
            ]);

        }else{
            return response()->json([
                'message' => 'Ya te encuetras registrado'
            ], 401);
        }

        return new UserResource($user);
*/
    }


}