<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://css.gg/css" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="./css/app.css" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>To Do List</title>
</head>

<body class="">
<div class="min-h-screen w-auto justify-center items-center flex bg-slate-900 text-orange-600">
    @yield('content')
</div>
</body>
</html>
