<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 5,
                'name' => 'amine chaoui',
                'email' => 'amine@example.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zOjUa9xtzREahYhhkMP1s.iIK3EgpBiAGODqz6kX8Iy8e.elAUOJO',
                'is_invited' => 1,
                'date_naissance' => '2022-08-04',
                'remember_token' => NULL,
                'created_at' => '2022-08-08 14:58:56',
                'updated_at' => '2022-08-08 14:58:56',
                'societes_id' => 1,
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'alami omar',
                'email' => 'test@user.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$z.F4IQPLMSRGGURtdflmdODMkIiCCCjpOcpWtrmvIwyyYToigXcsi',
                'is_invited' => 1,
                'date_naissance' => '2022-08-04',
                'remember_token' => NULL,
                'created_at' => '2022-08-08 15:16:57',
                'updated_at' => '2022-08-08 15:16:57',
                'societes_id' => 2,
            ),
        ));
        
        
    }
}