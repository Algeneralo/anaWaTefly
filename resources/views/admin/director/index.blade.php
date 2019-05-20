@extends('admin.layout')
@section('style')
    <style>
        form {
            display: inline;
        }
    </style>
@endsection
@section('body')
    <div class="card-box"><h4 class="header-title m-t-0 mb-3">مجلس الادارة</h4>
        <a class="btn btn-success mb-2" href="{{route('directors.create')}}">اضافة</a>
        <table class="table mb-0 table-hover">
            <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>الاسم بالعربية</th>
                <th>الاسم بالانجليزية</th>
                <th>المنصب بالعربية</th>
                <th>المنصب بالانجليزية</th>
                <th>الصورة</th>
                <th>التحكم</th>
            </tr>
            </thead>
            <tbody>
            @foreach($directors as $director)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$director->name_ar}}</td>
                    <td>{{$director->name_en}}</td>
                    <td>{{$director->position_ar}}</td>
                    <td>{{$director->position_en}}</td>
                    <td><img src="{{asset('assets/img/upload/'.$director->image??'staff.png')}}"
                             class="img-thumbnail w-25">
                    </td>
                    <td width="11%">
                        <a class="btn btn-warning" href="{{route('directors.edit',$director->id)}}">تعديل</a>
                        <form action="{{route('directors.destroy',$director->id)}}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @if(count($directors)==0)
                <tr>
                    <td class="text-center" colspan="8">لا يوجد بيانات لعرضها</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection