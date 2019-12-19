<!DOCTYPE html>
<html lang="en">
<head id="app">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/assets/css/vendor/uikit.min.css">
  <link rel="stylesheet" href="/assets/css/vendor/print.css">
  <link rel="stylesheet" href="/assets/css/xstyle.css">
  <title>@yield('title')</title>
</head>
<body>
  
  @yield('content')

<script src="/assets/js/vendor/jquery.js"></script>
<script src="/assets/js/vendor/uikit.min.js"></script>
<script src="/assets/js/vendor/uikit-icons.min.js"></script>
{{-- <script src="/assets/js/vendor/fullpage.min.js"></script> --}}
{{-- <script src="assets/js/vendor/vue.js"></script> --}}
<script src="/assets/js/vendor/gsap.min.js"></script>

<script src="/assets/js/vendor/print.js"></script>
<script src="/assets/js/app.js"></script>
</body>
</html>

