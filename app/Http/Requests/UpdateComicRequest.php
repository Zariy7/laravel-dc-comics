<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:50',
            'description' => 'required',
            'sale_date' => 'date_format:Y-m-d',
            'type' => 'min:5|max:50',
            'artists' => 'required',
            'writers' => 'required'
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Il titolo è obbligatorio!',
            'title.min' => 'Il titolo non può essere più corto di 5 caratteri!',
            'title.max' => 'Il titolo non può essere più lungo di 50 caratteri!',
            'description.required' => 'La descrizione è obbligatoria!',
            'sale_date.date_format' => 'La data deve essere in formato Anno-Mese-Giorno!',
            'type.min' => 'Il tipo di media deve essere di almeno 5 caratteri!',
            'type.max' => 'Il tipo di media deve essere al massimo 50 caratteri!',
            'artists.required' => 'Devi inserire almeno un artista!',
            'writers.required' => 'Devi inserire almeno uno scrittore!',
        ];
    }
}
