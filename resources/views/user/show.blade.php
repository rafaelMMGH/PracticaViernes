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

@if(session()->exists('nombre'))

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Correo</th>
      <th scope="col">Sexo</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
	@foreach ($users as $user)
	    <tr>
	      <th scope="row">{{$user->id}}</th>
	      <td>{{$user->name}}</td>
	      <td>{{$user->apPaterno}}</td>
	      <td>{{$user->apMaterno}}</td>
	      <td>{{$user->email}}</td>
	      <td>{{$user->sex}}</td>
        <td><a href="/deleteUser/{{$user->id}}/{{session()->getId()}}" class="btn btn-info btn-sm">
          <span class="glyphicon glyphicon-remove"></span> 
              Remove
            </a>
        </td>
	    </tr>
	@endforeach    
@endif

  </tbody>
</table>










@endsection
