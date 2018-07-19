@extends('layouts.app')

@section('content')

    <h1>Adauga un profesor</h1>

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <div class="panel-body">
        {!!Form::open(['action' => 'UsersController@store', 'method' => 'POST'])!!}
            {{Form::bsText('nume')}}
            {{Form::bsText('prenume')}}
            {{Form::bsText('tel')}}
            {{Form::bsText('email')}}
            {{Form::label('Alege tip utilizator', 'Alege tip utilizator:')}}
            {{Form::select('type', array('Admin' => 'Admin', 'Secretar' => 'Secretar', 'Profesor' => 'Profesor', 'Elev' => 'Elev'))}}
            {{Form::select('subject_id', $subjectsView, null, ['class' => 'form-control'])}}
            {{Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection
