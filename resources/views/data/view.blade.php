@extends('layouts.app')

@section('content')

<style>
	.navbar{
		position: fixed;
		width: 100%;
	}
	@media only screen and (max-width: 991.975px){
        body{
        	height: 1100px;
        }
    }
    .del{
    	background-color: red;
    }
    .del:hover{
    	border: 1px solid red;
    	color: red;
    }
    .del:focus{
    	color: white;
    }
</style>
<div class="container">
	<legend style="text-align: center; font-weight: bold; margin-top: 75px;">
	PRODUCTS</legend>
	<table class="table table-bordered table-hover" style="text-align: center; background-color: white;">
		<thead>
			<tr>
				<th style="text-align: center;">PRODUCT NO.</th>
				<th style="text-align: center;">IMAGE</th>
				<th style="text-align: center;">PRODUCT NAME</th>
				<th style="text-align: center;">ITEM STOCK</th>
				<th style="text-align: center;">PRICE ($)</th>
				<th style="text-align: center;">ACTION</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $key => $product)
			<tr>
				<td>{{++$key}}</td>
				<td><a href="{{asset('resources/assets/uploaded_image/'.$product->Image)}}">{{$product->Image}}</a></td>
				<td>{{$product->Name}}</td>
				<td>{{$product->Stock}}</td>
				<td>{{$product->Price}}</td>
				<td>
					<form method='POST' action={{url('product/'.$product->id)}}>
					{{csrf_field()}}
					<input type="hidden" name="_method" value="PATCH">
					<a href="{{url('product/'.$product->id.'/edit')}}" class="btn">UPDATE</a>
					<input type="hidden" name="_method" value="DELETE">
					<button type="submit" class="btn del">DELETE</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a href="{{url('product/create')}}" class="btn">ADD NEW</a>
</div>
<div class="footer">© 2018 Aegis Inc. Designed by Kurniawan. All rights reserved. 978.645.4132 (Phone Orders)</div>

@endsection