<?php

namespace App\Http\Controllers;

use App\Models\Historique;
use App\Models\Invitation;
use App\Models\User;
use Illuminate\Http\Request;


class EmployeauthController extends Controller
{

    public function createEmploye($id = null){


        $invitation = Invitation::find($id);
        $data = array();
        $data['invitation'] = $invitation;
        return view('employes.create_employe',$data);

    }

    public function signUpEmploye(Request $request){

        $employe = new User();
        $historique = new Historique();

        $employe->name = $request->input('name');
        $employe->email = $request->input('email');
        $employe->societes_id = $request->input('societe_id');
        $employe->date_naissance = $request->input('date_naissance');
        $employe->password = bcrypt($request->input('password'));
        $employe->is_invited =1;

        $invitation = Invitation::find($request->input('invitation_id'));
        $invitation->statut = 'Accepted';

        $historique->action = $request->input('name').' a valider l\'invitation et a confirmer son profil ';

        $employe->save();
        $invitation->save();
        $historique->save();
        return redirect('/login');


    }

   

}
