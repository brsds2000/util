<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SenhaController extends Controller {

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

		$this->middleware('auth');

	}
	/**
	 * Handle a registration request for the application.
	 *
	 * @param  \Illuminate\Foundation\Http\FormRequest  $request
	 * @return \Illuminate\Http\Response
	 */
	public function postIndex(Request $request)
	{
		$dadosFormulario = $request->input();


		$validator = Validator::make($dadosFormulario,[
			'password' => 'required||min:6']);

		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}
		//dd($request);
		if ($dadosFormulario['password'] != $dadosFormulario['passwordConfirm']) {
			return redirect('senha/index')
						->withErrors([
							'password' => 'Senhas não conferem',
						]);
		}

		$user = $this->auth->user();

		//dd($user);

		$user->password = bcrypt($dadosFormulario['password']);

		$user->save();

		
		$mensagem = 'Senha alterada com sucesso';

		return redirect('/senha/index')->with('message', $mensagem);
	}

	public function getIndex()
	{
		
		// $users = DB::table('users')->get();

		// foreach ($users as $user)
		// {
		//     var_dump($user->name);
		// }

		return view('senha/index');
	}	


}
