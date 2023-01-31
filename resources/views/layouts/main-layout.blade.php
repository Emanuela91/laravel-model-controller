<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controller</title>
</head>
{{-- qui vengono incluse tutte le pagine che comporranno l'html --}}
<body>
    {{-- header in components --}}
    @include('components.header')
    {{-- contenuto preso da home.blade.php --}}
    @yield('content')
    {{-- footer in components --}}
    @include('components.footer')
</body>
</html>