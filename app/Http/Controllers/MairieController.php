<?php

namespace App\Http\Controllers;
use App\Models\Mairie;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class MairieController extends Controller
{



    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'email_contact' => 'required|email',
            'telephone' => 'required',
            'password' => 'required|min:8',
            'commune' => 'required',
            //'role' => 'required',
            'responsable_nom'=>'nullable',
            'logo' => 'nullable|image|max:2048',
        ]);

        Mairie::create([
            'nom' => $request->input('nom'),
            'adresse' => $request->input('adresse'),
            'telephone' => $request->input('telephone'),
            'commune' => $request->input('commune'),
            'logo' => $request->hasFile('logo') ? $request->file('logo')->store('logos', 'public') : null,
        ]);

        User::create([
            'email_contact' => $request->input('email_contact'),
            'password' => bcrypt($request->input('password')),
            'responsable_nom' => $request->input('responsable_nom'),
            'role' => "superadmin",
        ]);


        return redirect()->back()->with('success', 'Mairie enregistrée avec succès !');
    }

    // public function loginUser(Request $request){
    //    $credentials = $request ->only('email_contact','password');

    //    if(Auth::attempt($credentials)) {
    //     $request->session ()->regenerate();
    //     return redirect()->intended (route('/'));


    //    }
    //    return back()->with('error','identifiant incorrect');

    // }

    public function login(Request $request){
        $request->validate([
            "email_contact" => "required",
            "password" => "required",
        ]);

        $mairie = Mairie::where('email_contact', $request->email_contact)->first();

        // Vérifier si l'utilisateur existe et si le mot de passe est correct
        if ($mairie && Hash::check($request->password, $mairie->password)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }

        return back()->with('error', 'Identifiant incorrect');
    }

    public function profile(){
        $user = Auth::user();
        return view('index' ,compact('user'));

    }

    public function logoutFunction(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('/login');
    }

}
