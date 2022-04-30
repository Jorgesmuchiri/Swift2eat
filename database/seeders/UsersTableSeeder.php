<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('roles')->insert([
            'role_name' => 'Admin',
        ]);


        DB::table('users')->insert([
            'name' => 'Admin Admin',
            'email' => 'admin@swyft2eat.com',
            'email_verified_at' => now(),
            'password' => Hash::make('swyft2eat@2022'),
            'role_id'=>1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
