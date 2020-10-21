@php


@endphp

@extends('layouts.page')

@section('title', 'La Molisana - Prodotti')

<!-- section 'mainContent' -->
@section('mainContent')

  <!-- main -->
  <main class="main">

    @if (count($paste) > 0)

      @foreach ($paste as $key => $pasta)

        <!-- pasta -->
        <section class="pasta">
          <!-- ul - pasta type -->
          <h2 class="pasta__main-title">{{$key}}</h2>
          <ul class="pasta__list">

            @foreach ($pasta as $pasta_info)

              <li class="pasta__card" data-id="{{$pasta_info["id"]}}">
                <img class="pasta__img" src="{{$pasta_info["src"]}}" alt="Foto Pasta - {{$pasta_info["titolo"]}}">

                <!-- overlay -->
                <div class="overlay">
                  <a class="overlay__link" href="/products/show/{{$pasta_info["id"]}}">
                    <h4 class="overlay__title">{{$pasta_info["titolo"]}}</h4>
                  </a>
                  <img class="overlay__img" src="{{asset("images/icon.svg")}}" alt="icon">
                </div>
                <!-- /overlay -->
              </li>

            @endforeach
          </ul>
          <!-- /ul - pasta type -->
        </section>
        <!-- /pasta -->

      @endforeach;

    @endif

  </main>
  <!-- /main -->

@endsection
<!-- /section 'mainContent' -->
