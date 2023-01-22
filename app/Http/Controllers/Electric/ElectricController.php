<?php

namespace App\Http\Controllers\Electric;

use App\Http\Requests\ElectricStoreRequest;
use App\Models\UserElectric;
use Illuminate\Routing\Controller;


class ElectricController extends Controller
{
    /**
     * Registro de usuario
     */
    public function signUp(ElectricStoreRequest $request)
    {

        UserElectric::create([
            'name' => $request->name,
            'business' => $request->business,
        ]);

        return view('electric.thanks', ['name' => $request->name]);

    }


}