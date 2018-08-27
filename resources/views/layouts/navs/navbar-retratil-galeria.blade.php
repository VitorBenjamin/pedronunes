<!-- INICIO SESSÃO DE NAVBAR E IMAGEM TOPO -->
<nav class="navbar navbar-expand-md fixed-top text-center menu3">
    <a class="navbar-brand" href="{{route('home')}}" style="z-index:1200">
        <img class="img-fluid logo-topo d-block d-sm-none" src="{{asset('assets/img/logo-mobile.png') }}" alt="">
        <img class="img-fluid logo-topo d-none d-sm-block logo" src="{{asset('assets/img/logo-branca.png') }}" height="70">
    </a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse2" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarCollapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#home">INÍCIO <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">QUEM SOMOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#historia">HISTÓRIA E ARTE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('galeria') }}">GALERIA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contato">CONTATO</a>
            </li>
        </ul>
    </div>
</nav>
