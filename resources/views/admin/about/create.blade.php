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
    <form action="{{route('about.store')}}" method="post" class="m-b-30">
        @csrf
        <div class="card-box"><h4 class="header-title m-t-0 mb-3">عن الجمعية</h4>
            <div class="row">
                <div class="form-group col-6">
                    <label class="mr-3" for="exampleInputEmail1">الرسالة التعريفية(عن الجمعية)</label>
                    <div class="col-md-12">
                        <textarea type="text" class="form-control" name="info">{{old('info')}}</textarea>
                    </div>
                </div>
                <div class="form-group col-6">
                    <label class="mr-3" for="exampleInputEmail1">الرؤية</label>
                    <div class="col-md-12">
                        <textarea type="text" class="form-control" name="vision">{{old('vision')}}</textarea>
                    </div>
                </div>
                <div class="form-group col-6">
                    <label class="mr-3" for="exampleInputEmail1">الرسالة</label>
                    <div class="col-md-12">
                        <textarea type="text" class="form-control" name="message">{{old('message')}}</textarea>
                    </div>
                </div>
                <div class="form-group col-6">
                    <label class="mr-3" for="exampleInputEmail1">كلمة رئيس الجمعية</label>
                    <div class="col-md-12">
                        <textarea type="text" class="form-control"
                                  name="head_message">{{old('head_message')}}</textarea>
                    </div>
                </div>
                <div class="form-group col-6">
                    <label class="mr-3" for="exampleInputEmail1">اسم رئيس الجمعية</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="head_name" value="{{old('head_name')}}">
                    </div>
                </div>
                <div class="form-group col-6">
                    <label class="mr-3" for="exampleInputEmail1">اللغة</label>
                    <div class="col-md-12">

                        <select class="form-control" name="lang"
                                aria-describedby="emailHelp">
                            <option value="ar">العربية</option>
                            <option value="en">الانجليزية</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <button class="btn btn-success" type="submit">انشاء</button>
                </div>
            </div>
        </div>
    </form>
@endsection