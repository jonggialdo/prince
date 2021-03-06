<header class="header trans_300">
  <!-- Top Navigation -->
  
  <!-- Main Navigation -->

  <div class="main_nav_container" style="top:50px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-right">
          <div class="logo_container">
            <a href="{{ route('/') }}">Prince<span> IPB</span></a>
          </div>
          <nav class="navbar" style="margin-bottom: 0px; border-bottom-width: 0px; border-right-width: 0px; border-left-width: 0px; border-top-width: 0px; padding-top: 8px; padding-bottom: 0px;">
            <ul class="navbar_menu">
              <li><a href="{{ route('/') }}">home</a></li>
              <li><a href="{{ route('categories') }}">shop</a></li>
              <li><a href="{{ route('contact') }}">contact</a></li>

            </ul>
            <ul class="navbar_user">
            @if (Auth::check())
              <li>
              <div id="sb-search" class="sb-search">
                <form action="{{ route('searchFP') }}">
                    <input class="form_input input_name input_ph" placeholder="Search..." type="search" value="" name="searchFP" id="searchFP" style="width: 238.979166px;">
                    <!-- <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"></span> -->
                </form>
              </div></li>
              @if (Auth::user()->role_id != 3)
              <li class="checkout">
                <a href="{{ route('notifikasi_view') }}" style="margin-left: 5px;">
                  <i class="fa fa-bell" aria-hidden="true"></i>
                </a>
              @else
              <li class="checkout">
                <a href="{{ route('notifikasi_pembeli') }}" style="margin-left: 5px;">
                  <i class="fa fa-bell" aria-hidden="true"></i>
                </a>
              @endif
              @if (Auth::user()->role_id != 2)
              </li>
                <li class="checkout">
                  <a href="{{ route('cart') }}" style="margin-left: 5px;">
                    <i class="fa fa-shopping-cart" aria-hidden="true" ></i>
                    <span id="checkout_items" class="checkout_items"> {{ \App\Cart::where('id_user','=', \Auth::user()->id)->where('checkout_status','=',0)->get()->count() }}</span>
                  </a>
                </li>
              @endif
              @endif
              <li class = "account" style="padding-left: 0px; width:100px;">
                <a href="#" style="margin-left: 5px; margin-right:15px; ">
                  <i class="fa fa-user" aria-hidden="true" style="margin-left: 0px;"></i>
                </a>
                @if (!Auth::check())
                  <ul class="account_selection">
                    <li><a href="{{ route('login') }}">SignIn</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                  </ul>
                  @else
                  <ul class="account_selection">
                  @if (Auth::user()->role_id == 2)
                    <li><a href="{{ route('productuser') }}">MyProduct</a></li>
                  @endif
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
