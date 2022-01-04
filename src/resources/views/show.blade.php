<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            width: 80%;
            margin: auto;
        }

        .header {
            background-color: grey;
            padding: 100px;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        h2 {
            font-size: 35px;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h2>{{ $name }}</h2>
    </div>
</div>
</body>
</html>
