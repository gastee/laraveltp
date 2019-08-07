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

    @if (Auth::user()->organization_id != null)
      <h1>¡Editá acá tu solicitud de producto!</h1>
      @else
        <h1>¡Editá acá tu producto para donar!</h1>

    @endif
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
              <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="project">Proyecto</label>

            <select  readonly style="background-color: lightgray;" type="text" id="project" name="project" class="form-control">
              @if ($product->project_id)
                <option value="{{ $product->project_id }}" selected>{{ $product->project->name }}</option>
                @else
                <option value="">Proyecto</option>
              @endif
          </select>


            <div class="form-group">
              <label>Danos una breve descripción de tu producto y su estado</label>
                         @if ($product->description)
                   <textarea class= "text-area" name="description" rows="3" cols="100%">{{$product->description}}</textarea>
                   @else
                     <textarea class= "text-area" name="description" rows="3" cols="100%"></textarea>
                @endif
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
                @if (Auth::user()->organization_id != null)
              <button type="submit" class="btn a_btn">EDITAR</button>

              @else
              <button type="submit" class="btn a_btn">EDITAR</button>

              @endif
            </div>

        </div>
      </form>
      <form action="/product/delete/{{ $product->id }}" method="POST" >
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
</div>

<script src="/js/validateForms.js"></script>

</body>

</html>

@endsection
