<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
    <title>Shopping Cart</title>
</head>

<body>
    <div class="main-wrapper">
        <div class="header"><h1>Vue Shopping Cart</h1></div>
        <div id="vue"></div>
    </div>

    <script src="{{mix('/js/app.js') }}"></script>
</body>
</html>
