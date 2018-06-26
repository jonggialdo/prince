<header class="header trans_300">
  <!-- Top Navigation -->

  <!-- Main Navigation -->

  <div class="main_nav_container">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-right">
          <div class="logo_container">
            <a href="{{ route('home') }}">Prince<span> IPB</span></a>
          </div>
          <nav class="navbar">
            <ul class="navbar_menu">
              <li><a href="{{ route('home') }}">home</a></li>
              <li><a href="{{ route('categories') }}">shop</a></li>
              <li><a href="{{ route('contact') }}">contact</a></li>

            </ul>
            <ul class="navbar_user">
              <li>
              <div id="sb-search" class="sb-search">
                <form action="{{ route('searchFP') }}">
                    <input class="sb-search-input" placeholder="Enter your search term..." type="search" value="" name="searchFP" id="searchFP">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"></span>
                </form>
              </div></li>
              @if (Auth::check())
              <li class="checkout">
                <a href="{{ route('notifikasi_view') }}">
                  <i class="fa fa-bell" aria-hidden="true"></i>
                  <span id="checkout_items" class="checkout_items">0</span>
                </a>
              </li>
                <li class="checkout">
                  <a href="{{ route('cart') }}">
                    <i class="fa fa-shopping-cart" aria-hidden="true" ></i>
                    <span id="checkout_items" class="checkout_items"> {{ \App\Cart::where('id_user','=', \Auth::user()->id)->where('checkout_status','=',0)->get()->count() }}</span>
                  </a>
                </li>
              @endif
              <li class = "account">
                <a href="#">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </a>
                @if (!Auth::check())
                  <ul class="account_selection">
                    <li><a href="{{ route('login') }}">SignIn</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                  </ul>
                  @else
                  <ul class="account_selection">
                    <li><a href="{{ route('profile') }}">Profile</a></li>
                    <li><a href="{{ URL::route('account-sign-out') }}">Logout</a></li>
                  </ul>
                  @endif

              </li>
            </ul>
            <div class="hamburger_container">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>

</header>
