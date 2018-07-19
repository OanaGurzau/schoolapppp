@extends('layouts.app')

@section('content')
<h1>Lista Claselor</h1>
<td><a href="classes/create" class="btn btn-info btn-add-new">Adaugare clasa</a>


<table class="table table-bordered">
  <tr>
    <th>Clasa</th>
    <th>An scolar curent</th>
    <th>Profil</th>

    <th>Data incepere</th>
    <th>Data sfarsit an scolar</th>
    <th>Actiuni</th>

</tr>

@if(count($classes) > 0)

    @foreach($classes as $class)
    <tr>
      <td>{{$class->name}}</td></a>
      <td>{{$class->grade}}</td></a>
      <td>{{$class->profil}}</td></a>
      <td>{{$class->start_date}}</td></a>
      <td>{{$class->end_date}}</td></a>

          <td>{!!Form::open(['action' => ['ClassesController@destroy', $class->id], 'class' => 'btn', 'method' => 'POST', 'onsubmit' => 'return confirm("Sunteti sigur ca vreti sa stergeti aceasta clasa?")'])!!}
              {{Form::hidden('_method', 'DELETE')}}
              {{Form::bsSubmit('Sterge clasa', ['class' => 'btn btn-danger'])}}
          {!!Form::close()!!}
      </td>
    </tr>

    @endforeach

@endif



</table>

@endsection
