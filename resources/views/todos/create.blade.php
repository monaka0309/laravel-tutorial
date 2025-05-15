<!DOCTYPE html>
<html>
<head><title>Create Todo</title></head>
<body>
    <h1>Create Todo</h1>
    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Enter title">
        <button type="submit">Save</button>
    </form>
    <a href="{{ route('todos.index') }}">Back</a>
</body>
</html>
