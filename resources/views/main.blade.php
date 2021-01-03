<!-- EZ EGY LAYOUT FILE -->


<!DOCTYPE HTML>
<html lang="en">

<head>
    @include('partials/_head')
   @yield('styles')
</head>


<body>
@include('partials/_nav')
    
    <!-- <div class="slider"></div> -->

    <section class="blog-area section">
        <div class="container">

            @include('partials/_messages')

            @yield('content')


        </div><!-- container -->
    </section><!-- section -->


   


    <!-- SCIPTS -->

    @include('partials/_scripts')

    
</body>

</html>
