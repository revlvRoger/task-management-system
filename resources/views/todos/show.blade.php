<h1>{{ $todo->title }}</h1>
<h4>{{ $todo->status }}</h4>
<a href="{{ route('todos.edit', $todo->id) }}">Click to edit</a>

<p>{{ $todo->author->name }}</p>

<h2>History</h2>
<table>
    <thead>
        <tr>
            <th>Status</th>
            <th>Timestamp</th>
        </tr>
    </thead>
    <tbody>
        @foreach($history as $entry)
        <tr>
            <td>{{ $entry->status }}</td>
            <td>{{ $entry->created_at->diffForHumans() }}</td>
        </tr>
        @endforeach
    </tbody>
</table>