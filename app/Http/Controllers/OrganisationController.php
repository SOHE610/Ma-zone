<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\User;

class OrganisationController extends Controller
{


    public function store(Request $request){
            // Validation
            $request->validate([
                'nom' => 'required|string|max:255',
                'type' => 'nullable|string|max:255',
                'email' => 'required|email|unique:organisations,email|unique:users,email_contact',
                'telephone' => 'nullable|string|max:20',
                'password' => 'required|string|min:8',
            ]);

            // 1. Enregistrement dans la table organisations
            Organisation::create([
                'nom' => $request->nom,
                'type' => $request->type,
                'email' => $request->email,
                'telephone' => $request->telephone,
                'password' => Hash::make($request->password),
            ]);




            // 2. Enregistrement dans la table users
            User::create([
                'responsable_nom' => $request->nom,
                'email_contact' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'organisation', // Ajoute "organisation" à ton enum si ce n'est pas déjà fait
            ]);


            if ($request->wantsJson()) {
                return response()->json(['success' => true, 'message' => "Organisation enregistrée avec succès !"], 201);
            }



            return redirect()->back()->with('success', "Organisation enregistrée avec succès !");
        }

                public function destroy($id)
        {
            // On récupère l'organisation
            $organisation = Organisation::findOrFail($id);

            // On supprime l'utilisateur associé (par email)
            User::where('email_contact', $organisation->email)->delete();

            // On supprime l'organisation
            $organisation->delete();


            return redirect()->back()->with('success', 'Organisation supprimée.');
        }


        public function index()
        {
            // On récupère toutes les organisations avec pagination
            $organisations = Organisation::paginate(10); // 10 par page

            // On retourne la vue et on lui passe la variable
            return view('pages.Organisation', compact('organisations'));
        }

        public function update(Request $request, $id)
            {
                $request->validate([
                    'nom' => 'required|string|max:255',
                    'type' => 'nullable|string|max:255',
                    'email' => 'required|email|unique:organisations,email,'.$id,
                    'telephone' => 'nullable|string|max:20',
                ]);

                $organisation = Organisation::findOrFail($id);
                $organisation->update([
                    'nom' => $request->nom,
                    'type' => $request->type,
                    'email' => $request->email,
                    'telephone' => $request->telephone,
                ]);

                return redirect()->back()->with('success', 'Organisation modifiée avec succès.');
            }


}
