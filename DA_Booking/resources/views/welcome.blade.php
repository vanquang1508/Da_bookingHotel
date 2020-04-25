<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
       
    </head>
    <body>
        <h1>Hello World</h1>
        
        <p>@can('edit_form')
            <a href="#">Edit the Form</a>
        @endcan</p>

        <p>@can('manager_form')
            <a href="#">Edit the Manager Form</a>
        @endcan</p>
    </body>
</html>
