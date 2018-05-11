@extends('layouts.app')

@section('content')

<div class="ctnr">
    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>

    <table class="table-striped table-bordered col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
        <tr>
            <td>ID</td>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <td>Title</td>
            <td>{{ $task->title }}</td>
        </tr>
        <tr>
            <td>Task</td>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>{{ $task->status }}</td>
        </tr>
    </table>

    <div class="clearfix"></div>


    <div style="margin:10px 0;">
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-warning']) !!}
    </div>

    <div style="margin:10px 0;">
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('！削除！', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    </div>
</div>

@endsection