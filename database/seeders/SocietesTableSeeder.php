<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SocietesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('societes')->delete();
        
        \DB::table('societes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'societe_nom' => 'Adidas',
                'societe_adresse' => 'Herzogenaurach, Allemagne',
                'societe_tel' => '05226-25946',
                'societe_email' => 'adidas@test.com',
                'admin_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2022-08-07 01:41:32',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'societe_nom' => 'Marina Shopping',
                'societe_adresse' => 'Casablanca , ain diab',
                'societe_tel' => '+212 5 22 178987',
                'societe_email' => 'marina@shopping.ma',
                'admin_id' => 1,
                'created_at' => '2022-08-06 15:48:39',
                'updated_at' => '2022-08-07 20:17:57',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'societe_nom' => 'Tersea Casablanca',
                'societe_adresse' => 'Bd Abdelmoumen, Casablanca 20250',
                'societe_tel' => '05290-32626',
                'societe_email' => 'tersea@tersea.com',
                'admin_id' => 1,
                'created_at' => '2022-08-06 16:34:53',
                'updated_at' => '2022-08-08 15:17:49',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}