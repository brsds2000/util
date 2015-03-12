@extends('templates.template')

@section('content')
	
<!--     @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
    @endforeach -->
	<div class="panel panel-default form-padrao">
	  <div class="panel-heading">
	    <h3 class="panel-title">Gerar</h3>
	  </div>
	  <div class="panel-body">

		{!! Form::open(array('url' => 'boleto/gerar')) !!}

	    	<div class="form-group">
	    		<!-- <div class="col-xs-4"> -->
		    <!-- {!! Form::label('nome', 'Nome Completo')!!} -->
		    {!! Form::text('nome' ,Input::old('nome'),array('placeholder' => 'Nome','class' =>'form-control '))!!}
		    	<!-- </div> -->
		    {!! $errors->first('nome','<div class="alert alert-danger">:message</div>') !!}
			</div>
			<div class="form-group">
		    <!-- {!! Form::label('cpf', 'CPF')!!} -->
		    {!! Form::text('cpf' ,Input::old('cpf'),array('placeholder' => 'CPF','class' =>'form-control'))!!}
			{!! $errors->first('cpf','<div class="alert alert-danger">:message</div>') !!}
			</div>

			<div class="form-group">
		    <!-- {!! Form::label('endereco', 'Endereço')!!} -->
		    {!! Form::text('endereco' ,Input::old('endereco'),array('placeholder' => 'Endereço','class' =>'form-control'))!!}
			{!! $errors->first('endereco','<div class="alert alert-danger">:message</div>') !!}
			</div>

			<div class="form-group">
		    <!-- {!! Form::label('cep', 'CEP')!!} -->
		    {!! Form::text('cep' ,Input::old('cep'),array('placeholder' => 'CEP','class' =>'form-control'))!!}
			{!! $errors->first('cep','<div class="alert alert-danger">:message</div>') !!}
			</div>

			<div class="form-group">
		    <!-- {!! Form::label('cidade', 'Cidade')!!} -->
		    {!! Form::text('cidade' ,Input::old('cidade'),array('placeholder' => 'Cidade','class' =>'form-control'))!!}
			{!! $errors->first('cidade','<div class="alert alert-danger">:message</div>') !!}
			</div>

			<div class="form-group">
		    <!-- {!! Form::label('estado', 'Estado (Sigla)')!!} -->
		    {!! Form::text('estado' ,Input::old('endereco'),array('placeholder' => 'Estado(Sigla)','class' =>'form-control'))!!}
			{!! $errors->first('estado','<div class="alert alert-danger">:message</div>') !!}
			</div>

			<div class="form-group">
		    <!-- {!! Form::label('instituicao', 'Instituição')!!} -->
		    {!! Form::select('instituicao' ,array('1' => 'Uni bh', '2'=> 'São Judas'), Input::old('instituicao'),array('class' =>'form-control'))!!}
			{!! $errors->first('instituicao','<div class="alert alert-danger">:message</div>') !!}
			</div>

			<div class="form-group">
		    <!-- {!! Form::label('curso', 'Curso')!!} -->
		    {!! Form::select('curso' ,array('1' => 'Ciência da computacao', '2'=> 'Engenharia de Produção'), Input::old('curso'),array('class' =>'form-control'))!!}
			{!! $errors->first('curso','<div class="alert alert-danger">:message</div>') !!}
			</div>	

			{!!Form::submit('Gerar',array('class'=>'btn btn-default'))!!}

		{!! Form::close() !!}


  </div>
</div>

@endsection