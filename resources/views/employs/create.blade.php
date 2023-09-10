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
  <form action="{{ route('employs.store') }}" method="POST" >
    @csrf
    <input type="text" class="form-control " name="name" placeholder="اضف اسمك" >
    <br>
        <br>
        <input type="number" class="form-control" placeholder="رقم هاتفك" name="number"  >
        <br>
        <input type="number" class="form-control" placeholder="عمرك" name="age" >
        <br>
<textarea id="" cols="50" class="bg-light" name="comment" rows="5" placeholder="اضف نبذه عن بيئه العمل الخاصه بك"></textarea>
<br>
<button type="submit" class="btn btn-dark btn-lg text-center"  > طلب</button>
<a class="btn btn-dark btn-lg  " href="https://wa.me/message/3GNCBSLOKVH4E1" type="submit"  >مراسله الواتساب </a> 
</form>
  </div>
</div>
</div>
</div>
@endsection