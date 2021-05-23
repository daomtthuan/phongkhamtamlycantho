<!doctype html>
<html lang="en">

<head lang="vi">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ mix('styles/app.css') }}">
  <title>
    @section('title')
    Phòng khám Tâm lý Cần Thơ
    @show
  </title>
  @yield('style')
</head>

<body id="app">
  @yield('template')

  <script src="{{ mix('scripts/app.js') }}"></script>
  @yield('script')
</body>

</html>
