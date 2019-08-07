@extends('front.template')

@section('pageTitle', 'Cargar donación')

@section('mainContent')
  <body>
  <div class="container">
  {{-- Errores si los hubiera --}}
  {{-- @if (count($errors))
    <ul>
      @foreach ($errors->all() as $error)
        <li class="text-danger"> {{ $error }} </li>
      @endforeach
    </ul>
  @endif --}}

  <form class="" action="" method="POST" enctype="multipart/form-data" id="Formulario">
    @csrf
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <h1>¡Cargá acá tu producto!</h1>

          {{-- value="{{ $errors->has('name') ? null : old('name') }}" --}}

{{--
        <div class="form-group">
          <label for="category">Proyecto</label>
            <select class="form-control" name="project" data-nombre='project'>
              <option value="{{$Project}}">Elegí una opción</option>
              @foreach ($allprojects as $Project)
                <option value="{{ $Project->id }}">{{ $Project->name }}</option>
              @endforeach
            </select> --}}
          </div>
        @if ($productoOrigen != null)
          <div class="form-group">
            <label for="product">Producto</label>

              <input readonly style="background-color: lightgray;" type="text"  name="product" value="{{ $Name }}"  class="form-control"
                data-nombre='Nombre del producto'>

          <div class="form-group">
            <label for="category">Categoría</label>

            <select readonly style="background-color: lightgray;" type="text" id="category" name="category" class="form-control">
              <option value="{{ $productoOrigen->category_id }}" selected>{{ $productoOrigen->category->name }}</option>
            </select>

            <div class="form-group">
              <label for="project">Proyecto</label>

              <select readonly style="background-color: lightgray;" type="text" id="project" name="project" class="form-control">
                <option value="{{ $productoOrigen->project_id }}" selected>{{ $productoOrigen->project->name }}</option>
              </select>

        @else
          <div class="form-group">
            <label for="product">Producto</label>

              <input  type="text"  name="product" value="Nombre"  class="form-control" data-nombre='Nombre del producto'>

        <div class="form-group">
          <label for="category">Categoría</label>

          <select type="text" id="category" name="category" class="form-control">
              @foreach ($categories as $Category)
                <option value= "{{ $Category->id }}" selected>{{ $Category->name}}</option>

              @endforeach
          </select>

          @endif

          @if (Auth::user()->organization_id != null)
            <div class="form-group">
              <label for="project">Proyecto</label>

              <select type="text" id="project" name="project" class="form-control">
                  @foreach ($Projects as $Proy)
                    <option value= "{{ $Proy->id }}" selected>{{ $Proy->name}}</option>
                  @endforeach
              </select>
           @endif

            <div class="form-group">
              <label>Danos una breve descripción producto y su estado</label>
              <textarea class= "text-area" name="description" rows="3" cols="100%"></textarea>
            </div>

            <div class="form-group">
    					<label>Subí una imágen de tu producto</label>
    					<input type="file" name="image" class="form-control" data-nombre='Imágen'>
    					<div class="invalid-feedback">
    						Aquí va el error de la imágen
    					</div>
    					@if ($errors->has('image'))
    						<span class="text-danger">
    							{{ $errors->first('image') }}
    						</span>
    					@endif
    			  </div>
            @if (Auth::user()->organization_id != null)
              <div class="form-group">
                <button type="submit" class="btn a_btn">SOLICITAR</button>
              </div>
              @else
                <div class="form-group">
                  <button type="submit" id="BottonDonar" class="btn a_btn">DONAR</button>
                </div>
            @endif

        </div>
      </div>
    </div>


    {{-- <button type="button" id="Negro" class="btn a_btn">Negro</button>
    <button type="button" id="Color" class="btn a_btn">Color</button> --}}

    {{-- <script>

    var Negro = document.getElementById('Negro');
    // var isColored = false;
    Negro.addEventListener("click", function(){
        document.body.style.background = '#353535';
        document.body.style.color = '#FFF';});

    var Color = document.getElementById('Color');
    Color.addEventListener("click", function(){
        document.body.style.background = 'white';
        document.body.style.color = '#353535';
      });

      </script> --}}
















</form>
</div>
<script src="/js/validateForms.js"></script>

@endsection
