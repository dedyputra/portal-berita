<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="{{ asset('assets/css/output.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
  <div class="w-full">
    <!-- Nav -->
  @include("includes.navbar")
    <!-- End Nav -->

    <div class="flex flex-col lg:flex-row gap-10 lg:gap-0 lg:justify-between lg:items-start px-4 lg:px-14 py-10">
      <!-- Content -->
      <div class="w-full lg:w-8/12">
        @yield("content")
      </div>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
</body>

</html>