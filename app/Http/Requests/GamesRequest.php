<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GamesRequest extends FormRequest
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
          'title' => 'required',
          'place' => 'required | string',
          'price' => 'required | numeric',
          'number_of_players' => 'required | integer',
          'date' => 'required',
        ];
    }

      /**
	   * Get the validation messages that apply to the request.
	    *
	    * @return array
	    */
	  public function messages()
	  {
		    return [
			    'title.required' => 'El título es obligatorio',
			    'place.required' => 'El lugar es obligatorio',
			    'price.required' => 'El precio es obligatorio',
			    'number_of_players.required' => 'La cantidad de jugadores es obligatoria',
			    'date.required' => 'La fecha es obligatoria',
		    ];
	  }
}
