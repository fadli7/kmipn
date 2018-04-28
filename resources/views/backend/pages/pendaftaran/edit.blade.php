@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Detail Pendaftar</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <form id="example-form" action="{{ url('/backend/pendaftaran/'.$data->id) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="users_id" value="{{ $data->users_id }}">
                    <div>
                        <h3>Identitas Ketua & Tim</h3>
                        <section>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="asal_pt">Asal Perguruan Tinggi</label>
                                    <input type="text" class="form-control" name="asal_pt" id="asal_pt" value="{{ $data->users->asal_pt }}" placeholder="Asal Perguruan Tinggi" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="nama_tim">Nama Tim</label>
                                    <input type="text" class="form-control" name="nama_tim" value="{{ $data->users->nama_tim }}" id="nama_tim" placeholder="Nama Tim" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="fullname">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="fullname" value="{{ $data->users->fullname }}" id="fullname" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan" value="{{ $data->users->jurusan }}" id="jurusan" placeholder="Jurusan" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="email">Alamat Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ $data->users->email }}" placeholder="Alamat Email" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="alamat">Alamat Rumah</label>
                                    <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Alamat Rumah" required>{{ $data->users->alamat }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Tempat/Tgl Lahir</label>
                                    <div class="form-inline">
                                        <input type="text" class="form-control col-md-4" name="tempat_lahir" value="{{ $data->users->tempat_lahir }}" id="tempat_lahir" placeholder="Tempat Lahir" required>/
                                        <input type="date" class="form-control col-md-4" name="tgl_lahir" value="{{ $data->users->tgl_lahir }}" id="tgl_lahir" placeholder="Tgl Lahir" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
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
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="no_telp">No. HP</label>
                                    <input type="text" class="form-control" name="no_telp" id="no_telp" value="{{ $data->users->no_telp }}" placeholder="No. HP" required>
                                </div>
                            </div>
                        </section>

                        @if($data->fullname2 != NULL)
                        <h3>Anggota 2</h3>
                        <section>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="fullname2">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="fullname2" value="{{ $data->fullname2 }}" id="fullname2" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="jurusan2">Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan2" value="{{ $data->jurusan2 }}" id="jurusan2" placeholder="Jurusan" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="email2">Alamat Email</label>
                                    <input type="email" class="form-control" name="email2" id="email2" value="{{ $data->email2 }}" placeholder="Alamat Email" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="alamat2">Alamat Rumah</label>
                                    <textarea class="form-control" name="alamat2" id="alamat2" rows="3" placeholder="Alamat Rumah" required>{{ $data->alamat2 }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Tempat/Tgl Lahir</label>
                                    <div class="form-inline">
                                        <input type="text" class="form-control col-md-4" name="tempat_lahir2" value="{{ $data->tempat_lahir2 }}" id="tempat_lahir2" placeholder="Tempat Lahir" required>/
                                        <input type="date" class="form-control col-md-4" name="tgl_lahir2" value="{{ $data->tgl_lahir2 }}" id="" placeholder="Tgl Lahir" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin2" id="jenis_kelamin2" required>
                                        @if ($data->jenis_kelamin2 == 'Laki-laki')
                                        <option value="Laki-laki" selected>Laki-laki</option>
                                        @else
                                        <option value="Laki-laki">Laki-laki</option>
                                        @endif
                                        @if ($data->jenis_kelamin2 == 'Perempuan')
                                        <option value="Perempuan" selected>Perempuan</option>
                                        @else
                                        <option value="Perempuan">Perempuan</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="no_telp2">No. HP</label>
                                    <input type="text" class="form-control" name="no_telp2" id="no_telp2" value="{{ $data->no_telp2 }}" placeholder="No. HP" required>
                                </div>
                            </div>
                        </section>
                        @endif
                        @if($data->fullname3 != NULL)
                        <h3>Anggota 3</h3>
                        <section>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="fullname3">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="fullname3" value="{{ $data->fullname3 }}" id="fullname3" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="jurusan3">Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan3" value="{{ $data->jurusan3 }}" id="jurusan3" placeholder="Jurusan" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="email3">Alamat Email</label>
                                    <input type="email" class="form-control" name="email3" id="email3" value="{{ $data->email3 }}" placeholder="Alamat Email" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="alamat3">Alamat Rumah</label>
                                    <textarea class="form-control" name="alamat3" id="alamat3" rows="3" placeholder="Alamat Rumah" required>{{ $data->alamat3 }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Tempat/Tgl Lahir</label>
                                    <div class="form-inline">
                                        <input type="text" class="form-control col-md-4" name="tempat_lahir3" value="{{ $data->tempat_lahir3 }}" id="tempat_lahir" placeholder="Tempat Lahir" required>/
                                        <input type="date" class="form-control col-md-4" name="tgl_lahir3" value="{{ $data->tgl_lahir3 }}" id="" placeholder="Tgl Lahir" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin3" id="jenis_kelamin3" required>
                                        @if ($data->jenis_kelamin3 == 'Laki-laki')
                                        <option value="Laki-laki" selected>Laki-laki</option>
                                        @else
                                        <option value="Laki-laki">Laki-laki</option>
                                        @endif
                                        @if ($data->jenis_kelamin3 == 'Perempuan')
                                        <option value="Perempuan" selected>Perempuan</option>
                                        @else
                                        <option value="Perempuan">Perempuan</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="no_telp3">No. HP</label>
                                    <input type="text" class="form-control" name="no_telp3" id="no_telp3" value="{{ $data->no_telp3 }}" placeholder="No. HP" required>
                                </div>
                            </div>
                        </section>
                        @endif
                        @if($data->fullname4 != NULL)
                        <h3>Anggota 4</h3>
                        <section>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="fullname4">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="fullname4" value="{{ $data->fullname4 }}" id="fullname4" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="jurusan4">Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan4" value="{{ $data->jurusan4 }}" id="jurusan4" placeholder="Jurusan" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="email4">Alamat Email</label>
                                    <input type="email" class="form-control" name="email4" id="email4" value="{{ $data->email4 }}" placeholder="Alamat Email" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="alamat4">Alamat Rumah</label>
                                    <textarea class="form-control" name="alamat4" id="alamat4" rows="3" placeholder="Alamat Rumah" required>{{ $data->alamat4 }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Tempat/Tgl Lahir</label>
                                    <div class="form-inline">
                                        <input type="text" class="form-control col-md-4" name="tempat_lahir4" value="{{ $data->tempat_lahir4 }}" id="tempat_lahir" placeholder="Tempat Lahir" required>/
                                        <input type="date" class="form-control col-md-4" name="tgl_lahir4" value="{{ $data->tgl_lahir4 }}" id="" placeholder="Tgl Lahir" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin4" id="jenis_kelamin4" required>
                                        @if ($data->jenis_kelamin4 == 'Laki-laki')
                                        <option value="Laki-laki" selected>Laki-laki</option>
                                        @else
                                        <option value="Laki-laki">Laki-laki</option>
                                        @endif
                                        @if ($data->jenis_kelamin4 == 'Perempuan')
                                        <option value="Perempuan" selected>Perempuan</option>
                                        @else
                                        <option value="Perempuan">Perempuan</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="no_telp4">No. HP</label>
                                    <input type="text" class="form-control" name="no_telp4" id="no_telp4" value="{{ $data->no_telp4 }}" placeholder="No. HP" required>
                                </div>
                            </div>
                        </section>
                        @endif
                        @if($data->fullname5 != NULL)
                        <h3>Anggota 5</h3>
                        <section>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="fullname5">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="fullname5" value="{{ $data->fullname5 }}" id="fullname5" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="jurusan5">Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan5" value="{{ $data->jurusan5 }}" id="jurusan5" placeholder="Jurusan" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="email5">Alamat Email</label>
                                    <input type="email" class="form-control" name="email5" id="email5" value="{{ $data->email5 }}" placeholder="Alamat Email" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="alamat5">Alamat Rumah</label>
                                    <textarea class="form-control" name="alamat5" id="alamat5" rows="3" placeholder="Alamat Rumah" required>{{ $data->alamat5 }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Tempat/Tgl Lahir</label>
                                    <div class="form-inline">
                                        <input type="text" class="form-control col-md-5" name="tempat_lahir5" value="{{ $data->tempat_lahir5 }}" id="tempat_lahir" placeholder="Tempat Lahir" required>/
                                        <input type="date" class="form-control col-md-5" name="tgl_lahir5" value="{{ $data->tgl_lahir5 }}" id="" placeholder="Tgl Lahir" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin5" id="jenis_kelamin5" required>
                                        @if ($data->jenis_kelamin5 == 'Laki-laki')
                                        <option value="Laki-laki" selected>Laki-laki</option>
                                        @else
                                        <option value="Laki-laki">Laki-laki</option>
                                        @endif
                                        @if ($data->jenis_kelamin5 == 'Perempuan')
                                        <option value="Perempuan" selected>Perempuan</option>
                                        @else
                                        <option value="Perempuan">Perempuan</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="no_telp5">No. HP</label>
                                    <input type="text" class="form-control" name="no_telp5" id="no_telp5" value="{{ $data->no_telp5 }}" placeholder="No. HP" required>
                                </div>
                            </div>
                        </section>
                        @endif
                        <h3>Lain-lain</h3>
                        <section>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="kategori">Kategori Lomba</label>
                                    <select class="form-control" name="kategori" id="" required>
                                        @if ($data->users->kategori == 'Cipta Inovasi')
                                            <option value="Cipta Inovasi" selected>Cipta Inovasi</option>
                                        @else
                                            <option value="Cipta Inovasi">Cipta Inovasi</option>
                                        @endif
                                        @if ($data->users->kategori == 'Bisnis TIK')
                                            <option value="Bisnis TIK" selected>Bisnis TIK</option>
                                        @else
                                            <option value="Bisnis TIK">Bisnis TIK</option>
                                        @endif
                                        @if ($data->users->kategori == 'Game Development')
                                            <option value="Game Development" selected>Game Development</option>
                                        @else
                                            <option value="Game Development">Game Development</option>
                                        @endif
                                        @if ($data->users->kategori == 'E-Goverment')
                                            <option value="E-Goverment" selected>E-Goverment</option>
                                        @else
                                            <option value="E-Goverment">E-Goverment</option>
                                        @endif
                                        @if ($data->users->kategori == 'IoT')
                                            <option value="IoT" selected>IoT</option>
                                        @else
                                            <option value="IoT">IoT</option>
                                        @endif
                                        @if ($data->users->kategori == 'Desain Animasi')
                                            <option value="Desain Animasi" selected>Desain Animasi</option>
                                        @else
                                            <option value="Desain Animasi">Desain Animasi</option>
                                        @endif
                                        @if ($data->users->kategori == 'Keamanan Jaringan')
                                            <option value="Keamanan Jaringan" selected>Keamanan Jaringan</option>
                                        @else
                                            <option value="Keamanan Jaringan">Keamanan Jaringan</option>
                                        @endif
                                        @if ($data->users->kategori == 'Hackathon')
                                            <option value="Hackathon" selected>Hackathon</option>
                                        @else
                                            <option value="Hackathon">Hackathon</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            @if($data->file_proposal != NULL)
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="file_proposal">File Proposal</label><br>
                                        <a href="{{ url('proposal/'.$data->file_proposal) }}">{{ $data->file_proposal }}</a>
                                    </div>
                                </div>
                                @if ($data->status != 'Daftar')
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" name="status" id="" required>
                                                @if ($data->status == 'Tahap Seleksi')
                                                    <option value="Tahap Seleksi" selected>Tahap Seleksi</option>
                                                @else
                                                    <option value="Tahap Seleksi">Tahap Seleksi</option>
                                                @endif
                                                @if ($data->status == 'Lolos')
                                                    <option value="Lolos" selected>Lolos</option>
                                                @else
                                                    <option value="Lolos">Lolos</option>
                                                @endif
                                                @if ($data->status == 'Tidak Lolos')
                                                    <option value="Tidak Lolos" selected>Tidak Lolos</option>
                                                @else
                                                    <option value="Tidak Lolos">Tidak Lolos</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                @endif
                            @endif
                        </section>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success" id="submit" style="opacity:0;">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
  @parent
<script type="text/javascript">
    var form = $("#example-form").show();
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex)
        {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {
            $('#submit').click();
        }
    });
</script>
@endsection