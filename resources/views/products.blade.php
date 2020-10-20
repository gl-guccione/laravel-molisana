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

    <!-- link google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap">

  </head>
  <body>
    <!-- header -->
    <header class="header">
      <!-- logo img -->
      <div class="header__img">
        <img src="{{asset("images/logo_la_molisana.png")}}" alt="logo La Molisana">
      </div>
      <!-- /logo img -->
      <!-- nav -->
      <nav class="header__nav">
        <ul class="header__ul">
          <li><a class="header__link" href="#">Home</a></li>
          <li class="active"><a class="header__link " href="#">Prodotti</a></li>
          <li><a class="header__link" href="#">News</a></li>
        </ul>
      </nav>
      <!-- /nav -->
    </header>
    <!-- /header -->

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

    <!-- footer -->
    <footer>

      <!-- footer__wrapper -->
      <div class="footer__wrapper">

        <!-- first column -->
        <div class="info">
          <img class="info__img" src="{{asset("images/logo_la_molisana.png")}}" alt="Logo la molisana">
          <p class="info__paragraph">
            Ragione sociale: La Molisana S.P.A. <br>
            Sede Legale: Contrada Colle delle Alpi, 100/A <br>
            86100 - Campobasso (CB) <br>
            Pec: lamolisana@pec.it <br>
            Tel: +39 0874 4981 <br>
            Fax: +39 0874 629584 <br>
            info@lamolisana.it (per segnalazioni degli utenti) <br>
            commerciale@lamolisana.it <br>
            export@lamolisana.it <br>
            numero verde 800818081 <br>
            telefono 3801292455
          </p>
        </div>
        <!-- /first column -->

        <!-- second column -->
        <div class="footer__menus">

          <!-- first menu -->
          <h3 class="footer__title-menu">Pastificio</h5>
          <ul class="footer__menu">
            <li><a class="footer__menu-link" href="#">Il Pastificio</a></li>
            <li><a class="footer__menu-link" href="#">Grano decorticato a pietra</a></li>
            <li><a class="footer__menu-link" href="#">Il Molise c'è</a></li>
            <li><a class="footer__menu-link" href="#">Filiera Integrata</a></li>
            <li><a class="footer__menu-link" href="#">100 anni di pasta</a></li>
            <li><a class="footer__menu-link" href="#">Sartoria della pasta</a></li>
            <li><a class="footer__menu-link" href="#">Spaghetto Quadrato</a></li>
            <li><a class="footer__menu-link" href="#">Le Persone</a></li>
          </ul>
          <!-- /first menu -->

          <!-- second menu -->
          <h3 class="footer__title-menu">Prodotti</h5>
          <ul class="footer__menu">
            <li><a class="footer__menu-link" href="#">Le Classiche</a></li>
            <li><a class="footer__menu-link" href="#">Le Integrali</a></li>
            <li><a class="footer__menu-link" href="#">Le Speciali</a></li>
            <li><a class="footer__menu-link" href="#">Le Biologiche</a></li>
            <li><a class="footer__menu-link" href="#">Le Gluten-Free</a></li>
            <li><a class="footer__menu-link" href="#">Le Semole</a></li>
            <li><a class="footer__menu-link" href="#">Le Extra di Lusso</a></li>
          </ul>
          <!-- /second menu -->

        </div>
        <!-- /second column -->

        <!-- third column -->
        <div class="footer__menus">

          <!-- first menu -->
          <h3 class="footer__title-menu">Collezione da chef</h5>
          <ul class="footer__menu">
            <li><a class="footer__menu-link" href="#">Collezione da Chef</a></li>
            <li><a class="footer__menu-link" href="#">Grandi Cucine</a></li>
            <li><a class="footer__menu-link" href="#">Biologiche</a></li>
            <li><a class="footer__menu-link" href="#">Quadrate</a></li>
          </ul>
          <!-- /first menu -->

        </div>
        <!-- /third column -->

      </div>
      <!-- /footer__wrapper -->

    </footer>
    <!-- /footer -->

  </body>
</html>
