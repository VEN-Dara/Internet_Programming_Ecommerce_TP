<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="height: 100vh; display:flex; align-items:center; justify-content:center">
@props(['img_path','name', 'n_of_products','bg_color'])

<div class="container d-flex flex-column  align-items-center justify-content-center ">
    <h1>Welcome to Ecommerce</h1>
    <h2>Powered by Laravel v.10<br>Version 0.1</h2>
    <img src="{{ asset('assets/apple.png') }}" alt="Example Image">
    <div class="image">
        <img src="{{ asset($img_path) }}" alt="{{ $img_path }}" />
    </div>
</div>
</body>
</html>
