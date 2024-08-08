@extends('admin.layouts.layout')
@section('content')
<!-- Main content -->
<section class="content">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Номера</h3>
</div>
<form role="form" method ="post" action = "{{route ('numbers.store')}}"
enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="form-group">
<label for="city">Город</label>
<input type="text" class="form-control @error('city') is-invalid @enderror"
name="city" value="Сочи">
</div>

<div class="card-body">
<div class="form-group">
<label for="street">Улица</label>
<input type="text" class="form-control @error('street') is-invalid @enderror"
name="street" value="пр-кт Континентальный">
</div>

<div class="card-body">
<div class="form-group">
<label for="build">Здание</label>
<input type="text" class="form-control @error('build') is-invalid @enderror"
name="build" value="6">
</div>

<div class="card-body">
<div class="form-group">
<label for="floor">Этаж</label>
<input type="text" class="form-control @error('floor') is-invalid @enderror"
name="floor">
</div>

<div class="card-body">
<div class="form-group">
<label for="number">Номер</label>
<input type="text" class="form-control @error('number') is-invalid @enderror"
name="number">
</div>

<select name='category_id'>
@foreach ($categories as $category)
  <option value="{{$category->id}}">{{$category->name}}</option>
  @endforeach
</select>

<div >
    <label >Статус</label><br>
<label >Заселен</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('status') is-invalid @enderror"
name="status" value="1">
<label>Не заселен</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('status') is-invalid @enderror"
name="status" value="0">
</div>

<div class="card-body">
<div class="form-group">
<label for="note">Примечание</label>
<textarea name="note"></textarea>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Сохранить</button>
</div>
</form>
</div>
</section>
<!-- /.content -->
@endsection