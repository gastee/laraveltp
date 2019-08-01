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
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Nombre de usuario</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Repetir contraseña</label>

                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="new-password">
                            </div>
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">Barrio</label>

                            <div class="col-md-6">
                                <select id="country" name="country" class="form-control">
                                  <option value="">Elegi uno</option>
                                  <option value="Agronomia">Agronomia</option>
                                  <option value="Almagro">Almagro</option>
                                  <option value="Balvanera">Balvanera</option>
                                  <option value="Barracas">Barracas</option>
                                  <option value="Belgrano">Belgrano</option>
                                  <option value="Boedo">Boedo</option>
                                  <option value="Caballito">Caballito</option>
                                  <option value="Chacarita">Chacarita</option>
                                  <option value="Coghlan">Coghlan</option>
                                  <option value="Colegiales">Colegiales</option>
                                  <option value="Constitucion">Constitucion</option>
                                  <option value="Flores">Flores</option>
                                  <option value="Floresta">Floresta</option>
                                  <option value="La Boca">La Boca</option>
                                  <option value="La Paternal">La Paternal</option>
                                  <option value="Mataderos">Mataderos</option>
                                  <option value="Monte Castro">Monte Castro</option>
                                  <option value="Monserrat">Monserrat</option>
                                  <option value="Nuñez">Nuñez</option>
                                  <option value="Palermo">Palermo</option>
                                  <option value="Parque Avellaneda">Parque Avellaneda</option>
                                  <option value="Parque Chacabuco">Parque Chacabuco</option>
                                  <option value="Parque Chas">Parque Chas</option>
                                  <option value="Parque Patricios">Parque Patricios</option>
                                  <option value="Puerto Madero">Puerto Madero</option>
                                  <option value="Recoleta">Recoleta</option>
                                  <option value="Retiro">Retiro</option>
                                  <option value="Saavedra">Saavedra</option>
                                  <option value="San Cristobal">San Cristobal</option>
                                  <option value="San Nicolas">San Nicolas</option>
                                  <option value="San Telmo">San Telmo</option>
                                  <option value="Velez Sarsfield">Velez Sarsfield</option>
                                  <option value="Versalles">Versalles</option>
                                  <option value="Villa Crespo">Villa Crespo</option>
                                  <option value="Villa del Parque">Villa del Parque</option>
                                  <option value="Villa Devoto">Villa Devoto</option>
                                  <option value="Villa General Mitre">Villa General Mitre</option>
                                  <option value="Villa Lugano">Villa Lugano</option>
                                  <option value="Villa Luro">Villa Luro</option>
                                  <option value="Villa Ortuzar">Villa Ortuzar</option>
                                  <option value="Villa Pueyrredon">Villa Pueyrredon</option>
                                  <option value="Villa Real">Villa Real</option>
                                  <option value="Villa Riachuelo">Villa Riachuelo</option>
                                  <option value="Villa Santa Rita">Villa Santa Rita</option>
                                  <option value="Villa Soldati">Villa Soldati</option>
                                  <option value="Villa Urquiza">Villa Urquiza</option>
                                </select>

                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                                >
                                <label class="custom-file-label">Elegir archivo</label>
                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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

@endsection
