@extends('layouts.layout')
@section('content')
<h1 style="margin-top: 9%;">Галерея</h1>
<div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                
                @php
                $i = 0;
                @endphp
                @foreach ($images as $image)
                <div class="col mt-3">
                  <img src="{{$image->image}}" class="img-fluid" alt="image">
                  </div>
                @endforeach
                  
            </div>
        </div>
@endsection