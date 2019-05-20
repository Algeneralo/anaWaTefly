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
    <form action="{{route($route.'.update',$post->id)}}" method="post" class="m-b-30" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-box"><h4 class="header-title m-t-0 mb-3">{{$title}}</h4>
            <div class="row">
                <div class="form-group col-6">
                    <label class="mr-3" for="exampleInputEmail1">العنوان</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="title" value="{{$post->title}}">
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
                <div class="form-group col-9">
                    <label class="mr-3" for="exampleInputEmail1">النص</label>

                    <textarea name="body">{{$post->body}}</textarea>
                </div>
                <div class="col-3">
                    <div class="avatar-upload rectangle">
                        <label class="mr-3" for="exampleInputEmail1">الصورة</label>
                        <div class="avatar-edit mt-4">
                            <input type='file' name="image_file" id="imageUpload" accept=".png, .jpg, .jpeg"/>
                            <label for="imageUpload"><i class="fas fa-pencil-alt"></i></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview"
                                 style="background-image: url({{asset('assets/img/upload/'.$post->image)}})">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-3">
                <div class="col-12">
                    <button class="btn btn-success" type="submit">تعديل</button>
                    <a href="{{route($route.'.index')}}" class="btn btn-danger" type="submit">الغاء</a>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script>
        //this script is using for preview the image before upload it
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload").change(function () {
            readURL(this);
        });
    </script>
    <script src="https://cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('body', {
            language: 'ar'
        });
    </script>
@endsection