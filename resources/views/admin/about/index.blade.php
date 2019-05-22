@extends('admin.layout')
@section('style')
    <style>
        form {
            display: inline;
        }
    </style>
@endsection
@section('body')
    <div class="card-box"><h4 class="header-title m-t-0 mb-3">عن الجمعية</h4>
        <a class="btn btn-success mb-2" href="{{route('about.create')}}">اضافة</a>
        <table class="table mb-0 table-hover">
            <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>التعريف</th>
                <th>الرؤية</th>
                <th>الرسالة</th>
                <th>كلمة رئيس الجمعية</th>
                <th>اسم رئيس الجمعية</th>
                <th>اللغة</th>
                <th>التحكم</th>
            </tr>
            </thead>
            <tbody>
            @foreach($abouts as $about)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$about->info}}</td>
                    <td>{{$about->vision}}</td>
                    <td>{{$about->message}}</td>
                    <td>{{$about->head_message}}</td>
                    <td>{{$about->head_name}}</td>
                    <td>@if($about->lang=="ar"){{'العربية'}}@else{{'الانجليزية'}}@endif</td>
                    <td width="11%">
                        <a class="btn btn-warning" href="{{route('about.edit',$about->id)}}">تعديل</a>
                        <form action="{{route('about.destroy',$about->id)}}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <button  class="btn btn-danger delete_button" type="submit">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @if(count($abouts)==0)
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