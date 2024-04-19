@extends('template')

@section('title')
Отзывы
@endsection

@section('main_content')
<h1 class="text-white">Форма добавления отзыва</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>            
            @endforeach
        </ul>
    </div>    
@endif

<form method="post" action="/review/check" class="d-flex flex-column" style="gap: 20px">
    @csrf
    <input type="email" name="email" id="email" placeholder="Введите email" class="form-control">
    <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control">
    <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea>
    <button type="submit" class="btn btn-success">Отправить</button>
</form> 
<h1>Все отзывы</h1>
@foreach ($reviews as $element)
   <div class="alert alert-warning">
       <h3>{{ $element->subject }}</h3>
       <b>{{ $element->email}}</b>
       <p>{{ $element->message}}</p>
   </div>
    
@endforeach
  
@endsection