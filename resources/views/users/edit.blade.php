@extends('layouts.app')

@section('content')

<div class="ctnr">
    <h1>id: {{ $task->id }} のタスク編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

    <table class="table-striped table-bordered col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
        <tr>
            <td>ID</td>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <td>{!! Form::label('title', 'Title') !!}</td>
            <td>{!! Form::text('title') !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('content', 'Task') !!}</td>
            <td>{!! Form::text('content') !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('status', 'Status:') !!}</td>
            <td>{!! Form::text('status') !!}</td>
        </tr>
    </table>

    <div class="clearfix"></div>

        {!! Form::submit('タスクを更新', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}
</div>

@endsection