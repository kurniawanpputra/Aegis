@extends('layouts.app')

@section('content')

<div class="container">
  <form action="{{url('product')}}" method="POST" role="form" enctype="multipart/form-data">
    <legend style="text-align: center; font-weight: bold;">
    NEW PRODUCT</legend>
    {{csrf_field()}}
    <form class="form-inline" action="/action_page.php">
    <div class="form-group">
      <label for="Image">IMAGE</label>
      <input type="file" class="form-control" id="" placeholder=""
      name="Image">
    </div>
   
    <div class="form-group">
      <label for="Name">PRODUCT NAME</label>
      <input type="text" class="form-control" id="" placeholder="INPUT PRODUCT NAME" name="Name">
    </div>

      <div class="form-group">
      <label for="Stock">ITEM STOCK</label>
      <input type="number" class="form-control" id="" placeholder="INPUT ITEM STOCK" name="Stock">
    </div>

      <div class="form-group">
      <label for="Price">PRICE ($)</label>
      <input type="number" class="form-control" id="" placeholder="INPUT PRICE" name="Price">
    </div>

    <center>
      <button class="btn">SUBMIT</button>
    </center>
  </form>
</div>

<div class="footer">© 2018 Aegis Inc. Designed by Kurniawan. All rights reserved. 978.645.4132 (Phone Orders)</div>

@endsection