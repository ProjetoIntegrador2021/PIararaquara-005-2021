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

    		['nome' => 'aaa', 'categoria_id' => '1', 'nserie' => '1111111111', 'patrimonio' => '123456', 'descricao' => 'aaaaaaaaaaaaaa', 'estado' => 'Funcionando', 'marca' => 'AMD', 'foto' => '', 'user_id' => '1'],



    		['nome' => 'aab', 'categoria_id' => '2', 'nserie' => '22222222222', 'patrimonio' => '1234567', 'descricao' => 'bbbbbbbbbb', 'estado' => 'Quebrado', 'marca' => 'Intel', 'foto' => '', 'user_id' => '1'],


    		['nome' => 'aac', 'categoria_id' => '3', 'nserie' => '33333333333', 'patrimonio' => '12345678', 'descricao' => 'cccccccccc', 'estado' => 'Obsoleto', 'marca' => 'AMD', 'foto' => '', 'user_id' => '1'],


    		['nome' => 'aad', 'categoria_id' => '4', 'nserie' => '44444444444', 'patrimonio' => '123456789', 'descricao' => 'ddddddddd', 'estado' => 'Funcionando', 'marca' => 'Kjkjkjkk', 'foto' => '', 'user_id' => '1'],


    		['nome' => 'aae', 'categoria_id' => '5', 'nserie' => '55555555555', 'patrimonio' => '1234567098', 'descricao' => 'eeeeeeeeee', 'estado' => 'Obsoleto', 'marca' => 'Quimica', 'foto' => '', 'user_id' => '1'],


    		['nome' => 'aaf', 'categoria_id' => '6', 'nserie' => '66666666666', 'patrimonio' => '1234323567', 'descricao' => 'ffffffffff', 'estado' => 'Funcionando', 'marca' => 'Dell', 'foto' => '', 'user_id' => '1'],


    		['nome' => 'aag', 'categoria_id' => '7', 'nserie' => '77777777777', 'patrimonio' => '1223234567', 'descricao' => 'gggggggggg', 'estado' => 'Quebrado', 'marca' => 'Samsung', 'foto' => '', 'user_id' => '1'],

    		['nome' => 'aah', 'categoria_id' => '8', 'nserie' => '88888888888', 'patrimonio' => '12232345367', 'descricao' => 'hhhhhhhhhh', 'estado' => 'Quebrado', 'marca' => 'Ah nao', 'foto' => '', 'user_id' => '1'],


    		['nome' => 'aai', 'categoria_id' => '9', 'nserie' => '99999999999', 'patrimonio' => '1223234567', 'descricao' => 'gggggggggg', 'estado' => 'Quebrado', 'marca' => 'Samsung', 'foto' => '', 'user_id' => '1'],


            ['nome' => 'aaj', 'categoria_id' => '10', 'nserie' => '10000000000', 'patrimonio' => '122323456437', 'descricao' => 'jjjjjjjjjjjj', 'estado' => 'Obsoleto', 'marca' => 'Qualquer uma', 'foto' => '', 'user_id' => '1'],


            ['nome' => 'aak', 'categoria_id' => '11', 'nserie' => '11000000000', 'patrimonio' => '122323456237', 'descricao' => 'kkkkkkkkkk', 'estado' => 'Obsoleto', 'marca' => 'Samsung', 'foto' => '', 'user_id' => '1'],


            ['nome' => 'aal', 'categoria_id' => '12', 'nserie' => '12000000000', 'patrimonio' => '1223234563427', 'descricao' => 'llllllllll', 'estado' => 'Funcionando', 'marca' => 'AMD', 'foto' => '', 'user_id' => '1'],

            ['nome' => 'aam', 'categoria_id' => '13', 'nserie' => '13000000000', 'patrimonio' => '121231223234567', 'descricao' => 'mmmmmmmmmm', 'estado' => 'Funcionando', 'marca' => 'Samsung', 'foto' => '', 'user_id' => '1'],


            ['nome' => 'aan', 'categoria_id' => '14', 'nserie' => '14000000000', 'patrimonio' => '1212312232345617', 'descricao' => 'nnnnnnnnnn', 'estado' => 'Funcionando', 'marca' => 'Intel', 'foto' => '', 'user_id' => '1'],

            ['nome' => 'aao', 'categoria_id' => '15', 'nserie' => '15000000000', 'patrimonio' => '1212312232343567', 'descricao' => 'oooooooooo', 'estado' => 'Funcionando', 'marca' => 'Rockstar', 'foto' => '', 'user_id' => '1'],


            ['nome' => 'aap', 'categoria_id' => '16', 'nserie' => '16000000000', 'patrimonio' => '12123122834567', 'descricao' => 'pppppppppp', 'estado' => 'Obsoleto', 'marca' => ':p', 'foto' => '', 'user_id' => '1'],


            ['nome' => 'aaq', 'categoria_id' => '17', 'nserie' => '17000000000', 'patrimonio' => '121231904567', 'descricao' => 'qqqqqqqqqq', 'estado' => 'Funcionando', 'marca' => 'Samsung', 'foto' => '', 'user_id' => '1'],



            ['nome' => 'aar', 'categoria_id' => '18', 'nserie' => '18000000000', 'patrimonio' => '121231223234567', 'descricao' => 'rrrrrrrrrr', 'estado' => 'Obsoleto', 'marca' => 'Intel', 'foto' => '', 'user_id' => '1'],


            ['nome' => 'aas', 'categoria_id' => '19', 'nserie' => '190000000000', 'patrimonio' => '121223234567', 'descricao' => 'ssssssssss', 'estado' => 'Funcionando', 'marca' => 'Samsung', 'foto' => '', 'user_id' => '1'],

            ['nome' => 'aat', 'categoria_id' => '20', 'nserie' => '200000000000', 'patrimonio' => '1212233234567', 'descricao' => 'tttttttttt', 'estado' => 'Quebrado', 'marca' => 'É isso', 'foto' => '', 'user_id' => '1'],


            ['nome' => 'aau', 'categoria_id' => '21', 'nserie' => '210000000000', 'patrimonio' => '12122332345367', 'descricao' => 'uuuuuuuuuu', 'estado' => 'Obsoleto', 'marca' => 'Fé', 'foto' => '', 'user_id' => '1'],


             ['nome' => 'aav', 'categoria_id' => '22', 'nserie' => '220000000000', 'patrimonio' => '121223323456127', 'descricao' => 'vvvvvvvvvv', 'estado' => 'Quebrado', 'marca' => 'É nada', 'foto' => '', 'user_id' => '1'],


              ['nome' => 'aat', 'categoria_id' => '20', 'nserie' => '200000000000', 'patrimonio' => '1212233234567', 'descricao' => 'tttttttttt', 'estado' => 'Quebrado', 'marca' => 'É isso', 'foto' => '', 'user_id' => '1'],





        ]);

}
}