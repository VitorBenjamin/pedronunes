@extends('layouts.main')
@section('content')

<!-- INICIO SESSÃO DE NAVBAR E IMAGEM TOPO -->
<nav class="navbar navbar-expand-md fixed-top text-center menu" style="position: absolute !important;">
    <a class="navbar-brand" href="#">
        <img class="img-fluid logo-topo d-block d-sm-none" src="{{asset('assets/img/logo1.png') }}" alt="">
        <img class="img-fluid logo-topo d-none d-sm-block logo" src="{{asset('assets/img/logo.png') }}" alt="">
    </a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link gray" href="#">INÍCIO <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link gray" href="#">QUEM SOMOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link gray" href="#">HISTÓRIA E ARTE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link gray" href="{{ route('galeria') }}">GALERIA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link gray" href="#">CONTATO</a>
            </li>
        </ul>
    </div>
</nav>
@include('layouts.navbar-retratil')
<!-- FIM SESSÃO DE NAVBAR E IMAGEM TOPO -->
<div class="container-fluid">
    <div class="row justify-content-center" style="margin-top:200px">
        <div class="col-12 col-md-4">
          <h1 class="text-center texto-galeria">Galeria</h1>
          <p class="text-right subtexto-galeria">CONHEÇA TODAS AS PEÇAS</p>
      </div>
  </div>
</div>
<!-- INICIO DA SESSÃO DE GALERIA-->
@include('layouts.galeria-tab')
<!-- FIM DA SESSÃO DE GALERIA-->

<!-- INICIO SESSÃO DE ABOUT -->
<div class="container-fluid about">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-4">
            <div class="about-img">
                <img class="img-fluid" src="{{ asset('assets/img/_PEU0090.jpg') }}">
            </div>
        </div>
        <div class="col-sm-6 col-md-5 texto">
            <div class="about-texto">
                Mussum Ipsum, cacilds vidis litro abertis. Pra lá , depois divoltis porris, paradis. Manduma pindureta quium dia nois paga. Delegadis gente finis, bibendum egestas augue arcu ut est. Paisis, filhis, espiritis santis.

                In elementis mé pra quem é amistosis quis leo. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Quem manda na minha terra sou euzis!
                Mussum Ipsum, cacilds vidis litro abertis. Pra lá , depois divoltis porris, paradis. Manduma pindureta quium dia nois paga. Delegadis gente finis, bibendum egestas augue arcu ut est. Paisis, filhis, espiritis santis.

                In elementis mé pra quem é amistosis quis leo. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Quem manda na minha terra sou euzis! 
                <div class="row justify-content-between about-rodape">
                    <div class="col-7">
                        <p>@pedronunesfotagrafia</p>
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="{{ asset('assets/img/assinatura-color.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIM SESSÃO DE ABOUT -->

<!-- INICIO FOOTER-->
@include('layouts.footer')
<!-- FIM DO FOOTER-->
@endsection
