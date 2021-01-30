@extends('layouts.app')

@section('content')

  <div  style="background:#15b3ff;" class="app-content content">
    <div class="content-wrapper">
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <img src="/img/logo.png" alt="branding logo">
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Iniciar Sesión</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form-horizontal"  method="POST" action="{{ route('login') }}">
                    @csrf  
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Your Username"
                        required>
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <div>
                        @error('email') <span style="color:red;">{{ $message }}</span> @enderror
                      </div>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="Enter Password"
                        required>
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                      </fieldset>
                      @error('password') <span style="color:red;">{{ $message }}</span> @enderror
                      <button type="submit" class="btn btn-outline-success btn-block"><i class="ft-unlock"></i> Iniciar sesión</button>
                      <a href="{{ route('register') }}" type="submit" class="btn btn-outline-danger btn-block"><i class="ft-unlock"></i> Registrarse</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
@endsection
