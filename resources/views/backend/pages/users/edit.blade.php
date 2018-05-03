@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Ubah Pengguna</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-heading card-default">
                Data Form
            </div>
            <div class="card-block">
                <form action="{{ url('/backend/users/'.$data->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                         <div class="form-group">
                                            <label for="no_mahasiswa">Nomor Mahasiswa</label>
                                            <input type="number" class="form-control" name="no_mahasiswa" id="no_mahasiswa" value="{{ $data->no_mahasiswa }}" placeholder="Nomor Mahasiswa" required>
                                        </div>
                                   </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fullname">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="fullname" value="{{ $data->fullname }}" id="fullname" placeholder="Nama Lengkap" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Alamat Email</label>
                                            <input type="email" class="form-control" name="email" id="email" value="{{ $data->email }}" placeholder="Alamat Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">Kata Sandi <small>(optional)</small></label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Kata Sandi" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="asal_pt">Asal Perguruan Tinggi</label>
                                            <input type="text" class="form-control" name="asal_pt" id="asal_pt" value="{{ $data->asal_pt }}" placeholder="Asal Perguruan Tinggi" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                         <div class="form-group">
                                            <label for="jurusan">Jurusan</label>
                                            <input type="text" class="form-control" name="jurusan" value="{{ $data->jurusan }}" id="jurusan" placeholder="Jurusan" required>
                                         </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat Rumah</label>
                                            <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Alamat Rumah" required>{{ $data->alamat }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="no_telp">No. HP</label>
                                            <input type="number" class="form-control" name="no_telp" id="no_telp" value="{{ $data->no_telp }}" placeholder="No. HP" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="role">Role</label>
                                            <select class="form-control" name="role" id="select_role" required>
                                                @if ($data->role == 'admin')
                                                <option value="admin" selected>Admin</option>
                                                @else
                                                <option value="admin">Admin</option>
                                                @endif
                                                @if ($data->role == 'member')
                                                <option value="member" selected>Member</option>
                                                @else
                                                <option value="member">Member</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer text-center">
                        <a href="{{ url('/backend/users') }}" class="btn btn-warning">Cancel</a>
                        <button type="submit" name="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
