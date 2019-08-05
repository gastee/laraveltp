@extends('front.template')
@section('mainContent')
  <form class="" action="{{ route('index') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row justify-content-center">
      <div class="col-sm-7">
        <div class="form-group">
          <label for="prduct">Producto</label>
          <input type="text" name="product" value="">

        </div>

      </div>



    </div>

  </form>



@endsection
