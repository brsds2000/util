@extends('templates.template')

@section('content')
<script type="text/javascript">
	$(document).ready(function() {

		$('#altera-senha').on('click', function(){
			$.ajax({
			  method: "POST",
			  url: "/admin/senha",
			  data: { password: $('form#form-modal').find( "input[name='password']" ).val(), 
			  		  id: $('form#form-modal').find( "input[name='id']" ).val(),	
			  		  _token: $('form#form-modal').find( "input[name='_token']" ).val(),
			  		  password_confirmation: $('form#form-modal').find( "input[name='password_confirmation']" ).val()
					}
			})
			.done(function( response ) {
    			if (response.status == 'ok') {
    				$('form#form-modal').find( "input[name='password']" ).val('');
    				$('form#form-modal').find( "input[name='password_confirmation']" ).val('');
    				$('#myModal').modal("hide");
    				alert(response.msg);
    			}else{
    				$('form#form-modal').find( "input[name='password']" ).val('');
    				$('form#form-modal').find( "input[name='password_confirmation']" ).val('');
    				alert(response.msg);
    				
    			};
 			});
		});
	} );
</script>
<script>
	function removeUsuario() {
		if (confirm('Tem certeza que deseja remover este usuário?')){
			window.location='/admin/remover/{{{$user->id}}}';
		}
	}

	



</script>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Alterar Usuário</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> <br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					@if(Session::has('message'))
						<div class="alert alert-info">
							<strong>{{ Session::get('message') }}</strong>
						</div>
					@endif
					<form class="form-horizontal" role="form" method="POST" id="form-principal" action="/admin/profile">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" value="{{{$user->id}}}">


						<div class="form-group">
							<label class="col-md-4 control-label">Nome</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{{$user->name}}}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail</label>
							<div class="col-md-6">
								<input type="text" class="form-control" disabled name="name" value="{{{$user->email}}}">
							</div>
						</div>



						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="indativo" value="S"  {{{ ($user->indativo == 'S' ? 'checked' : '' ) }}}> Ativo
									</label>
								</div>
							</div>
						</div>						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="indadm" value="S" {{{ ($user->indadm == 'S' ? 'checked' : '' ) }}}> Administrador
									</label>
								</div>
							</div>
						</div>	
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Alterar
								</button>
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
									Alterar senha
								</button>
								<button type="button" class="btn btn-primary" id="btnRemover" onclick="removeUsuario()">
									Remover Usuário
								</button>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<a href="/admin/logboleto/{{{$user->id}}}">
									<button type="button" class="btn btn-info">
										Log de geração de boleto
									</button>
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Alterar Senha</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" id="form-modal">
        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
        	<input type="hidden" name="id" value="{{{$user->id}}}">

			<div class="form-group">
				<label class="col-md-4 control-label">Senha</label>
				<div class="col-md-6">
					<input type="password" class="form-control" name="password">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label">Confirmar senha</label>
				<div class="col-md-6">
					<input type="password" class="form-control" name="password_confirmation">
				</div>
			</div>
		  <div class="form-group">
		    <div class="col-md-6 col-md-offset-4">
		      <button type="button" id="altera-senha" class="btn btn-primary">Alterar</button>
		    </div>
		  </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
