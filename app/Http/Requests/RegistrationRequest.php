<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'matricule' => 'required|numeric|unique:formateurs,matricule',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'grade' => 'required|string',
            'date_naissance' => 'required|date',
            'date_recrutement' => 'required|date',
            'poste' => 'required|string',
            'tel' => 'required|string',
            'email' => 'required|email|unique:formateurs,email',
            'password' => 'required|string',
            'metier_id' => 'required|exists:metiers,id',
            'etablissement_id' => 'required|exists:etablissements,id'
        ];
    }
}
