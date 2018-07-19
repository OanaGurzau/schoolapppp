@extends('layouts.app')

@section('content')
<h1>Lista Tuturor Elevilor</h1>

<td><a href="students/create" class="btn btn-info btn-add-new">Adaugare elev</a>


<table class="table table-bordered">
  <tr>
    <th>Nume</th>
    <th>Initiala Tatalui</th>
    <th>Prenume</th>
    <th>Clasa</th>
    <th>Actiuni</th>
</tr>

@if(count($students) > 0)

    @foreach($students as $student)
    <tr>
      <td>{{$student->name}}</td></a>
      <td>{{$student->parent_i}}</td></a>
      <td>{{$student->surname}}</td></a>
      <td>{{$student->grade}}</td>
      <td>{{$student->created_at->format('d m Y')}}</td>
      <td><a href="students/{{$student->id}}/edit" class="btn btn-warning">EDIT</a>
          {!!Form::open(['action' => ['StudentsController@destroy', $student->id], 'class' => 'btn', 'method' => 'POST', 'onsubmit' => 'return confirm("Sunteti sigur ca vreti sa stergeti acest elev din baza de date?")'])!!}
              {{Form::hidden('_method', 'DELETE')}}
              {{Form::bsSubmit('Sterge elev', ['class' => 'btn btn-danger'])}}
          {!!Form::close()!!}
      </td>
    </tr>

    @endforeach

@endif



</table>

@endsection
