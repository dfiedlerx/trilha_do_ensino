<?php
use App\Models\Background;
?>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body class="app">

    @include('admin.partials.spinner')
    @include('admin.login.sendBackground')

    <div class="peers ai-s fxw-nw h-100vh">
      <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style='background-image: url("{{Background::getRandomBackgroundUrl()}}")'>
        <div class="bg-envie-o-seu-tambem" id="envieSeuBg">
            Envie seu cantinho de estudos também!
        </div>
      </div>
      <div class="col-12 col-xs-12 col-md-4 peer h-100 bgc-white scrollable pos-r" style='min-width: 320px;'>
        @yield('content')
      </div>
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>
    @yield('js')

</body>
</html>
