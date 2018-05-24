<!-- INICIO SESSÃO DE NAVBAR E IMAGEM TOPO -->
<nav class="navbar navbar-expand-md" id="menu">
    <a class="navbar-brand" href="{{route('home')}}" style="float: left; z-index:1200">
        {{-- <img class="img-fluid logo-topo d-block d-sm-none" src="{{asset('assets/img/logo-mobile.png') }}" alt=""> --}}
        {{-- <img class="img-fluid logo-topo d-none d-sm-block logo" src="{{asset('assets/img/logo-branca.png') }}" alt=""> --}}
        <img class="img-fluid logo-topo" src="{{asset('assets/img/logo-mobile.png') }}" alt="">
    </a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse2" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="right: 18px; position: absolute; top: 29px;">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarCollapse2" style="transition: linear 0.5s;">
        <ul class="navbar-nav ml-auto ul100">
            <li class="nav-item active">
                <a class="nav-link grey" href="#home">INÍCIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link grey" href="#about">QUEM SOMOS</a>
            </li>
          {{--   <li class="nav-item">
                <a class="nav-link gray" href="#historia">HISTÓRIA E ARTE</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link grey" href="{{ route('galeria') }}">GALERIA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link grey" href="#contato">CONTATO</a>
            </li>
        </ul>
    </div>
</nav>
