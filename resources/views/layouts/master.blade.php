<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

   @include('partials.styles')

    <title>Cse Portal</title>
  </head>

  <body>
     @include('partials.nav')
     <div class="wrapper">
     @include('partials.sidebar')
     @yield('content')

     </div>
    {{--Scripts--}}
    @include('partials.scripts')

    @include('partials.footer')
  </body>

</html>