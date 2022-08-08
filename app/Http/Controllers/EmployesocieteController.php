<?php

namespace App\Http\Controllers;

use App\Models\Societe;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployesocieteController extends Controller
{

    public function index(){
        $data=array();
        $societe = Societe::where('id',(Auth::user()->id))->get()[0];
        $data['societe'] = $societe;
        $data['employes'] = User::all();

        return view('employessocietes.masociete',$data);
  }


  public function modifier(){
    $data = array();
    $data['user'] = Auth::user();

    return view('employessocietes.monprofil',$data);
  }


  public function edit(Request $request, $id){

    $employe= User::find($id);
    $employe->email = $request->input('mail');
    $employe->name = $request->input('name');
    $employe->save();
    return redirect('employes/societe');


  }
}
