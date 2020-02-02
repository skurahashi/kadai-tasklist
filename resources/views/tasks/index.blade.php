@extends('layouts.app')

@section('content')

    @if(Auth::check())
        <h1>{{ Auth::user()->name }} のタスク一覧</h1>

        @if (count($tasks) > 0 )
            @include('tasks.tasks', ['tasks' => $tasks])
        @endif
        {!! link_to_route('tasks.create', '新規タスクの追加', [], ['class' => 'btn btn-primary']) !!}
        
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Tasklist へようこそ！</h1>
                {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection