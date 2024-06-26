@extends('layouts.app')
@section('title', 'Homepage')
@section('content')
    <!-- promotion area start -->
    @if ($coupon)
        <div class="p-1 text-white text-center" style="background-image: url('{{ asset('frontend/img/bg/12.jpg') }}')">
            Designer de unhas!
        </div>
    @endif
    <!-- promotion area end -->

    @include('partials.frontend.sliders')
    <!-- categories area start -->
    <div class="container">


        <div class="pb-50">
            <div class="section-title-furits text-center">
                {{-- <img src="{{ asset('frontend/img/icon-img/49.png') }}" alt=""> --}}
                <h2>NAVEGUE NOSSAS CATEGORIAS</h2>
            </div>
            <br>
            <section>
                <header class="text-center">
                    <p class="small text-muted small text-uppercase mb-1">COLEÇÕES CUIDADOSAMENTE CRIADAS</p>
                    {{-- <h2 class="h5 text-uppercase mb-4">NAVEGUE NOSSAS CATEGORIAS</h2> --}}
                </header>
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0 sombra-esquerda-baixo">
                        <a class="category-item" href="{{ route('shop.index', $categories[0]->slug ?? '') }}">
                            @if ($categories[0]->cover ?? '')
                                <img class="img-fluid" 
                                    src="{{ asset('storage/images/categories/' . $categories[0]->cover ?? '') }}"
                                    alt="{{ $categories[0]->name ?? '' }}">
                            @else
                                <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-1.jpg') }}"
                                    alt="">
                            @endif
                            <strong class="category-item-title">{{ $categories[0]->name ?? '' }}</strong>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0 ">
                        <a class="category-item mb-4 " href="{{ route('shop.index', $categories[1]->slug ?? '') }}">
                            @if ($categories[1]->cover ?? '')
                                <img class="img-fluid " style="margin-bottom: 24px"
                                    src="{{ asset('storage/images/categories/' . $categories[1]->cover ?? '') }}"
                                    alt="{{ $categories[1]->name ?? '' }}">
                            @else
                                <img class="img-fluid" style="margin: 7px;"
                                    src="{{ asset('frontend/assets/categories/cat-img-2.jpg') }}"
                                    alt="{{ $categories[1]->name ?? '' }}">
                            @endif
                            <strong class="category-item-title"
                                style="margin-top: -124px;">{{ $categories[1]->name ?? '' }}</strong>
                        </a>
                        <a class="category-item" href="{{ route('shop.index', $categories[2]->slug ?? '') }}">
                            @if ($categories[2]->cover ?? '')
                                <img class="img-fluid"
                                    src="{{ asset('storage/images/categories/' . $categories[2]->cover ?? '') }}"
                                    alt="{{ $categories[2]->name ?? '' }}">
                            @else
                                <img class="img-fluid" style="margin: 9px;"
                                    src="{{ asset('frontend/assets/categories/cat-img-3.jpg') }}"
                                    alt="{{ $categories[2]->name ?? '' }}">
                            @endif
                            <strong class="category-item-title"
                                style="margin-top: 104px;">{{ $categories[2]->name ?? '' }}</strong>
                        </a>
                    </div>
                    <div class="col-md-4 sombra-esquerda-baixo">
                        <a class="category-item" href="{{ route('shop.index', $categories[3]->slug ?? '') }}">
                            @if ($categories[3]->cover ?? '')
                                <img class="img-fluid"
                                    src="{{ asset('storage/images/categories/' . $categories[3]->cover ?? '') }}"
                                    alt="">
                            @else
                                <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-4.jpg') }}"
                                    alt="{{ $categories[3]->name ?? '' }}">
                            @endif
                            <strong class="category-item-title">{{ $categories[3]->name ?? '' }}</strong>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- categories area end -->

    <!-- banner area start -->
    <div class="fruits-choose-area pb-65 bg-img mt-5"
        style="background-image:url(https://img.freepik.com/free-photo/still-life-tools-nail-art_23-2150321313.jpg?size=626&ext=jpg&ga=GA1.1.969032829.1714322674&semt=ais)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-9 col-12">
                    <div class="fruits-choose-wrapper-all">
                        <div class="fruits-choose-title mt-5">
                            <h2>Por que nos escolheu ?</h2>
                        </div>
                        <div class="fruits-choose-wrapper">
                            <div class="single-fruits-choose">
                                <div class="fruits-choose-serial">
                                    <h3>01</h3>
                                </div>
                                <div class="fruits-choose-content">
                                    <h4>Entregas Facilitadas</h4>
                                    <p>Garantimos entregas rápidas e eficientes, utilizando a mesma logística confiável do Mercado Livre.</p>
                                </div>
                            </div>
                            <div class="single-fruits-choose">
                                <div class="fruits-choose-serial">
                                    <h3>02</h3>
                                </div>
                                <div class="fruits-choose-content">
                                    <h4>Preços Ótimos de Entrega</h4>
                                    <p>Oferecemos preços competitivos para garantir que suas entregas sejam acessíveis e convenientes.</p>
                                </div>
                            </div>
                            <div class="single-fruits-choose">
                                <div class="fruits-choose-serial">
                                    <h3>03</h3>
                                </div>
                                <div class="fruits-choose-content">
                                    <h4>Facilidade de Compra e Suporte Eficiente</h4>
                                    <p>heckout fácil, suporte via WhatsApp para localização de pedidos e variedade de produtos novos e usados.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->

    <!-- TRENDING PRODUCTS -->
    <div class="container">
        <livewire:frontend.product.top-trending-products />
    </div>

    <!-- services area start -->
    <div class="fruits-services ptb-200">
        <div class="fruits-services-wrapper">
            <div class="single-fruits-services">
                <div class="fruits-services-img">
                    <img src="{{ asset('img/logo2.png') }}" alt="">
                </div>
                <div class="fruits-services-content">
                    <h4>ENTREGA RÁPIDA</h4>
                    <p>Logística eficiente para garantir entregas rápidas. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="single-fruits-services">
                <div class="fruits-services-img">
                    <img src="{{ asset('img/logo2.png') }}" alt="">
                </div>
                <div class="fruits-services-content">
                    <h4>GARANTIA DE SATISFAÇÃO</h4>
                    <p>Produtos de qualidade com garantia de satisfação. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="single-fruits-services">
                <div class="fruits-services-img">
                    <img src="{{ asset('img/logo2.png') }}" alt="">
                </div>
                <div class="fruits-services-content">
                    <h4>SUPORTE 24/7</h4>
                    <p>Suporte online 24 horas por dia, 7 dias por semana. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- services area end -->
@endsection
