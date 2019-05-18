@extends('admin.layout')
@section('style')
    <style>
        textarea {
            resize: none;
            height: 150px;
        }
    </style>
@endsection
@section('body')
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">×</span>
            </button>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">×</span>
            </button>
            {{session('success')}}
        </div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">×</span>
            </button>
            {{session('error')}}
        </div>
    @endif
    <form action="/admin/config/{{$config->id??''}}" method="post" class="m-b-30">
        @csrf
        <div class="card-box"><h4 class="header-title m-t-0 mb-3">الرسالة الترحيبية</h4>
            <div class="row">
                <div class="form-group col-6">
                    <label class="mr-3" for="exampleInputEmail1">الرسالة الترحيبية باللغة العربية</label>
                    <div class="col-md-12">
                            <textarea type="email" class="form-control" name="welcome_message_ar"
                                      aria-describedby="emailHelp">{{$config->welcome_message_ar??''}}</textarea>
                    </div>
                </div>
                <div dir="ltr" class="form-group col-6">
                    <label class="ml-3 float-right" for="exampleInputEmail1">Welcome message in English</label>
                    <div class="col-md-12">
                            <textarea type="email" class="form-control" name="welcome_message_en"
                                      aria-describedby="emailHelp">{{$config->welcome_message_en??''}}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-box">
            <h4 class="header-title m-t-0 mb-3">بيانات التواصل</h4>
            <div class="row">
                <div class="form-group col-6">
                    <label class="mr-3" for="exampleInputEmail1">الفيسبوك</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="facebook"
                               aria-describedby="emailHelp" value="{{$config->facebook??''}}">
                    </div>
                </div>
                <div class="form-group col-6">
                    <label class="mr-3" for="exampleInputEmail1">تويتر</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="twitter"
                               aria-describedby="emailHelp" value="{{$config->twitter??''}}">
                    </div>
                </div>
                <div class="form-group col-6 ">
                    <label class="mr-3" for="exampleInputEmail1">انستجرام</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="instagram"
                               aria-describedby="emailHelp" value="{{$config->instagram??''}}">
                    </div>
                </div>
                <div class="form-group col-6 ">
                    <label class="mr-3" for="exampleInputEmail1">رقم الجوال</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="phone"
                               aria-describedby="emailHelp" value="{{$config->phone??''}}">
                    </div>
                </div>
                <div class="form-group col-6 ">
                    <label class="mr-3" for="exampleInputEmail1">العنوان بالعربية</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="location_ar"
                               aria-describedby="emailHelp" value="{{$config->location_ar??''}}">
                    </div>
                </div>
                <div class="form-group col-6 ">
                    <label class="mr-3" for="exampleInputEmail1">العنوان بالانجليزية</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="location_en"
                               aria-describedby="emailHelp" value="{{$config->location_en??''}}">
                    </div>
                </div>
                <div class="form-group col-6 ">
                    <label class="mr-3" for="exampleInputEmail1">رقم الهاتف</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="telephone"
                               aria-describedby="emailHelp" value="{{$config->telephone??''}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button class="btn btn-success mt-3" type="submit">حفظ</button>
                </div>
            </div>
        </div>
    </form>
@endsection