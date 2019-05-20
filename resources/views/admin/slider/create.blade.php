@extends('admin.layout')
@section('style')
    <style>
        textarea {
            resize: none;
            height: 150px;
        }

        .rectangle.avatar-upload .avatar-preview {
            margin-right: auto;
            margin-left: auto;
            width: 60%;
            height: 300px;
        }

        .avatar-upload .avatar-edit {
            right: 270px;
        }
    </style>
@endsection
@section('body')
    <form action="{{route('sliders.store')}}" method="post" class="m-b-30" enctype="multipart/form-data">
        @csrf
        <div class="card-box"><h4 class="header-title m-t-0 mb-3">السلايدر</h4>
            <div class="row">
                <div class="form-group col-6">
                    <label class="mr-3" for="exampleInputEmail1">النص بالعربية</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="caption_ar" value="{{old('caption_ar')}}">
                    </div>
                </div>
                <div class="form-group col-6">
                    <label class="mr-3" for="exampleInputEmail1">النص بالانجليزية</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="caption_en" value="{{old('caption_en')}}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="avatar-upload rectangle">
                        <div class="avatar-edit">
                            <input type='file' name="image_file" id="imageUpload" accept=".png, .jpg, .jpeg"/>
                            <label for="imageUpload"><i class="fas fa-pencil-alt"></i></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-3">
                    <button class="btn btn-success" type="submit">انشاء</button>
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