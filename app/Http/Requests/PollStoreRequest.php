<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class PollStoreRequest extends FormRequest
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
            'name' => 'required|string',
            'knowRiceUSA' => 'required|string',
            //'originRiceMexico' => 'required|string',
            //'whichOriginDoYouPrefer' => 'required|string',
            'whyOriginDoYouPrefer' => 'required|array',
            'afterParticipate' => 'required|string',
            'willingBuyAmericanRice' => 'required|string',
            'willingTryNewRecipes' => 'required|string',
            'beforeActivation' => 'required|string',
        ];
    }


    public function attributes()
    {
        return [
            'name' => 'Nombre',
            'knowRiceUSA' => 'Pregunta 1',
            'originRiceMexico' => 'Pregunta 2',
            'whichOriginDoYouPrefer' => 'Pregunta 3',
            'whyOriginDoYouPrefer' => 'Pregunta 4',
            'afterParticipate' => 'Pregunta 5',
            'willingBuyAmericanRice' => 'Pregunta 6',
            'willingTryNewRecipes' => 'Pregunta 7',
            'beforeActivation' => 'Pregunta 8',
        ];
    }
}
