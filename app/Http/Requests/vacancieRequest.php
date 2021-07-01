<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class vacancieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //verifica que el que cree la vacante este autentificados
        // if ($this->user_id == auth()->user()->id) {
        //     return true;
        // }else{
        //     return false;
        // }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $vacancy = $this->route()->parameter('vacancy');

        $rules = [
            'name' => 'required',
            'country_id' => 'required',
            'status' => 'required|in:"Borrador","Publicar"'
        ];

        // Si el usuario guarda como borrador, solo le obligará a llenar ciertos campos.
        // array_merge fusiona dos arrays
        if ($this->status == "Publicar") {
            $rules = array_merge($rules, [
                'category_id' => 'required',
                'tecnologies' => 'required',
                'description' => 'required',
                'salary_id' => 'required',
                'currency_id' => 'required',
                'experience_id' => 'required',
                'tecnologies' => 'required',
                'end' => 'required'
            ]);
          
            // Si el usuario escoge el status publicar todos los campos serán obligatorios.
        }

        return $rules;
    }
}
