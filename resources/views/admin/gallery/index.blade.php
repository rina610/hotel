@extends('admin.layouts.layout')
@section('content')
<h1 class="mt-5">Галерея</h1>
@php
$n = 0
@endphp
<!-- Gallery -->
<div class="row">
 
  </style>
  
    @foreach($images as $image)
    @if ($n == 0)
    @php
    $n = 1
    @endphp
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0"> 
    <a href="{{route('gallery.edit', ['gallery'=>$image->id])}}">
    <img
      src="../{{$image->image}}"
      class="w-100 shadow-1-strong rounded mb-4 im"
    />
    </a>
    </div>
    @else
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0"> 
    @php
    $n = 0
    @endphp
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0"> 
    <a href="{{route('gallery.edit', ['gallery'=>$image->id])}}">
    <img
      src="../{{$image->image}}"
      class="w-100 shadow-1-strong rounded mb-4 im"
    />
    </a>
    </div>
    @endif
    @endforeach
  
 

</div>
<!-- Gallery -->



<div class="row">        
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <p class="card-text">Добавление изобрежений отеля и номеров</p>
        <a href="{{route('gallery.create')}}" class="btn btn-primary">Добавить изображение</a>
      </div>
    </div>
  </div>
</div>
@endsection