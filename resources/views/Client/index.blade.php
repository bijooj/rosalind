@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<h1>Todos os clientes</h1>
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">Nome</th>
				      <th scope="col">Descrição</th>
				      <th scope="col">Endereço</th>
				      <th scope="col"></th>
				      <th scope="col"></th>
				    </tr>
				   </thead>
				    <tbody>
					  	@foreach($clients as $client)



						    <tr>						      
						      <th> {{ $client->name }} </th>						      
						      <th> {{ $client->description }} </th>
							  <th> {{ $client->address }} </th>
						      <th><a href=" [[route('client.show', [$client->id])]] ">Visualisar<a></th>
						      <th><a href=" {[route('client.edit', ['client' = $client->id])]} ">Editar<a></th>
						      <th><a href=" {{ URL::route('client.destroy',$client['id']['client']) }} ">Apagar<a></th>

						    </tr>
					</tbody>
				</table>
						@endforeach
			</div>
		</div>	
	</div>
	
@endsection