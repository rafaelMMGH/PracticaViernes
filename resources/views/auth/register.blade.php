@extends('layouts.app')

@section('content')
				
	<form method="post" action="/createUser" class="form-center">
		@csrf
		<h2 align="center" class="title-center">Registro de usuarios</h2><br>
		<div class="container">
			<div class="row">
				<label class="col-md-2 ">Nombre </label>
				<input type="text" name="name" value="Jesus Carlos" class="col-md-6 form-control" required>	
			</div><br>
			<div class="row">
				<label class="col-md-2">Apellido Paterno </label>
				<input type="text" name="apPaterno" value="Sanchez" class="col-md-6 form-control" required>	
			</div><br>	
			<div class="row">
				<label class="col-md-2">Apellido Materno </label>
				<input type="text" name="apMaterno" value="Guzman"class="col-md-6 form-control" required>	
			</div><br>		
			<div class="row">
				<label class="col-md-2">Correo </label>
				<input type="email" name="email" value="jesus@gmail.com" class="col-md-6 form-control" required>	
			</div><br>		
			<div class="row">
				<label class="col-md-2">Contraseña </label>
				<input type="password" name="password" value="12345" class="col-md-6 form-control" required>	
			</div><br>	
			<div class="row">
				<label class="col-md-2">Sexo: </label>
				<input type="text" name="sex" value="M" class="col-md-6 form-control" required>	
			</div><br>	
			<div class="row btn-center">
				<input type="submit" class="btn btn-primary" value="Registrar" name="">
			</div><br><br>
		</div>
	</form>
	
@endsection
