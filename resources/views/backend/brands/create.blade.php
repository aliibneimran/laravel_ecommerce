@extends('backend.layouts.app')

@section('title','All Products')
@section('content')
<div class="card-body">
    <h5 class="card-title">Add Product</h5>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
         @endforeach
        </ul>
    </div>
    @endif
    <!-- No Labels Form -->
    <form class="row g-3" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
      @csrf
        <div class="col-md-12">
        <input type="text" class="form-control" placeholder="Product Name" name="name">
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" placeholder="Price" name="price">
      </div>
      <div class="col-md-6">
        <input type="number" class="form-control" placeholder="Quantity" name="quantity">
      </div>
      <div class="col-md-6">
          <input class="form-control" type="file" name="image">
      </div>
      <div class="col-12">
        <textarea name="description" cols="115" rows="5" placeholder="Description"></textarea>
        {{-- <div id="editor" style="height: 200px" name="description">
        </div> --}}
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </form><!-- End No Labels Form -->
  </div>
@endsection