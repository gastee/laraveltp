@extends('front.template')

@section('pageTitle', 'Perfil')

@section('mainContent')


  @if (Auth::check())

    <body >
    <div class="container">
          {{-- @foreach ($errors->all() as $error)
         {{ $error }} <br>
        @endforeach --}}

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                      <div class="row justify-content-center">
                        <div class="col-6">
                          <h2>{{('Perfil de ')}} {{ Auth::user()->name }}</h2>

                          @if ( preg_match("/https/", Auth::user()->avatar) == 1  )
                            <img src="{{ Auth::user()->avatar }}"  style="width: 300px;">
                          @else
                            <img src="/storage/avatars/{{ Auth::user()->avatar }}"  style="width: 300px;">
                          @endif

                        </div>
                      </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('usersUpdate', Auth::user()->id) }}" enctype="multipart/form-data">
                            @csrf

                            {{ method_field('put') }}

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre completo</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" autocomplete="name" autofocus>

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
                                    <input readonly style="background-color: lightgray;" id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ Auth::user()->username }}" autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right form-control">E-mail</label>

                                <div class="col-md-6">
                                    <input id="email"
                                    type="email"
                                    class="form-control
                                    @error('email') is-invalid
                                    @enderror"
                                    name="email"
                                    value="{{ Auth::user()->email }}" autocomplete="email"
                                    readonly
                                    style="background-color: lightgray;"
                                    >

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">Pais</label>

                                <div class="col-md-6">
                                    <select id="country" name="country" class="form-control">
                                      <option value="{{Auth::user()->country}}" selected>{{Auth::user()->country}}</option>
                                    </select>


                                    <span class="invalid-feedback" role="alert">
                                        @error('country')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </span>

                                </div>
                            </div>

                                @if (Auth::user()->country == "Argentina")
                                  <div class="form-group row" style="display: flex;">
                                    <label for="province" class="col-md-4 col-form-label text-md-right">Provincia</label>

                                    <div class="col-md-6">
                                      <select id="province" name="province" class="form-control">
                                        <option value="{{Auth::user()->province}}" selected >{{Auth::user()->province}}</option>
                                      </select>
                                  @else
                                    <div class="form-group row" style="display: none;">
                                      <label for="province" class="col-md-4 col-form-label text-md-right">Provincia</label>

                                      <div class="col-md-6">
                                        <select id="province" name="province" class="form-control">
                                          <option value="" selected >Elegí tu Provincia</option>
                                        </select>
                                @endif

                                    <span class="invalid-feedback" role="alert">
                                        @error('province')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </span>

                                </div>
                            </div>

                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn a_btn">
                                        {{ __('ACTUALIZAR') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<a href="mailto:?subject=feedback">email me</a>

    <script type="text/javascript" src="/js/validateUserCreate.js"></script>
    <script src="/js/ProfileProvinceFetch.js"></script>

  </body>

  </html>

@endif
@endsection
