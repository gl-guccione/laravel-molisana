@php
//  var_dump($product);
//  var_dump($prev);
//  var_dump($next);
//  die;
@endphp

@extends('layouts.page')

@section('title', 'La Molisana - Dettaglio Prodotti')


<!-- section 'mainContent' -->
@section('mainContent')

  <!-- main -->
  <main>
    @if($prev !== false)
      <a href="/products/show/{{$prev}}">prev</a>
    @endif
    @if($next !== false)
      <a href="/products/show/{{$next}}">next</a>
    @endif

    <h1>{{$product["titolo"]}}</h1>
    <img src="{{$product["src-h"]}}" alt="Foto - {{$product["titolo"]}}">
    <img src="{{$product["src-p"]}}" alt="Foto - {{$product["titolo"]}}">
    <img src="{{$product["src-h"]}}" alt="Foto - {{$product["titolo"]}}">
    <p>{!!$product["descrizione"]!!}</p>

  </main>
  <!-- /main -->

@endsection
<!-- /section 'mainContent' -->
