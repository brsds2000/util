<?php namespace App\Http\Controllers;

class BoletoController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('welcome');
	}

	public function postGerar()
	{

		$dadosFormulario =\Request::input();

		//dd($dadosFormulario);
		
		if ($dadosFormulario['instituicao'] == 1) {
			$nomIes = 'Centro Universitário de Belo Horizonte';
			$cedenteIes = 'IMEC - Instituto Mineiro de Educação e Cultura UNI-BH S/A';
			$nomeImagemIes = 'unibh.jpg';
			$campus = 'ES';
		}else{
			$nomIes = 'Alterar para nome completo sao judas';
			$cedenteIes = 'Alterar para cedente são judas';
			$nomeImagemIes = 'saojudas.jpg';
			$campus = 'CA';

		}



		switch ($dadosFormulario['curso']) {
		    case 1:
		        $curso = "Ciência da Computação";
		        break;
		    case 2:
		        $curso = "Engenharia de produção";
		        break;
		    default:
       			$curso = "História"; 
		}


		$nome = $dadosFormulario["nome"];
		$endereco = $dadosFormulario["endereco"];
		$cep = $dadosFormulario["cep"];
		$cidade = $dadosFormulario["cidade"];
		$estado = $dadosFormulario["estado"];
		$cpf = $dadosFormulario["cpf"];

		$ano = date("Y");
		$mes = date("m");
		if ($mes > 6) {
			$parcela = $mes - 6;
			$semestre = 2;
		}else{
			$parcela = (int)$mes;
			$semestre = 1;
		}

		$fimRa = rand(1999, 7999);


		
		//print('</br> ano'. $ano);
		//print('</br> mes'. $mes);
		//print('</br> parcela'. $parcela);
		//print('</br> semestre'. $semestre);
		//print('</br> fimRa'. $fimRa);

		//dd();

		// Matricula randômica

		//Data atraves da data atual


		return view('boleto/boleto',compact('nomIes','cedenteIes','nomeImagemIes',
											'curso','nome','endereco','cep',
											'cidade','estado','ano','mes','parcela',
											'semestre','fimRa','cpf','campus'));
	}

	public function getGerar()
	{
		return view('boleto/gerar');
	}	

}
