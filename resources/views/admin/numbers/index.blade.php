@extends('admin.layouts.layout')
@section('content')


<div class="row">        
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <p class="card-text">Здесь вы можете создать номер в отеле</p>
        <a href="{{route('numbers.create')}}" class="btn btn-primary">Создать</a>
      </div>
    </div>
  </div>
</div>
<div class="row"> 
@foreach($numbers as $number)
<div class="card" style="width: 18rem; margin-left: 5px;">
  <div class="card-body">
    <h5 class="card-title">Номер {{$number->number}}.
      @if ($number->status == 1)
      Заселен
      @else 
      Не заселен
      @endif</h5>
    <p class="card-text">{{$number->note}}</p>

    
    <a href="{{route('numbers.edit', ['number'=>$number->id])}}" class="btn btn-primary">Редактировать</a>
  </div>
</div>
@endforeach 
</div>
@endsection