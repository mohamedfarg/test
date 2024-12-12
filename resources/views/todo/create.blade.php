<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO | Create</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #4a90e2;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 300px;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 10px;
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

        a {
            margin-top: 20px;
            text-decoration: none;
            color: #4a90e2;
            font-size: 16px;
            transition: color 0.3s;
        }

        a:hover {
            color: #357abd;
        }

        .alert {
            margin-bottom: 10px;
            padding: 10px;
            color: white;
            background-color: #ff5f5f;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Create your TODO</h1>
    <h3>
        <x-alert />
    </h3>
    <form action="/upload" method="post">
        @csrf
        <input type="text" name="title" placeholder="Enter your TODO title" required />
        <input type="submit" value="Create" />
    </form>
    <a href="/index">Back</a>
</body>
</html>

