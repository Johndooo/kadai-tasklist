@extends('layouts.app')

@section('content')

    <h1>タスクの新規作成</h1>

    {!! Form::model(task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('タスクを登録') !!}

    {!! Form::close() !!}

@endsection