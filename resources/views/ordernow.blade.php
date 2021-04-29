@extends('pages.master')
@section('content')
<div class="costom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <td>Amont</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Total:</td>
                    <td>${{$total}}</td>
                </tr>
            </tbody>
        </table>

    <div>
        <form action="/action_page.php">
        <div class="form_group">
            <label for="chose">Booking:</label>
            <input type="radio" name="booking"> <span>Take away<span> <br><br>
            <input type="radio" name="booking"> <span>booking place<span> <br><br>
        </div>
        <button class="btn btn-success">Order</button> 
        </form>




    </div>
</div>



@endsection