@extends('layouts.main')
@section('content')

<!-- INICIO SESSÃO DE NAVBAR E IMAGEM TOPO -->
@include('layouts.navbar')
@include('layouts.navbar-retratil')

<div class="container-fluid img-relative px-0">
    <img class="img-fluid" src="{{ asset('assets/img/topo.jpg') }}">
    <div class="centered titulo-topo d-none d-sm-block">
        <h1>Awêry, curumin.</h1>
        <p>NOVEMBRO, 2017</p>
    </div>
    <div class="bottom-center text-right etiqueta">
        <p>
            <i class="material-icons">loyalty</i>
            <span>Atxuhinã Pataxó</span> 
            <br>
            <span>R$ 30.000,00</span>
        </p>
    </div>
</div>

<!-- FIM SESSÃO DE NAVBAR E IMAGEM TOPO -->

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

<!-- INICIO SESSÃO DE NAVBAR-->
@include('layouts.slide')
<!-- FIM DA SESSÃO DE NAVBAR-->

<!-- INICIO SESSÃO DE PROJETOS-->
<section>
    <div class="container-fluid img-relative px-0">
        <img class="img-fluid" src="{{ asset('assets/img/topo.jpg') }}">
        <div class="centered projeto">
            <p class="d-none d-sm-block">
                Mussum Ipsum, cacilds vidis litro abertis. Interagi no mé, cursus quis, vehicula ac nisi. Diuretics paradis num copo é motivis de denguis.
            </p>
            <a class="botao-projeto" href="#" title="">ver todos os projetos</a>
        </div>
    </div>
</section>
<!-- FIM DA SESSÃO DE PROJETOS-->

<!-- INICIO DA SESSÃO DE GALERIA-->
@include('layouts.galeria-tab')
<!-- FIM DA SESSÃO DE GALERIA-->

<!-- INICIO FOOTER-->
@include('layouts.footer')
<!-- FIM DO FOOTER-->
@endsection
