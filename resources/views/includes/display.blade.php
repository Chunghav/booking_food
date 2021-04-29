

<!-- Main -->
<div class="container foodsList">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="{{asset('fe/Images/moun_dot.jpg')}}" alt="Card image cap">
        <div class="card-block">
        <h4 class="card-title text-center">Moun Dot </h4>
        <p class="card-text text-center">(khmer Restaurant)</p>
        <h5 class="card-text">ID:678001</h5>
        <p class="card-text">Price: $7.8 (Discount 20%) <b>=$6.5</b></p>
        <a href="#" data-name="Moun-Dot" data-price="6.5" class="add-to-cart btn ">Add to Order</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="{{asset('fe/Images/Fish_amok.jpg')}}" alt="Card image cap">
        <div class="card-block">
        <h4 class="card-title text-center">Fish Amok</h4>
        <p class="card-text text-center">(khmer Restaurant)</p>
        <h5 class="card-text">ID:678002</h5>
        <p class="card-text">Price: $5.4 (Discount 20%) <b>=$4.5</b></p>
        <a href="#" data-name="Fish-Amok" data-price="4.5" class="add-to-cart btn ">Add to Order</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="{{asset('fe/Images/khor_ko.jpg')}}" alt="Card image cap">
        <div class="card-block">
        <h4 class="card-title text-center">Khor Ko</h4>
        <p class="card-text text-center">(khmer Restaurant)</p>
        <h5 class="card-text">ID:678003</h5>
        <p class="card-text">Price: $4.2 (Discount 20%) <b>=$3.5</b></p>
        <a href="#" data-name="Khor-Ko" data-price="3.5" class="add-to-cart btn ">Add to Order</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="{{asset('fe/Images/bro_hok_ktis.jpg')}}" alt="Card image cap">
        <div class="card-block">
        <h4 class="card-title text-center">Bro Hok Ktis</h4>
        <p class="card-text text-center">(khmer Restaurant)</p>
        <h5 class="card-text">ID:678004</h5>
        <p class="card-text">Price: $6 (Discount 20%) <b>=$5</b></p>
        <a href="#" data-name="Bro-Hok-Ktis" data-price="5" class="add-to-cart btn ">Add to Order</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="{{asset('fe/Images/mi_kola.jpg')}}" alt="Card image cap">
        <div class="card-block">
        <h4 class="card-title text-center">Mi Kola</h4>
        <p class="card-text text-center">(khmer Restaurant)</p>
        <h5 class="card-text">ID:678005</h5>
        <p class="card-text">Price: $5.1 (Discount 20%) <b>=$4.25</b></p>
        <a href="#" data-name="Mi-kola" data-price="4.25" class="add-to-cart btn ">Add to Order</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="{{asset('fe/Images/terk_kreng.jpg')}}" alt="Card image cap">
        <div class="card-block">
        <h4 class="card-title text-center">Terk Kreng</h4>
        <p class="card-text text-center">(khmer Restaurant)</p>
        <h5 class="card-text">ID:678006</h5>
        <p class="card-text">Price: $4.50(Discount 20%) <b>=$3.75</b></p>
        <a href="#" data-name="Terk-Kreng" data-price="3.75" class="add-to-cart btn ">Add to Order</a>
        </div>
      </div>
    </div>

  </div> <!--end row-->
</div><!--end container-->


<!-- Modal -->
 <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="show-cart table">
          
        </table>
        <div>Total price: $<span class="total-cart"></span></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
        <button type="submit" class="btn " id="order" onclick="order(event)" >Order now</button>
      </div>
    </div>
  </div>
</div> 




<!-- Nav -->
<div class="orderbt">
  <nav class="navbar navbar-inverse bg-inverse fixed-top bg-faded">
    <div class="row">
        <div class="col">
          <button type="button" class="btn order" data-toggle="modal" data-target="#cart">Order (<span id="span_Id" class="total-count"></span>)</button>
          <button class="clear-cart btn btn-danger">Clear Order</button></div></div>
  </nav>





    <script>
    function order(event){
      //Prevent Default Form Submission Behavior
      event.preventDefault()
    
      var span_Text = document.getElementById("span_Id").innerText;
        if(span_Text > 0){
          location.replace("{{ route('pages.order') }}");
          
        }else {
          alert("Your order is empty.Please order your favorite food!!!")
        }
        
    }


    </script>


       


