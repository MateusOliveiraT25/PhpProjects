<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendamentosTable extends Migration
{
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consulta_id');
            $table->string('nome');
            $table->string('email');
            $table->date('data_agendamento');
            $table->timestamps();

            $table->foreign('consulta_id')->references('id')->on('consultas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('agendamentos');
    }
}
