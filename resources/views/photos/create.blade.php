@extends('layouts.app')

@section('content')
    <h3>Upload Photo</h3>
    {!! Form::open(['action' => 'PhotosController@store', 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
        <label >
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['placeholder' => 'Photo Title'])}}
        </label>
        <label>
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['placeholder' => 'Photo Description'])}}
        </label>
        {{Form::hidden('album_id', $album_id)}}
        <div>
        {{Form::file('photo')}}
        </div>
        <div>
            {{Form::submit('Submit')}}
        </div>
    {!! Form::close() !!}
@endsection