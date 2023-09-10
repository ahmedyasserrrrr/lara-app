@extends('layouts.app')


@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-6 text-center m-auto">
            <form action="{{ route('forms.store') }}" class="text-center"  method="POST"  enctype="multipart/form-data"  >
                @csrf
                <input type="text" name="name"  class="form-control mb-3 "  placeholder="اسم مشروعك" >
                <input type="file" name="image"  class="form-control mb-3 "  placeholder="ملف او صوره شبيه المشروع" >
                <input type="" name="nems"  class="form-control mb-3 "  placeholder="الاسم الكامل لصاحب المشروع" >
                <input type="number" name="number"  class="form-control mb-3 "  placeholder="رقم هاتفك" >
                <select name="option"  class="form-select" >
                    <option value="">Front-End</option>                        
                    <option value="">Back-End</option>                        
                    <option value="">Ui-Ux</option>                        
                    <option value="">Full-Stack</option>                        
                </select>
                <br>
                <input type="text" name="time"  class="form-control mb-3 "  placeholder=" الوقت المحدد" >
                <textarea name="comment" id="" cols="65" rows="5" class="bg-light" placeholder="التفاصيل الكامله عن المشروع" ></textarea>
                <button class="btn btn-primary btn-lg  "  type="submit"  > اضافه</button>                
                <button class="btn btn-primary btn-lg  "  type="submit"  > تعديل</button>                
                <button class="btn btn-primary btn-lg  "  type="submit"  >مراسله الواتساب </button> 
            </div>               
                </form>
        </div>
    </div>
</div>

@endsection