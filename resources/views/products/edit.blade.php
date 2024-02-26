@extends('layouts.app')

@section('content')
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }
    </style>
    <div class="addProduct container">
        <div class="row">
            <div class="col-8 offset-2">
                <form method="POST" action="/updateProducts/{{$product->id}}" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Product Name:</label>
                                <input type="text" name="name"  id="name" value="{{ $product->name }}" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Price:</label>
                                <input type="number" name="price" id="price" value="{{ $product->price }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Category:</label>
                            <select class="form-select" name="category" id="category" value="{{ $product->category }}" aria-label="Default select example">
                                <option selected>Select Category</option>
                                <option value="Desktop">Desktop</option>
                                <option value="Laptop">Laptop</option>
                                <option value="Console">Console</option>
                                <option value="Accessories">Accessories</option>
                            </select>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Image:</label>
                                <input type="file" name="image" id="image" value="{{ $product->image }}" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Description:</label>
                        <textarea type="text" name="description" id="description" rows="3" class="form-control" style="resize: none">{{ $product->description }}</textarea>
                    </div>
            
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
            
                </form>
            </div>
        </div>
    </div>
	

@endsection

