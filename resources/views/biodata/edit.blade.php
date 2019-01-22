@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Update Biodata</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Ups!</strong> there where some problem with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('biodata.update', $biodata->id) }}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Nama Siswa</strong>
          <input type="text" name="nama" class="form-control" value="{{$biodata->nama}}">
        </div>
        <div class="col-md-12">
          <strong>Kelas</strong>
          <input type="text" name="kelas" class="form-control" value="{{$biodata->kelas}}">
        </div>
        <div class="col-md-12">
          <strong>Alamat</strong>
          <textarea class="form-control" value="{{$biodata->alamat}}" name="alamat" rows="8" cols="80"></textarea>
        </div>
        <div class="col-md-12"><br>
          <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Save</button>
        </div>
      </div>
    </form>

  </div>
@endsection
