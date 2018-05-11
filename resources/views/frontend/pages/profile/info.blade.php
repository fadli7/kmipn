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
            <input type="text" name="nama_tim" value="" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Asal Politeknik</label>
            <input type="text" name="asal_pt" value="" class="form-control" required>
          </div>
          <div class="form-group">
            <label>File Proposal</label>
            <input type="file" name="proposal" value="" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Status</label>
            <p class="label label-warning">Belum diverifikasi</p>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
