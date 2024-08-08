@extends('admin.layouts.layout')
@section('content')


<div class="row">        
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <p class="card-text">Создание новой категории для номеров</p>
        <a href="{{route('categories.create')}}" class="btn btn-primary">Создать</a>
      </div>
    </div>
  </div>
</div>
<div class="row"> 
@foreach($categories as $category)
<div class="card" style="width: 18rem; margin-left: 5px;">
  <div class="card-body">
    <h5 class="card-title">{{$category->name}}</h5>
    <p class="card-text">Редактирование номера {{$category->name}}.</p>
    <a href="{{route('categories.edit', ['category'=>$category->id])}}" class="btn btn-primary">Редактировать</a>
  </div>
</div>
@endforeach 
</div>
@endsection