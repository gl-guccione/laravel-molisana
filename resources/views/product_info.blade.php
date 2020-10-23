@php
//  var_dump($product);
//  var_dump($prev);
//  var_dump($next);
@endphp

@extends('layouts.page')

@section('title', 'La Molisana - Dettaglio Prodotti')


<!-- section 'mainContent' -->
@section('mainContent')

  <!-- main -->
  <main class="main_product">


    <h1 class="product__title">{{$product["titolo"]}}</h1>
    <img class="fullsize_img" src="{{$product["src-h"]}}" alt="Foto - {{$product["titolo"]}}">
    <img class="fullsize_img" src="{{$product["src-p"]}}" alt="Foto - {{$product["titolo"]}}">
    <div class="product__description">{!!$product["descrizione"]!!}</p>



    <div class="buttons">

      @if($prev !== false)
        <a class="left" href="/products/show/{{$prev}}"><i class="fas fa-angle-left"></i></a>
      @endif

      @if($next !== false)
        <a class="right" href="/products/show/{{$next}}"><i class="fas fa-angle-right"></i></a>
      @endif

    </div>
  </main>
  <!-- /main -->

@endsection
<!-- /section 'mainContent' -->
