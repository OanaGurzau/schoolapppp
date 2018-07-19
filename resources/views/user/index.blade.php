@extends('layouts.app')

@section('content')
<h1>Lista Profesorilor</h1>
<td><a href="users/create" class="btn btn-info btn-add-new">Adaugare profesor</a>


<table class="table table-bordered">
  <tr>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Telefon</th>
    <th>Email</th>
    <th>Actiuni</th>

</tr>

@if(count($users) > 0)

    @foreach($users as $user)
    <tr>
      <td>{{$user->name}}</td></a>
      <td>{{$user->surname}}</td></a>
      <td>{{$user->tel}}</td></a>
      <td>{{$user->email}}</td></a>
      <td><a href="users/{{$user->id}}/edit" class="btn btn-warning">EDIT</a>
          {!!Form::open(['action' => ['TeachersController@destroy', $user->id], 'class' => 'btn', 'method' => 'POST', 'onsubmit' => 'return confirm("Sunteti sigur ca vreti sa stergeti acest profesor din baza de date?")'])!!}
              {{Form::hidden('_method', 'DELETE')}}
              {{Form::bsSubmit('Sterge profesor', ['class' => 'btn btn-danger'])}}
          {!!Form::close()!!}
      </td>
    </tr>

    @endforeach

@endif



</table>

@endsection
