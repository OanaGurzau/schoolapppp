@extends('layouts.app')

@section('content')

    <h1>Adauga o clasa</h1>

    @if(Session::has('success'))
     <div class="alert alert-success">
       {{ Session::get('success') }}
     </div>
  @endif


  <div class="panel-body">
    {!!Form::open(['action' => 'ClassesController@store', 'method' => 'POST'])!!}
      {{Form::select('clasa', array('A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F', 'G' => 'G'))}}
      {{Form::label('An scolar curent', 'An scolar curent: ')}}
      {{Form::select('an', array('5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12'))}}
      {{Form::bsText('profil')}}
      {{Form::label('Data Incepere an scolar', 'Data Incepere an scolar: ')}}
      {{Form::date('data_start', \Carbon\Carbon::now())}}
      {{Form::label('Data Terminare an scolar', 'Data Terminare an scolar: ')}}
      {{Form::date('data_final', \Carbon\Carbon::now())}}

      {{Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

  </div>

@endsection
