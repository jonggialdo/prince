<header class="header trans_300">
  <!-- Top Navigation -->

  <!-- Main Navigation -->

  <div class="main_nav_container">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-right">
          <div class="logo_container">
            <a href="#">Prince<span> IPB</span></a>
          </div>
          <nav class="navbar">
            <ul class="navbar_menu">
              <li><a href="#">home</a></li>
              <li><a href="#">shop</a></li>
              <li><a href="{{ route('contact') }}">contact</a></li>

              <li><a href="contact.html">contact</a></li>

            </ul>
            <ul class="navbar_user">
              <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>

              <li class = "account">
                <a href="#">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </a>
                @if (!Auth::check())
                  <ul class="account_selection">
                    <li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                    <li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                  </ul>
                  @else
                  <ul class="account_selection">
                    <li><a href="{{ route('login') }}"><i class="fa fa-user-circle" aria-hidden="true"></i>Profile</a></li>
                    <li><a href="{{ URL::route('account-sign-out') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                  </ul>
                  @endif
              <li>
                <a href="#">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </a>

                  <ul class="account_selection">
                    <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                    <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                  </ul>
              </li>




              <li class="checkout">
                <a href="#">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <span id="checkout_items" class="checkout_items">2</span>
                </a>
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
