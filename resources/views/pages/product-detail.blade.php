@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/productDetail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
@endsection
@section('mainContent')
    <div class="light-bg navbar-distance main-div">
        <p class="product-type-title">JUEGOS INDIVIDUALES > {{$product->name}}</p>
        <p class="product-name">{{$product->name}}</p>
        <img class="main-img" src="{{ asset('admin/assets/images/product-detail/ProductTest.svg') }}" alt="">
        <div class="product-colors">
            <div class="color-type-div @if ($product->color_id == 2)selected @else not-selected @endif">
                <img class="without-color" src="{{ asset('admin/assets/images/product-detail/ProductDetailWithoutColor.svg') }}" alt="">
                <p class="color-type-text">Sin Pintar</p>
            </div>
            <div class="color-type-div @if ($product->color_id == 1)selected @else not-selected @endif">
                <img class="with-color" src="{{ asset('admin/assets/images/product-detail/ProductDetailWithColor.svg') }}" alt="">
                <p class="color-type-text">Arcoíris</p>
            </div>
        </div>
        <div class="items-to-cart">
            <div id="remove-from-cart" class="add-or-remove">
                <p class="add-remove-text"> - </p>
            </div>
            <input id="hola" class="items-to-cart-input" type="number">
            <div id="add-to-cart" class="add-or-remove">
                <p class="add-remove-text"> + </p>
            </div>
        </div>
        <p class="price">AR$ {{ $product->price }}</p>
        <a class="anchor" href="">Ver medios de pago y promociones</a>
        <div class="add-to-cart">
            <button class="button">Agregar al Carrito</button>
        </div>
        <div class="basic-info">
            <div class="info-div info-left">
                <div class="info-img">
                    <img src="{{ asset('admin/assets/icons/product-detail/Hashtag.svg') }}" alt="">
                </div>
                <p class="info-title">{{ $product->id }}</p>
                <p class="info-text">Número de producto</p>
            </div>
            <div class="info-div info-middle">
                <div class="info-img">
                    <img src="{{ asset('admin/assets/icons/product-detail/Eye.svg') }}" alt="">
                </div>
                <p class="info-title">Normativas</p>
                <p class="info-text">Utilizar bajo supervisión de un adulto</p>
            </div>
            <div class="info-div info-right">
                <div class="info-img">
                    <img src="{{ asset('admin/assets/icons/product-detail/House.svg') }}" alt="">
                </div>
                <p class="info-title">Uso</p>
                <p class="info-text">Diseñado para interiores</p>
            </div>
        </div>
    </div>

    <div class="about light-beige-bg">
        <p class="about-title">Sobre el producto</p>
        <img class="main-img" src="{{ asset('admin/assets/images/product-detail/ProductTest.svg') }}" alt="">
        <p class="about-description">{{ $product->description }}</p>
    </div>

    <div class="specs light-bg main-div">
        <div class="specs-title-div">
            <img class="shine" src="{{ asset('admin/assets/images/HomeShineLeft.svg') }}" alt="">
            <p class="specs-title">Especificaciones</p>
            <img class="shine" src="{{ asset('admin/assets/images/HomeShineRight.svg') }}" alt="">
        </div>
        <div class="specs-description">
            <div class="specs-icon blue-bg">
                <img src="{{ asset('admin/assets/icons/product-detail/ProductMaterial.svg') }}" alt="">
            </div>
            <p class="specs-text">{{ $product->material }}</p>
            <div class="specs-icon blue-bg">
                <img src="{{ asset('admin/assets/icons/product-detail/ProductSize.svg') }}" alt="">
            </div>
            <p class="specs-text">{{ $product->size }}</p>
            <div class="specs-icon blue-bg">
                <img src="{{ asset('admin/assets/icons/product-detail/ProductWeight.svg') }}" alt="">
            </div>
            <p class="specs-text">{{ $product->max_weight }}kg</p>
        </div>
    </div>

    <div class="product-opinion light-beige-bg">
        <p class="opinion-title">QUÉ OPINAN NUESTROS CLIENTES</p>
        <img src="{{ asset('admin/assets/images/product-detail/ProductOpinion.svg') }}" alt="">
    </div>
@endsection
