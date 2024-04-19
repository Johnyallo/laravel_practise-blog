@extends('template')

@section('title')
   Страница про нас
@endsection

@section('main_content')
<section class="py-5 text-center container bg-warning">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Про нас</h1>
        <p class="lead text-body-secondary">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Оставить заявку</a>
          <a href="#" class="btn btn-secondary my-2">Уточнить детали</a>
        </p>
      </div>
    </div>
  </section>
@endsection