@extends('layout')
@section('title')
    Designation
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center display-4">Designation</h1>
        </div>
        <div class="col-md-12">
            <form method="POST" action="#">
                <label for="title">Name*</label>
                <input type="text" name="title" id="title" class="form-control mb-2"/>
                
                <input type="submit" class="btn btn-dark btn-block" value="Submit"/>
            </form>
        </div>
    </div>
</div>
@endsection
