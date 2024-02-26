@extends('layouts.app')

@section('content')
    <div>
        @include('inc.header')
        <div class='mx-lg-5 mt-lg-4'>
            <div class="row">
                <div class="col-12 col-lg-3 mt-3 mt-lg-0">
                    <div class="row">
                        <div class="col-2 text-end">
                            <i class="fa-solid fa-gamepad fa-2xl" style="color: #478bff;"></i>
                        </div>
                        <div class="col">
                            <div class="media">
								<div class="media-body">
									<h5 className="FeaturedHeader" class="mt-0"><strong>The Most Reliable Game Galaxy</strong></h5>
									<p className="FeaturedContent">100% Original & Brand-New. Shop with Self-Belief!</p>
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mt-3 mt-lg-0">
                    <div class="row">
                        <div class="col-2 text-end">
                            <i class="fa-solid fa-truck-fast fa-2xl" style="color: #478bff;"></i>
                        </div>
                        <div class="col">
                            <div class="media">
								<div class="media-body">
									<h5 className="FeaturedHeader" class="mt-0"><strong>Fast Shipping Nationwide</strong></h5>
									<p className="FeaturedContent">Delivered within a day! Within Metro Manila, Express and Same-Day Delivery Available!</p>
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mt-3 mt-lg-0">
                    <div class="row">
                        <div class="col-2 text-end">
                            <i class="fa-solid fa-gifts fa-2xl" style="color: #478bff;"></i>
                        </div>
                        <div class="col">
                            <div class="media">
								<div class="media-body">
									<h5 className="FeaturedHeader" class="mt-0"><strong>Spend less on loyalty rewards</strong></h5>
									<p className="FeaturedContent">To begin earning Loyalty Rewards Points, log in!</p>
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mt-3 mt-lg-0">
                    <div class="row">
                        <div class="col-2 text-end">
                            <i class="fa-solid fa-shield-halved fa-2xl" style="color: #478bff;"></i>
                        </div>
                        <div class="col">
                            <div class="media">
								<div class="media-body">
									<h5 className="FeaturedHeader" class="mt-0"><strong>Completely secure and safe</strong></h5>
									<p className="FeaturedContent">Cutting Edge Technology Encrypts Every Transaction Completely!</p>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-3">

            <div class="row">
                <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                    <div 
                        class="card text-white" 
                        style="
                            min-height: 100%;
                            background-image: url('images/pictures/bggames.png');
                            background-size: cover;
                        "
                    >
                        <div class="card-body">
                            <h5 class="card-title">"A gaming laptop: where pixels meet portability, and victories unfold on the move"</h5>
                            <p class="card-text">A nimble laptop may travel with you, but a steadfast PC anchors your gaming dreams in the realms of true power.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                    <div 
                        class="card text-white" 
                        style="
                            min-height: 100%;
                            background-image: url('images/pictures/bgconsole.jpg');
                            background-size: cover;
                        "
                    >
                        <div class="card-body d-flex align-items-center">
                            <div>
                                <h5 class="card-title">"Console in hand, adventures command."</h5>
                                <p class="card-text">In the console's glow, gaming stories unfold—a saga played on the stage of pixels and progress.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 ">
                    <div 
                        class="card text-white" 
                        style="
                            min-height: 100%;
                            background-image: url('images/pictures/gow.jpg');
                            background-size: cover;
                        "
                    >
                        <div class="card-body">
                            <h5 class="card-title">"In the gaming world, pixels paint tales, and every click unveils epic trails."</h5>
                            <p class="card-text">In the vast tapestry of the gaming world, each pixel holds a story, and every challenge unveils a player's glory.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div id="carousel" class="carousel slide carousel-fade mb-5">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="header-img" src="{{URL('/images/headers2/a.png')}}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="header-img" src="{{URL('/images/headers2/b.png')}}" alt="">  
                    </div>
                    <div class="carousel-item">
                        <img class="header-img" src="{{URL('/images/headers2/c.png')}}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="header-img" src="{{URL('/images/headers2/d.png')}}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="header-img" src="{{URL('/images/headers2/e.png')}}" alt="">
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        
        @if(count($products) > 0)
            <div class="container text-center">
                <div class="row d-flex justify-content-center">
                    
                    <div class="card-group">
                        @foreach($products as $product)
                            
                            <div class="col-lg-4 col-8">
                                <div class="card" style="min-height: 100%;">
                                    <img src="{{asset('/images/products/'.$product->image)}}"  class="card-img-top text-ta" alt="{{$product->name}}">
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="text-dark stretched-link" style="text-decoration: none;" href="/products/{{$product->id}}">{{$product->name}}</a></h5>
                                        <p class="card-text text-truncate">{{$product->description}}</p>
                                    </div>
                                    <div class="card-footer">
                                        <!-- <small class="text-body-secondary">Last updated {{$product->created_at->diffForHumans()}}</small> -->
                                        <small class="text-body-secondary">{{$product->user->name}}</small>
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach
                        
                    </div>
                </div>
            </div>
        @else
            <div class="container">
                <h2>There are no products to show</h2>
            </div>
        @endif

        <div class="container mt-4 shadow bg-white sticky-top" style=''>
            <div class="row ">
                <div class="col mt-4 mb-2 text-center">
                    <h5>DISCOVER DAILY</h5>
                </div>
            </div>
            <div class="row bg-danger text-danger"><hr></div>
        </div>

        @if(count($allproducts) > 0)
        <div class="container mt-3">
            <div class="row">
                @foreach($allproducts as $product)
                    <div class="col-6 col-md-4 col-lg-2 mb-3">
                        <div class="card shadow" style="min-height: 100%;">
                            <img src="{{asset('/images/products/'.$product->image)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-truncate mb-0"><a class="text-dark stretched-link" style="text-decoration: none;" href="/products/{{$product->id}}">{{$product->name}}</a></h5>
                                <p><i class="fa-solid fa-shop text-success"></i> {{$product->user->name}}</p>
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
            @if(Auth::user())
                @if(Auth::user()->isSeller == 1)
                    <h2>There are no products to show</h2>
                    <a href="/products/addProduct" class="btn btn-info"> Create Product</a>
                @else
                    <h2>There are no products to show</h2>
                @endif
            @else
                <h2>There are no products to show</h2>
            @endif			
		</div>
	@endif
        
    </div>
@endsection