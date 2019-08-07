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

                            @if (Auth::user()->organization_id != null )
                              <form class="" action="" method="get">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Organizacion</label>

                                <div class="col-md-6">
                                    <input readonly style="background-color: lightgray;"   id="organization_id" type="text" class="form-control @error('organization_id') is-invalid @enderror" name="organization_id" value="{{ Auth::user()->Organization->name }}" autocomplete="organization_id" autofocus>

                                </div>
                            </div>
                          </form>
                            @endif
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
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

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
                                        <option value="Misiones">Misiones</option>
                                        <option value="San Luis">San Luis</option>
                                        <option value="San Juan">San Juan</option>
                                        <option value="Entre Ríos">Entre Ríos</option>
                                        <option value="Santa Cruz">Santa Cruz</option>
                                        <option value="Río Negro">Río Negro</option>
                                        <option value="Chubut">Chubut</option>
                                        <option value="Córdoba">Córdoba</option>
                                        <option value="Mendoza">Mendoza</option>
                                        <option value="La Rioja">La Rioja</option>
                                        <option value="Catamarca">Catamarca</option>
                                        <option value="La Pampa">La Pampa</option>
                                        <option value="Santiago del Estero">Santiago del Estero</option>
                                        <option value="Corrientes">Corrientes</option>
                                        <option value="Santa Fe">Santa Fe</option>
                                        <option value="Tucumán">Tucumán</option>
                                        <option value="Neuquén">Neuquén</option>
                                        <option value="Salta">Salta</option>
                                        <option value="Chaco">Chaco</option>
                                        <option value="Formosa">Formosa</option>
                                        <option value="Jujuy">Jujuy</option>
                                        <option value="Ciudad Autónoma de Buenos Aires">Ciudad Autónoma de Buenos Aires</option>
                                        <option value="Buenos Aires">Buenos Aires</option>
                                        <option value="Tierra del Fuego, Antártida e Islas del Atlántico Sur">Tierra del Fuego, Antártida e Islas del Atlántico Sur</option>
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


                    @if (Auth::user()->organization_id != null)

                        @if (count($projects)>0)
                                <ul>
                                  <h1 class="my-4">Mis Proyectos</h1>
                                <div class="row">
                                  @foreach ($projects as $oneProject)
                                    <div class="col-lg-4 col-md-6 mb-4" name='eachproject' >
                                    <li>
                                    <div class="card h-100"  id='project' >
                                      @if ( preg_match("/https/", $oneProject->image ) == 1  )
                                        <a href="#"><img src="{{$oneProject->image }}" src={{$oneProject->image}} alt=""></a>
                                      @else
                                        <a href="#"><img src="/storage/projects/{{ $oneProject->image}}" alt=""></a>
                                      @endif
                                      <div class="card-body"  id="datosProyecto">
                                        <h4 class="card-title">
                                          <p href="#">{{$oneProject->name}}</p>
                                        </h4>
                                        <p class="card-text">Descripción: {{$oneProject->description}}</p>
                                        </div>
                                      <div class="card-footer" style="text-align: center">
                                        <div class="mr-auto">
                                          <a href='/projects/{{$oneProject->id}}'>
                                            <button type="button" class="btn btn-lg a_btn" onclick="" >ACCEDER</button>
                                          </a>


                                              {{-- <a href='/product/{{$oneProduct->id}}/edit'>
                                            <button type="button" class="btn btn-lg a_btn" onclick="edit" >EDITAR</button>
                                            </a> --}}

                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                </div>
                                @endforeach
                            </div>
                            {{ $projects->links() }}
                          </ul>
                            @endif
                          @endif

                            @if (count($products)>0)
                              <ul>
                                        @if (Auth::user()->organization_id != null )
                                          <h1 class="my-4">Todos mis Pedidos</h1>
                                          @else
                                          <h1 class="my-4">Mis Donaciones</h1>
                                        @endif
                                <div class="row">
                                  @foreach ($products as $oneProduct)
                                    <div class="col-lg-4 col-md-6 mb-4" name='eachproduct' >
                                      <li>
                                        <div class="card h-100"  id='producto' >
                                          @if ( preg_match("/https/", $oneProduct->image ) == 1  )
                                            <a href="#"><img src="{{$oneProduct->image }}" src={{$oneProduct->image}} alt=""></a>
                                          @else
                                            <a href="#"><img src="/storage/products/{{ $oneProduct->image}}" alt=""></a>
                                          @endif
                                          <div class="card-body"  id="datosProducto">
                                            <h4 class="card-title">
                                              <p href="#">{{$oneProduct->name}}</p>
                                            </h4>
                                            <p class="card-text">Categoría: {{$oneProduct->category->name}}</p>
                                            @if ($oneProduct->project)
                                              <p class="card-text">Proyecto: {{$oneProduct->project->name}}</p>

                                            @endif
                                          </div>
                                          <div class="card-footer" style="text-align: center">
                                            <div class="mr-auto">

                                          <a href='/product/{{$oneProduct->id}}/edit'>
                                            <button type="submit" class="btn btn-lg a_btn" onclick="edit" >EDITAR</button>
                                          </a>
                                          <form action="/product/delete/{{ $oneProduct->id }}" method="POST" >
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button id="BotonEliminar" type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirm">ELIMINAR</button>


                                                          <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                          <div class="modal-content">
                                                              <div class="modal-header">
                                                                  <h2>ATENCIÓN!</h2>
                                                              </div>
                                                              <div class="modal-body">
                                                                  <p>¿Estás seugro que queres eliminar el producto?</p>
                                                              </div>
                                                              <div class="modal-footer">
                                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                  <button type="submit" class="btn btn-outline-danger" id:>ELIMINAR</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                          </form>


                                    </div>
                                  </div>
                                </div>
                              </li>
                            </div>
                          @endforeach
                        </div>
                        {{ $products->links() }}
                      </ul>
                    @endif



                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="/js/validateUserCreate.js"></script>
    <script src="/js/ProfileProvinceFetch.js"></script>
</div>
  </body>

  </html>

@endif
@endsection
