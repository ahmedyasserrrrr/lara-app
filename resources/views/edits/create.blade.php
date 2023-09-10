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
        <div class="col-md-6 col-sm-4 m-auto ">
            <form action="{{ route('edits.store') }}" class="t"  method="POST"  enctype="multipart/form-data"  >
                @csrf
                <input type="text" name="name"  class="form-control mb-3 "  placeholder="اسمك " >
                <input type="number" name="number"  class="form-control mb-3 "  placeholder="   رقم هاتفك " >
                <label class="">تاريخ التسليم</label>
                <input type="date" name="date"  class="form-control mb-3 "  placeholder="   تاريخ التسليم" >
                <input type="file" name="image"  class="form-control mb-3 "  placeholder="صوره مشابهه للتعديل " >
                <textarea name="comment" id="" cols="55" rows="6" class="bg-light" placeholder="التفاصيل الكامله علي ما تحتاجه في المشروع" ></textarea>
                <br>
                <button class="btn btn-dark btn-lg  "  type="submit"  > اضافه</button>                
                <a class="btn btn-dark btn-lg " href="https://wa.me/message/3GNCBSLOKVH4E1"  type="submit"  >مراسله الواتساب </a> 
            </div>               
                </form>
        </div>
    </div>

</div>




    
@endsection

