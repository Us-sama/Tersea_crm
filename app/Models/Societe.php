<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Societe extends Model
{
    use HasFactory,SoftDeletes;


    protected $fillable = ['societe_nom','societe_adresse','societe_tel','societe_email','admin_id'];

    protected $dates = ['deleted_at'];

    ######## begin Relations###########


    public function employes(){
        return $this->hasMany(User::class,'societe_id');
    }


    public function admin(){
        return $this->belongsTo(Admin::class,'admin_id','id');
    }
    ###########  end relations

    ######### begin functions

    public function getAdminName(){
        $name = Admin::where('id',$this->admin_id)->get();
        return $name[0]['name'];
    }

    public function HasEmploye(){
        $employe_count = User::where('societes_id',$this->id)->count();

        if($employe_count == 0){
            return true;
        }else{
            return false;
        }
    }












}
