@extends('admin.layout')
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
                    <td>
                        <a class="btn btn-warning" href="{{route('about.update',$about->id)}}">تعديل</a>
                        <form style="display:inline;" class="form-inline" action="{{route('about.destroy',$about->id)}}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">حذف</button>
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
    <div class="card-box">
        <h4 class="header-title m-t-0 mb-3">بيانات التواصل</h4>
        <div class="row">

        </div>
    </div>
@endsection