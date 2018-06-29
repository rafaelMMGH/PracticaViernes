@extends('layouts.app')

@section('content')


	<form method="post" action="/sendmail" class="form-center">
		@csrf
		<h2 align="center" class="title-center">Enviar Correo</h2><br>
		<div class="container ">

			<div class="row">
				<label class="col-md-2">Nombre </label>
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
