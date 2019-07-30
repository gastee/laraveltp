@extends('front.template')
@section('pageTitle', 'Catálogo')
@section('mainContent')
<body >

{{-- {{ dd($products, $category) }} --}}
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
            @foreach ($projects as $Project)

              <li> <a href="/catalogue/index/{{$Project->name}}" class="list-group-item">{{$Project->name}}</a></li>

        @endforeach
        </ul>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
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


        <ul>
        <div class="row">
          @foreach ($products as $oneProduct)
            <div class="col-lg-4 col-md-6 mb-4">
            <li>
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src={{$oneProduct->image}} alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$oneProduct->name}}</a>
                </h4>
                <p class="card-text">Categoría: {{$oneProduct->category->name}}</p>
                <p class="card-text">Proyecto: {{$oneProduct->project->name}}</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </li>
        </div>
        @endforeach
    </div>
    {{ $products->links() }}
  </ul>


        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

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
