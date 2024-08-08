@extends('admin.layouts.layout')
@section('content')

<div class="card">
<div style="margin:3%">
  <div class="card-header">
    Категории номеров
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Здесь вы можете создать или изменить категорию номера, которая будет использоваться для определения и группировки номеров в отеле</p>
    <a href="{{route('categories.index')}}" class="btn btn-primary">Перейти</a>
  </div>
  </div>

<div style="margin:3%">
  <div class="card-header" >
    Номера
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Здесь вы можете создать или изменять данные о номерах.</p>
    <a href="{{route('numbers.index')}}" class="btn btn-primary">Перейти</a>
  </div>
</div>
<div style="margin:3%">
  <div class="card-header">
    Галерея
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Здесь вы можете добавлять фотографии отеля, а так-же к категориям номеров.</p>
    <a href="{{route('gallery.index')}}" class="btn btn-primary">Перейти</a>
  </div>
  </div>
</div>

@endsection