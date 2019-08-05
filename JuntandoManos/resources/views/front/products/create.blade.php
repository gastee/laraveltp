@extends('front.template')

@section('pageTitle', 'Cargar donación')

@section('mainContent')
  <h2>¡Cargá acá tu producto para donar a {{ $Project->name }}!</h2>
  {{-- Errores si los hubiera --}}
  @if (count($errors))
    <ul>
      @foreach ($errors->all() as $error)
        <li class="text-danger"> {{ $error }} </li>
      @endforeach
    </ul>
  @endif

  <form class="" action="index" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <div class="form-group">
          <label for="product">Producto</label>
          <input type="text"
          name="product"
          value="{{ $errors->has('name') ? null : old('name') }}"
          class="form-control"
          data-nombre='Nombre del producto'
        >
        <div class="invalid-feedback">
          El campo nombre del producto es obligatorio.
        </div>
        @error('name')
          <span class="text-danger">
            {{ $message }}
          </span>
        @enderror

        <div class="form-group">
          <label for="category">Categoría</label>
            <select class="form-control" name="category" data-nombre='Categoría'>
              <option value="">Elegí una opción</option>
              @foreach ($categories as $Category)
                <option value="{{ $Category->id }}">{{ $Category->name }}</option>
              @endforeach
            </select>

            <div class="form-group">
    					<label>Subí una imagen</label>
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
        </div>
      </div>
    </div>

  <div class="col-12">
    <button type="submit" class="btn a_btn">Donar producto</button>
  </div>
</div>
</form>

<script src="/js/validateForms.js"></script>

@endsection
