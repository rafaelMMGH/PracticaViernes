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


	<form method="post" action="/sendmail" class="form-center">
		@csrf
		<h2 align="center" class="title-center">Enviar Correo</h2><br>
		<div class="container ">

			<div class="row">
				<label class="col-md-2">Asunto </label>
				<input type="text" name="name" class="col-md-6 form-control" required>	
			</div><br>
			<div class="row">
				<label class="col-md-2 ">Correo </label>
				<input type="email" name="email" class="col-md-6 form-control" required>	
			</div><br>
			<div class="row">
				<label class="col-md-2 ">Mensaje </label>
				<input type="text" name="content" class="col-md-6 form-control" required>	
			</div><br>
			<div class="row btn-center">
				<input type="submit" class="btn btn-primary" value="Enviar">
			</div>			
		</div>
	</form>

@endsection
