@extends('front.template')
@section('pageTitle', 'Catálogo')
@section('mainContent')
<body >
<div class="container">
{{-- {{ dd($products) }} --}}
  <!-- Page Content -->

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Categorías</h1>
        <div class="list-group">
          <ul>
            @foreach ($categories as $Category)

              <li> <a href="/catalogue/index/{{$Category->id}}" class="list-group-item">{{$Category->name}}</a></li>

        @endforeach
        </ul>
        </div>
        <h1 class="my-4">Proyectos</h1>
        <div class="list-group">
          <ul>
            @foreach ($allprojects as $Project)

              <li> <a href="/catalogue/index/{{$Project->name}}" class="list-group-item">{{$Project->name}}</a></li>

        @endforeach
        </ul>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row justify-content-center">
                              <div class="col-12 col-md-10 col-lg-8">
                                  <form class="card card-sm" method="post">
                                     @csrf
                                      <div class="card-body row no-gutters align-items-center">
                                          <!--end of col-->
                                          <div class="col">
                                              <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Buscar productos o proyectos" name= 'search'>
                                          </div>
                                          <!--end of col-->
                                          <div class="col-auto">
                                              <button class="btn btn-lg a_btn" type="submit">Buscar</button>
                                          </div>
                                          <!--end of col-->
                                      </div>
                                  </form>
                              </div>
                              <!--end of col-->
                          </div>


{{--
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> --}}
        @include('front.productview')

@if (count($products)>1)
        <ul>
          <h1 class="my-4">Productos</h1>
        <div class="row">
          @foreach ($products as $oneProduct)
            <div class="col-lg-4 col-md-6 mb-4" name='eachproduct' >
            <li>
            <div class="card h-100"  id='producto' >
              <a href="#"><img class="card-img-top" src={{$oneProduct->image}} alt=""></a>
              <div class="card-body"  id="datosProducto">
                <h4 class="card-title">
                  <p href="#">{{$oneProduct->name}}</p>
                </h4>
                <p class="card-text">Categoría: {{$oneProduct->category->name}}</p>
                <p class="card-text">Proyecto: {{$oneProduct->project->name}}</p>
              </div>
              <div class="card-footer" style="text-align: center">
                <div class="mr-auto">
                    {{-- <button id="donate_button" class="btn btn-lg a_btn" type="button" >DONAR</button> --}}
                    <button type="button" class="btn btn-lg a_btn" onclick="donate()" >DONAR</button>
                      <script>
                        function donate() {
                          location.assign('catalogue.create')
                        }
                      </script>
                    <button type="button" class="btn btn-lg a_btn" onclick="edit" >EDITAR</button>
                    <script>
                      function edit() {
                        location.assign('catalogue.edit')
                      }
                    </script>
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


  @if (count($projects)>1)

        <ul>
          <h1 class="my-4">Proyectos</h1>
        <div class="row">
          @foreach ($projects as $oneProject)
            <div class="col-lg-4 col-md-6 mb-4">
            <li>
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src='https://lorempixel.com/200/200/abstract/?10392' alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <p href="#">{{$oneProject->name}}</p>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                <p class="card-text">{{$oneProject->organization->name}}</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </li>
        </div>
        @endforeach
    </div>
    {{ $projects->links() }}
  </ul>
    @endif

          <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <script type="text/javascript">
      var allPdtos = document.querySelectorAll("[name=eachproduct]");
      allPdtos.forEach(function (onePdto) {
        onePdto.addEventListener("click", function () {
          var contenidoHTML = this.innerHTML;
          var overlay = document.getElementById("overlay");
          var overlay2 = document.getElementById("overlay2");
          overlay2.innerHTML = contenidoHTML;

          if (overlay.style.display == "none") {
            overlay.style.display = "block";
            overlay2.style.display = "block";
            var datosProducto = overlay2.getElementsByTagName('li')[0].getElementsByTagName('div')[0].getElementsByTagName('div')[0];
            var imagenProducto = overlay2.getElementsByTagName('li')[0].getElementsByTagName('div')[0].getElementsByTagName('a')[0].getElementsByTagName('img')[0];
            // .querySelector('datosProducto');
            // datosProducto.innerHTML += "<br>lalsalsalsalasdl<br>";
            datosProducto.style.height = "25vh";
            datosProducto.style.overflow = "hidden";
            imagenProducto.style.maxHeight = "60vh";

            }
          });
        })

        // var overlay = document.getElementById("overlay");
          overlay.addEventListener("click", function (e) {
            var click = e.target;
            if(overlay.style.display == "block" && click != overlay2){
              overlay.style.display = "none";
              overlay2.style.display = "none";
              console.log(click);
            }
                });
    </script>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
@endsection
