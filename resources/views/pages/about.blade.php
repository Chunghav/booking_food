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
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            @include('includes.checkhome')
                <li class="nav-item"><a class="nav-link" href="{{ route('pages.news') }}">News</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ route('pages.about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('pages.contact') }}">Contact</a></li>

                @include('includes.checklogin')
            </ul>
        </div>
    </div>
</nav>
<!-- Page Header-->
@include('includes.header')



      <h1 class="text-dark ml-5">About</h1>
      <hr class="line">

        <div class="about">
      <p>Booking Food is a website that you can order your favorite food and resturant to nisdjfgn jsnidj gnijs ngjs  njinfgjks n j ngjsnd gjin jnjs gnikdfngj jrjkfgoirjg oi kmk moi  ijniomnrio emg im imerim g ig oijfdijm</p>


-    </div>


      <br> <br> <br> <br> <br> <br> <br> <br> <br>
      
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
                
        <script type="text/javascript" src="{{asset('fe/js/newscript.js')}}"></script>
    </body>
</html>