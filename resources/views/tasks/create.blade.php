@extends('layouts.app')

@section('content')

    <h1>投稿</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('title', 'ステイタス:') !!}
        {!! Form::text('title') !!}


        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection