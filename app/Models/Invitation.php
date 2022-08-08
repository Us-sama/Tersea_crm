<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invitation extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['admin_id','email_employe','nom_employe','societe_id','statut','action'];

    protected $dates =['deleted_at'];




    public function employe(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function admin(){
        return $this->belongsTo(Admin::class,'admin_id','id');
    }
    public function getAdminName(){
        $name = Admin::where('id',$this->admin_id)->get();
        return $name[0]['name'];
    }
    public function getSocieteName(){
        $name = Societe::where('id',$this->societe_id)->get();
        return $name[0]['societe_nom'];
    }


}
