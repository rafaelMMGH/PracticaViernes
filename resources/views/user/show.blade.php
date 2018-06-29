@extends('layouts.app')
@section('content')

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Correo</th>
      <th scope="col">Sexo</th>
      <th scope="col">Eliminar</th>
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
        <td> <a href="/deleteUser/{{$user->id}}/{{session()->getId()}}" class="btn btn-info btn-lg-sm">
          <span  aria-hidden="true">&times;</span> Eliminar 
        </a></td>
	    </tr>
	@endforeach    


  </tbody>
</table>










@endsection
