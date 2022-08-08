<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin Oussama',
                'email' => 'flahioussama1@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8kStmSMH3mzYhRdHOxgoAenCa4Sf721HW/s5U3wg2cyx5kUiSovIy',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}