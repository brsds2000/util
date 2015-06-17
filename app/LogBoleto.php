<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class LogBoleto extends Model{


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'log_boleto';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_id', 'nome', 'cpf','endereco','cep','cidade','estado','instituicao'];



}
