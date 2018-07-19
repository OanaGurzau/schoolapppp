@extends('layouts.app')

@section('content')

    <h1>Adauga un elev nou</h1>

    @if(Session::has('success'))
     <div class="alert alert-success">
       {{ Session::get('success') }}
     </div>
  @endif


  <div class="panel-body">
    {!!Form::open(['action' => 'StudentsController@store', 'method' => 'POST'])!!}
      {{Form::bsText('nume')}}
      {{Form::bsText('initiala')}}
      {{Form::bsText('prenume')}}
      {{Form::select('class_id', $classesView, null, ['class' => 'form-control', 'id' => 'id', 'placeholder' => 'Alege clasa'])}}
      {{Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

  </div>

@endsection
