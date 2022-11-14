<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Test</title>

       {{-- Laravel Vite - CSS File --}}
       {{-- {{ module_vite('build-test', 'Resources/assets/sass/app.scss') }} --}}
       @vite('Resources/assets/css/app.css')

    </head>
    <body>
        @yield('content')

        {{-- Laravel Vite - JS File --}}
        @vite('Resources/assets/js/app.js')

        {{-- {{ module_vite('build-test', 'Resources/assets/js/app.js') }} --}}
    </body>
</html>
