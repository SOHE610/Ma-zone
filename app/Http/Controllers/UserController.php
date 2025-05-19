<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginUser(Request $request){
        $request->validate([
            "email_contact"=>"required|email",
            "password"=>"required|min:8"
        ]);

        $credentials = $request->only('email_contact','password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); //Sécurité contre session fixation
            return redirect()->intended(route('home'));
        }

        return back()->with('error','Identifiant incorrect');

    }

    public function logoutUser(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function store ( Request $request ){

        $request->validate([
            'responsable_nom'=>'nullable',
            'email_contact' => 'required|email',
            'password' => 'required|min:8',
        ]);

        User::create([
            'email_contact' => $request->input('email_contact'),
            'password' => bcrypt($request->input('password')),
            'responsable_nom' => $request->input('responsable_nom'),
            'role' => "admin",
        ]);

        return redirect()->back()->with('success', 'Membre enregistrée avec succès !');
    }


    public function updateUser($id){
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function update(Request $request, $id){

         // 1. Valider les données reçues
        $request->validate([
            'responsable_nom' => 'required|string|max:255',
            'email_contact' => 'required|email|max:255',
        ]);

        // 2. Trouver l'utilisateur par ID
        $user = User::findOrFail($id);

        // 3. Mettre à jour les champs
        $user->responsable_nom = $request->responsable_nom;
        $user->email_contact = $request->email_contact;
        $user->save();

        // 4. Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Membre mis à jour avec succès !');

    }


    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('success', 'Membre enregistrée avec succès !');
    }
}
