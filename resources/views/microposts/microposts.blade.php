@if (count($microposts) > 0)
<h1>タスク一覧</h1>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>ステータス</th>
            <th>タスク内容</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($microposts as $micropost)
        <tr>
            <td> {!! link_to_route('microposts.show', $micropost->id, ['micropost' => $micropost->id]) !!}
            </div></td>
            <td>{{ $micropost->status }}</td>
            <td>{{ $micropost->content }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    {{-- ページネーションのリンク --}}
    {{ $microposts->links() }}
@endif
{!! link_to_route('microposts.create', '新規タスクの投稿', [], ['class' => 'btn btn-primary']) !!}

