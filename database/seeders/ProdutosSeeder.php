<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PecasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('produtos')->insert([

    		['nome' => 'aaa', 'categoria_id' => '1', 'quantidade' => '1111111111', 'patrimonio' => '123456', 'descricao' => 'aaaaaaaaaaaaaa', 'estado' => 'Funcionando', 'foto' => '', 'user_id' => '1'],

            ['nome' => 'aaa', 'categoria_id' => '1', 'quantidade' => '1111111111', 'patrimonio' => '123456', 'descricao' => 'aaaaaaaaaaaaaa', 'estado' => 'Funcionando', 'foto' => '', 'user_id' => '1'],

            ['nome' => 'aaa', 'categoria_id' => '1', 'quantidade' => '1111111111', 'patrimonio' => '123456', 'descricao' => 'aaaaaaaaaaaaaa', 'estado' => 'Funcionando', 'foto' => '', 'user_id' => '1'],

    		['nome' => 'aaa', 'categoria_id' => '1', 'quantidade' => '1111111111', 'patrimonio' => '123456', 'descricao' => 'aaaaaaaaaaaaaa', 'estado' => 'Funcionando', 'foto' => '', 'user_id' => '1'],

    		['nome' => 'aaa', 'categoria_id' => '1', 'quantidade' => '1111111111', 'patrimonio' => '123456', 'descricao' => 'aaaaaaaaaaaaaa', 'estado' => 'Funcionando', 'foto' => '', 'user_id' => '1'],

    		['nome' => 'aaa', 'categoria_id' => '1', 'quantidade' => '1111111111', 'patrimonio' => '123456', 'descricao' => 'aaaaaaaaaaaaaa', 'estado' => 'Funcionando', 'foto' => '', 'user_id' => '1'],

        ]);

}
}