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
      <li class="@if(url()->current() == route('homepage')) active @endif"><a class="header__link" href="{{route('homepage')}}">Home</a></li>
      <li class="@if(url()->current() == route('products')) active @endif"><a class="header__link" href="{{route('products')}}">Prodotti</a></li>
      <li class="@if(url()->current() == route('news')) active @endif"><a class="header__link" href="{{route('news')}}">News</a></li>
    </ul>
  </nav>
  <!-- /nav -->
</header>
<!-- /header -->
