@extends('layouts.app')

@section('content')

<div class="container">
	<form action="{{url('product/'.$product->id)}}" method="POST" role="form">
		<legend style="text-align: center; font-weight: bold;">
		UPDATE EXISTING PRODUCT</legend>
		{{csrf_field()}}

		<input type="hidden" name="_method" value="PATCH">

	    <div class="form-group">
	      <label for="Name">PRODUCT NAME</label>
	      <input type="text" class="form-control" id="" placeholder="{{$product->Name}}" name="Name">
	    </div>

		<div class="form-group">
			<label for="Stock">ITEM STOCK</label>
			<input type="number" class="form-control" id="" placeholder="{{$product->Stock}}" name="Stock">
		</div>

		<div class="form-group">
			<label for="Price">PRICE ($)</label>
			<input type="number" class="form-control" id="" placeholder="{{$product->Price}}" name="Price">
		</div>
		<center>
		    <button class="btn">SUBMIT</button>
	    </center>
	</form>
</div>

<div class="footer">© 2018 Aegis Inc. Designed by Kurniawan. All rights reserved. 978.645.4132 (Phone Orders)</div>

@endsection