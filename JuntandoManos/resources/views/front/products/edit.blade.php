@extends('front.template')

@section('pageTitle', 'Cargar donación')

@section('mainContent')

  <body >
  <div class="container">
  {{-- Errores si los hubiera --}}
  @if (count($errors))
    <ul>
      @foreach ($errors->all() as $error)
        <li class="text-danger"> {{ $error }} </li>
      @endforeach
    </ul>
  @endif

  <div class="row justify-content-center">
    <div class="col-sm-8">
  <form class="" action="" method="POST" enctype="multipart/form-data">
    {{method_field('put')}}
    @csrf
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

          <select type="text" id="category" name="category" class="form-control">
            <option value="{{ $product->category_id }}" selected>{{ $product->category->name }}</option>
            @foreach ($categories as $cat)
              <option value="{{ $cat->category_id }}">{{ $cat->name }}</option>
            @endforeach
          </select>

        <div class="form-group">
          <label for="project">Proyecto</label>

            <select type="text" id="project" name="project" class="form-control">
            <option value="{{ $product->project_id }}" selected>{{ $product->project->name }}</option>
            @foreach ($projects as $Proj)
              <option value="{{ $Proj->project_id }}">{{ $Proj->name }}</option>
            @endforeach
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
</form>
</div>
</div>
</div>

<script src="/js/validateForms.js"></script>

</body>

</html>

@endsection
