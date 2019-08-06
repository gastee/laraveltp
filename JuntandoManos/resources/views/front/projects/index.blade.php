@extends('front.template')
@section('pageTitle', 'Catálogo')
@section('mainContent')
<body >
<div class="container">
{{-- {{ dd($products) }} --}}
  <!-- Page Content -->

    <div class="row">

      {{-- <div class="col-lg-3">

        <h1 class="my-4">Organizaciones</h1>
        <div class="list-group">
          <ul>
            @foreach ($organizations as $org)

              <li> <a href="/projects/index/{{$org->name}}" class="list-group-item">{{$org->name}}</a></li>

        @endforeach
        </ul>
        </div>
      </div> --}}


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

        @include('front.productview')

        @if (count($projects)>0)
                <ul>
                  <h1 class="my-4">Proyectos</h1>
                <div class="row">
                  @foreach ($projects as $oneProyect)
                    <div class="col-lg-4 col-md-6 mb-4" name='eachproject' >
                    <li>
                    <div class="card h-100"  id='project' >
                      @if ( preg_match("/https/", $oneProyect->image ) == 1  )
                        <a href="#"><img src="{{$oneProyect->image }}" src={{$oneProyect->image}} alt=""></a>
                      @else
                        <a href="#"><img src="/storage/projects/{{ $oneProyect->image}}" alt=""></a>
                      @endif
                      <div class="card-body"  id="datosProyecto">
                        <h4 class="card-title">
                          <p href="#">{{$oneProyect->name}}</p>
                        </h4>
                        <p class="card-text">Descripción: {{$oneProyect->description}}</p>
                        </div>
                      <div class="card-footer" style="text-align: center">
                        <div class="mr-auto">
                          <a href='/projects/{{$oneProyect->id}}'>
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

          <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <script type="text/javascript">
      var allProj = document.querySelectorAll("[name=eachproject]");
      allProj.forEach(function (oneProj) {
        oneProj.addEventListener("click", function () {
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
