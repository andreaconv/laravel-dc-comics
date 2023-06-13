<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
   * @return array<string, mixed>
   */

  //  TODO: aggiungere le altre colonne della tabella per fare il controllo sul max di caratteri inseriti
  public function rules()
  {
    return [
      'title' => 'required|min:4|max:150',
      'price' => 'required|min:1|max:25',
    ];
  }

  public function message()
  {
    return [
      'title.required' => 'Il titolo è un campo obbligatorio',
      'title.min' => 'Il titolo deve avere almeno :min caratteri',
      'title.max' => 'Il titolo non deve avere più di :max caratteri',
      'price.required' => 'Il prezzo è un campo obbligatorio',
      'price.min' => 'Il prezzo deve avere almeno :min caratteri',
      'price.max' => 'Il prezzo non deve avere più di :max caratteri'
    ];
  }
}
