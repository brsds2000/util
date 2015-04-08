@extends('templates.template')

@section('content')

<script type="text/javascript">
	$(document).ready(function() {
    $('#tblusuarios').dataTable({
    	"language": {
                "url": "/js/Portuguese-Brasil.json"
            },
        "info": false

    });
} );

</script>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-0">


			@if (isset($mensagem))
				<div class="alert alert-danger">
					<strong>$mensagem</strong>
				</div>
			@endif

			<table id="tblusuarios" class="table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Nome</th>
		                <th>E-mail</th>
		                <th>Ativo</th>
		                <th>Adminstrador</th>
		            </tr>
		        </thead>
		        @foreach ($users as $user)
		        	<tr>
		        	<a href="/admin/teste">
		                <td><a href="/admin/usuario/{{{$user->id}}}"> {{{$user->name}}} </a></td>
		                <td>{{{$user->email}}}</td>
		                <td> {{{ ($user->indativo == 'S' ? 'Sim' : 'Não' ) }}} </td>
		                <td> {{{ ($user->indadm == 'S' ? 'Sim' : 'Não' ) }}} </td>
		            </a>
            		</tr>
				@endforeach


		    </table>
		    <a href="/auth/register">
			<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Inserir
			</a>
		</div>
	</div>
</div>


@endsection
