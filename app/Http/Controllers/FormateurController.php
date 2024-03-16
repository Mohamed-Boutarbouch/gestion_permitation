<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\Etablissement;
// use App\Http\Requests\StoreFormateurRequest;
// use App\Http\Requests\UpdateFormateurRequest;
use App\Models\Formateur;
use App\Models\Metier;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class FormateurController extends Controller
{
    public function showProfile()
    {
        $formateur = Auth::guard('formateur')->user();
        $etablissementName = $formateur->etablissement->etablissement; // Assuming 'name' is the attribute representing the etablissement name
        return view('formateur.index', ['formateur' => Auth::guard('formateur')->user()]);
    }

    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('auth.login');
    }

    public function loginStore(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('formateur')->attempt($credentials)) {
            return redirect()
                ->route('permutations.index')
                ->withSuccess('Signed in');
        }

        return redirect('login')->withErrors('Login details are not valid');
    }

    public function registration()
    {

        return view('auth.register', [
            'metiers' => Metier::all(),
            'etablissements' => Etablissement::all()
        ]);
    }

    public function registrationStore(RegistrationRequest $request)
    {
        Formateur::create([
            'matricule' => $request->matricule,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'grade' => $request->grade,
            'date_naissance' => $request->date_naissance,
            'date_recrutement' => $request->date_recrutement,
            'poste' => $request->poste,
            'tel' => $request->tel,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'metier_id' => $request->metier_id,
            'etablissement_id' => $request->etablissement_id,
        ]);

        return Redirect::to('/')->withSuccess('You have signed-in');
    }

    public function signOut()
    {
        Session::flush();
        Auth::guard('formateur')->logout();
        return Redirect('login');
    }
}
