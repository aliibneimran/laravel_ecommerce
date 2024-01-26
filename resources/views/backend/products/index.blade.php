@extends('backend.layouts.app')

@section('title','All Products')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="mb-4">
            <a href="{{URL('add-product')}}"><button class="btn btn-primary"><i class="fas fa-plus-circle">Add Product</i></button></a>
        </div>
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('msg') }}
        </div>
        @endif
      {{-- <h5 class="card-title">Basic Datatable</h5> --}}
      <div class="table-responsive">
        <table id="zero_config"class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Image</th>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Active</th>
            </tr>
          </thead>
          <tbody>
            @php $no = 1 @endphp
            @foreach ($products as $item)
            <tr>
              <td>{{$no++}}</td>
              <td><img src="{{ asset('uploads/' . $item->image) }}" alt="Image" width="50px" height="50px"></td>
              <td>{{$item->name}}</td>
              <td>{{$item->price}}</td>
              <td>{{$item->quantity}}</td>
              <td>
                <a href=""><i class="fas fa-edit"></i></a>
                <a href="" onclick="return confirm('Are you sure to delete')"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection