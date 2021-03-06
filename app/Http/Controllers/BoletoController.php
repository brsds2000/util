<?php namespace App\Http\Controllers;

use App\LogBoleto;
use Illuminate\Contracts\Auth\Guard;
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
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
		$this->middleware('auth');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return \Redirect::to('boleto\gerar');
	}

	public function postGerar()
	{
		//dd('teste');

		$dadosFormulario =\Request::input();
		$titulo = 'Imprimir boleto';

		$rules = array('nome' => 'required|min:10',
						'cpf' => 'required|min:11|max:14',
						'endereco' => 'required',
						'cep' => 'required|min:8|max:11',
						'cidade' => 'required',
						'estado' => 'required|min:2|max:2',
						'instituicao' => 'required',
						'curso' =>'required'

			);

		$niceNames = array(
		    'nome' => 'Nome',
		    'cpf' => 'CPF',
			'endereco' => 'Endereço',
			'cep' => 'CEP',
			'cidade' => 'Cidade',
			'estado' => 'Estado',
			'instituicao' => 'Instituição',
			'curso' =>'Curso'
		);

		
		

		 $validator = \Validator::make(\Request::input(), $rules);
		 $validator->setAttributeNames($niceNames); 

		 if ($validator->fails())
     	{
         	return \Redirect::to('boleto\gerar')->withErrors($validator)->withInput();
     	}

		//dd($dadosFormulario);
		
		if ($dadosFormulario['instituicao'] == 1) {
			$nomIes = 'Centro Universitário de Belo Horizonte';
			$cedenteIes = 'IMEC - Instituto Mineiro de Educação e Cultura UNI-BH S/A';
			$nomeImagemIes = 'unibh.jpg';
			$campus = 'ES';
			$sglIes = 'Uni-bh';
		}else{
			$nomIes = 'Universidade São Judas Tadeu';
			$cedenteIes = 'AMC - SERVIÇOS EDUCACIONAIS LTDA';
			$nomeImagemIes = 'usjt.jpg';
			$campus = 'MC';
			$sglIes = 'São Judas';
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

		//dd($this->auth->user()->id);
		
		LogBoleto::create([
			'user_id' => $this->auth->user()->id,
			'nome' => $nome,
			'cpf' => $cpf,
			'endereco' => $endereco,
			'cep' => $cep,
			'cidade' => $cidade, 
			'estado' => $estado,
			'instituicao' => $sglIes
		]);





		return view('boleto/boleto',compact('nomIes','cedenteIes','nomeImagemIes',
											'curso','nome','endereco','cep',
											'cidade','estado','ano','mes','parcela',
											'semestre','fimRa','cpf','campus','titulo'));
	}

	public function getGerar()
	{
		$this->middleware('guest');
		$titulo = 'Imprimir boleto';

		return view('boleto/gerar',compact('titulo'));
	}	

}
