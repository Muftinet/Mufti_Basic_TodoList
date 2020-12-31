@extends('layout.app')

@section('content')
    <h1>Create Todo</h1>
    {!! Form::open(['url' => '/todo', 'class' => 'form-horizontal', 'role' => 'form']) !!}
    {{ Form::bsText('text') }}
    {{ Form::bsTextArea('body') }}
    {!! Form::close() !!}


@endsection
