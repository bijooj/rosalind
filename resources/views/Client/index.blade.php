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
				      <th scope="col"></th>
				      <th scope="col"></th>
				      <th scope="col"></th>
				    </tr>
				   </thead>
				    <tbody>
					  	@foreach($clients as $client)
						    <tr>						      
						      <th> {{ $client->$name }} </th>						      
						      <th> {{ $client->$description }} </th>
						      <th><a href=" [[route('client.show', ['client' = $client->id])]] ">Vizualisar<a></th>
						      <th><a href=" [[route('client.edit', ['client' = $client->id])]] ">Editar<a></th>
						      <th><a href=" [[route('client.destroy', ['client' = $client->id])]] ">Apagar<a></th>
						    </tr>
					</tbody>
				</table>
						@endforeach
			</div>
		</div>	
	</div>
	
@endsection