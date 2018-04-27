<!-- INICIO SESSÃO DE NAVBAR E IMAGEM TOPO -->
<nav class="navbar navbar-expand-md fixed-top text-center menu" style="position: absolute !important;">
    <a class="navbar-brand" href="#">
        <img class="img-fluid logo-topo d-block d-sm-none" src="{{asset('assets/img/logo-mobile.png') }}" alt="">
        <img class="img-fluid logo-topo d-none d-sm-block logo" src="{{asset('assets/img/logo-branca.png') }}" alt="">
    </a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">INÍCIO <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">QUEM SOMOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">HISTÓRIA E ARTE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('galeria') }}">GALERIA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTATO</a>
            </li>
        </ul>
        {{-- <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> --}}
    </div>
</nav>
