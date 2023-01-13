<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <meta http-equiv="X-UA-Compatible" content="ie=edge" />
   <meta name="description" content="Babette">
   <link href="/images/favicon/favicon.png" rel="icon">
   <title>Sarayi</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400,500,700%7cShadows+Into+Light&display=swap">
   <link rel="stylesheet" href="{{ asset('css/libraries.css') }}" />
   <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>

   <div class="wrapper">
      <x-header />

      {{ $slot }}

      <x-upbutton />

      <x-footaer />
   </div>

   <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
   <script src="{{ asset('js/plugins.js') }}"></script>
   <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
