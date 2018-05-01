@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Lomba</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <form action="{{ url('/backend/lomba') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="kategori">Kategori Lomba</label>
                                    <select class="form-control" name="kategori" id="" required>
                                        <option value="Cipta Inovasi">Cipta Inovasi</option>
                                        <option value="Bisnis TIK">Bisnis TIK</option>
                                        <option value="Game Development">Game Development</option>
                                        <option value="E-Goverment">E-Goverment</option>
                                        <option value="IoT">IoT</option>
                                        <option value="Desain Animasi">Desain Animasi</option>
                                        <option value="Keamanan Jaringan">Keamanan Jaringan</option>
                                        <option value="Hackathon">Hackathon</option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="col-md-5">
                                <div class="user-photo">
                                <input type="file" name="image" accept="image/*" id="image" style="opacity:0">
                                <input type="hidden" name="photo" id="photo">
                                <div class="text-center">Logo</div>
                                <div class="upload">
                                    <div class="upload-content">
                                    <img src="{{ url('/img/default.jpg') }}" id="preview-image" width="" class="img-responsive">
                                    </div>
                                </div>
                                </div>
                            </div><br>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="pengumuman">Pengumuman</label>
                                    <textarea class="form-control summernote" name="pengumuman" id="pengumuman" rows="3" placeholder="pengumuman"></textarea>
                                </div>
                            </div><br>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi Lomba</label>
                                    <textarea class="form-control summernote" name="deskripsi" id="deskripsi" rows="3" placeholder="deskripsi"></textarea>
                                </div>
                            </div><br>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="peraturan">Peraturan Lomba</label>
                                    <textarea class="form-control summernote" name="peraturan" id="peraturan" rows="3" placeholder="peraturan"></textarea>
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
