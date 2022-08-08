<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InvitationRequest;
use App\Mail\EmployeMail;
use App\Models\Admin;
use App\Models\Historique;
use App\Models\Invitation;
use App\Models\Societe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmployeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = array();
        $data['employes'] = User::all();
        return view('admin.employes.employes',$data);
    }

    public function inviterEmploye(){
        $data=array();
        $data['societes'] = Societe::all();
        return view('admin.employes.invite_employe',$data);
    }

    public function sendMail(InvitationRequest $request){


        //save to db
        $invitation = new Invitation();
        $invitation->email_employe = $request->input('email_employe');
        $invitation->nom_employe = $request->input('nom_employe');
        $invitation->societe_id = $request->input('societe_id');
        $invitation->admin_id =(\Auth::guard('admin')->user()->id);
        $invitation->statut = 'notAccepted';
        $invitation->save();

        // save to historique
        $societe = Societe::find($request->input('societe_id'))->societe_nom;
        $admin = Admin::find((\Auth::guard('admin')->user()->id))->name;
        $historique = new Historique();
        $action = 'L\'admin :'.$admin .' a invité l\'employé '.$request->input('nom_employe') .' pour rejoindre la société '.$societe;
        $historique->action = $action;
        $historique->save();

        //send mail
        $nom_societe = Societe::find($request->input('societe_id'))->societe_nom;
        $nom_employe = $request->input('nom_employe');
        $email_employe = $request->input('email_employe');
        $societe_nom = $nom_societe;
        $invitation_data  = Invitation::where('email_employe',$email_employe)->get();
        $invitation_id = $invitation_data[0]['id'];
        Mail::to($email_employe)->send(new EmployeMail($nom_employe,$email_employe, $societe_nom,$invitation_id));


        return redirect('admin/invitations');
    }




}
