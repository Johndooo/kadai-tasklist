@extends('layouts.app')

@section('content')

<div class="ctnr">
    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
    <table class="table-striped table-bordered col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                 <tr>
                    <td class="col-md-1">ID</td>
                    <td class="col-md-4">Title</td>
                    <td class="col-md-4">Task</td>
                    <td class="col-md-3">Status</td>
                </tr>
            @foreach ($tasks as $task)
                 <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} </td>
                    <td>{{ $task->title }} </td>
                    <td>{{ $task->content }} </td>
                    <td style="color:#f00;">{{ $task->status }}</td>
                </tr>
            @endforeach
    </table>
    @endif

    <div class="clearfix"></div>

{!! link_to_route('tasks.create', '新規タスクの投稿', null, ['class' => 'btn btn-primary']) !!}
</div>

@endsection