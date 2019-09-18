@extends('layouts.app')

@section('content')


	<div class="container">
		<div class="col-md-12">
			<div class="row">
					<h1>Um pouco mais sobre {{ $client->name }}</h1>
							<table class="table">
								<thead>
								<tr>
									<th scope="col">Id</th>
									<th scope="col">Nome</th>
									<th scope="col">Cpf</th>
									<th scope="col">rg</th>
									<th scope="col">data de nascimento</th>
									<th scope="col">Endereço</th>
									<th scope="col">Descrição</th>
									<th scope="col">FUNÇÕES</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<th> {{ $client->id }} </th>
									<th> {{ $client->name }} </th>
									<th> {{ $client->cpf }} </th>
									<th> {{ $client->rg }} </th>
									<th> {{ $client->date_birth }} </th>
									<th> {{ $client->address }} </th>
									<th> {{ $client->description }} </th>
									<th><a href=" [[route('client.show', ['client' = $client->id])]] ">Visualisar<a></th>
								</tr>
								</tbody>
							</table>
			</div>
		</div>
	</div>
@endsection