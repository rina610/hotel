@extends('admin.layouts.layout')
@section('content')
<!-- Main content -->
<section class="content">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Редактирование категорий</h3>
</div>
<form role="form" method ="post" action = "{{route ('categories.update', ['category'=>$category->id])}}"
enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="card-body">
<div class="form-group">
<label for="name">Название</label>
<input type="text" class="form-control @error('name') is-invalid @enderror"
name="name" value="{{$category->name}}" placeholder="Название">
</div>

<div class="card-body">
<div class="form-group">
<label for="price">Цена</label>
<input type="text" class="form-control @error('price') is-invalid @enderror"
name="price" placeholder="Площадь" value="{{$category->price}}">
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Сохранить</button>
</div>
</form>

<form role="form" method ="post" action = "{{route ('categories.destroy', ['category'=>$category->id])}}"
enctype="multipart/form-data">
@csrf
@method('DELETE')

<div class="card-footer">
<button type="submit" class="btn btn-primary" onclick="return
confirm ('Подтвердите удаление') ">Удалить</button>
</div>
</form>

</div>
</section>
<!-- /.content -->
@endsection