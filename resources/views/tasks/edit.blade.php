@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>
    
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    <div class="row">
        <div class="col-xs-6">
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    <div class="form-group">
        {!! Form::label('status', 'ステイタス:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
    </div>

        {!! Form::submit('更新' ['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}
  </div>
</div>

@endsection