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
                <form action="{{ url('/users/'.$data->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="no_card">No Card</label>
                                            <input type="text" class="form-control" name="no_card" id="no_card" placeholder="No Card" value="{{ $data->no_card }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="username">Nama User</label>
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Nama User" value="{{ $data->username }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fullname">Fullname</label>
                                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname" value="{{ $data->fullname }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $data->email }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">Change Password <small>(optional)</small></label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Change Password">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="job">Job</label>
                                            <input type="text" class="form-control" name="job" id="job" placeholder="Job" value="{{ $data->job }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="position">Position</label>
                                            <input type="text" class="form-control" name="position" id="position" placeholder="Position" value="{{ $data->position }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Address" required>{{ $data->address }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" value="{{ $data->phone }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="birth_place">Birth Place</label>
                                            <input type="text" class="form-control" name="birth_place" id="birth_place" placeholder="Birth Place" value="{{ $data->birth_place }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="birth_day">Birth Date</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control pull-right datepicker" name="birth_day" id="birth_day" placeholder="Birth Date" value="{{ date('Y-m-d', strtotime($data->birth_day)) }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="role">Status</label>
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
                                                @if ($data->role == 'Front Office')
                                                <option value="Front Office" selected>Front Office</option>
                                                @else
                                                <option value="Front Office">Front Office</option>
                                                @endif
                                                @if ($data->role == 'Back Office')
                                                <option value="Back Office" selected>Back Office</option>
                                                @else
                                                <option value="Back Office">Back Office</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($data->role == 'Kasi' or $data->role == 'Back Office')
                    <div class="col-md-12" id="option_licenses">
                        <div class="form-group">
                            <div id="checkall">
                                <h4>Hak Akses Pelayanan</h4>
                                @foreach($licenses as $item)
                                <input type="checkbox" name="licenses_id[]" class="cek" id="cek_{{ $item->id }}" value="{{ $item->id }}" checked> <label for="cek_{{ $item->id }}">{{ $item->title }}</label> <br>
                                @endforeach
                                @foreach($licenses2 as $item)
                                <input type="checkbox" name="licenses_id[]" class="cek" id="cek_{{ $item->id }}" value="{{ $item->id }}"> <label for="cek_{{ $item->id }}">{{ $item->title }}</label> <br>
                                @endforeach
                                <hr>
                                <input type="checkbox" id="ceksemua"> <label for="ceksemua">Pilih Semua</label>
                            </div>
                        </div>
                    </div>
                    @endif
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
