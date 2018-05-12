@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Detail Pendaftar</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <form id="example-form" action="{{ url('/ecodeeepis/pendaftaran/'.$data->id) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="users_id" value="{{ $data->users_id }}">
                    <h3>Data Ketua</h3>
                    <table class="table table-bordered">
                        <tr>
                            <td>No Mahasiswa</td>
                            <td>{{ $data->users->no_mahasiswa }}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>{{ $data->users->fullname }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $data->users->email }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>{{ $data->users->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>{{ $data->users->jurusan }}</td>
                        </tr>
                        <tr>
                            <td>Tempat/Tgl Lahir</td>
                            <td>{{ $data->users->tempat_lahir }}/ {{ date('d-m-Y',strtotime($data->users->tgl_lahir)) }}</td>
                        </tr>
                        <tr>
                            <td>Nama Tim</td>
                            <td>{{ $data->nama_tim }}</td>
                        </tr>
                        <tr>
                            <td>Asal Poltek</td>
                            <td>{{ $data->asal_pt }}</td>
                        </tr>
                    </table>

                    @if($user_count > 1)
                            <h3>Data Anggota</h3>
                            <table class="table table-bordered">
                                <?php $index = 2; ?>
                                @foreach($anggota as $data)
                                    <tr>
                                        <td>No Mahasiswa</td>
                                        <td>{{ $data->no_mahasiswa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>{{ $data->fullname }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $data->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jurusan</td>
                                        <td>{{ $data->jurusan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat/Tgl Lahir</td>
                                        <td>{{ $data->tempat_lahir }}/ {{ date('d-m-Y',strtotime($data->tgl_lahir)) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Anggota Ke</td>
                                        <td>{{ $index }}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php $index++; ?>
                                @endforeach
                            </table>
                    @endif
                    <h3>Lain-lain</h3>
                            <table class="table table-bordered">
                                <tr>
                                    <td>File Proposal</td>
                                    <td><a href="{{ url('proposal/'.$data->file_proposal) }}">{{ $data->file_proposal }}</a></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
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
                                    </td>
                                </tr>
                            </table>
                            <button type="submit" name="submit" class="btn btn-success col-md-12">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop