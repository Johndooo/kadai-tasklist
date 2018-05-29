<table class="table-striped table-bordered">
@foreach ($tasks as $task)
	<?php $user = $task->user; ?>
	<tr>
		<td class="col-xs-1"><img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 30) }}" alt=""></td>
		<td class="col-xs-1">{!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} </td>
		<td class="col-xs-1">{{ $task->id }}</td>
		<td class="col-xs-2">{{ $task->title }}</td>
		<td class="col-xs-2">{{ $task->content }}</td>
		<td class="col-xs-2">{{ $task->status }}</td>
		<td class="col-xs-1">
			@if (Auth::user()->id == $task->user_id)
			{!! link_to_route('tasks.edit', 'EDIT', ['id' => $task->id], ['class' => 'btn btn-warning btn-xs']) !!}
			@endif
		</td>
		<td class="col-xs-1">
			@if (Auth::user()->id == $task->user_id)
				{!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
				{!! Form::submit('DELETE', ['class' => 'btn btn-danger btn-xs']) !!}
				{!! Form::close() !!}
			@endif
		</td>
		<td class="col-xs-1"><small class="text-muted">{{ $task->created_at }}</small></td>
	</tr>
@endforeach
</table>
{!! $tasks->render() !!}
