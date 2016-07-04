<form action="{{ route('todos.update', $todo->id) }}" method="POST">
    <input type="hidden" name="_method" value="PUT">

    <div>
        <label for="">Title</label>
        <input type="text" name="title" value="{{ $todo->title }}">
    </div>

    <div>
        <label for="">Status</label>
        <select name="status" id="">
            <option value="ONHOLD">ON-HOLD</option>
            <option value="COMPLETED">COMPLETED</option>
            <option value="CANCELED">CANCELED</option>
        </select>
    </div>

    <div>
        <label for="">Author</label>
        <select name="author_id" id="">
            @foreach($authors as $id => $author)
            <option value="{{ $id }}"
                @if($todo->author_id == $id)
                selected
                @endif>{{ $author }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit">Submit</button>
</form>