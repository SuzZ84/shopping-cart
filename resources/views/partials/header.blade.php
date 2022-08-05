
<div class="container-fluid">
<nav class="navbar navbar-expand-xl navbar-light navbar navbar-dark bg-dark">
    <img src="https://www.designyourway.net/blog/wp-content/uploads/2019/10/s1-94.jpg" class="card-img-top" style="max-inline-size:8%" class="w-25 p-3" alt="..."  class="img-responsive">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <li>
              
              <div class="col-lg-9">
              <a href="{{route('product.shoppingCart') }}"><i  class="fa-solid fa-cart-arrow-down" aria-hidden="true"></i> Shopping Cart
              <span class="badge badge-success">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span></a>
              </li>
              
              <li class="dropdown"> 
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa-solid fa-user-large"></i> User Management</a>
                    
                  <ul class="dropdown-menu">
                  @if (Auth::check())
                    <li><a class="dropdown-item" href="{{ route('user.profile') }}">User Profile</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="dropdown-item" href="{{ route('user.logout')}}">Logout</a></li>      
                  @else
                    <li><a class="dropdown-item" href="{{ route('user.signup') }}">Signup</a></li>
              <li><a class="dropdown-item" href="{{ route('user.signin') }}">Signin</a></li>

            @endif
          </ul>
          </ul>
        </li>         
          </a>   
    </div>
</nav></div>
    </div>  
        </ul>
</nav>
    </div>
  </nav>