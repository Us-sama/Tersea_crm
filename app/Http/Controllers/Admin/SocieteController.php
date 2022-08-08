<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocieteRequest;
use App\Models\Societe;
use App\Models\User;
use Illuminate\Http\Request;

class SocieteController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = array();
        $data['employes'] = User::all();
        $data['societes'] = Societe::all();
        return view('admin.societes.societes',$data);
    }

    public function create(SocieteRequest $request){

            $societe = new Societe();
            $societe->societe_nom = $request->input('societe_nom');
            $societe->societe_adresse = $request->input('societe_adresse');
            $societe->societe_email = $request->input('societe_email');
            $societe->societe_tel = $request->input('societe_tel');
            $societe->admin_id = (\Auth::guard('admin')->user()->id);
            $societe->save();

        return redirect('admin/societes');
    }

    public function edit(SocieteRequest $request ,$id){
        $societe= Societe::find($id);
        $societe->societe_nom = $request->input('societe_nom');
        $societe->societe_adresse = $request->input('societe_adresse');
        $societe->societe_email = $request->input('societe_email');
        $societe->societe_tel = $request->input('societe_tel');
        $societe->save();
        return redirect('admin/societes');

    }

    public function destroy($id){
        $societe = Societe::find($id);

        if($societe->HasEmploye()){
            $societe->delete();
        }
        return back();
    }


}
