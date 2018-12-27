<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal Primakara Index</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .background > img {
            display: block;
            height: auto;
            margin: auto;
            width: 100%;
        }

        .background.mac > img {
            width: 1366px;
        }
    </style>
</head>
<body>
    @if ($mac)
    <div class="background mac">
    @else
    <div class="background">
    @endif
        <img src="{{ asset($imageName) }}" alt="" srcset="">
    </div>
</body>
</html>
