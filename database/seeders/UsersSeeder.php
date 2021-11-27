<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	['name' => 'adm', 'email' => 'adm@gmail.com', 'nivel' => '1', 'password' => bcrypt('adm12345')],
        	['name' => 'usuario', 'email' => 'usuario@gmail.com', 'nivel' => '2', 'password' => bcrypt('user12345')],
        ]);
    }
}
