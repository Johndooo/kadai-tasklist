@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row ctnr">
            <h1>{!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} のタスク一覧</h1>
            <aside class="col-xs-3">
                    <div class="form-group">
                    {!! Form::open(['route' => 'tasks.store']) !!}

                        <table class="table-striped table-bordered" style="width:100%;">
                            <tr>
                                <td>{!! Form::label('title', 'Title') !!}</td>
                                <td>{!! Form::text('title') !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('content', 'Task') !!}</td>
                                <td>{!! Form::text('content') !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('status', 'Status') !!}</td>
                                <td>{!! Form::text('status') !!}</td>
                            </tr>
                        </table>
                    
                        <div class="clearfix"></div>

                        {!! Form::submit('タスク登録', ['class' => 'btn btn-primary btn-block']) !!}
                    </div>
                {!! Form::close() !!}
            </aside>
            <div class="col-xs-9">
                @if (count($tasks) > 0)
                    @include('tasks.tasks', ['tasks' => $tasks])
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Task List</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
