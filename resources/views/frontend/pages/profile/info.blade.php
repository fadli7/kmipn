@extends('frontend.playouts')
@section('title')
  Dashboard Tim | KMIPN 2018
@endsection
@section('content')
  <div class="container default-container">
    <div class="panel panel-default panel-custom">
      <div class="panel-heading">
        <h4>Informasi Tim</h4>
      </div>
      <div class="panel-body">
        <form class="form-vertical" action="{{ url('/profile/submit_edit_tim/'.$tim->id) }}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
          <div class="form-group">
            <label>Nama Tim</label>
            <input type="text" name="nama_tim" value="{{ $tim->nama_tim }}" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Asal Politeknik</label>
            <input type="text" name="asal_pt" value="{{ $tim->asal_pt }}" class="form-control" required>
          </div>
          <div class="form-group">
            <label>File Proposal</label>
            <input type="file" name="file_proposal" class="form-control">
            <a href="{{ url('proposal/'.$tim->file_proposal) }}">{{ $tim->file_proposal }}</a>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
