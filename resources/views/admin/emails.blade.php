@extends('admin.layout')
@section('style')
    <style>
        .inner-nav .nav-link.active, .inner-nav .show > .nav-link {
            background-color: #4d6b82;
        }

        .inner-card {
            border: 1px solid #00000021 !important;
        }

        .tab-content {
            padding: unset;
        }
    </style>
@endsection
@section('body')
    <div class="card-box"><h4 class="header-title m-t-0 mb-3">الطلبات</h4>
        <div class="row">
            <ul class="nav nav-pills mb-3 mr-5" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                       href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">الرسائل</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                       aria-controls="pills-profile" aria-selected="false">طلبات التطوع</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                       aria-controls="pills-contact" aria-selected="false">طلبات الشركاء</a>
                </li>
            </ul>
        </div>
        <div class="tab-content " id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                 aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills inner-nav" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            @foreach($mails as $mail)
                                <a class="nav-link @if($loop->first)active show @endif" data-toggle="pill"
                                   href="#mails-{{$mail->id}}" role="tab"
                                   aria-controls="v-pills-home" aria-selected="true">
                                    {{$mail->subject}}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            @foreach($mails as $mail)
                                <div class="tab-pane fade @if($loop->first)active show @endif" id="mails-{{$mail->id}}"
                                     role="tabpanel"
                                     aria-labelledby="v-pills-profile-tab">
                                    <div class="card inner-card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$mail->subject}}</h5>
                                            <p class="card-text">{{$mail->message}}</p>
                                            <p class="card-text">
                                                <small class="text-muted">{{$mail->name}}--</small>

                                                <small class="text-muted">{{$mail->phone}}</small>
                                                <br>
                                                <small class="text-muted">{{$mail->email}}</small>
                                            </p>
                                            <a data-table="mails" data-id="{{$mail->id}}" href="/"
                                               class="btn btn-danger float-right delete-btn">حذف</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @if(count($mails)==0)
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">لا يوجد بيانات لعرضها</h5>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills inner-nav" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            @foreach($volunteersRequests as $volunteersRequest)
                                <a class="nav-link @if($loop->first)active show @endif" data-toggle="pill"
                                   href="#volunteer-{{$volunteersRequest->id}}" role="tab"
                                   aria-controls="v-pills-home" aria-selected="true">
                                    طلب تطوع من {{$volunteersRequest->name}}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            @foreach($volunteersRequests as $volunteersRequest)
                                <div class="tab-pane fade @if($loop->first)active show @endif"
                                     id="volunteer-{{$volunteersRequest->id}}"
                                     role="tabpanel"
                                     aria-labelledby="v-pills-profile-tab">
                                    <div class="card inner-card">
                                        <div class="card-body">
                                            <h5 class="card-title"> طلب تطوع من {{$volunteersRequest->name}}</h5>
                                            <p class="card-text">
                                                <span> <b>الاسم: </b>{{$volunteersRequest->name}}</span>
                                                <br>
                                                <span><b> رقم الجوال: </b> {{$volunteersRequest->phone}}</span>
                                                <br>
                                                <span> <b>الايميل:</b> {{$volunteersRequest->email}}</span>
                                                <br>
                                                <span> <b>المدة بالشهور: </b>{{$volunteersRequest->duration}}</span>
                                            </p>
                                            <a data-table="volunteers" data-id="{{$volunteersRequest->id}}"
                                               href="/"
                                               class="btn btn-danger float-right delete-btn">حذف</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @if(count($volunteersRequests)==0)
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">لا يوجد بيانات لعرضها</h5>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills inner-nav" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            @foreach($partnersRequests as $partnersRequest)
                                <a class="nav-link @if($loop->first)active show @endif" data-toggle="pill"
                                   href="#partner-{{$partnersRequest->id}}" role="tab"
                                   aria-controls="v-pills-home" aria-selected="true">
                                    طلب من {{$partnersRequest->name}}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            @foreach($partnersRequests as $partnersRequest)
                                <div class="tab-pane fade @if($loop->first)active show @endif"
                                     id="partner-{{$partnersRequest->id}}"
                                     role="tabpanel"
                                     aria-labelledby="v-pills-profile-tab">
                                    <div class="card inner-card">
                                        <div class="card-body">
                                            <h5 class="card-title"> طلب من {{$partnersRequest->name}}</h5>
                                            <p class="card-text">{{$partnersRequest->message}}</p>
                                            <p class="card-text">
                                                <small class="text-muted">{{$partnersRequest->name}}--</small>

                                                <small class="text-muted">{{$partnersRequest->phone}}</small>
                                                <br>
                                                <small class="text-muted">{{$partnersRequest->email}}</small>
                                            </p>
                                            <a data-table="partnerRequests" data-id="{{$partnersRequest->id}}" href="/"
                                               class="btn btn-danger float-right delete-btn">حذف</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @if(count($partnersRequests)==0)
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">لا يوجد بيانات لعرضها</h5>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        //get alert when trying to delete mail or request
        $(".delete-btn").on("click", function (e) {
            e.preventDefault()
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
                    deleteRequest($(this));
                }
            })
        });

        //send ajax request to delete
        function deleteRequest(button) {
            let id = button.data('id');
            let table = button.data('table');
            $.ajax({
                url: "/admin/delete/" + table + "/" + id,
                type: "POST",
                data: {
                    "_method": "DELETE",
                    "_token": "{{csrf_token()}}"
                }, success: function (data) {
                    console.log(data['error']);
                    if (data['status'] == 200) {
                        hideCard(button);
                        Swal.fire("تم حذف البيانات بنجاح", ' ', 'success')
                    } else {
                        Swal.fire("حدث خلل, الرجاء المحاولة لاحقا!", ' ', 'error')
                    }

                },
                error: function (data) {
                    // console.log(data.responseJSON);
                    Swal.fire("حدث خلل, الرجاء المحاولة لاحقا!", ' ', 'error')
                }
            });
        }

        //remove the card and active the next one
        function hideCard(button) {
            let card = button.parent().parent().parent();
            let cardID = "#" + card.attr('id');
            card.next().addClass("active show");
            card.fadeOut("slow", function () {
                // After animation completed:
                card.remove();
            });
            let navPil = $('a[href="' + cardID + '"]');
            navPil.next().addClass("active");
            navPil.fadeOut("slow", function () {
                // After animation completed:
                navPil.remove();
            });
        }
    </script>
@endsection

