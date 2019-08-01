
  <style>
.overlay {
    position: fixed;
    align: center;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.5);
    z-index: 1000;
    cursor: pointer;
  }
.overlay2 {
    position:relative;
    /* align: center; */
    width: 70%;
    height: 70%;
    /* top: 25%;
    left: 25%; */
    /* right: 25%;
    bottom: 25%; */
    background-color: rgba(100,0,0,0.5);
    z-index: 2000;
    cursor: pointer;
  }
  </style>

<div class="overlay" id="overlay" style="display: none;">

    <div class="card h-100 overlay2" id="overlay2">
        {{-- <a href=""><img class="card-img-top" src={{$oneProduct->image}} alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">{{$oneProduct->name}}</a>
          </h4>
          <p class="card-text">Categoría: {{$oneProduct->category->name}}</p>
          <p class="card-text">Proyecto: {{$oneProduct->project->name}}</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div> --}}
    </div>
  </div>

    <script>
    function on() {
      document.getElementById("overlay").style.display = "block";
    }

    function off() {
      document.getElementById("overlay").style.display = "none";
    }
    </script>
