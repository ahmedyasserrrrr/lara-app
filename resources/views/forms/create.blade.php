@extends('layouts.app')

@section('content')
<div class="container">
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
        <div class="col-md-6 text-center m-auto">
            <form action="{{ route('forms.store') }}" class="text-center"  method="POST"  enctype="multipart/form-data"  >
                @csrf
                <input type="text" name="name"  class="form-control mb-3 "  placeholder="اسم مشروعك" >
                <input type="file" name="image"  class="form-control mb-3 "  placeholder="ملف او صوره شبيه المشروع" >
                <input type="" name="nems"  class="form-control mb-3 "  placeholder="الاسم الكامل لصاحب المشروع" >
                <input type="number" name="number"  class="form-control mb-3 "  placeholder="رقم هاتفك" >
                <input type="text" name="option"  class="form-control mb-3 "  placeholder=" اطار العمل" >
                <input type="text" name="time"  class="form-control mb-3 "  placeholder=" الوقت المحدد" >
                <textarea name="comment" id="" cols="55" rows="5" class="bg-light" placeholder="التفاصيل الكامله عن المشروع" ></textarea>
                <br>
                <button class="btn btn-dark btn-lg  "  type="submit"  > اضافه</button>                
                <a class="btn btn-dark btn-lg  " href="https://wa.me/message/3GNCBSLOKVH4E1" type="submit"  >مراسله الواتساب </a> 
            </div>               
                </form>
        </div>
    </div>
</div>

@endsection