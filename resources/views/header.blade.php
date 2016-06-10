<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') || UMCG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @include('partials.styling')
</head>
<body>
<!--Main Content Start -->
<section class="content">
    <div class="container">
        @yield('content')
    </div>



</section>
<!-- Main Content Ends -->
@include('partials.scripts')

@yield('scripts')	

</body>
</html>