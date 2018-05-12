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
        <form class="form-vertical" method="post">
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
            <input type="file" name="proposal" class="form-control" required>
            <a href="{{ url('proposal/'.$tim->file_proposal) }}">{{ $tim->file_proposal }}</a>
          </div>
          <div class="form-group">
            Status Lomba : 
                  @if($tim->status == "Daftar")
                    <i class="label label-info">Daftar</i>
                  @elseif($tim->status == "Tahap Seleksi")
                    <i class="label label-warning">Tahap Seleksi</i>
                  @elseif($tim->status == "Lolos")
                    <i class="label label-success">Lolos</i>
                  @elseif($tim->status == "Tidak Lolos")
                    <i class="label label-success">Tidak Lolos</i>
                  @endif
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
