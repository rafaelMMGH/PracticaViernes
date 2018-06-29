@extends('layouts.app')

@section('content')

	@if(isset($email))
		<h2>Bienvenido: {{$email}}	</h2>
	@else
		<h2>Todavía no ha iniciado sesión</h2>
	@endif

@endsection
