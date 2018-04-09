@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
@stop

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90">
            <form class="form-horizontal login100-form flex-sb flex-w" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <span class="login100-form-title p-b-51">
                    U-LAH
                </span>

                
                <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                </div>
                
                
                <div class="input-group wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>
                
                <div class="flex-sb-m w-full p-t-3 p-b-24">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="show-password" type="checkbox">
                        <label class="label-checkbox100" for="show-password">
                            Show Password
                        </label>
                    </div>
                </div>

                <div class="container-login100-form-btn m-t-17 p-b-15">
                    <button class="login100-form-btn" type="submit">
                        Login
                    </button>
                </div>
                <div class="flex-sb-m w-full p-t-3 p-b-24">
                    <div>
                        <a href="{{ route('register') }}" class="txt1">
                            Forgot Password ?
                        </a>
                    </div>

                    <div>
                        <a href="{{ route('register') }}" class="txt1">
                            Register
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $('#show-password').click(function(e) {
        var password = $('#password');
        if($(this). prop("checked") == true){
            password.attr( 'type', 'text' );
        }else {
            password.attr( 'type', 'password' );
        }
    });
</script>
@stop