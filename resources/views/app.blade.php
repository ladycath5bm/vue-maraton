<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ToDo App</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link rel="shortcut icon" href="icon.svg" type="svg/x-icon">
    </head>
    <body>
        <div id="app"/>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
