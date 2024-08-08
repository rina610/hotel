@extends('admin.layouts.layout')
@section('content')
<!-- Main content -->
<section class="content">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Редактирование номеров</h3>
</div>
<form role="form" method ="post" action = "{{route ('numbers.update', ['number'=>$number->id])}}"
enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="card-body">

<div class="form-group">
<label for="note">Примечание</label>
<input type="text" class="form-control @error('note') is-invalid @enderror"
name="note" value="{{$number->note}}" placeholder="Название">
</div>

<div >
    <label >Статус</label><br>
<label >Заселен</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('status') is-invalid @enderror"
name="status" value="1">
<label>Не заселен</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('status') is-invalid @enderror"
name="status" value="0">
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Сохранить</button>
</div>
</form>

<form role="form" method ="post" action = "{{route ('numbers.destroy', ['number'=>$number->id])}}"
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