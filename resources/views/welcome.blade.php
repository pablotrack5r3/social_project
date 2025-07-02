<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel + Blade + Bootstrap</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">

    @include('components.navbar')
    @include('components.mision-vision')
    @include('components.cta-botones')
    @include('components.barra-impacto')
    @include('components.footer')

</body>
</html>

