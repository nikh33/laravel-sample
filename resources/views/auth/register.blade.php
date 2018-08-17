@extends('layouts.auth')

@section('htmlheader_title')
    Change Password
@endsection

@section('content')

    <body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <b>Xtreme</b>RS
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="register-box-body">
            <p class="login-box-msg">Change your password</p>
            <form action="{{ url('/user/changePass') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
				 <input type="hidden" name="username" value="{{ Auth::user()->id }}">
				<div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Old password" name="old_password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation"/>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-4">
					 <a href="{{url('home')}}" class="btn btn-primary btn-block  btn-flat">Cancel</a>
                       <!-- <div class="checkbox icheck">
                             <label>
                                <input type="checkbox"> I agree to the <a href="#">terms</a>
                            </label>
                        </div> -->
                    </div><!-- /.col -->
					<div class="col-xs-4">
					</div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Change</button>
                    </div><!-- /.col -->
                </div>
            </form>
<!--
            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
            </div>

            <a href="{{ url('/login') }}" class="text-center">I already have a membership</a>-->
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    @include('layouts.partials.scripts_auth')
	
</body>

@endsection
