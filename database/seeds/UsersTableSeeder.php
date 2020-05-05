<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'role_id'=>'1',
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);
        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'Author',
            'email'=>'arman@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);
    }
}
