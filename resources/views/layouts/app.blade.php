<!DOCTYPE html>
<html lang="es">


<!-- //Head -->
@include('layouts.src.head')
<body class="bg_color_gray">

<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->
<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /loader_form -->

<div class="min-vh-100 d-flex flex-column">

    <!-- header -->
@include('layouts.src.header')
    <!-- /header -->

@yield('Contenido')


    <!-- /Container -->

    <!-- footer-->
@include('layouts.src.footer')
    <!-- /Footer -->

</div>
<!-- /flex-column -->





<!--scripts-->
@include('layouts.src.scripts')
</body>
</html>
