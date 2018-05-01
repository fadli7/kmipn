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
                                            <label for="nama_tim">Nama Tim</label>
                                            <input type="text" class="form-control" name="nama_tim" value="{{ $data->nama_tim }}" id="nama_tim" placeholder="Nama Tim" required>
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
                                            <input type="text" class="form-control" name="no_telp" id="no_telp" value="{{ $data->no_telp }}" placeholder="No. HP" required>
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
@section('js')
@parent

<script type="text/javascript">
$(document).ready(function(){

    var htmlItemList = $('table.table tbody tr').html();

    $('body').on('click', '.plus-detail', function(){
        var rowHTML = '<tr>' + htmlItemList + '</tr>';

        $('table.table tbody .plus-detail').removeClass('plus-detail').removeClass('btn-primary').addClass('remove-detail').addClass('btn-danger').html('<i class="fa fa-minus"></i>');
        $('table.table tbody').append(rowHTML);
        $('table.table tbody tr:last-child').find('span.select2').remove();
        $('.select2').select2();
    });

    $('body').on('click', '.remove-detail', function(){
        $(this).parent('td').parent('tr').remove();
    });

    $('#ceksemua').click(function(){
        if ($('.cek').attr('checked')) {
          $('.cek').attr('checked', false);
        }else {
          $('.cek').attr('checked', true);
        }
    });
    if($('.cek').length == $('.cek:checked').length){
        $('#ceksemua').attr('checked',true);
    }else{
        $('#ceksemua').attr('checked',false);
    }
});
</script>
@endsection
