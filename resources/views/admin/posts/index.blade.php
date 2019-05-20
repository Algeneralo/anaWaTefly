@extends('admin.layout')
@section('style')
    <style>
        form {
            display: inline;
        }
    </style>
@endsection
@section('body')
    <div class="card-box"><h4 class="header-title m-t-0 mb-3">{{$title}}</h4>
        <a class="btn btn-success mb-2" href="{{route($route.'.create')}}">اضافة</a>
        <table class="table mb-0 table-hover">
            <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>العنوان</th>
                <th>النص</th>
                <th>الصورة</th>
                <th>اللغة</th>
                <th>التحكم</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{Str::limit(strip_tags($post->body),100)}}</td>
                    <td><img src="{{asset('assets/img/upload/'.$post->image)}}"
                             class="img-thumbnail w-25">
                    <td>@if($post->lang=="ar"){{'العربية'}}@else{{'الانجليزية'}}@endif</td>
                    </td>
                    <td width="11%">
                        <a class="btn btn-warning" href="{{route($route.'.edit',$post->id)}}">تعديل</a>
                        <form action="{{route($route.'.destroy',$post->id)}}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <button id="delete_button" class="btn btn-danger" type="submit">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @if(count($posts)==0)
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
        $('#delete_button').on('click', function (e) {
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