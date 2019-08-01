@extends('front.template')

@section('pageTitle', 'FAQ')

@section('mainContent')

    <div class="contact">
      <form>
        <p>
          <label for="email">Email:</label>
          <input id="email"type="email" name="email" value=""placeholder="user@email.com">
        </p>

        <div class="form-group">
          <label for="exampleFormControlTextarea1"></label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

          <a class="a_btn"href="#">Send</a>
      </form>
    </div>

@endsection
