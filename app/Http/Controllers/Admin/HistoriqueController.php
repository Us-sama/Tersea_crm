<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Historique;
use Illuminate\Http\Request;

class HistoriqueController extends Controller
{
    public function index(){

        $data = array();
        $data['historiques'] = Historique::all();
        return view('admin.historiques.historiques',$data);


    }
}
