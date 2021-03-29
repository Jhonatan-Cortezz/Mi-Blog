<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- inlcude tailwind cdn --}}
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>@yield('title')</title>
  <style>
    .active{
      color: aliceblue;
      font-weight: bold;
      background-color: darkgray;
    }
  </style>
</head>
<body>
  @include('layouts.partials.header')
  <!-- el contenido del h1   -->
  @yield('content')
</body>
</html>