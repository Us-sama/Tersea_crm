<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HistoriquesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('historiques')->delete();
        
        \DB::table('historiques')->insert(array (
            0 => 
            array (
                'id' => 5,
                'action' => 'L\'admin :Admin Oussama a invité l\'employé amine chaoui pour rejoindre la société Adidas',
                'created_at' => '2022-08-08 14:53:24',
                'updated_at' => '2022-08-08 14:53:24',
            ),
            1 => 
            array (
                'id' => 6,
                'action' => 'L\'admin :Admin Oussama a invité l\'employé ihssane karoumi pour rejoindre la société Marina Shopping',
                'created_at' => '2022-08-08 14:54:07',
                'updated_at' => '2022-08-08 14:54:07',
            ),
            2 => 
            array (
                'id' => 7,
                'action' => 'amine chaoui a valider l\'invitation et a confirmer son profil ',
                'created_at' => '2022-08-08 14:58:56',
                'updated_at' => '2022-08-08 14:58:56',
            ),
            3 => 
            array (
                'id' => 8,
                'action' => 'L\'admin :Admin Oussama a invité l\'employé alami omar pour rejoindre la société Marina Shopping',
                'created_at' => '2022-08-08 15:13:49',
                'updated_at' => '2022-08-08 15:13:49',
            ),
            4 => 
            array (
                'id' => 9,
                'action' => 'alami omar a valider l\'invitation et a confirmer son profil ',
                'created_at' => '2022-08-08 15:16:57',
                'updated_at' => '2022-08-08 15:16:57',
            ),
        ));
        
        
    }
}