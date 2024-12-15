<!DOCTYPE html>
<html lang="en">

<head>
   <title>{{ config('app.name', 'Laravel') }}</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="icon" type="image/x-icon" href="{{asset('assets/img/logo.png')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-5.3.3-dist/css/bootstrap.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/css/css.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('lib/fontawesome-free-6.7.1-web/css/all.css')}}">
   <style>
      .toast-container {
         position: fixed;
         top: 1rem;
         right: 1rem;
         z-index: 1050;
      }
   </style>
   @yield('css')
</head>

<body>

   @include('template.navbar')

   <main class="container-fluid my-3">
      @yield('main')
   </main>

   @include('template.footer')

   @include('template.notif')

   <script src="{{asset('lib/bootstrap-5.3.3-dist/js/bootstrap.bundle.js')}}"></script>
   <script src="{{asset('assets/js/js.js')}}"></script>

   @yield('js')
</body>

</html>