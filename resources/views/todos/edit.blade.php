<!DOCTYPE html>
<html>
<head><title>Edit Todo</title></head>
<body>
    <h1>Edit Todo</h1>
    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf @method('PUT')
        <input type="text" name="title" value="{{ $todo->title }}">
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('todos.index') }}">Back</a>
</body>
</html>
