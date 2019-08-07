@extends('front.template')

@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre completo</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" data-nombre='Nombre' name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                <span class="invalid-feedback" role="alert">
                                @error('name')
                                    <strong>{{ $message }}</strong>
                                @enderror
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Nombre de usuario</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" data-nombre='Nombre de Usuario' name="username" value="{{ old('username') }}" autocomplete="username" autofocus>


                                    <span class="invalid-feedback" role="alert">
                                      @error('username')
                                        <strong>{{ $message }}</strong>
                                      @enderror
                                    </span>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" data-nombre='Email' name="email" value="{{ old('email') }}" autocomplete="email">

                                  <span class="invalid-feedback" role="alert">
                                    @error('email')
                                      <strong>{{ $message }}</strong>
                                    @enderror
                                  </span>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" data-nombre='Contraseña' name="password" autocomplete="new-password">

                                <span class="invalid-feedback" role="alert">
                                @error('password')
                                        <strong>{{ $message }}</strong>
                                @enderror
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Repetir contraseña</label>

                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="new-password">
                            </div>

                                <span class="invalid-feedback" role="alert">
                                  @error('password_confirmation')
                                    <strong>{{ $message }}</strong>
                                  @enderror
                                </span>

                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">Pais</label>

                            <div class="col-md-6">
                                <select id="country" name="country" class="form-control" data-nombre='País'>
                                  <option value="">Elegí un país</option>
                                </select>


                                <span class="invalid-feedback" role="alert">
                                    @error('country')
                                    <strong>{{ $message }}</strong>
                                    @enderror
                                </span>

                            </div>
                        </div>

                        <div class="form-group row" style="display: none;">
                            <label for="province" class="col-md-4 col-form-label text-md-right">Provincia</label>

                            <div class="col-md-6">
                                <select id="province" name="province" class="form-control">
                                  <option value="">Elegí una provincia</option>
                                </select>


                                {{-- <span class="invalid-feedback" role="alert">
                                    @error('province')
                                    <strong>{{ $message }}</strong>
                                    @enderror
                                </span> --}}

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">Avatar</label>

                            <div class="col-md-6">
                              <div class="custom-file">
                                <input
                                  type="file"
                                  name="avatar"
                                  class="custom-file-input  @error('avatar') is-invalid @enderror"
                                    data-nombre='Avatar'
                                >
                                <label class="custom-file-label">Elegir archivo</label>

                                    <span class="invalid-feedback" role="alert">
                                    @error('avatar')
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                    </span>

                              </div>

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="/js/validateUserCreate.js"></script>
<script src="/js/countryFetch.js"></script>

@endsection
