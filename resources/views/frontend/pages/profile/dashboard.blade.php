@extends('frontend.playouts')
@section('title')
  Dashboard Tim | KMIPN 2018
@endsection
@section('content')
  <div class="container default-container">
    <div class="panel panel-default panel-custom">
      <div class="panel-body">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#dashboard">Dashboard TIM</a></li>
          <li><a data-toggle="tab" href="#anggota" >Anggota</a></li>
          <li><a data-toggle="tab" href="#proposal">Proposal</a></li>
        </ul>
        <br>
        <div class="tab-content">
          <div id="dashboard" class="tab-pane fade in active">
              <h3 class="centered">Logo KMIPN</h3>
              <p class="centered lh-30">
                Selamat datang Ketua
                <br>
                Anda mendaftar sebagai : <b>Ketua Tim</b>
                <br>
                Status Verifikasi : <i class="label label-success">Sudah Diverifikasi</i>
                <br>
                <br>
                <a href="{{url('profile/info-tim')}}" class="btn btn-primary">Lihat/Ubah Informasi Tim </a>
              </p>
              <br>
              <b>Pengumuman</b>
              <ul>
                <li>Pastikan email yang Anda gunakan mendaftar adalah email yang sebenarnya dan dapat dihubungi karena apabila ada informasi terkait administrasi dan kompetisi akan dikirimkan ke email tersebut</li>
                <li>Informasi Tim hanya dapat diubah ketika data belum <b>diapprove/diverifikasi</b> oleh panitia, untuk menghindari kecurangan</li>
              </ul>
          </div>
          <div id="anggota" class="tab-pane fade">
            <a href="{{url('profile/tambah-anggota')}}" class="pull-right btn btn-success">
              <i class="fa fa-plus"></i> Tambah Anggota
            </a>
            <br>
            <br>
            <br>
            <table class="table table-striped">
              <thead>
                <th>NIM</th>
                <th>Nama</th>
                <th>E-mail</th>
                <th>Jurusan</th>
                <th>No. Telepon</th>
              </thead>
            </table>
          </div>
          <div id="proposal" class="tab-pane fade">
            <p class="centered">
              nama_proposal.docx
              <br>
              <br>
              <a href="#" class="btn btn-primary">Lihat Proposal</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
