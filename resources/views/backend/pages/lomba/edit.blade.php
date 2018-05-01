@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Ubah Data Lomba</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-heading card-default">
                Data Form
            </div>
            <div class="card-block">
                <form action="{{ url('/backend/lomba/'.$data->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="kategori">Kategori Lomba</label>
                                            <select class="form-control" name="kategori" id="" required>
                                                @if ($data->kategori == 'Cipta Inovasi')
                                                    <option value="Cipta Inovasi" selected>Cipta Inovasi</option>
                                                @else
                                                    <option value="Cipta Inovasi">Cipta Inovasi</option>
                                                @endif
                                                @if ($data->kategori == 'Bisnis TIK')
                                                    <option value="Bisnis TIK" selected>Bisnis TIK</option>
                                                @else
                                                    <option value="Bisnis TIK">Bisnis TIK</option>
                                                @endif
                                                @if ($data->kategori == 'Game Development')
                                                    <option value="Game Development" selected>Game Development</option>
                                                @else
                                                    <option value="Game Development">Game Development</option>
                                                @endif
                                                @if ($data->kategori == 'E-Goverment')
                                                    <option value="E-Goverment" selected>E-Goverment</option>
                                                @else
                                                    <option value="E-Goverment">E-Goverment</option>
                                                @endif
                                                @if ($data->kategori == 'IoT')
                                                    <option value="IoT" selected>IoT</option>
                                                @else
                                                    <option value="IoT">IoT</option>
                                                @endif
                                                @if ($data->kategori == 'Desain Animasi')
                                                    <option value="Desain Animasi" selected>Desain Animasi</option>
                                                @else
                                                    <option value="Desain Animasi">Desain Animasi</option>
                                                @endif
                                                @if ($data->kategori == 'Keamanan Jaringan')
                                                    <option value="Keamanan Jaringan" selected>Keamanan Jaringan</option>
                                                @else
                                                    <option value="Keamanan Jaringan">Keamanan Jaringan</option>
                                                @endif
                                                @if ($data->kategori == 'Hackathon')
                                                    <option value="Hackathon" selected>Hackathon</option>
                                                @else
                                                    <option value="Hackathon">Hackathon</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="pengumuman">Pengumuman</label>
                                            <textarea class="form-control summernote" name="pengumuman" id="pengumuman" rows="3" placeholder="pengumuman">{{ $data->pengumuman }}</textarea>
                                        </div>
                                    </div><br>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi Lomba</label>
                                            <textarea class="form-control summernote" name="deskripsi" id="deskripsi" rows="3" placeholder="deskripsi">{{ $data->deskripsi }}</textarea>
                                        </div>
                                    </div><br>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="peraturan">Peraturan Lomba</label>
                                            <textarea class="form-control summernote" name="peraturan" id="peraturan" rows="3" placeholder="peraturan">{{ $data->peraturan }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer text-center">
                        <a href="{{ url('/backend/lomba') }}" class="btn btn-warning">Cancel</a>
                        <button type="submit" name="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
