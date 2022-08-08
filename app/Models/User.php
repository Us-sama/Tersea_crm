<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'societe_id',
        'is_invited',
        'date_naissance',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];






    #####begin relations

    public function societe(){
        return $this->belongsTo(Societe::class,'societe_id','id');
    }
    public function invitation(){
        return $this->hasOne(Invitation::class,'user_id');
    }

 ###########  end relations

    ######### begin functions

    public function getSocieteName(){
        $name = Societe::where('id',$this->societes_id)->get();
        return $name[0]['societe_nom'];
    }



}
