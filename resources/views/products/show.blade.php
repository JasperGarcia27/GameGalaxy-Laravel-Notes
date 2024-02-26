@extends('layouts.app')

@section('content')
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center my-5">
                <img src="{{asset('/images/products/'.$product->image)}}" style="max-height: 500px" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-6 ">
                <div class="row mb-5 h-100 d-flex align-items-center">
                    <div class="col-10">
                        <h3 class="text-3xl">{{$product->name}}</h3>
                        <h4 class="text-2xl">₱{{number_format($product->price, 2)}}</h4>
                        <p class="text-slate-500"><i class="text-success me-2 fa-solid fa-truck-fast fa-xl"></i>Shipping Discount</p>
                        <span>{{$product->description}}</span>
                        <div class="mt-3 mb-5">
                            @if(Auth::user())
                                @if(Auth::user()->id != $product->user_id)
                                    <form method="POST" action="/products/{{$product->id}}/order">
                                        @csrf
                                        <div class="d-flex align-items-end">
                                            <label for="QuantityFormControlInput" class="form-label">Quantity</label>
                                            <input type="number" name="quantity" id="quantity" class="form-control mx-2" id="QuantityFormControlInput">
                                        </div>
                                        <div class=" mt-3">
                                            <button type="submit" class="btn btn-danger">Checkout</button>
                                        </div>  
                                    </form>
                                @endif
                            @else
                                <a href="/login" class="btn btn-primary">Login to Checkout</a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- <div class="row g-0 bg-body-secondary position-relative">
            <div class="col-md-6 mb-md-0 p-md-4">
                <img src="{{asset('/images/products/'.$product->image)}}" style="max-height: 500px" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-6 p-4 ps-md-0">
                <h3 >{{$product->name}}</h3>
                <h4>₱{{number_format($product->price, 2)}}</h4>
                <p><i class="text-success me-2 fa-solid fa-truck-fast fa-xl"></i>Shipping Discount</p>
                <span>{{$product->description}}</span>
                <p><small class="text-body-secondary">Last updated {{$product->created_at->diffForHumans()}}</small></p>
            </div>
        </div> --}}

        
        {{-- -------------------------- --}}
        
        {{-- -------------------------- --}}

        {{-- <div>
            <h4>Comments:</h4>
            @foreach($post->comments as $postComment)
                <div class="card mb-1">
                    <div class="card-body">
                        <h4 class="card-title d-flex justify-content-center">{{$postComment->content}}</h4>
                        <h5 class="card-title d-flex justify-content-end">Posted by: {{$postComment->user->name}}</h5>
                        <p class="card-text text-muted d-flex justify-content-end">{{$postComment->created_at->diffForHumans()}}</p>
                    </div>
                </div>
            @endforeach
        </div> --}}

    </div>
@endsection