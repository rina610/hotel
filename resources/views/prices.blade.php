@extends('layouts.layout')
@section('content')
<main>
    
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal text-body-emphasis">Номера</h1>
      </div>
<div class="row">
      @foreach ($categories as $category)
      @if ($category->id != 0)
     
 <div class="card text-center" style="width: 18rem; margin: 2%;">
  <div class="card-body">
    <h5 class="card-title">{{$category->name}}</h5>
    @if($category->no_smoking == 1)
            <p class="card-text">Номер для некурящих</p>
            @endif
            @if ($category->balcony == 1)
            <p class="card-text">Балкон</p>
            @endif
            @if ($category->bathroom == 1)
            <p class="card-text">Ванная комната</p>
            @endif
            @if ($category->washer == 1)
            <p class="card-text">Стиральная машина</p>
            @endif
            @if ($category->kitchen == 1)
            <p class="card-text">Кухня</p>
            @endif
            @if ($category->conditioner == 1)
            <p class="card-text">Кондиционер</p>
            @endif
            @if ($category->heating == 1)
            <p class="card-text">Отопление</p>
            @endif
    <a name="category" value="{{$category->id}}" href="{{route('booking' , ['category' => $category])}}" class="btn btn-primary">Посмотреть</a>
  </div>
</div>
  
    @endif
    @endforeach
 </div>  


  
</main>
@endsection