@extends('frontend.playouts')
@section('title')
  Dashboard Tim | KMIPN 2018
@endsection
@section('content')
  <div class="container default-container">
    <div class="panel panel-default panel-custom">
      <div class="panel-heading">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#dashboard">Dashboard TIM</a></li>
          <li><a data-toggle="tab" href="#anggota" >Anggota</a></li>
          <li><a data-toggle="tab" href="#proposal">Proposal</a></li>
        </ul>
        <br>
        <div class="tab-content">
          <div id="dashboard" class="tab-pane fade in active">
            
          </div>
          <div id="anggota" class="tab-pane fade">

          </div>
          <div id="proposal" class="tab-pane fade">

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
