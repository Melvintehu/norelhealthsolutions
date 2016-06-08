<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') || HMV Actis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @include('partials.styling')
</head>
<body>
@include('partials.sidebar')
<!--Main Content Start -->
<section class="content">
    @include('partials.navigation')
    <div class="container">
        @yield('content')
    </div>



</section>
<!-- Main Content Ends -->
@include('partials.scripts')

@yield('scripts')	

</body>
</html>
