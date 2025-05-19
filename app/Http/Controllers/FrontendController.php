<?php

namespace App\Http\Controllers;

use App\Models\Signalements;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function Projet(){
        $sgns = Signalements::orderBy('id','desc')->get();
        return view('pages.Projet',compact('sgns'));
    }

    public function Réception(){
        return view('pages.Réception');
    }

    public function Membres(){
        $users = User::where('role','admin')->orderBy('id','desc')->get();
        return view('pages.Membres',compact('users'));
    }

    public function signalement(){
        return view('pages.signalement');
    }

      public function Organisation(){
        return view('pages.Organisation');
    }

   


}
