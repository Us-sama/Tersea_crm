<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InvitationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('invitations')->delete();
        
        \DB::table('invitations')->insert(array (
            0 => 
            array (
                'id' => 32,
                'admin_id' => 1,
                'statut' => 'Accepted',
                'email_employe' => 'amine@example.com',
                'nom_employe' => 'amine chaoui',
                'societe_id' => 1,
                'created_at' => '2022-08-08 14:53:24',
                'updated_at' => '2022-08-08 14:58:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 34,
                'admin_id' => 1,
                'statut' => 'Accepted',
                'email_employe' => 'test@user.com',
                'nom_employe' => 'alami omar',
                'societe_id' => 2,
                'created_at' => '2022-08-08 15:13:49',
                'updated_at' => '2022-08-08 15:16:57',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}