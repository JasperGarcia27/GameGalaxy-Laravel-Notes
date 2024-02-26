@extends('layouts.app')

@section('content')
    <div class="addProduct container">
        <div class="row justify-content-center align-items-center" style="height: 75vh;">
            <div class="col-8 offset-2">
                <form method="POST" action="/update-profile/{{ Auth::user()->id }}" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Image:</label>
                                <input type="file" name="image" id='image' accept='.jpeg, .png, .jpg' class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" name="name"  id="name" value="{{ Auth::user()->name }}" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    
            
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
            
                </form>
            </div>
        </div>
    </div>
    <script>

    </script>
	

@endsection

