@extends('layout.main')

@section('title','Daftar Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
    <h1 class="mt-2">Daftar Mahasiswa</h1>
    <a href="{{ url('/students/create')}}" class="btn btn-primary my-3">Tambah Data</a>
    @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
    @endif
    <ul class="list-group">
        @foreach ($students as $student)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$student -> nama}}
        <a href="{{url('/students/'.$student->id)}}" class="badge badge-info">Detail</a>
        </li>
        @endforeach
      </ul>
    </div>
    </div>
  </div>
</div>
@endsection

  