<html>
<head></head>

<body>
	
	<h1>Gerar Boleto</h1>

<!--     @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
    @endforeach -->
	

	{!! Form::open(array('url' => 'boleto/gerar')) !!}
    
	    {!! Form::label('nome', 'Nome Completo')!!}
	    {!! Form::text('nome' ,Input::old('nome'),array('placeholder' => 'Nome','class' =>'form-control'))!!}
	    {{ $errors->first('nome') }}

	    {!! Form::label('cpf', 'CPF')!!}
	    {!! Form::text('cpf' ,Input::old('cpf'),array('placeholder' => 'CPF','class' =>'form-control'))!!}
		{{ $errors->first('cpf') }}

	    {!! Form::label('endereco', 'Endereço')!!}
	    {!! Form::text('endereco' ,Input::old('endereco'),array('placeholder' => 'Endereço','class' =>'form-control'))!!}
		{{ $errors->first('endereco') }}

	    {!! Form::label('cep', 'CEP')!!}
	    {!! Form::text('cep' ,Input::old('cep'),array('placeholder' => 'CEP','class' =>'form-control'))!!}
		{{ $errors->first('cep') }}

	    {!! Form::label('cidade', 'Cidade')!!}
	    {!! Form::text('cidade' ,Input::old('cidade'),array('placeholder' => 'Cidade','class' =>'form-control'))!!}
		{{ $errors->first('cidade') }}

	    {!! Form::label('estado', 'Estado (Sigla)')!!}
	    {!! Form::text('estado' ,Input::old('endereco'),array('placeholder' => 'Estado','class' =>'form-control'))!!}
		{{ $errors->first('endereco') }}

	    {!! Form::label('instituicao', 'Instituição')!!}
	    {!! Form::select('instituicao' ,array('1' => 'Uni bh', '2'=> 'São Judas'), Input::old('instituicao'),array('class' =>'form-control'))!!}
		{{ $errors->first('instituicao') }}

	    {!! Form::label('curso', 'Curso')!!}
	    {!! Form::select('curso' ,array('1' => 'Ciência da computacao', '2'=> 'Engenharia de Produção'), Input::old('curso'),array('class' =>'form-control'))!!}
		{{ $errors->first('curso') }}
				
		{!!Form::submit('Gerar',array('class'=>'btn btn-default'))!!}

	{!! Form::close() !!}

</body>

</html>