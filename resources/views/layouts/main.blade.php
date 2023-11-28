<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            background-image: url('/resources/views/layouts/pic.jpg'); 
            background-size: cover;
            /* background-position: center; */
            /* background-repeat: no-repeat; */
        }

        .bg-secondary {
            background-color: #ff0000; 
            color: #ffffff; 
    </style>
</head>
<body>
    <div class="bg-secondary">
        <div class="container py-3">
            <div class="h1 text-white">Task Manager</div>
        </div>
    </div>
    @yield('main-section')
</body>
</html>
