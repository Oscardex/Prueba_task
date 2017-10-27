@extends('layouts.app')

@section('Home')
<!-- css -->
@include('css.login.register')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-4" style="margin-top:7%">
            <div id="iosBlurBg">
                <div id="whiteBg"></div>
            </div>
            <div id="bottomEnter"></div>
            <div id="bottomBlurBg"></div>
            <!-- Login Form -->
            <div class="loginForm">
                <div class="title">
                    <p>Registrate en<br><span>{{ config('app.name', '') }}</span></p>
                    <hr>
                    <hr class="short">
                </div>
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
              {{ csrf_field() }}
                    <div class="col-3">
              <input id="name" type="text" class="effect-2" name="name" value="{{ old('name') }}" placeholder="Nombre.." required autofocus>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
              <input id="email" type="email" class="effect-2" name="email" value="{{ old('email') }}" placeholder="Email.." required>

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif

              <input id="password" type="password" class="effect-2" name="password" placeholder="Contraseña.." required>

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif


                  <input id="password-confirm" type="password" class="effect-2" name="password_confirmation" placeholder="Confirmacion Contraseña" required>

                    </div>

            </div>
            <button>
                <div class="enterButton">
                    <i class="fa fa-lock fa-2x text-white"></i><br>
                    <span class="enterText text-white">Registrarse</span>
                </div>
            </button>
      </form>
        </div>
    </div>
</div>
@endsection
