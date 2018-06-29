 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 


@extends('layouts.app')

@section('content')

	@if (isset($flag))
		<div class="alert alert-danger col-md-7 form-center text-center">
		  <strong>Error!</strong> Datos erroneos, vuelve a intentar.
		</div>
	@endif

	<form method="post" action="/checkUser" class="form-center">
		@csrf
		<h2 align="center" class="title-center">Inicio de sesión</h2><br>
		<div class="container ">
			<div class="row">
				<label class="col-md-2 ">Correo </label>
				<input type="email" name="email" class="col-md-6 form-control" required>	
			</div><br>
			<div class="row">
				<label class="col-md-2">Contraseña </label>
				<input type="password" name="password" class="col-md-6 form-control" required>	
			</div><br><br>
			<div class="row btn-center">
				<input type="submit" class="btn btn-primary" value="Entrar" name="">
			</div>			
		</div>
	</form>

@endsection
