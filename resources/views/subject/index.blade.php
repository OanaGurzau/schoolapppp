@extends('layouts.app')

@section('content')
<h1>Lista Tuturor Materiilor Existente</h1>

<td><a href="subjects/create" class="btn btn-info btn-add-new">Adaugare materie noua</a>


<table class="table table-bordered">
  <tr>
    <th>Materie</th>
    <th>Actiuni</th>
</tr>

@if(count($subjects) > 0)

    @foreach($subjects as $subject)
    <tr>
      <td>{{$subject->name}}</td></a>
      <td><a href="subjects/{{$subject->id}}/edit" class="btn btn-warning">EDIT</a>
          {!!Form::open(['action' => ['SubjectsController@destroy', $subject->id], 'class' => 'btn', 'method' => 'POST', 'onsubmit' => 'return confirm("Sunteti sigur ca vreti sa stergeti aceasta materie?")'])!!}
              {{Form::hidden('_method', 'DELETE')}}
              {{Form::bsSubmit('Sterge materie', ['class' => 'btn btn-danger'])}}
          {!!Form::close()!!}
      </td>
    </tr>

    @endforeach

@endif



</table>

@endsection
