<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // Definindo o campo 'nome' como uma string
            $table->text('descricao'); // Definindo o campo 'descricao' como texto (longtext)
            $table->decimal('preco', 8, 2); // Definindo o campo 'preco' como decimal (8 dígitos no total, 2 dígitos decimais)
            $table->integer('quantidade'); // Definindo o campo 'quantidade' como um número inteiro
            $table->timestamps(); // Adicionando os campos 'created_at' e 'updated_at' para registro de timestamps

            // Exemplo de como adicionar chaves estrangeiras:
            // $table->foreignId('categoria_id')->constrained('categorias'); // Define 'categoria_id' como chave estrangeira referenciando 'id' na tabela 'categorias'
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
