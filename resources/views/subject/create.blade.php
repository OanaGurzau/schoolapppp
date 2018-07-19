@extends('layouts.app')

@section('content')

    <h1>Adauga o materie noua</h1>

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <div class="panel-body">
        {!!Form::open(['action' => 'SubjectsController@store', 'method' => 'POST'])!!}
            {{Form::bsText('nume')}}
            {{Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection
