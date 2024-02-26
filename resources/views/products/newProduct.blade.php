@extends('layouts.app')

@section('content')
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }
        
        .addProduct {
            height: 60vh;
        }
    </style>
    <div class="container">
        <div class="addProduct row d-flex align-items-center">
            <div class="col-8 offset-2">
                <form method="POST" action="/products" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Product Name:</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Price:</label>
                                <input type="number" name="price" id="price" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Category:</label>
                            <select class="form-select" name="category" id="category" aria-label="Default select example">
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
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Description:</label>
                        <textarea type="text" name="description" id="description" rows="3" class="form-control" style="resize: none"></textarea>
                    </div>
            
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary">Create Product</button>
                    </div>
            
                </form>
            </div>
        </div>
    </div>
	

@endsection

