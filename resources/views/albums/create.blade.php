@extends('layouts.app')

@section('content')
    <h3>Create Album</h3>
    {!! Form::open(['action' => 'AlbumsController@store', 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}

        <label >
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['placeholder' => 'Album Name'])}}
        </label>
        <label>
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['placeholder' => 'Enter Description'])}}
        </label>
        <div>
        {{Form::file('cover_image')}}
        </div>
        <div>
            {{Form::submit('Submit')}}
        </div>
    {!! Form::close() !!}
@endsection