<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogBoletoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_boleto', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('user_id');
			$table->foreign('user_id')
      		->references('id')->on('users')
     		->onDelete('cascade');
     		$table->string('nome');
     		$table->string('cpf');
     		$table->string('endereco');
     		$table->string('cep');
     		$table->string('cidade');
			$table->string('estado');
			$table->string('instituicao');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('log_boleto');
	}

}
