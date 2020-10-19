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

  </body>
</html>
