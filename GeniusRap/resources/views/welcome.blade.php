<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Genius Rap</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Scrips -->
        <script src="{{ 'js/app.js' }}" defer></script>
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    </head>
    <body>
        <div id="app">
            <index></index>
        </div>
    </body>
</html>
