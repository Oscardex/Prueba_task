@extends('layouts.app')

@section('Home')

<!-- css -->
@include('css.login.login')

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
                    <p>Ingresa a<br><span>{{ config('app.name', '') }}</span></p>
                    <hr>
                    <hr class="short">
                </div>
          @if(Session::has('failed'))
          <div class="row center-align">
              <h5 style="letter-spacing: 0px !important;">{{ Session::get('failed') }}</h5>
          </div>
          @endif
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
              {{ csrf_field() }}
                    <div class="col-3" style="margin-top:10%">
                <input id="username" type="text" class="effect-2" name="username" value="{{ old('username') }}" placeholder="Usuario..." required autofocus>
                <span class="focus-border"></span>
                @if ($errors->has('username'))
                  <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                  </span>
                @endif

                      <input id="password" type="password" class="effect-2" name="password" required placeholder="Contraseña...">
                      <span class="focus-border"></span>

                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>
            </div>
            <button>
                <div class="enterButton">
                    <i class="fa fa-lock fa-2x text-white"></i><br>
                    <span class="enterText text-white">Ingresar</span>
                </div>
            </button>
      </form>
        </div>
    </div>
</div>

@endsection
