@extends('frontend.playouts')
@section('title')
  Edit Anggota Tim | KMIPN 2018
@endsection
@section('content')
  <div class="container default-container">
    <div class="panel panel-default panel-custom">
      <div class="panel-heading">
        <h4>Edit Anggota</h4>
      </div>
      <div class="panel-body">
        <form class="form-vertical" action="{{ url('/profile/submit_edit_anggota/'.$data->id) }}" method="post">
        {{ csrf_field() }}
          <div class="form-group">
            <label>NIM</label>
            <input type="text" name="no_mahasiswa" class="form-control" value="{{ $data->no_mahasiswa }}" required placeholder="Nomor Induk Mahasiswa">
          </div>
          <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" name="fullname" class="form-control" value="{{ $data->fullname }}" required placeholder="Nama Lengkap">
          </div>
          @if($data->role == "Ketua")
            <div class="form-group">
              <label>Kata Sandi <small>(optional)</small></label>
              <input type="password" name="password" class="form-control" placeholder="Kata Sandi">
            </div>
          @endif
          <div class="form-group">
            <label for="">E-mail</label>
            <input type="email" name="email" class="form-control" value="{{ $data->email }}" required placeholder="Email Aktif">
          </div>
          <div class="form-group">
            <label for="">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" value="{{ $data->jurusan }}" required placeholder="Bidang Studi">
          </div>
          <div class="row">
            <div class="form-group col-md-7">
              <label for="">Tempat Lahir</label>
              <input type="text" name="tempat_lahir" required class="form-control" value="{{ $data->tempat_lahir }}" placeholder="Tempat Lahir">
            </div>
            <div class="form-group col-md-5">
              <label for="">Tanggal Lahir</label>
              <input type="date" name="tgl_lahir" value="{{ $data->tgl_lahir }}" required class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <div class="checkbox">
            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                @if ($data->jenis_kelamin == 'Laki-laki')
                <option value="Laki-laki" selected>Laki-laki</option>
                @else
                <option value="Laki-laki">Laki-laki</option>
                @endif
                @if ($data->jenis_kelamin == 'Perempuan')
                <option value="Perempuan" selected>Perempuan</option>
                @else
                <option value="Perempuan">Perempuan</option>
                @endif
            </select>
            </div>
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <textarea name="alamat" rows="4" class="form-control" placeholder="Alamat lengkap">{{ $data->alamat }}</textarea>
          </div>
          <div class="form-group">
            <label for="">No. Telepon</label>
            <div class="input-group">
              <span class="input-group-addon">+62</span>
              <input type="telp" name="no_telp" value="{{ $data->no_telp }}" required class="form-control">
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
