@extends('layouts.app')

@section('content')

    <h1>タスクの新規作成</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('タスク登録') !!}

    {!! Form::close() !!}

@endsection