<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <title>My Layout</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
    <h1>Default Layout</h1>
    @yield('content')

    <script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>
