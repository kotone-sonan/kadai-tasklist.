@extends('layouts.app')

@section('content')

    <table class="table table-bordered">
        <tr>

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>

    <td>{{ $task->status }}</td>
    <td>{{ $task->content }}</td>

    {!! link_to_route('tasks.edit', 'このタスク編集', ['id' => $task->id]) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete'], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection