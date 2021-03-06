@extends('layouts.validacion')
@section('Titulo', 'Registro') {{--Para que se agregue el titulo en la pestaña --}}
@section('content')

<div class="container" style=" background-color: white; margin-top: -45px; padding-bottom: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container" style="background: rgba(0,0,0,.5);  width: 100%; margin: auto; padding: 5px 35px; margin-top: 70px; padding-bottom: 70px; border-radius: 10px; height: 500px;">
                <div class="card-header" style="color: yellow; font-family: 'Voltaire', sans-serif; font-size: 20px;">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" onsubmit="return validar();">
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color: white;" >{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" {{-- required autocomplete="name" autofocus --}}>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="username" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('Nombre de Usuario') }}</label>
                          <div class="col-md-6">
                              <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" {{-- required autocomplete="username" autofocus --}}>

                              @error('username')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>
                      </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" {{--required autocomplete="email" --}}>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Seleccionar Pais -->

                        <div class="form-group row">
                            <label for="paises" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('Selecciona tu país') }}</label>

                          <div class="col-md-6">
                            <select id="" class="" name="">
                             <option value="">Argentina</option>
                             <option value="">Bolivia</option>
                             <option value="">Brasil</option>
                             <option value="">Chile</option>
                             <option value="">Colombia</option>
                             <option value="">United States</option>
                             <option value="">United Kingdom</option>
                             <option value="">Peru</option>
                             <option value="">Uruguay</option>
                             <option value="">Mexico</option>
                             <option value="">Ecuador</option>
                             <option value="">Venezuela</option>
                             <option value="">Paraguay</option>
                             <option value="">Jamaica</option>
                             <option value="">Canada</option>
                             <option value="">España</option>
                            </select>
                        </div>
                      </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('Contraseña') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" {{--required autocomplete="new-password"--}}>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('Repetir Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" {{--required autocomplete="new-password"--}}>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button><br><br>
                            </div>
                        </div>
                        <p class="form__link" style="color:white; margin-left: 210px;">Ya tenes una cuenta? <a href="{{url('/login')}}" style="color: yellow;">Ingresa aqui</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('footer')

@endsection
@endsection
