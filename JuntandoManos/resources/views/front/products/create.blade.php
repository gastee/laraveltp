@extends('front.template')

@section('pageTitle', 'Cargar donación')

@section('mainContent')

  {{-- Errores si los hubiera --}}
  @if (count($errors))
    <ul>
      @foreach ($errors->all() as $error)
        <li class="text-danger"> {{ $error }} </li>
      @endforeach
    </ul>
  @endif

  <form class="" action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <h1>¡Cargá acá tu producto para donar a {{ $Project }}!</h1>
        <div class="form-group">
          <label for="product">Producto</label>
          <input readonly style="background-color: lightgray;" type="text"  name="product" value="{{ $Name }}"
          {{-- value="{{ $errors->has('name') ? null : old('name') }}" --}}
          class="form-control"
          data-nombre='Nombre del producto'
          >
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



            <div class="form-group">
              <label>Danos una breve descripción de tu producto y su estado</label>
               <div class="col-sm-8">
                <textarea class= "text-area" name="description" rows="3" cols="100"></textarea>
              </div>
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

            <div class="form-group">
              <button type="submit" class="btn a_btn">Donar producto</button>
            </div>

        </div>
      </div>
    </div>
</form>

<script src="/js/validateForms.js"></script>

@endsection
