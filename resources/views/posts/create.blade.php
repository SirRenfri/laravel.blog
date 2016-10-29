@extends('app')

@section('content')
    <h1>Написать новую статью:</h1>

    <hr/>

    {!! Form::open(['url' => 'posts']) !!}
        @include ('posts.form', ['submitButtonText' => 'Create article'])
    {!! Form::close() !!}

    @include('errors.list')
@stop