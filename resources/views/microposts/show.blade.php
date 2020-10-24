@extends('layouts.app')

@section('content')

    <h1>id = {{ $micropost->id }} のタスク詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>ステータス</th>
            <th>タスク内容</th>
        </tr>
        <tr>
            
            <td>{{ $micropost->status }}</td>
            <td>{{ $micropost->content }}</td>
        </tr>
    </table>
    {{-- タスク削除フォーム --}}
    {!! Form::model($micropost, ['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection