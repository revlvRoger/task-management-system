<a href="/todos/create">Create new Todo</a>

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Author</th>
            <th>Created</th>
        </tr>
    </thead>
    <tbody>
        @foreach($todos as $todo)
        <tr>
            <td><a href="{{ route('todos.show', $todo->id) }}">{{ $todo->title }}</a></td>
            <td>{{$todo->status }}</td>
            <td>{{ $todo->author->name }}</td>
            <td>{{ $todo->created_at->diffForHumans() }}</td>
        </tr>
        @endforeach
    </tbody>
</table>