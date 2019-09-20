<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="">
    <meta name="description" content="Descripción de la empresa">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/bootstrap.css">   
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    @include('partials.navbar')

    @yield('mainContent')

    @include('partials.footer')

    <script src="/js/nav.js"></script>
    <!-- jQuery -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/js/bootstrap.min.js"></script>
    @yield('js')
  </body>
</html>
