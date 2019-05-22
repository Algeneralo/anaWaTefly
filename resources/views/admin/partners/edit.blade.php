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
    <form action="{{route('partners.update')}}" method="post" class="m-b-30" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="card-box"><h4 class="header-title m-t-0 mb-3">الشركاء</h4>
            <div class="row">
                <div class="form-group col-6">
                    <label class="mr-3" for="exampleInputEmail1">الاسم بالعربية</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="name_ar" value="{{$partner->name_ar}}">
                    </div>
                </div>
                <div class="form-group col-6">
                    <label class="mr-3" for="exampleInputEmail1">الاسم بالانجليزية</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="name_en" value="{{$partner->name_en}}">
                    </div>
                </div>
            </div>
            <div class="col-12 form-inline">
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' name="image_file" id="imageUpload" accept=".png, .jpg, .jpeg"/>
                        <label for="imageUpload"><i class="fas fa-pencil-alt"></i></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview"
                             style="background-image: url('{{asset('assets/img/upload/').$partner->image}}');">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-3">
                <div class="col-12">
                    <button class="btn btn-success" type="submit">تعديل</button>
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
@endsection