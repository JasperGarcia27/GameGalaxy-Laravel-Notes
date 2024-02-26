@extends('layouts.app')

@section('content')

	@if(count($products) > 0)
        <table class="table table-hover table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Availability</th>
                    <th scope="col" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td valign='middle' width='2%'>
                            {{$product->id}}
                        </td>
                        <td valign='middle' width='15%'>
                            {{$product->name}}
                        </td>
                        <td valign='middle' width='18%'>
                            {{$product->description}}
                        </td>
                        <td valign='middle' width='10%'>
                            <img src="{{asset('/images/products/'.$product->image)}}" style="max-height: 100px" alt="{{$product->name}}">
                        </td>
                        <th valign='middle' width='5%'>
                            ₱{{number_format($product->price, 2)}}
                        </th>
                        <td valign='middle' width='5%'>
                            {{$product->category}}
                        </td>
                        <td valign='middle' width='3%'>
                            {{-- {{$product->isActive}} --}}
                            @if($product->isActive == 1)
                                Avaialble
                            @else
                                Unavailable
                            @endif
                        </td>
                        <td valign='middle' width='2%'>
                            <a href="/products/{{$product->id}}/edit">
                                <i class="fa-solid fa-file-pen fa-xl text-primary"></i>
                                {{-- Edit --}}
                            </a>
                        </td>
                        <td valign='middle' width='2%'>
                            @if(Auth::user())
                                @if(Auth::user()->id == $product->user_id)
                                    @if($product->isActive == 1)
                                        <form method="POST" action="/products/{{$product->id}}/archive">
                                            @method("DELETE")
                                            @csrf
                                            <button 
                                                type="submit" 
                                                class="btn"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="Archive"
                                            >
                                                <i class="fa-solid fa-box-archive fa-xl text-danger"></i>
                                            </button >
                                        </form>
                                    @else
                                        <form method="POST" action="/products/{{$product->id}}/activate">
                                            @method("DELETE")
                                            @csrf
                                            <button 
                                                type="submit" 
                                                class="btn"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="Activate"
                                            >
                                                <i class="fa-solid fa-share-from-square fa-xl text-success"></i>
                                                {{-- Activate --}}
                                            </button >
                                        </form>
                                    @endif
                                @endif
                            @endif
                        </td>
                    </tr>
                @endforeach       
            </tbody>
        </table>
		

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