<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Document</title>
    <style>
        .pic {
            align-items: center;
            width: 10px;
        }
    </style>
</head>

<body>
    <h2>index</h2>
    <p>
        <a href="{{ route('cars.create') }}">Create</a>
    </p>
    <p>
        <a href="{{ route('cars.update') }}">Update</a>
    </p>
    <p>
        <a href="{{ route('cars.del') }}">Del</a>
    </p>
    <div class="pic">
        <img src="{{ asset('assets/images/22.jpg') }}" alt="">
    </div>

</body>

</html>
