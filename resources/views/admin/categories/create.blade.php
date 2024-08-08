@extends('admin.layouts.layout')
@section('content')
<!-- Main content -->
<section class="content">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Новая категория</h3>
</div>
<form role="form" method ="post" action = "{{route ('categories.store')}}"
enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="form-group">
<label for="name">Название</label>
<input type="text" class="form-control @error('name') is-invalid @enderror"
name="name" placeholder="Название">
</div>

<div class="card-body">
<div class="form-group">
<label for="area">Площадь</label>
<input type="text" class="form-control @error('area') is-invalid @enderror"
name="area" placeholder="Площадь">
</div>

<div >
    <label for="wi-fi">Есть ли в номере Wi-Fi?</label><br>
<label for="wi-fi" >Да</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('wi-fi') is-invalid @enderror"
name="wi-fi" value="1">
<label for="wi-fi">Нет</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('wi-fi') is-invalid @enderror"
name="wi-fi" value="0">
</div>

<div >
    <label >Есть ли в номере балкон?</label><br>
<label for="balcony" >Да</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('wi-fi') is-invalid @enderror"
name="balcony" value="1">
<label for="balcony">Нет</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('wi-fi') is-invalid @enderror"
name="balcony" value="0">
</div>

<div >
    <label >Номер для некурящих?</label><br>
<label >Да</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('wi-fi') is-invalid @enderror"
name="no_smoking" value="1">
<label>Нет</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('wi-fi') is-invalid @enderror"
name="no_smoking" value="0">
</div>

<div >
    <label >В номере есть ванная комната?</label><br>
<label >Да</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('wi-fi') is-invalid @enderror"
name="bathroom" value="1">
<label>Нет</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('wi-fi') is-invalid @enderror"
name="bathroom" value="0">
</div>

<div >
    <label >В номере есть стиральная машина?</label><br>
<label >Да</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('wi-fi') is-invalid @enderror"
name="washer" value="1">
<label>Нет</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('wi-fi') is-invalid @enderror"
name="washer" value="0">
</div>

<div >
    <label >В номере есть кухня?</label><br>
<label >Да</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('wi-fi') is-invalid @enderror"
name="kitchen" value="1">
<label>Нет</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('wi-fi') is-invalid @enderror"
name="kitchen" value="0">
</div>

<div >
    <label >В номере есть кондиционер?</label><br>
<label >Да</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('wi-fi') is-invalid @enderror"
name="conditioner" value="1">
<label>Нет</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('wi-fi') is-invalid @enderror"
name="conditioner" value="0">
</div>

<div >
    <label >В номере есть отопление?</label><br>
<label >Да</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('wi-fi') is-invalid @enderror"
name="heating" value="1">
<label>Нет</label>
<input type="radio" style="position: relative; height: 15px;"class="form-control @error('wi-fi') is-invalid @enderror"
name="heating" value="0">
</div>

<div class="card-body">
<div class="form-group">
<label for="price">Цена</label>
<input type="text" class="form-control @error('price') is-invalid @enderror"
name="price" placeholder="Площадь">
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Сохранить</button>
</div>
</form>
</div>
</section>
<!-- /.content -->
@endsection