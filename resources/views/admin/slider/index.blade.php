@extends('admin.layout')
@section('style')
    <style>
        form {
            display: inline;
        }
    </style>
@endsection
@section('body')
    <div class="card-box"><h4 class="header-title m-t-0 mb-3">السلايدر</h4>
        <a class="btn btn-success mb-2" href="{{route('sliders.create')}}">اضافة</a>
        <table class="table mb-0 table-hover">
            <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>النص بالعربية</th>
                <th>االنص بالانجليزية</th>
                <th>الصورة</th>
                <th>التحكم</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sliders as $slider)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$slider->caption_ar}}</td>
                    <td>{{$slider->caption_en}}</td>
                    <td><img src="{{asset('assets/img/upload/'.$slider->image)}}"
                             class="img-thumbnail w-25">
                    </td>
                    <td width="11%">
                        <a class="btn btn-warning" href="{{route('sliders.edit',$slider->id)}}">تعديل</a>
                        <form action="{{route('sliders.destroy',$slider->id)}}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger delete_button" type="submit">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @if(count($sliders)==0)
                <tr>
                    <td class="text-center" colspan="8">لا يوجد بيانات لعرضها</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection
@section('script')
    <script>
        $('.delete_button').on('click', function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'هل انت متأكد من الحذف؟',
                text: "لن تتمكن من استرجاع هذه البيانات عند حذفها",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'الغاء',
                confirmButtonText: 'حذف'
            }).then((result) => {
                if (result.value) {
                    $(this).parent().submit();
                }
            })
        })
    </script>
@endsection