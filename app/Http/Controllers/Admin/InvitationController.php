<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index(){
        $data = array();
        $data['invitations'] = Invitation::all();
        return view('admin.invitations.invitations',$data);
    }

    public function destroy($id){

        $invitation = Invitation::find($id);
            $invitation->delete();

        return back();

    }






}
