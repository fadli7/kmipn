@extends('frontend.layouts')

<section class="hero is-transparent is-fullwidth awalan">
    @include('frontend.partials.navbar')
    <div class="hero-body"></div>
</section>

@section('title')
  Dashboard Tim | KMIPN 2018
@endsection
{{--@section('content')--}}
  <div class="container default-container">
    <div class="panel panel-default panel-custom">
      <div class="panel-body">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#dashboard">Dashboard TIM</a></li>
          <li><a data-toggle="tab" href="#anggota" >Anggota</a></li>
          <li><a data-toggle="tab" href="#proposal">Proposal</a></li>
        </ul>
        <br>
        <div class="tab-content">
          <div id="dashboard" class="tab-pane fade in active">
              <h3 class="centered has-text-black-bis">Logo KMIPN</h3>
              <p class="centered lh-30 has-text-black-bis">
                Selamat datang {{ Auth::user()->fullname }}
                <br>
                Anda mendaftar sebagai : <b>Ketua Tim</b>
                <br>
                  Status Lomba : 
                  @if($tim->status == "Daftar")
                    <i class="label label-info">Daftar</i>
                  @elseif($tim->status == "Tahap Seleksi")
                    <i class="label label-warning">Tahap Seleksi</i>
                  @elseif($tim->status == "Lolos")
                    <i class="label label-success">Lolos</i>
                  @elseif($tim->status == "Tidak Lolos")
                    <i class="label label-success">Tidak Lolos</i>
                  @endif
                <br>
                Kategori Lomba : {{ $tim->kategori->kategori }}
                <br>
                <br>
                <a href="{{url('profile/info-tim')}}" class="btn btn-primary">Lihat/Ubah Informasi Tim </a>
              </p>
              <br>
              <b class="has-text-black-bis">Pengumuman</b>
              <ul>
                <li class="has-text-black-bis">Pastikan email yang Anda gunakan mendaftar adalah email yang sebenarnya dan dapat dihubungi karena apabila ada informasi terkait administrasi dan kompetisi akan dikirimkan ke email tersebut Informasi Tim hanya dapat diubah ketika data belum <b class="has-text-black-ter">diapprove/diverifikasi</b> oleh panitia, untuk menghindari kecurangan</li>
                <li class="has-text-black-bis"></li>
              </ul>
          </div>
          <div id="anggota" class="tab-pane fade">
            @if($tim->total_anggota == '0')
            @else
              <a href="{{url('profile/tambah-anggota')}}" class="pull-right btn btn-success">
                <i class="fa fa-plus"></i> Tambah Anggota
              </a>
            @endif
            <br>
            <br>
            <br>
            <table class="table table-striped">
              <thead>
                <th>NIM</th>
                <th>Nama</th>
                <th>E-mail</th>
                <th>No. Telepon</th>
                <th>Foto KTM</th>
                <th>Sebagai</th>
              </thead>
              <tbody>
              @foreach($anggota as $item)
                <tr>
                  <td class="has-text-black">{{ $item->no_mahasiswa }}</td>
                  <td class="has-text-black">{{ $item->fullname }}</td>
                  <td class="has-text-black">{{ $item->email }}</td>
                  <td class="has-text-black">{{ $item->no_telp }}</td>
                  <td class="has-text-black">
                    @if($item->photo == NULL)
                      Belum Upload
                    @else
                      Terupload
                    @endif
                  </td>
                  <td class="has-text-black">{{ $item->role }}</td>
                  <td width="153" class="has-text-black">
                        <input type="hidden" name="_method" value="DELETE">
                        <a href="{{ url('/profile/edit_anggota/'.$item->id) }}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                      @if($item->role == 'Anggota')  
                        <a href="{{ url('/profile/submit_delete_anggota/'.$item->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</a>
                      @endif
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <div id="proposal" class="tab-pane fade">
            @if($nullProposal)
              <button class="col-md-12 btn btn-danger">Anda Belum Upload Proposal</button>
            @else
              <p class="centered">
              {{ $tim->file_proposal }}
                <br>
                <br>
                <a href="{{ url('proposal/'.$tim->file_proposal) }}" class="btn btn-primary">Lihat Proposal</a>
              </p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
 {{--@endsection--}}
