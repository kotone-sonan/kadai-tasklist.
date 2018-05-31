@extends('layouts.app')

@section('content')

    <h1>お仕事</h1>

    @if (count($tasks) > 0)
    
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステイタス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
        <ul>
            @foreach ($tasks as $task)
              <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->status }} {{ $task->content }} </td>
            @endforeach
         </ul>
    @endif
           
      {!! link_to_route('tasks.create', '新規タスクの投稿', null, ['class' => 'btn btn-primary']) !!}

@endsection