<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Grozby.com')</title>
    @include('frontend.partials.styles')
  </head>
  <body>

    <div class="wrapper">
      <!--Naviagation-->
      @include('frontend.partials.nav')
 <!--End Navigation-->

 @yield('content')




@include('frontend.partials.footer')




    @include('frontend.partials.scripts')
  </div>
  </body>
</html>
