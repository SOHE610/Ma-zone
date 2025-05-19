<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signalements;

class SignalementsController extends Controller
{
    

        public function store(Request $request){
            $validated = $request->validate([
                'titre' => 'required|string|max:255',
                'description' => 'required|string',
                'categorie' => 'required|string',
                'quartier' => 'required|string',
                'latitude' => 'required|numeric',
                'longitude' => 'required|numeric',
                'photo' => 'nullable|image|max:2048',
            ]);

            // Gérer l’upload de la photo
            $photoPath = null;
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('signalements', 'public');
            }

            Signalements::create([
                'titre' => $validated['titre'],
                'description' => $validated['description'],
                'categorie' => $validated['categorie'],
                'quartier' => $validated['quartier'],
                'utilisateur_id' => auth()->id(),
                'latitude' => $validated['latitude'],
                'longitude' => $validated['longitude'],
                'photo' => $photoPath,
            ]);

            return redirect('/signalement')->with('success', 'Signalement enregistré avec succès.');
        }

}
