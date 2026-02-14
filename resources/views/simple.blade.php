<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        .message {
            color: #666;
            font-size: 18px;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            padding: 10px;
            background-color: #f9f9f9;
            margin-bottom: 5px;
            border-left: 4px solid #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
        
        <div class="message">
            {{ $message }}
        </div>
        
        <h3>Items:</h3>
        <ul>
            @foreach($items as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
        
        <p>Today: {{ date('d.m.Y') }}</p>
    </div>
</body>
</html>