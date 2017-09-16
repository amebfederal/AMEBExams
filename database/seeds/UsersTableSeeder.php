<?php
class UsersTableSeeder extends \Illuminate\Database\Seeder
{

    public function run(){
        DB::table('users')->delete();

        DB::table('users')->insert(
            array(
                array(
                    'first_name' => '',
                    'last_name' => '',
                    'phone' => '',
                    'address' => '',
                    'username' => 'superadmin',
                    'password' => bcrypt('password'),
                    'email'  => 'superadmin@gmail.com',
                    'user_type' => 'superadmin'
                )
            ));
    }

}