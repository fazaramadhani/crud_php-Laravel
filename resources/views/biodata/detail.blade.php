@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Detail Siswa</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Nama Siswa : </strong> {{$biodata->nama}}
        </div>
        <div class="form-group">
          <strong>Kelas : </strong> {{$biodata->kelas}}
        </div>
        <div class="form-group">
          <strong>Alamat Siswa : </strong> {{$biodata->alamat}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection
