

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel + Blade + Bootstrap</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center text-primary">¡Bienvenido a tu proyecto Laravel!</h1>
        <p class="lead text-center">Este proyecto usa Laravel, Blade y Bootstrap 5</p>

        <div class="text-center">
            <a href="{{ route('home') }}" class="btn btn-success">Ir al Home</a>
        </div>
    </div>

</body>
</html>
