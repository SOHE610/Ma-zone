<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;
use Illuminate\Support\Facades\Storage;

class InformationController extends Controller
{
    /**
     * Enregistrer un nouveau signalement (API Mobile)
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'description' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'image' => 'nullable|image|max:2048', // facultatif
        ]);

        // Traitement de l'image si fournie
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('signalements', 'public');
        }

        // Création du signalement
        $information = Information::create([
            'user_id' => $request->user()?->id, // si l'utilisateur est connecté
            'type' => $request->type,
            'description' => $request->description,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'image_path' => $imagePath,
        ]);

        return response()->json([
            'message' => 'Signalement enregistré avec succès.',
            'data' => $information,
        ], 201);
    }
    public function index()
{
    // Récupérer toutes les informations
    $informations = Information::all();

    // Passer les données à la vue
    return view('pages.Réception', compact('informations'));
}
}
