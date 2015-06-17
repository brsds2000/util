@extends('templates.template')

@section('content')

<script type="text/javascript">
	$(document).ready(function() {
    $('#tbllogboleto').dataTable({
    	"language": {
                "url": "/js/Portuguese-Brasil.json"
            },
        "info": false

    });
} );

</script>

<div class="container-fluid">
<div class="page-header">
  <h3><a href="/admin"> Admin </a> </h3>
</div>
	<div class="row">
		<!-- <div class="col-md-8 col-md-offset-0"> -->

 

			@if(Session::has('message'))
				<div class="alert alert-info">
					<strong>{{ Session::get('message') }}</strong>
				</div>
			@endif

		<table id="tbllogboleto" class="table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Geração</th>
		                <th>Usuário</th>
		                <th>Nome</th>
		                <th>CPF</th>
		                <th>Endereço</th>
		                <th>Cep</th>
		                <th>Cidade</th>
		                <th>Estado</th>
		                <th>Instituição</th>

		            </tr>
		        </thead>
		        @foreach ($logBoleto as $logBol)
		        	<tr>
		                <td>{{{$logBol->created_at}}}</td>
		                <td>{{{$logBol->name}}}</td>
		                <td>{{{$logBol->nome}}}</td>
		                <td>{{{$logBol->cpf}}}</td>
		                <td>{{{$logBol->endereco}}}</td>
		                <td>{{{$logBol->cep}}}</td>		                		                
		                <td>{{{$logBol->cidade}}}</td>
		                <td>{{{$logBol->estado}}}</td>
		                <td>{{{$logBol->instituicao}}}</td>                		                		                		                
            		</tr>
				@endforeach


		    </table>

		<!-- </div> -->
	</div>
</div>


@endsection
