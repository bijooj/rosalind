@extends('layouts.app')

@section('content')
<form action="{{ route('client.update'), ['client' => $client->id] }}" method="post">
	<div class="container">
        @method('put')
		<h3>Informações pessoais</h3>
            <div class="col-md-4">
                <label for="nome">Nome Completo:</label>
            </div>
            <div class="form-group col-md-12">
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name' = $client->name) }}">
            </div>

            <div class="col-md-12">
                <label for="usuario">Cpf:</label>
            </div>
            <div class="form-group col-md-12">
                <input type="text" class="form-control" name="cpf" id="cpf"  value="{{ old('cpf' = $client->cpf) }}">
            </div>

            <div class="col-md-12">
                <label for="usuario">Rg:</label>
            </div>
            <div class="form-group col-md-12">
                <input type="text" class="form-control" name="rg" id="rg"  value="{{ old('rg' = $client->rg) }}">
            </div>

            <div class="col-md-12">
                <label for="usuario">Endereço:</label>
            </div>
            <div class="form-group col-md-12">
                <input type="text" class="form-control" name="address" id="address"  value="{{ old('address' = $client->address) }}">
            </div>

            <div class="col-md-12">
                <label for="usuario">Data de nascimento:</label>
            </div>
            <div class="form-group col-md-12">
                <input type="text" class="form-control" name="date_birth" id="date_birth"  value="{{ old('date_birth' = $client->date_birth) }}">
            </div>

            <div class="col-md-12">
                <label for="usuario">Breve descrição sobre você:</label>
            </div>
            <div class="form-group col-md-12">
                <input type="text" class="form-control" name="description" id="description"  value="{{ old('description' = $client->description) }}">
            </div>
            
            <div class="col-md-12 col-md-offset-4">
                <button type="submit" value="send" id="send">Atualizar</button>
            </div>

        <div class="container">
</form>

@endsection