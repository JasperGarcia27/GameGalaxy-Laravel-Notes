@extends('layouts.app')

@section('content')
    <style>
        body{
        /* margin-top:20px; */
        background:#f7f8fa
        }

        .avatar-xxl {
            height: 7rem;
            width: 7rem;
        }

        .card {
            margin-bottom: 20px;
            -webkit-box-shadow: 0 2px 3px #eaedf2;
            box-shadow: 0 2px 3px #eaedf2;
        }

        .pb-0 {
            padding-bottom: 0!important;
        }

        .font-size-16 {
            font-size: 16px!important;
        }
        .avatar-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: #038edc;
            color: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-weight: 500;
            height: 100%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
        }

        .bg-soft-primary {
            background-color: rgba(3,142,220,.15)!important;
        }
        .rounded-circle {
            border-radius: 50%!important;
        }

        .nav-tabs-custom .nav-item .nav-link.active {
            color: #038edc;
        }
        .nav-tabs-custom .nav-item .nav-link {
            border: none;
        }
        .nav-tabs-custom .nav-item .nav-link.active {
            color: #038edc;
        }

        .avatar-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 12px;
        }

        .border-end {
            border-right: 1px solid #eff0f2 !important;
        }

        .d-inline-block {
            display: inline-block!important;
        }

        .badge-soft-danger {
            color: #f34e4e;
            background-color: rgba(243,78,78,.1);
        }

        .badge-soft-warning {
            color: #f7cc53;
            background-color: rgba(247,204,83,.1);
        }

        .badge-soft-success {
            color: #51d28c;
            background-color: rgba(81,210,140,.1);
        }

        .avatar-group .avatar-group-item {
            margin-left: -14px;
            border: 2px solid #fff;
            border-radius: 50%;
            -webkit-transition: all .2s;
            transition: all .2s;
        }

        .avatar-sm {
            height: 2rem;
            width: 2rem;
        }

        .nav-tabs-custom .nav-item {
            position: relative;
            color: #343a40;
        }

        .nav-tabs-custom .nav-item .nav-link.active:after {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .nav-tabs-custom .nav-item .nav-link::after {
            content: "";
            background: #038edc;
            height: 2px;
            position: absolute;
            width: 100%;
            left: 0;
            bottom: -2px;
            -webkit-transition: all 250ms ease 0s;
            transition: all 250ms ease 0s;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        .badge-soft-secondary {
            color: #74788d;
            background-color: rgba(116,120,141,.1);
        }

        .badge-soft-secondary {
            color: #74788d;
        }

        .work-activity {
            position: relative;
            color: #74788d;
            padding-left: 5.5rem
        }

        .work-activity::before {
            content: "";
            position: absolute;
            height: 100%;
            top: 0;
            left: 66px;
            border-left: 1px solid rgba(3,142,220,.25)
        }

        .work-activity .work-item {
            position: relative;
            border-bottom: 2px dashed #eff0f2;
            margin-bottom: 14px
        }

        .work-activity .work-item:last-of-type {
            padding-bottom: 0;
            margin-bottom: 0;
            border: none
        }

        .work-activity .work-item::after,.work-activity .work-item::before {
            position: absolute;
            display: block
        }

        .work-activity .work-item::before {
            content: attr(data-date);
            left: -157px;
            top: -3px;
            text-align: right;
            font-weight: 500;
            color: #74788d;
            font-size: 12px;
            min-width: 120px
        }

        .work-activity .work-item::after {
            content: "";
            width: 10px;
            height: 10px;
            border-radius: 50%;
            left: -26px;
            top: 3px;
            background-color: #fff;
            border: 2px solid #038edc
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css" integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <div class="container mt-5">
        @if(Auth::user()->isSeller == 1 || Auth::user()->isAdmin == 1)
            <div class="row">
                <!-- USER INFO -->
                @if(Auth::user()->isSeller == 1)
                    <div class="col-xl-8">
                @else  
                    <div class="col-xl-12">
                @endif
                    <div class="card" style="min-height: 100%;">
                        <div class="card-body pb-0">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                <img src="{{ Auth::user()->image }}" class="img-fluid shadow" alt="">
                                    <div class="text-center border-end">
                                        @if(Auth::user()->image == null)
                                            <!-- <img src="https://static.thenounproject.com/png/629576-200.png" class="img-fluid shadow avatar-xxl rounded-circle" alt=""> -->
                                            <img src="https://static.thenounproject.com/png/629576-200.png" class="img-fluid shadow avatar-xxl rounded-circle" alt="{{ Auth::user()->image }}">
                                        @else
                                            <img src="{{asset('/images/profile/'.Auth::user()->image)}}" class="img-fluid shadow avatar-xxl rounded-circle" alt="{{ Auth::user()->image }}">
                                        @endif
                                        
                                        <h4 class="text-primary font-size-20 mt-3 mb-2">{{ Auth::user()->name }}</h4>
                                        @if (Auth::user()->isSeller == 1)
                                            <h5 class="text-muted font-size-13 mb-0">Seller</h5>
                                        @elseif (Auth::user()->isAdmin == 1)
                                            <h5 class="text-muted font-size-13 mb-0">Admin</h5>
                                        @endif
                                        
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-9">
                                    <div class="ms-3">
                                        <div>
                                            <h4 class="card-title mb-2">Biography</h4>
                                            <p class="mb-0 text-muted">The concept of e-commerce emerged in the 1960s with the development of electronic data interchange (EDI), which enabled businesses to exchange documents electronically. However, it wasn't until the 1990s that e-commerce began to gain widespread popularity with the rise of the internet and the development of secure online payment systems..</p>
                                            <!-- <form method="POST" action="" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row my-5">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Image:</label>
                                                            <input type="file" name="profile" id="profile" accept='.jpeg, .png, .jpg' class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-2">
                                                    <button type="submit" class="btn btn-primary">Create Product</button>
                                                </div>
                                        
                                            </form> -->
                                        </div>
                                        <div class="row my-4">
                                            <div class="col-md-12">
                                                <div>
                                                    <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i>{{ Auth::user()->email }}
                                                    </p>
                                                    <p class="text-muted fw-medium mb-0"><i class="mdi mdi-phone-in-talk-outline me-2"></i>418-955-4703
                                                    </p>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->

                                        @if(Auth::user()->isSeller == 1)
                                            <ul class="nav nav-tabs nav-tabs-custom border-bottom-0 mt-3 nav-justfied" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link px-4 active" data-bs-toggle="tab" href="#product-tab" role="tab" aria-selected="false" tabindex="-1">
                                                        <span class="d-block d-sm-none"><i class="mdi mdi-menu-open"></i></span>
                                                        <span class="d-none d-sm-block">Product
                                                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                                {{count($products)}}
                                                            </span> 
                                                        <span class="badge text-bg-danger"></span></span>
                                                    </a>
                                                </li><!-- end li -->

                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link px-4 "  href="#other-tab">
                                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                        <span class="d-none d-sm-block">Others</span>
                                                    </a>
                                                </li><!-- end li -->
                                                
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link px-4 "  href="https://bootdey.com/snippets/view/profile-with-team-section" target="__blank">
                                                        <span class="d-block d-sm-none"><i class="mdi mdi-account-group-outline"></i></span>
                                                        <span class="d-none d-sm-block">Team</span>
                                                    </a>
                                                </li><!-- end li -->
                                            </ul><!-- end ul -->
                                        @else
                                            <ul class="nav nav-tabs nav-tabs-custom border-bottom-0 mt-3 nav-justfied" role="tablist">

                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link px-4 active" data-bs-toggle="tab" href="#product-tab" role="tab" aria-selected="false" tabindex="-1">
                                                        <span class="d-block d-sm-none"><i class="mdi mdi-menu-open"></i></span>
                                                        <span class="d-none d-sm-block">Accounts</span>
                                                    </a>
                                                </li><!-- end li -->

                                                <!-- <li class="nav-item" role="presentation">
                                                    <a class="nav-link px-4 "  href="#other-tab">
                                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                        <span class="d-none d-sm-block">Products</span>
                                                    </a>
                                                </li>
                                                
                                                 <li class="nav-item" role="presentation">
                                                    <a class="nav-link px-4 "  href="https://bootdey.com/snippets/view/profile-with-team-section" target="__blank">
                                                        <span class="d-block d-sm-none"><i class="mdi mdi-account-group-outline"></i></span>
                                                        <span class="d-none d-sm-block">Team</span>
                                                    </a>
                                                </li> -->
                                            </ul><!-- end ul -->
                                        @endif
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <!-- END USER INFO -->

                @if(Auth::user()->isSeller == 1)
                    <!-- CATEGORIES -->
                    <div class="col-xl-4 mt-3 mt-lg-0">
                        <div class="card" style="min-height: 100%;">
                            <div class="card-body">
                                <div>
                                    <h4 class="card-title mb-4">Categories</h4>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"  checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            All
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Desktop
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Laptop
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Console
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Accessories
                                        </label>
                                    </div>


                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <!-- END CATEGORIES -->
                    
                    <!-- PRODUCTS -->
                    <div class="col-xl-12 mt-3 mt-lg-4">
                        <div class="card">
                            <div class="tab-content p-4">
                                <div class="tab-pane active show" id="product-tab" role="tabpanel">
                                    <!-- <h4 class="card-title mb-4">Product</h4> -->
                                    @if(count($products) > 0)
                                        <table class="table table-hover text-center">
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
                                                            <img src="{{asset('/images/products/'.$product->image)}}" style="max-height: 100px" alt="...">
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
                                                            <!-- <a href='' data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"> -->
                                                                <i class="fa-solid fa-file-pen fa-xl text-primary"></i>
                                                                {{-- Edit --}}
                                                            </a>
                                                        </td>
                                                        

                                                        <div 
                                                            class="offcanvas offcanvas-start" 
                                                            data-bs-scroll="true" 
                                                            tabindex="-1" 
                                                            id="offcanvasWithBothOptions" 
                                                            aria-labelledby="offcanvasWithBothOptionsLabel"
                                                        >
                                                            <div class="offcanvas-header">
                                                                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Update Product</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                            </div>
                                                            <div class="offcanvas-body">
                                                            <style>
                                                                input[type=number]::-webkit-inner-spin-button,
                                                                input[type=number]::-webkit-outer-spin-button {
                                                                    -webkit-appearance: none;
                                                                }
                                                            </style>
                                                                <div class="addProduct">
                                                                    <div class="row">
                                                                        <div class="col">
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
                                                            </div>
                                                        </div>


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
                                </div><!-- end Product tab panel -->

                            </div>

                        </div><!-- end card -->
                    </div>
                    <!-- END PRODUCTS -->
                @elseif(Auth::user()->isAdmin == 1)
                    <!-- ACCOUNTS -->
                    <div class="col-xl-12 mt-3 mt-lg-4">
                        <div class="card">
                            <div class="tab-content p-4">
                                <div class="tab-pane active show" id="account-tab" role="tabpanel">
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button 
                                                    class="accordion-button" 
                                                    type="button" 
                                                    data-bs-toggle="collapse" 
                                                    data-bs-target="#userAccounts" 
                                                    aria-expanded="true" 
                                                    aria-controls="userAccounts"
                                                >
                                                    User Accounts
                                                </button>
                                            </h2>
                                            <div 
                                                id="userAccounts" 
                                                class="accordion-collapse collapse show"
                                            >
                                                <div class="accordion-body">
                                                    @if(count($users) > 0)
                                                        <table class="table table-hover table-bordered text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">ID</th>
                                                                    <th scope="col">Name</th>
                                                                    <th scope="col">Email</th>
                                                                    <th scope="col">Order</th>
                                                                    <th colspan="2"scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($users as $user)
                                                                    <tr>
                                                                        <td valign='middle' width='2%'>
                                                                            {{$user->id}}
                                                                        </td>
                                                                        <td valign='middle' width='15%'>
                                                                            {{$user->name}}
                                                                        </td>
                                                                        <td valign='middle' width='18%'>
                                                                            {{$user->email}}
                                                                        </td>
                                                                        <td valign='middle' width='5%'>
                                                                            {{$user->orders->count()}}
                                                                        </td>
                                                                        <td valign='middle' width='5%'>
                                                                            @if(Auth::user()->isAdmin == 1)
                                                                                <form method="POST" action="/update-profile/{{$user->id}}/seller">
                                                                                    @method("DELETE")
                                                                                    @csrf
                                                                                    <button 
                                                                                        type="submit" 
                                                                                        class="btn"
                                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                                        data-bs-custom-class="custom-tooltip"
                                                                                        data-bs-title="Promote as Seller"
                                                                                    >
                                                                                        <i class="fa-solid fa-store fa-xl text-success"></i>
                                                                                    </button >
                                                                                </form>
                                                                            @endif
                                                                        </td>
                                                                        <td valign='middle' width='5%'>
                                                                            @if(Auth::user()->isAdmin == 1)
                                                                                <form method="POST" action="/update-profile/{{$user->id}}/admin">
                                                                                    @method("DELETE")
                                                                                    @csrf
                                                                                    <button 
                                                                                        type="submit" 
                                                                                        class="btn"
                                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                                        data-bs-custom-class="custom-tooltip"
                                                                                        data-bs-title="Promote as Seller"
                                                                                    >
                                                                                        <i class="fa-solid fa-user-secret fa-xl text-danger"></i>
                                                                                    </button >
                                                                                </form>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                @endforeach       
                                                            </tbody>
                                                        </table>
                                                    @else 
                                                        <div>
                                                            <h2>There are no accounts to show</h2>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button 
                                                    class="accordion-button" 
                                                    type="button" 
                                                    data-bs-toggle="collapse" 
                                                    data-bs-target="#sellerAccounts" 
                                                    aria-expanded="true" 
                                                    aria-controls="sellerAccounts"
                                                >
                                                    Seller Accounts
                                                </button>
                                            </h2>
                                            <div 
                                                id="sellerAccounts" 
                                                class="accordion-collapse collapse show"
                                            >
                                                <div class="accordion-body">
                                                    @if(count($sellers) > 0)
                                                        <table class="table table-hover table-bordered text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">ID</th>
                                                                    <th scope="col">Name</th>
                                                                    <th scope="col">Email</th>
                                                                    <th scope="col">Products</th>
                                                                    <th colspan="2"scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($sellers as $seller)
                                                                    <tr>
                                                                        <td valign='middle' width='2%'>
                                                                            {{$seller->id}}
                                                                        </td>
                                                                        <td valign='middle' width='15%'>
                                                                            {{$seller->name}}
                                                                        </td>
                                                                        <td valign='middle' width='18%'>
                                                                            {{$seller->email}}
                                                                        </td>
                                                                        <td valign='middle' width='5%'>
                                                                            {{$seller->products->count()}}
                                                                        </td>
                                                                        <td valign='middle' width='5%'>
                                                                            @if(Auth::user()->isAdmin == 1)
                                                                                <form method="POST" action="/update-profile/{{$seller->id}}/user">
                                                                                    @method("DELETE")
                                                                                    @csrf
                                                                                    <button 
                                                                                        type="submit" 
                                                                                        class="btn"
                                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                                        data-bs-custom-class="custom-tooltip"
                                                                                        data-bs-title="Promote as Seller"
                                                                                    >
                                                                                        <i class="fa-solid fa-users fa-xl text-primary"></i>
                                                                                    </button >
                                                                                </form>
                                                                            @endif
                                                                        </td>
                                                                        <td valign='middle' width='5%'>
                                                                            @if(Auth::user()->isAdmin == 1)
                                                                                <form method="POST" action="/update-profile/{{$seller->id}}/admin">
                                                                                    @method("DELETE")
                                                                                    @csrf
                                                                                    <button 
                                                                                        type="submit" 
                                                                                        class="btn"
                                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                                        data-bs-custom-class="custom-tooltip"
                                                                                        data-bs-title="Promote as Seller"
                                                                                    >
                                                                                        <i class="fa-solid fa-user-secret fa-xl text-danger"></i>
                                                                                    </button >
                                                                                </form>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                @endforeach       
                                                            </tbody>
                                                        </table>
                                                    @else 
                                                        <div>
                                                            <h2>There are no accounts to show</h2>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button 
                                                    class="accordion-button" 
                                                    type="button" 
                                                    data-bs-toggle="collapse" 
                                                    data-bs-target="#adminAccounts" 
                                                    aria-expanded="true" 
                                                    aria-controls="adminAccounts"
                                                >
                                                    Admin Accounts
                                                </button>
                                            </h2>
                                            <div 
                                                id="adminAccounts"
                                                class="accordion-collapse collapse show"
                                            >
                                                <div class="accordion-body">
                                                    @if(count($admins) > 0)
                                                        <table class="table table-hover table-bordered text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">ID</th>
                                                                    <th scope="col">Name</th>
                                                                    <th scope="col">Email</th>
                                                                    <th colspan="2"scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($admins as $admin)
                                                                    <tr>
                                                                        <td valign='middle' width='2%'>
                                                                            {{$admin->id}}
                                                                        </td>
                                                                        <td valign='middle' width='15%'>
                                                                            {{$admin->name}}
                                                                        </td>
                                                                        <td valign='middle' width='18%'>
                                                                            {{$admin->email}}
                                                                        </td>
                                                                        
                                                                        <td valign='middle' width='5%'>
                                                                            @if(Auth::user()->isAdmin == 1)
                                                                                <form method="POST" action="/update-profile/{{$admin->id}}/user">
                                                                                    @method("DELETE")
                                                                                    @csrf
                                                                                    <button 
                                                                                        type="submit" 
                                                                                        class="btn"
                                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                                        data-bs-custom-class="custom-tooltip"
                                                                                        data-bs-title="Promote as Seller"
                                                                                    >
                                                                                        <i class="fa-solid fa-users fa-xl text-primary"></i>
                                                                                    </button >
                                                                                </form>
                                                                            @endif
                                                                        </td>
                                                                        <td valign='middle' width='5%'>
                                                                            @if(Auth::user()->isAdmin == 1)
                                                                                <form method="POST" action="/update-profile/{{$admin->id}}/seller">
                                                                                    @method("DELETE")
                                                                                    @csrf
                                                                                    <button 
                                                                                        type="submit" 
                                                                                        class="btn"
                                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                                        data-bs-custom-class="custom-tooltip"
                                                                                        data-bs-title="Promote as Seller"
                                                                                    >
                                                                                        <i class="fa-solid fa-store fa-xl text-success"></i>
                                                                                    </button >
                                                                                </form>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                @endforeach       
                                                            </tbody>
                                                        </table>
                                                    @else 
                                                        <div>
                                                            <h2>There are no accounts to show</h2>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- end Product tab panel -->

                            </div>

                        </div><!-- end card -->
                    </div>
                    <!-- END ACCOUNTS -->
                @endif

                

            </div>
        @else
            <div class="row">
                <!-- USER INFO -->
                <div class="col-xl-12">
                    <div class="card" style="min-height: 100%;">
                        <div class="card-body pb-0">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="text-center border-end">
                                        @if(Auth::user()->image == null)
                                            <!-- <img src="https://static.thenounproject.com/png/629576-200.png" class="img-fluid shadow avatar-xxl rounded-circle" alt=""> -->
                                            <img src="https://static.thenounproject.com/png/629576-200.png" class="img-fluid shadow avatar-xxl rounded-circle" alt="{{ Auth::user()->image }}">
                                        @else
                                            <img src="{{asset('/images/profile/'.Auth::user()->image)}}" class="img-fluid shadow avatar-xxl rounded-circle" alt="{{ Auth::user()->image }}">
                                        @endif
                                        <h4 class="text-primary font-size-20 mt-3 mb-2">{{ Auth::user()->name }}</h4>
                                        @if (Auth::user()->isSeller == 1)
                                            <h5 class="text-muted font-size-13 mb-0">Seller</h5>
                                        @endif
                                        
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-9">
                                    <div class="ms-3">
                                        <div>
                                            <h4 class="card-title mb-2">Biography</h4>
                                            <p class="mb-0 text-muted">The concept of e-commerce emerged in the 1960s with the development of electronic data interchange (EDI), which enabled businesses to exchange documents electronically. However, it wasn't until the 1990s that e-commerce began to gain widespread popularity with the rise of the internet and the development of secure online payment systems..</p>
                                        </div>
                                        <div class="row my-4">
                                            <div class="col-md-12">
                                                <div>
                                                    <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i>{{ Auth::user()->email }}
                                                    </p>
                                                    <p class="text-muted fw-medium mb-0"><i class="mdi mdi-phone-in-talk-outline me-2"></i>418-955-4703
                                                    </p>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->

                                        <ul class="nav nav-tabs nav-tabs-custom border-bottom-0 mt-3 nav-justfied" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link px-4 active" data-bs-toggle="tab" href="#order-tab" role="tab" aria-selected="false" tabindex="-1">
                                                    <span class="d-block d-sm-none"><i class="mdi mdi-menu-open"></i></span>
                                                    <span class="d-none d-sm-block">Ordered Products</span>
                                                </a>
                                            </li><!-- end li -->
                                        </ul><!-- end ul -->
                                            
                                        
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <!-- END USER INFO -->

                <!-- ORDER PRODUCTS -->
                <div class="col-xl-12 mt-3 mt-lg-4">
                    <div class="card">
                        <div class="tab-content p-4">
                            <div class="tab-pane active show" id="product-tab" role="tabpanel">
                                @if(count($orders) > 0)
                                    <table class="table table-hover">
                                        <tbody>
                                            @foreach($orders as $order)
                                                <tr>
                                                    <div class="row">
                                                        <td valign='middle' width='100%'>
                                                            <div class="container">
                                                                <div class="row mb-2">
                                                                    <div class="col-12 col-lg-3 text-center text-lg-end">
                                                                        <img src="{{asset('/images/products/'.$order->image)}}" style="max-height: 200px" alt="...">
                                                                    </div>
                                                                    <div class="col-12 col-lg-9 mt-3 mt-lg-0 d-flex align-items-center">
                                                                        <div class="row">
                                                                            <h4><b>{{$order->name}}</b></h4>
                                                                            <h6 class="text-success"><strong>₱{{number_format($order->price, 2)}}</strong></h6>
                                                                            <p>x{{$order->quantity}}</p>
                                                                            
                                                                            <p class="my-0 text-muted">{{ \Carbon\Carbon::parse($order->created_at)->format('F d, Y') }}</p>
                                                                            <small class="text-muted">{{$order->created_at->diffForHumans()}}</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mx-lg-5">
                                                                    <hr class="mb-0"/>
                                                                    <div class="col mt-1">
                                                                        <div class="row">
                                                                            <div class="col-3 text-center text-lg-end">Total: </div>
                                                                            <div class="col-9">
                                                                                <h4 class="text-danger"><b>₱{{number_format($order->bill, 2)}}</b></h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </div>
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
                            </div><!-- end Product tab panel -->
                        </div>
                    </div><!-- end card -->
                </div>
                <!-- END ORDER PRODUCTS -->
            </div>                                    
        @endif
    </div>
    
@endsection