@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Buat Pengguna</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-heading card-default">
                Data Form
            </div>
            <div class="card-block">
                <form action="{{ url('/users') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="no_card">No. KTP</label>
                                            <input type="text" class="form-control" name="no_card" id="no_card" placeholder="No. KTP" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="username">Nama User</label>
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Nama User" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fullname">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nama Lengkap" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Alamat Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">Kata Sandi</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Kata Sandi" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="job">Pekerjaan</label>
                                            <input type="text" class="form-control" name="job" id="job" placeholder="Pekerjaan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="position">Jabatan</label>
                                            <input type="text" class="form-control" name="position" id="position" placeholder="Jabatan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="address">Alamat Rumah</label>
                                            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Alamat Rumah" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="phone">No. HP</label>
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="No. HP" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="birth_place">Tempat Lahir</label>
                                            <input type="text" class="form-control" name="birth_place" id="birth_place" placeholder="Tempat Lahir" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="birth_day">Tanggal Lahir</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control pull-right datepicker" name="birth_day" id="birth_day" placeholder="Tanggal Lahir" value="{{ empty(old('date'))?date('Y-m-d'):old('date') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" >
                                        <div class="form-group">
                                            <label for="role">Role</label>
                                            <select class="form-control" name="role" id="select_role" required>
                                                <option value="">--Pilih Role--</option>
                                                <option value="admin">Admin</option>
                                                <option value="member">Member</option>
                                                <option value="Front Office">Front Office</option>
                                                <option value="Back Office">Back Office</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" id="option_licenses">
                        <div class="form-group">
                            <div id="checkall">
                                <h4>Hak Akses Pelayanan</h4>
                                @foreach($licenses as $item)
                                <input type="checkbox" name="licenses_id[]" class="cek" id="cek_{{ $item->id }}" value="{{ $item->id }}"> <label for="cek_{{ $item->id }}">{{ $item->title }}</label> <br>
                                @endforeach
                                <hr>
                                <input type="checkbox" id="ceksemua"> <label for="ceksemua">Pilih Semua</label>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer text-center">
                        <a href="{{ url('/users') }}" class="btn btn-warning">Cancel</a>
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

    $("#option_licenses").hide();
    $("#kasi_option_licenses").hide();
    $('#select_role').on('change', function() {
        if ($(this).val() == 'Back Office') {
            $("#option_licenses").show();
        }else{
            if ($(this).val() == 'Kasi') {
                $("#option_licenses").show();
            }else{
                $("#option_licenses").hide();
            }
        }
    });

    $('#ceksemua').click(function(){
        $('.cek').attr('checked',this.checked);
    });
    if($('.cek').length == $('.cek:checked').length){
        $('#ceksemua').attr('checked',true);
    }else{
        $('#ceksemua').attr('checked',false);
    }
});


</script>
@endsection
