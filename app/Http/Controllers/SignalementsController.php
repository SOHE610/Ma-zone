<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignalementsController extends Controller
{
    

        public function store(Request $request)
        {
            $validated = $request->validate([
                'titre' => 'required|string|max:255',
                'description' => 'required|string',
                'categorie_id' => 'required|exists:categories,id',
                'quartier_id' => 'required|exists:quartiers,id',
                'latitude' => 'required|numeric',
                'longitude' => 'required|numeric',
                'photo' => 'nullable|image|max:2048',
            ]);

            if ($request->hasFile('photo')) {
                $path = $request->file('photo')->store('signalements', 'public');
                $validated['photo'] = $path;
            }

            $validated['utilisateur_id'] = auth()->id();
            $validated['date_signalement'] = now();


        

           

            return redirect()->back()->with('success', 'signalement fait !');
        }

}
