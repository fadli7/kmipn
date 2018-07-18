@extends('frontend.layouts')
@section('title')
  Forgot Password | KMIPN 2018
@endsection
@section('content')
  <div class="container-fluid bg-container">
  <br><br>
    <div class="col-sm-offset-4 col-sm-4 col-xs-12">
        <div class="panel panel-default panel-login">
            <div class="panel-heading login-heading">
              <center>
                <i class="fa fa-user"></i>
                <br>
                KMIPN | FORGOT PASSWORD
              </center>
            </div>
            <div class="panel-body">
              <form role="form" action="{{ url('auth/forgot') }}" method="post">
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
                <br>
                <button type="submit" class="form-control btn btn-default">Submit</button>
              </form>
            </div>
        </div>
    </div>
  </div>
@endsection
