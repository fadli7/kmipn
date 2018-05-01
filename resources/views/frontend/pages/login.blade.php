@extends('frontend.layouts')
@section('title')
  Login | KMIPN 2018
@endsection
@section('content')
  <div class="container-fluid bg-container">
    <div class="col-sm-offset-4 col-sm-4 col-xs-12">
        <div class="panel panel-default panel-login">
            <div class="panel-heading login-heading">
              <center>
                <i class="fa fa-user"></i>
                <br>
                KMIPN | USER LOGIN
              </center>
            </div>
            <div class="panel-body">
              <form role="form">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Password</label>
                  <input type="password" class="form-control" id="pwd">
                </div>
                <div class="checkbox">
                  <label><input type="checkbox"> Remember me</label> |
                  <a href="#">Lupa kata sandi?</a>
                </div>
                <br>
                <button type="submit" class="form-control btn btn-default">Sign In</button>
              </form>
            </div>
        </div>
    </div>
  </div>
@endsection
