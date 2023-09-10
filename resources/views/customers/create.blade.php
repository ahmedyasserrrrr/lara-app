@extends('layouts.app')

@section('content')
<div class="container my-4">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
    <div class="row">
    <div class="col-md-6 m-auto">
<div class="card  border-1 border-transparent p-3 ">
  <form action="{{ route('customers.store') }}" method="POST" >
    @csrf
    <input type="text" class="form-control " name="name" placeholder="اضف اسمك" >
    <br>
        <input type="date" class="form-control" name="date" >
        <br>
<textarea id="" cols="50" class="bg-light" name="comment" rows="5" placeholder="اضف رأيك في الموقع/الموقع قابل للانتقادات"></textarea>
<br>
<button type="submit" class="btn btn-primary text-center"  > ارسال</button>
</form>
  </div>
</div>
</div>
</div>
@endsection