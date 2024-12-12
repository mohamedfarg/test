<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO | Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            margin-top: 20px;
            color: #4a90e2;
        }

        h3 a {
            text-decoration: none;
            color: white;
            background-color: #4a90e2;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        h3 a:hover {
            background-color: #357abd;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
            width: 80%;
            max-width: 600px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
            border-bottom: 1px solid #ddd;
        }

        li:last-child {
            border-bottom: none;
        }

        .todo-title {
            flex: 1;
            margin-right: 15px;
        }

        .todo-title.completed {
            text-decoration: line-through;
            color: #aaa;
        }

        .actions a {
            text-decoration: none;
            margin-left: 10px;
            font-size: 14px;
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        .actions a.edit {
            background-color: #f5a623;
        }

        .actions a.edit:hover {
            background-color: #d4881a;
        }

        .actions a.completed {
            background-color: #7ed321;
        }

        .actions a.completed:hover {
            background-color: #5ea817;
        }

        .actions a.delete {
            background-color: #d0021b;
        }

        .actions a.delete:hover {
            background-color: #a00116;
        }

        .icon {
            margin-right: 8px;
        }

        form {
            margin: 20px 0;
            display: flex;
            gap: 10px;
            justify-content: center;
            width: 80%;
            max-width: 600px;
        }

        input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #4a90e2;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #357abd;
        }
    </style>
</head>
<body>
    <h1>All your TODOs</h1>
    <h3>
        <x-alert />
    </h3>

    <!-- Create TODO Form -->
    <form action="/upload" method="post">
        @csrf
        <input type="text" name="title" placeholder="Enter a new TODO" required />
        <input type="submit" value="Add TODO" />
    </form>

    <!-- List of TODOs -->
    <ul>
        @foreach($todos as $todo)
        <li>
            <span class="todo-title {{ $todo->completed ? 'completed' : '' }}">{{$todo->title}}</span>
            <div class="actions">
                <a class="edit" href="{{asset('/' . $todo->id . '/edit')}}">
                    <span class="icon">&#9998;</span>Edit
                </a>
                <a class="completed" href="{{asset('/' . $todo->id . '/completed')}}">
                    <span class="icon">&#10004;</span>Complete
                </a>
                <a class="delete" href="{{asset('/' . $todo->id . '/delete')}}">
                    <span class="icon">&#128465;</span>Delete
                </a>
            </div>
        </li>
        @endforeach
    </ul>
</body>
</html>
