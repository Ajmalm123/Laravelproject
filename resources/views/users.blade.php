@extends('layout')
@section('title')
    User
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center display-4">User</h1>
        </div>
        <div class="col-md-12">
            <form method="POST" action="{{route('store')}}">
                @csrf
                <label for="title">Name*</label>
                <input type="text" name="title" id="title" class="form-control mb-2"/>
                @error('title')
                    <small class="text-danger"> {{$message}}</small>
                @enderror
                <br>
                <label for="phone">Phone Number*</label>
                <input type="phone" name="phoneno" id="phone" class="form-control mb-2"/>
                @error('phoneno')
                    <small class="text-danger"> {{$message}}</small>
                @enderror
                <br>
                <label for="department">Department Name*</label>
                <input type="text" name="depname" id="title2" class="form-control mb-2"/>
                @error('depname')
                    <small class="text-danger"> {{$message}}</small>
                @enderror
                <br>
                <label for="designation">Designation Name*</label>
                <input type="text" name="desname" id="title3" class="form-control mb-2"/>
                <br>
                @error('desname')
                    <small class="text-danger"> {{$message}}</small>
                @enderror
                <input type="submit" class="btn btn-dark btn-block" value="Submit"/>
            </form>
        </div>
    </div>
</div>

@endsection