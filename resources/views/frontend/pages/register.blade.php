@extends('frontend.layouts')
@section('title')
  Registrasi Peserta Lomba | KMIPN 2018
@endsection
@section('content')
  <div class="container-fluid bg-container">
    <div class="col-sm-offset-2 col-sm-8 col-xs-12">
        <div class="panel panel-default panel-login">
            <div class="panel-heading login-heading">
              <center>
                <i class="fa fa-user"></i>
                <br>
                KMIPN | TEAM REGISTER
              </center>
            </div>
            <div class="panel-body">
              <form role="form" action="{{ url('auth/register') }}" method="post">
              @csrf
                <div class="form-group">
                  <label>Kategori Lomba</label>
                  <select class="form-control" name="kategori" required>
                    <option disabled selected>Pilih Bidang Lomba</option>
                    <option value="Cipta Inovasi">Cipta Inovasi</option>
                    <option value="Bisnis TIK">Bisnis TIK</option>
                    <option value="Game Development">Game Development</option>
                    <option value="E-Goverment">E-Goverment</option>
                    <option value="IoT">IoT ( Internet of Things )</option>
                    <option value="Desain Animasi">Desain Animasi</option>
                    <option value="Keamanan Jaringan">Keamanan Jaringan</option>
                    <option value="Hackathon">Hackathon</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nama TIM</label>
                  <input type="text" name="nama_tim" required class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Asal Politeknik</label>
                  <input type="text" name="asal_pt" required class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Jurusan</label>
                  <input type="text" name="jurusan" required class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Nomor Mahasiswa</label>
                  <input type="text" name="no_mahasiswa" required class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Nama Ketua</label>
                  <input type="text" name="fullname" required class="form-control">
                </div>
                <div class="form-group">
                  <label for="">E-mail</label>
                  <input type="email" name="email" required class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" name="password" required class="form-control">
                </div>
                <div class="form-group">
                  <label for="">No. Telepon</label>
                  <div class="input-group">
                    <span class="input-group-addon">+62</span>
                    <input type="telp" name="no_telp" required class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Jenis Kelamin</label>
                  <div class="checkbox">
                    <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-7">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" required class="form-control">
                  </div>
                  <div class="form-group col-md-5">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" required class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <textarea name="alamat" rows="4" class="form-control" required></textarea>
                </div>
                <br>
                <button type="submit" class="form-control btn btn-default">Submit</button>
              </form>
            </div>
        </div>
        <br>
    </div>
  </div>
@endsection
