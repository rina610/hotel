@extends('admin.layouts.layout')
@section('content')
<!-- Main content -->
<section class="content">

<form role="form" method ="post" action = "{{route ('gallery.store')}}"
enctype="multipart/form-data">
@csrf

<select name='category_id'>
@foreach ($categories as $category)
  <option value="{{$category->id}}">{{$category->name}}</option>
  @endforeach
</select>

<div class="form-group">
<label for="image">Изображение</label>
<div class="input-group">
<div class="custom-file">
<input type="file" name = "image" id = "image" class="custom-file-input">
<label class="custom-file-label" for="image">Выбери файл</label>
</div>
</div>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Сохранить</button>
</div>
</form>
</div>
</section>
<!-- /.content -->
@endsection