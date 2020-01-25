<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Two | Factor | Authentication</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <style>
            body {
                width: 960px;
                margin: 45px auto;
                background-color: #6665ee;
            }
        </style>
    </head>
</head>
<body>
    <div class="container">
        <h2>Welcome</h2>
        {{Session::get('user')}}
    </div>
</body>
</html>