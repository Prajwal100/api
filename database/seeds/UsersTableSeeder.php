<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array=array(
            array(
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('1234'),
                'status'=>'active',
                'role'=>'admin'
            ),
            array(
                'name'=>'User',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('1234'),
                'status'=>'active',
                'role'=>'user'
            ),
        );
        DB::table('users')->insert($array);
    }
}
