<!-- BEGIN MENUTOP -->
   <div class="header-bottom"><!--header-bottom-->
      <div class="container">
        <div class="row">

          <div class="col-sm-12">
     <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
        
                <div class="collapse navbar-collapse navbar-left">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('/') }}"">Home</a></li>
                        <li class="dropdown">
                            <a href="{{ url('/shop') }}" class="dropdown-toggle" data-toggle="dropdown">Shop <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/shop') }}">Products</a></li>
                            </ul>
                        </li>                        
                        <li><a href="{{ url('/account') }}">Account</a></li> 
                        <li><a href="{{ url('/checkout') }}">Checkout</a></li>
                        <li><a href="{{ route('product.shoppingCart') }}">Cart</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                 
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
            
          </div>


        </div>
      </div>
    </div><!--/header-bottom-->
<!-- END MENUTOP -->
