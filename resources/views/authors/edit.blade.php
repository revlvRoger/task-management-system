<form action="{{ route('authors.update', $author->id) }}" method="POST">
    <label for="">Author Name</label>
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="name" value="{{$author->name}}">

    <button type="submit">Save</button>
</form>