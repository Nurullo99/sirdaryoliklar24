@extends('layouts.admin')
@section('title')
      Advertising
@endsection
@section('content')

<div class="col-12 col-md-12 col-lg-12">

    <div class="card">

        @if (session('success'))
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>×</span>
            </button>
            {{ session('success') }}
            </div>
        </div>
    @endif
      <div class="card-header">
        <h4>Advertising table</h4>
        <div class="card-header-form">
            {{-- @empty($ads) --}}
            <a href="{{ route('admin.ads.create') }}" class="btn btn-primary">Create</a>
            {{-- @endempty --}}
        </div>

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tbody><tr>
              <th>#</th>
              <th>Image (Top)</th>
              <th>Image (Sidebar)</th>
              <th>Action</th>
            </tr>
            {{-- @foreach ($ads as $ad) --}}
            <tr>
              <td>1</td>
                <td ><img src="/site/images/ads/{{ $ads->image_1 }}" alt="" width="100px"></td>
                <td><img src="/site/images/ads/{{ $ads->image_2 }}" alt="" width="100px"></td>

                <td >
                    <form style="display: inline" action="{{ route('admin.ads.destroy',$ads->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button href="#" class="btn btn-danger" onclick="return confirm('Ochirishni xohlisizmi?')" type="submit">Delete</button>
                    </form>
                    <a href="{{ route('admin.ads.edit',$ads->id) }}" class="btn btn-success">Edit</a>
                    <a href="{{ route('admin.ads.show',$ads->id) }}" class="btn btn-warning">Show</a>
                </td>
              </tr>
            {{-- @endforeach --}}


          </tbody></table>
        </div>
      </div>
      <div class="card-footer text-right">
        <nav class="d-inline-block">
            {{-- {{ $categories->links() }} --}}

          {{-- <ul class="pagination mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
            </li>
          </ul> --}}
        </nav>
      </div>
    </div>
  </div>
@endsection
