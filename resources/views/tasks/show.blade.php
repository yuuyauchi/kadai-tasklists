@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>ステータス</th>
            <th>タスク内容</th>
        </tr>
        <tr>
            <td>{{ $task->status }}</td>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    @if (Auth::id() == $task->user_id)
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
    {{-- タスク削除フォーム --}}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    @endif
@endsection