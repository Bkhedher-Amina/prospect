<?php

namespace App\Http\Controllers\GestionAchats;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use App\Models\GestionAchat\CommandeFournisseur;
use App\Models\Form;
use App\Rules\MatchOldPassword;
use Carbon\Carbon;
use Session;
use Auth;
use Hash;

class CommandeFournisseurController extends Controller
{

    public function index()
    {
         $data = DB::table('CommandeFournisseur')->get();
        return view('gestionachats.commandefournisseur.liste',compact('data'));
    }

        // ajout nouvelle commande fournisseur
        public function addNewCommandeFournisseur()
        {
            return view('gestionachats.commandefournisseur.ajout');
        }

        // save new user
     public function addNewCommandeFenregistrer(Request $request)
     {

        $request->validate([
            'numero'       => 'required|numeric|min:8',
            'date'      => 'required|date',
            'client'     => 'required|string',
            'netHt'     => 'required |numeric',
            'total_ttc'     => 'required|numeric',
            'total_tva' => 'required|numeric',
            'netapayer'  => 'required|numeric',
        ]);

        $commandefournisseur = new CommandeFournisseur ;
        $commandefournisseur->numero       = $request->numero;
        $commandefournisseur->date         = $request->date;
       // $commandefournisseur->client       = $request->$client;
        $commandefournisseur->netHt        = $request->netHt;
        $commandefournisseur->ttc          = $request->ttc;
        $commandefournisseur->tva          = $request->tva;
        $commandefournisseur->netapayer     = $request->netapayer;

         $commandefournisseur->save();

        Toastr::success('Nouveau commande fournisseur créé avec succès:)','Succès');
        return redirect()->route('commandefourniseeur');
    }
}
