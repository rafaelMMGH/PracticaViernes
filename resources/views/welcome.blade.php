@extends('layouts.app')

@section('content')

	@if( session()->exists('nombre'))
		<h2>Bienvenido: {{session()->get('nombre')[0]}}	</h2>
	@else
		<h2>Todavía no ha iniciado sesión</h2>
	@endif

@endsection
