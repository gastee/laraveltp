@extends('front.template')
@section('pageTitle', 'Catálogo')
@section('mainContent')
  <body >
  <div class="container">

{{-- {{ dd($products, $category) }} --}}
  <!-- Page Content -->

    <div class="row">

      {{-- <div class="col-lg-3">

        <h1 class="my-4">Categorías</h1>
        <div class="list-group">
          <ul>
            @foreach ($categories as $Category)

              <li> <a href="/catalogue/index/{{$Category->id}}" class="list-group-item">{{$Category->name}}</a></li>

        @endforeach
        </ul>
        </div>
      </div> --}}
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              @if ( preg_match("/https/", $project->image ) == 1  )
              <img class="d-block img-fluid" src="{{$project->image}}" alt="First slide">
            @else
              <img class="d-block img-fluid" src="/storage/projects/{{ $project->image}}" alt="First slide">
            @endif

            </div>
            {{-- <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div> --}}
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>

          <div class="">
          @if (count($products)>0)
                  <ul>
                    <h1 class="my-4">Necesidades</h1>
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
                          <p class="card-text">Proyecto: {{$oneProduct->project->name}}</p>
                        </div>
                        <div class="card-footer" style="text-align: center">
                          <div class="mr-auto">
                            <a href='/product/create/{{$oneProduct->id}}'>
                              <button type="button" class="btn btn-lg a_btn" onclick="donate()" >DONAR</button>
                            </a>

                                {{-- <script>
                                  function donate() {
                                    location.assign('/product/create/{{$oneProduct->id}}')
                                  }
                                </script> --}}
                                <a href='/product/{{$oneProduct->id}}/edit'>
                              <button type="button" class="btn btn-lg a_btn" onclick="edit" >EDITAR</button>
                              </a>
                              {{-- <script>
                                function edit() {
                                  location.assign('/product/{id}/edit')
                                }
                              </script> --}}
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

          <div class="">

          @if (count($offeredproducts)>0)
                  <ul>
                    <h1 class="my-4">Ofrecimientos</h1>
                    <div class="row">
                    @foreach ($offeredproducts as $oneProduct)
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
                          <p class="card-text">Proyecto: {{$oneProduct->project->name}}</p>
                        </div>
                        <div class="card-footer" style="text-align: center">
                          <div class="mr-auto">

                            {{-- <a href='/product/create/{{$oneProduct->id}}'>
                              <button type="button" class="btn btn-lg a_btn" onclick="donate()" >DONAR</button>
                            </a> --}}


                                <a href='#'>
                              <button type="button" class="btn btn-lg a_btn" onclick="edit" >SOLICITAR</button>
                              </a>

                          </div>
                        </div>
                      </div>
                    </li>
                  </div>
                  @endforeach
              {{ $offeredproducts->links() }}
            </div>
            </ul>
              @endif
            </div>




    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
@endsection