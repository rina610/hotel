@extends('admin.layouts.layout')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@if(session()->has('error'))
<div class="alert alert-danger">
{{session('error')}}
</div>
@endif

<form action="{{route('register.store')}}" method="post">
@csrf

 <!-- Password input -->
 <div class="form-outline mb-4">
    <input type="text" name="name" class="form-control" />
    <label class="form-label" for="form2Example2">Name</label>
  </div>

  <div class="form-outline mb-4">
    <input type="email" name="email" class="form-control" />
    <label class="form-label" for="form2Example2">Email</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="password" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <div class="input-group mb-3">
          <input type="password" name ="password_confirmation" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
    </div>
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Войти</button>

</form>
@endsection