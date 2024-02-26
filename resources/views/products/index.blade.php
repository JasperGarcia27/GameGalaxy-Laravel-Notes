@extends('layouts.app')

@section('content')
    
	@if(count($products) > 0)
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card" style="min-height: 100%;">
                            <img src="{{asset('/images/products/'.$product->image)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-truncate"><a class="text-dark stretched-link" style="text-decoration: none;" href="/products/{{$product->id}}">{{$product->name}}</a></h5>
                                <div class="row">
                                    <div class="col">
                                        <h6 class="card-subtitle text-danger">₱{{number_format($product->price, 2)}}</h6>
                                    </div>
                                    <div class="col text-lg-end">
                                        <h6 class="card-subtitle text-body-secondary">{{$product->orders->count()}} sold</h6>
                                    </div>
                                </div>                                
                            </div>

                            <!-- @if(Auth::user())
                                @if(Auth::user()->id == $product->user_id)
                                    <div class="card-footer text-center">
                                        <form method="POST" action="/posts/{{$product->id}}">
                                            @method("DELETE")
                                            @csrf
                                            <a href="/products/{{$product->id}}/edit" class="btn btn-primary bg-blue-500 text-white rounded-full">Edit</a>
                                            <button type="submit" class="btn btn-danger bg-red-500 text-white rounded-full">Delete</button>
                                        </form>
                                    </div>

                                @endif
                            @endif -->

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
	@else 
		<div class="container">
            @if(Auth::user()->isSeller == 1)
                <h2>There are no products to show</h2>
                <a href="/products/addProduct" class="btn btn-info"> Create Product</a>
            @else
                <h2>There are no products to show</h2>
            @endif			
		</div>
	@endif
@endsection