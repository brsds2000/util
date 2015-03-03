<html>
<head></head>

<body>
	
	<h1>Gerar Boleto</h1>

	{!! Form::open(array('url' => 'boleto/gerar')) !!}
    
	    {!! Form::label('nome', 'Nome Completo')!!}
	    {!! Form::text('nome' ,'',array('placeholder' => 'Nome','class' =>'form-control'))!!}

	    {!! Form::label('cpf', 'CPF')!!}
	    {!! Form::text('cpf' ,'',array('placeholder' => 'CPF','class' =>'form-control'))!!}

	    {!! Form::label('endereco', 'Endereço')!!}
	    {!! Form::text('endereco' ,'',array('placeholder' => 'Endereço','class' =>'form-control'))!!}

	    {!! Form::label('cep', 'CEP')!!}
	    {!! Form::text('cep' ,'',array('placeholder' => 'CEP','class' =>'form-control'))!!}

	    {!! Form::label('cidade', 'Cidade')!!}
	    {!! Form::text('cidade' ,'',array('placeholder' => 'Cidade','class' =>'form-control'))!!}

	    {!! Form::label('estado', 'Estado (Sigla)')!!}
	    {!! Form::text('estado' ,'',array('placeholder' => 'Estado','class' =>'form-control'))!!}

	    {!! Form::label('instituicao', 'Instituição')!!}
	    {!! Form::select('instituicao' ,array('1' => 'Uni bh', '2'=> 'São Judas'), '1',array('class' =>'form-control'))!!}

	    {!! Form::label('curso', 'Curso')!!}
	    {!! Form::select('curso' ,array('1' => 'Ciência da computacao', '2'=> 'Engenharia de Produção'), '1',array('class' =>'form-control'))!!}
		
		{!!Form::submit('Gerar',array('class'=>'btn btn-default'))!!}

	{!! Form::close() !!}

</body>

</html>