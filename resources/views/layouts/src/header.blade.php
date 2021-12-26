<header>
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-2 text-center">
                @yield('Ronda')
            </div>
            <div class="col-2 text-center">
                @yield('Nombre')
            </div>
            <div class="col-4 text-center">
                <a href="/"><img src="{{asset('assets/img/logo.svg')}}" alt="" class="img-fluid" width="95" height="30"></a>
            </div>
            <div class="col-2 text-center">
                @yield('Score')
            </div>
            <div class="col-2 text-center">
                @yield('Salir')
            </div>

        </div>
    </div>
    <!-- /container -->
</header>
