@extends('layouts.admin')
@section('title')
    Show Tags {{ $tag->id }}
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
      <h4>Tag Id {{ $tag->id }}</h4>
      <div class="card-header-form">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
      </div>

    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-md">
          <tbody>
            <tr>
                <th> ID
                    <td>{{ $tag->id }}</td>
                </th>
            </tr>
            <tr>
                <th> Name (UZ)
                    <td>{{ $tag->name_uz }}</td>
                </th>
            </tr>
            <tr>
                <th> Name (RU)
                    <td>{{ $tag->name_ru }}</td>
                </th>
            </tr>
            <tr>
                <th> Created At
                    <td>{{ $tag->created_at }}</td>
                </th>
            </tr>

        </tbody></table>
      </div>
    </div>
    {{-- <div class="card-footer text-right">
      <nav class="d-inline-block">
        <ul class="pagination mb-0">
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
        </ul>
      </nav>
    </div> --}}
  </div>
</div>
@endsection
