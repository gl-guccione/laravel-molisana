@php

  $database = config('data_from_database');

  $pasta_lunga = [];
  $pasta_corta = [];
  $pasta_cortissima = [];


  foreach ($database as $pasta) {
    if ($pasta["tipo"] == "lunga") {
      $pasta_lunga[] = $pasta;
    } elseif ($pasta["tipo"] == "corta") {
      $pasta_corta[] = $pasta;
    } elseif ($pasta["tipo"] == "cortissima") {
      $pasta_cortissima[] = $pasta;
    }
  }

@endphp

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>La Molisana</title>

    <!-- link stylesheet -->
    <link rel="stylesheet" href="{{asset("css/app.css")}}">

  </head>
  <body>

    @include('partials.header')

    <!-- main -->
    <main class="main">

      @if (count($pasta_lunga) > 0)
        <!-- pasta 1 -->
        <section class="pasta">
          <!-- ul - lunghe -->
          <h2 class="pasta__main-title">Le Lunghe</h2>
          <ul class="pasta__list">
            @foreach ($pasta_lunga as $pasta)
              <li class="pasta__card">
                <img class="pasta__img" src="{{$pasta["src"]}}" alt="Foto Pasta - {{$pasta["titolo"]}}">
              </li>
            @endforeach
          </ul>
          <!-- /ul - lunghe -->
        </section>
        <!-- /pasta 1 -->
      @endif

      @if (count($pasta_corta) > 0)
        <!-- pasta 2 -->
        <section class="pasta">
          <!-- ul - corta -->
          <h2 class="pasta__main-title">Le Corte</h2>
          <ul class="pasta__list">
            @foreach ($pasta_corta as $pasta)
              <li class="pasta__card">
                <img class="pasta__img" src="{{$pasta["src"]}}" alt="Foto Pasta - {{$pasta["titolo"]}}">
              </li>
            @endforeach
          </ul>
          <!-- /ul - corta -->
        </section>
        <!-- /pasta 2 -->
      @endif

      @if (count($pasta_corta) > 0)
        <!-- pasta 3 -->
        <section class="pasta">
          <!-- ul - cortissima -->
          <h2 class="pasta__main-title">Le Cortissime</h2>
          <ul class="pasta__list">
            @foreach ($pasta_cortissima as $pasta)
              <li class="pasta__card">
                <img class="pasta__img" src="{{$pasta["src"]}}" alt="Foto Pasta - {{$pasta["titolo"]}}">
              </li>
            @endforeach
          </ul>
          <!-- /ul - cortissima -->
        </section>
        <!-- /pasta 3 -->
      @endif

    </main>
    <!-- /main -->

    @include('partials.footer')

  </body>
</html>
