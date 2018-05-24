<!-- INICIO SESSÃO DE NAVBAR E IMAGEM TOPO -->
<nav class="navbar navbar-expand-md fixed-top text-center menu" id="home" style="position: absolute !important;">
    <a class="navbar-brand" href="{{route('home')}}">
        <img class="img-fluid logo-topo d-block d-sm-none" src="{{asset('assets/img/logo1.png') }}" alt="">
        <img class="img-fluid logo-topo d-none d-sm-block logo" src="{{asset('assets/img/logo.png') }}" alt="">
    </a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link gray" href="#home">INÍCIO <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link gray" href="{{ route('galeria') }}">GALERIA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link gray" href="#contato">CONTATO</a>
            </li>
        </ul>
    </div>
</nav>