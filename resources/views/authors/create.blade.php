<form action="/authors" method="POST">
    <label for="">Author Name</label>
    <input type="text" name="name">

    <button type="submit">Save</button>

    {{-- {{ Form::text('name') }} --}}
</form>

{{-- {{ Form::open('authors.store') }} --}}

{{-- {{ Form::close() }} --}}