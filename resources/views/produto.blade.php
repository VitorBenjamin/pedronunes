@extends('layouts.main')
@section('content')
@include('layouts.navs.navbar-produto')
@include('layouts.navs.navbar-retratil-produto')
<!-- FIM SESSÃO DE NAVBAR E IMAGEM TOPO -->

<!-- INICIO DA SESSÃO DE PRODUTO-->
<section class="cart">
    <div class="container-fluid">
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
                <button class="comprar-topo" type="button">Comprar</button>
                <button class="comprar-moldura" type="button">Molduras</button>
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

<section id="molduras" class="my-5">
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
    <div class="container-fluid">
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
</section>

<section class="my-5">
    <div class="container">
        <div class="row no-gutters justify-content-end">
            <div class="col-xs-12 col-md-2 quadro">
                <h5>QUADRO</h5>
                <p>R$ 30.000,00</p>
            </div>
            <div class="col-xs-12 col-md-2 moldura">
                <h5>MOLDURA</h5>
                <p>R$ 30.000,00</p>
            </div>
            <div class="col-xs-12 col-md-3 total">
                <h5>TOTAL</h5>
                <p>R$ 30.000,00</p>
            </div>
            <div class="col-xs-12 col-md-2 finalizar">
                <button class="comprar" type="button">Finalizar</button>
            </div>
        </div>
    </div>
</section>

<!-- INICIO FOOTER-->
@include('layouts.footer')
<!-- FIM DO FOOTER-->
@endsection
