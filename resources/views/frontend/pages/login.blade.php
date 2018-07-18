@extends('frontend.layouts')
@section('title')
  Login | KMIPN 2018
@endsection
@section('content')
  <div class="container-fluid bg-container">
    <div class="col-sm-offset-4 col-sm-4 col-xs-12">
        <div class="panel panel-default panel-custom">
            <div class="panel-heading custom-heading">
              <center>
                <i class="fa fa-user"></i>
                <br>
                KMIPN | USER LOGIN
              </center>
            </div>
            <div class="panel-body">
              <form role="form" action="{{ url('auth/login') }}" method="post">
                {{ csrf_field()}}
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email">
                  @if ($errors->has('email'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="pwd">Password</label>
                  <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="pwd">
                  @if ($errors->has('password'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="checkbox">
                  <label><input type="checkbox"> Remember me</label> |
                  <a href="{{ url('forgot') }}">Lupa kata sandi?</a>
                </div>
                <br>
                <button type="submit" class="form-control btn btn-default">Sign In</button>
              </form>
            </div>
        </div>
    </div>
  </div>
@endsection
