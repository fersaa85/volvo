<?php

namespace App\Http\Controllers\Poll;

use App\Http\Requests\PollStoreRequest;
use App\Models\Poll;
use Illuminate\Routing\Controller;


class PollController extends Controller
{
    /**
     * Registro de usuario
     */
    public function store(PollStoreRequest $request)
    {
        Poll::create([
            'name' => $request->get('name', ''),
            'email' => $request->get('email', ''),
            'phone' => $request->get('phone', ''),

            'question1' => $request->get('knowRiceUSA', ''),
            'question2' => $request->get('originRiceMexico', ''),
            'question3' => $request->get('whichOriginDoYouPrefer', ''),
            'question3_other' => $request->get('whichOriginDoYouPreferOther', ''),

            'question4' => json_encode( $request->get('whyOriginDoYouPrefer', '') ),
            'question4_other' => $request->get('whyOriginDoYouPreferOther', ''),

            'question5' => $request->get('afterParticipate', ''),
            'question6' => $request->get('willingBuyAmericanRice', ''),
            'question7' => $request->get('willingTryNewRecipes', ''),
            'question8' => $request->get('beforeActivation', ''),
        ]);

        return view('poll.confirmed');

    }


}