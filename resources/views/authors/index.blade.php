<a href="/authors/create">Create New Author</a>

<table class="table">
    <thead>
        <tr>
            <th>Author Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($authors as $author)
        <tr>
            {{-- <td><a href="/authors/{{$author->id}}/edit">{{ $author->name }}</a></td> --}}
            <td><a href="{{ route('authors.edit', $author->id) }}">{{ $author->name }}</a></td>
        </tr>
        @endforeach
    </tbody>
</table>