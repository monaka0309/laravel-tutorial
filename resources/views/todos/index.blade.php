<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Todo List</h1>
    <a href="{{ route('todos.create') }}">Create New</a>
    <ul>
        @foreach($todos as $todo)
            <li>
                {{$todo->title}}
                <a href="{{route('todos.edit', $todo->id)}}">Edit</a>
                <form action="{{route('todos.destroy', $todo->id)}}" method="POST" style="display:inline";>
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>