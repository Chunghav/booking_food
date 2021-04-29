

@if(Auth::user())
<nav class="navbar ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <h5>Menu</h5>
      <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
      </button>
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('product') }}">Food</a></li>
        
        <li><a href="#">Ordered</a></li>
        <li><a href="{{ route('create') }}">Create</a></li>
        
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default ">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      
        <li><a href="/cartlist">Add to cart(0)</a></li>

            <li class="text-inline">
            <a href="#" onclick="document.getElementById('frmLogout').submit();">Logout</a>
            </li>
            <form id="frmLogout" action="{{ url('/logout') }}" method="POST">
              @csrf
            </form>
            </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


            
          @else
          <nav class="navbar ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        Menu
      <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Food</a></li>
        
        <li><a href="#">Ordered</a></li>
        <li><a href="#">Create</a></li>
        
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="" class="btn btn-default ">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      
        <li><a href="">Add to cart</a></li>
            
            <li><a href="{{ url('/register') }}">Sign Up</a></li>
            <li><a href="{{ url('/login') }}">Login</a></li>
            </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@include('includes.header')
          @endif


<style>
@media only screen and (mix-width: 600px) {
  whidth: 60%;
}
  button:hover{
    background-color: white;
    color: #00FF00;
   }
   
  </style>