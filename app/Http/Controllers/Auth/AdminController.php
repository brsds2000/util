<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\User;

class AdminController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/


	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('admin');

	}
	/**
	 * Handle a registration request for the application.
	 *
	 * @param  \Illuminate\Foundation\Http\FormRequest  $request
	 * @return \Illuminate\Http\Response
	 */
	public function postRegister(Request $request)
	{

		$validator = $this->registrar->validator($request->all());

		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}

		$this->registrar->create($request->all());
		$mensagem = 'Usuário criado com sucesso';

		return redirect('admin/index')->with('message', $mensagem);
	}


	public function getIndex()
	{
		
		$users = DB::table('users')->get();

		// foreach ($users as $user)
		// {
		//     var_dump($user->name);
		// }

		return view('admin/index',compact('users'));
	}	


	public function getProfile($idUser)
	{

		$user = DB::table('users')->where('id', $idUser)->first();


		//dd($user);
		return view('admin/profile',compact('user'));
	}

	public function getLogboleto($idUser)
	{

		$logBoleto = DB::table('log_boleto')->where('user_id', $idUser)->orderBy('created_at','desc')->get();;
		$user = DB::table('users')->where('id', $idUser)->first();

		//dd($logBoleto);
		return view('admin/logboleto',compact('logBoleto','user'));
	}

	public function getLogboletogeral()
	{

		$logBoleto = DB::table('log_boleto')
		->join('users', 'users.id', '=', 'log_boleto.user_id')
		->orderBy('log_boleto.created_at','desc')
		->select('log_boleto.created_at', 'users.name', 'log_boleto.nome','log_boleto.cpf','log_boleto.endereco','log_boleto.cep','log_boleto.cidade','log_boleto.estado'
		,'log_boleto.instituicao')->get();



		

		//->select('')
		//$user = DB::table('users')->where('id', $idUser)->first();

		//dd($logBoleto);
		return view('admin/logboletogeral',compact('logBoleto'));
	}

	public function postProfile(Request $request)
	{
		$userForm = $request->all();

		$validator = Validator::make($userForm,[
			'name' => 'required|max:255']);

		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}

		//$user = DB::table('users')->where('id', $userForm['id'])->first();
		$user = User::find($userForm['id']);
		//dd($userForm);
		$user->name = $userForm['name'];
		$user->indAtivo = (empty($userForm['indativo']) ? 'N' : 'S' );
		$user->indAdm = (empty($userForm['indadm']) ? 'N' : 'S' );

		//dd($user->indAdm);

		$user->save();
		$mensagem = 'Usuário alterado com sucesso';

		return redirect('admin/profile/'.$userForm['id'])->with('message', $mensagem);
	}

	public function postSenha(Request $request)
	{
		$userForm = $request->all();

		$validator = Validator::make($userForm,[
			'password' => 'required||min:6']);

		if ($validator->fails())
		{
			return response()->json(['status' => 'nok', 'msg' => 'Senha inválida']);
		}

		if ($userForm['password'] != $userForm['password_confirmation']) {
			return response()->json(['status' => 'nok', 'msg' => 'Senhas não conferem']);
		}

		$user = User::find($userForm['id']);
		//$user = $this->auth->user();

		//dd($user);

		$user->password = bcrypt($userForm['password']);

		$user->save();
		$mensagem = 'Senha alterada com sucesso';

		return response()->json(['status' => 'ok', 'msg' => $mensagem]);
	}

	public function getRemover($idUser)
	{

		$user = User::find($idUser);
		$user->delete();
		$mensagem = 'Usuário removido com sucesso';
		//dd($user);
		return redirect('admin/index')->with('message', $mensagem);
	}

}
