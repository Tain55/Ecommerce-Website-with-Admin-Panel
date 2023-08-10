@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Amount</th>
        <th>$ {{$total}}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$total + 10}}</td>
      </tr>
    </tbody>
  </table>
  
  <br><br>
    
    <form action="/orderplace" method="POST">
      <div class="form-group ">
        <textarea name="address" placeholder="Enter your address" class="form-control"></textarea>
      </div>
      <div class="form-group">
        @csrf
        <label for="pwd">Payment Method</label><br>
        <input type="radio" value="cash" name="payment" > <span>Online payment</span><br>
        <input type="radio" value="cash" name="payment" > <span>EMI payment</span><br>
        <input type="radio" value="cash" name="payment" > <span>Payment on Delivery</span>
      </div>

      <div>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>


    </form>
  </div>
    
</div>

@endsection