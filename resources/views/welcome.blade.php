<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" value="{{csrf_token()}}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="{{asset("/css/app.css")}}" rel="stylesheet" type="text/css">

      
    </head>
    <body class="bg-blue-600">
        <div id="app">
           <example-component></example-component>
        </div>
        <script src="{{asset("/js/app.js")}}"></script>
    </body>
</html>
