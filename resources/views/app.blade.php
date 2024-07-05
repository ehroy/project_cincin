<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-white">
   @include('layout.navbar')
   @include('layout.hero')
   @include('layout.feature')
   @include('layout.about')
   @include('layout.testimoni')
   @include('layout.email')
   @include('layout.footer')
   
</body>
</html>