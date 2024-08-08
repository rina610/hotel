@extends('admin.layouts.layout')
@section('content')
<!-- Main content -->
<section class="content">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Редактирование изображения</h3>
</div>
<form role="form" method ="post" action = "{{route ('gallery.update', ['gallery'=>$image->id])}}"
enctype="multipart/form-data">
@csrf
@method('PUT')

<select name='category_id'>
@foreach ($categories as $category)
    @if($category->id == $image->category_id)
    <option value="{{$category->id}}" selected>{{$category->name}}</option>
    @else
    <option value="{{$category->id}}">{{$category->name}}</option>
    @endif
@endforeach
</select>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Сохранить</button>
</div>
</form>

<form role="form" method ="post" action = "{{route ('gallery.destroy', ['gallery'=>$image->id])}}"
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