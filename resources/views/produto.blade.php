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

<!-- INICIO DA SESSÃO DE PRODUTO-->
<section class="cart">
    <div class="container-fluid">
        {{-- <div class="row justify-content-md-center">
            <div class="col-8">

            </div>
            <div class="col-md-auto">

            </div>
            <div class="col col-lg-2">

            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-8 text-center">
                <img  class="img-fluid" src="{{ asset('assets/galeria/_01.jpg') }}" alt="">
            </div>
            <div class="col-md-4 cart-text text-left">
                <h1>Atxuhinã Pataxó</h1>
                <p class="desc">Mussum Ipsum, cacilds vidis litro abertis. Paisis, filhis, espiritis santis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non.</p>
                <p class="title">FORMATO</p>
                <p class="format">16:9</p>
                <p class="title">SELECIONE O PAPEL</p>
                <ul>
                    <li class="produto-item">
                        <a class="thumb remove-href">i<span><img class="img-fluid" src="http://via.placeholder.com/320x460" alt=""></span></a>
                        <input type='radio' value='1' name='radio' id='radio1'/>
                        <label class="paper-label" for='radio1'>coated paper</label>
                    </li>
                    <li class="produto-item">
                        <a class="thumb remove-href">i<span><img class="img-fluid" src="http://via.placeholder.com/320x460" alt=""></span></a>
                        <input type='radio' value='2' name='radio'  id='radio2'/>
                        <label class="paper-label" for='radio2'>nanoporous</label>
                    </li>
                    <li class="produto-item">
                        <a class="thumb remove-href">i<span><img class="img-fluid" src="http://via.placeholder.com/320x460" alt=""></span></a>
                        <input type='radio' value='3' name='radio'  id='radio3'/>
                        <label class="paper-label" for='radio3'>brilhantes</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- FIM DA SESSÃO DE PRODUTO-->
<section id="produt0-desc">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center full-desc">
                    Mussum Ipsum, cacilds vidis litro abertis. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Quem manda na minha terra sou euzis! Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <img class="img-fluid" src="{{ asset('assets/img/backdrop.jpg') }}" alt="">
    </div>
</section>

<section id="moldura">
    <div class="container">
        <div class="row">
            <div class="col molduras">
                <h1>Molduras</h1>
                <p class="text-left full-desc">
                    Mussum Ipsum, cacilds vidis litro abertis. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="offset-sm-1 col-sm-10 col-xs-12">
            <div class="owl-carousel owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item thumbnail"> 
                            <div class="caption text-center">
                                <p>SELECIONAR</p>
                            </div>
                            <img class="img-fluid" src="http://via.placeholder.com/300x220" alt=""> 
                        </div>
                        <div class="owl-item"> 
                            <a href="" title="">
                                <img class="img-fluid" src="http://via.placeholder.com/300x220" alt=""> 
                            </a>
                            <p>R$ 1.000,00</p>
                        </div>
                        <div class="owl-item"> <a href="" title=""><img class="img-fluid" src="http://via.placeholder.com/300x220" alt=""> </a></div>
                        <div class="owl-item"> <a href="" title=""><img class="img-fluid" src="http://via.placeholder.com/300x220" alt=""> </a></div>
                        <div class="owl-item"> <a href="" title=""><img class="img-fluid" src="http://via.placeholder.com/300x220" alt=""> </a></div>
                        <div class="owl-item"> <a href="" title=""><img class="img-fluid" src="http://via.placeholder.com/300x220" alt=""> </a></div>
                        <div class="owl-item"> <a href="" title=""><img class="img-fluid" src="http://via.placeholder.com/300x220" alt=""> </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Set up your HTML -->

</section>

<!-- INICIO FOOTER-->
@include('layouts.footer')
<!-- FIM DO FOOTER-->
@endsection
