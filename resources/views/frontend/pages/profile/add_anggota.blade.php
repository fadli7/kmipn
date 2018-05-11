@extends('frontend.playouts')
@section('title')
  Tambah Anggota Tim | KMIPN 2018
@endsection
@section('content')
  <div class="container default-container">
    <div class="panel panel-default panel-custom">
      <div class="panel-heading">
        <h4>Tambah Anggota Baru</h4>
      </div>
      <div class="panel-body">
        <form class="form-vertical" method="post">
          <div class="form-group">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" required placeholder="Nomor Induk Mahasiswa">
          </div>
          <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama" class="form-control" required placeholder="Nama Lengkap">
          </div>
          <div class="form-group">
            <label for="">E-mail</label>
            <input type="email" name="email" class="form-control" required placeholder="Email Aktif">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" required placeholder="8-16 karakter" minlength="8" maxlength="16">
          </div>
          <div class="form-group">
            <label for="">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" required placeholder="Bidang Studi">
          </div>
          <div class="row">
            <div class="form-group col-md-7">
              <label for="">Tempat Lahir</label>
              <input type="text" name="tempat_lahir" required class="form-control" placeholder="Tempat Lahir">
            </div>
            <div class="form-group col-md-5">
              <label for="">Tanggal Lahir</label>
              <input type="date" name="tgl_lahir" required class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <div class="checkbox">
              <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
              <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
            </div>
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <textarea name="alamat" rows="4" class="form-control" placeholder="Alamat lengkap"></textarea>
          </div>
          <div class="form-group">
            <label for="">No. Telepon</label>
            <div class="input-group">
              <span class="input-group-addon">+62</span>
              <input type="telp" name="no_telp" required class="form-control">
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
