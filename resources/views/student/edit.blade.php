@extends('layouts.app')

@section('content')
  <h1>Editeaza Elev</h1>

  @if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif

  <div class="panel-body">
    {!!Form::open(['action' => ['StudentsController@update', $student->id], 'method' => 'POST'])!!}

      {{Form::bsText('nume', $student->surname)}}
      {{Form::bsText('initiala', $student->parent_i)}}
      {{Form::bsText('prenume', $student->name)}}
      {{Form::select('class_id', $classesView, null, ['class' => 'form-control', 'id' => 'id', 'placeholder' => 'Alege clasa'])}}
      {{Form::hidden('_method', 'PUT')}}
      {{Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

  </div>

@endsection
