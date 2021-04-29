<!DOCTYPE html>
<html>
    <head>
    @include('includes.head')
    </head>
    <body>
    @include('includes.logo')
       <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.html">Booking Food</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="">News</a></li>
                <li class="nav-item"><a class="nav-link" href="">About</a></li>
                <li class="nav-item"><a class="nav-link" href="">Contact</a></li>
                
                @include('includes.checklogin')
            </ul>
        </div>
    </div>
</nav>
<!-- Page Header-->
<header class="masthead" style="background-image: url('{{asset('fe/Images/banner.jpg')}}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h2>Your Order Has Been Order Successfully.</h2>
                    <h3>Your Order ID:9237473</h3>
                    <h4>Thanks you for choose us. Enjoy your favorite food.</h4>
                    <h5><u><a class="text-white" href="{{ route('pages.homepage') }}">->click here to Home Page.</a></u></h5>
                   
                </div>
            </div>
        </div>
    </div>
</header>

    <h1 class="ml-5">Order</h1>
      <hr class="line">
    
    <div class="border border-dark p-5 rounded" >
    <h5 class="text-center">Would You Like To Visit Us?</h5>
    <h5 class="text-center">Book A Table Even Right Now Or Make An Online Order!</h5>

    
        <div class="col text-center">
          <button type="button"  id="addonline" class="btn">Order Online</button>
          <button type="button"  id="addtable"class="btn" >Book A Table</button></div>
    
    </div>


          <br> <br> <br> <br> <br> <br> <br> <br> <br>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
                
        <script type="text/javascript" src="{{asset('fe/js/newscript.js')}}"></script>
    </body>
</html>