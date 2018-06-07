<ul class="media-list">
@foreach ($tasklist as $task)
<?php $user = $task->user; ?>
<li class="media">
<div class="media-left">
<img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
</div>
<div class="media-body">
<div>
{!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $task->c
</div>
<div>
<p>{!! nl2br(e($task->content)) !!}</p>
</div>
</div>
<div>
     @if (Auth::user()->id == $task->user_id)
                    {!! Form::open(['route' => ['tasklist.destroy', $task->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
    </div>
</div>

</li>
@endforeach
</ul>
{!! $tasklist->render() !!}