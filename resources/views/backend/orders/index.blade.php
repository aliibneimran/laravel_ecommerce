@extends('backend.layouts.app')

@section('title','All Orders')
@section('content')
<div class="card">
    <div class="card-body">
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('msg') }}
        </div>
        @endif
      {{-- <h5 class="card-title">Basic Datatable</h5> --}}
      <div class="table-responsive">
        <table id=""class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Order Number</th>
              <th>Sub Total</th>
              <th>Total</th>
              <th>Quantity</th>
              <th>Active</th>
            </tr>
          </thead>
          <tbody>
            @php $no = 1 @endphp
            @foreach ($orders as $item)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{$item->order_number}}</td>
              <td>{{$item->sub_total}}</td>
              <td>{{$item->total_amount}}</td>
              <td>{{$item->quantity}}</td>
              <td>
                <form action="{{ route('brands.destroy',$item->id) }}" method="POST">
                  <a class="btn btn-info" href="{{ route('brands.index', $item->id) }}" data-bs-toggle="modal" data-bs-target="#myModal">Show</a>
                  <a class="btn btn-primary" href="{{ route('brands.edit',$item->id) }}">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>

              </form>
                {{-- <a href=""><i class="fas fa-edit"></i></a>
                <a href="" onclick="return confirm('Are you sure to delete')"><i class="fas fa-trash-alt"></i></a> --}}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{-- {!! $brands->links() !!} --}}
        {{ $brands->links('pagination::bootstrap-5') }}
        {{-- {!! $brands->withQueryString()->links('pagination::bootstrap-5')!!} --}}
      </div>
    </div>
  </div>


<div class="modal fade" id="myModal" {{$item->id}} tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- Your form or other content goes here -->
              <p>Name: {{ $item->name }}</p>
              <p>Description: {{ $item->description }}</p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
          </div>
      </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
      var myModal = new bootstrap.Modal(document.getElementById('myModal'));

      document.querySelectorAll('.show-modal').forEach(function (link) {
          link.addEventListener('click', function () {
              var name = link.getAttribute('data-name');
              var description = link.getAttribute('data-description');

              document.getElementById('modalName').innerText = name;
              document.getElementById('modalDescription').innerText = description;

              myModal.show();
          });
      });
  });
</script>
@endsection
