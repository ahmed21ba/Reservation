@extends('dashboard.dashboard')

@section('o')

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        مالكيين الصالات
                    </h3>
                </div>
            </div>

        </div>
        <div class="m-portlet__body">
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                <thead>
                <tr>
                    <th>##</th>
                    <th>الاسم</th>
                    <th>رقم الجوال</th>
                    <th>الايميل</th>
                    <th>تاريخ التسجيل</th>
                    <th>العمليات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($records as  $record)
                    <tr>
                        <td>{{$loop->index +1 }}</td>
                        <td >{{$record->name  }}</td>
                        <td >{{$record->phone  }}</td>
                        <td >{{$record->email  }}</td>
                        <td>{{$record->created_at }}</td>
                        <td>
                            <a href="{{route('ownerofhalls.edit',$record->id)}}" class="btn btn-success" >تعديل
                                <i class="fas fa-edit"></i> </a>
                            <form method="post" action="{{route('ownerofhalls.destroy',$record->id)}}" >
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">حذف
                                    <i class="fa fa-recycle"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{--            {{$categories->links()}}--}}
        </div>
    </div>



{{--    <div class="card">--}}
{{--        <div class="card-header">--}}

{{--            <!-- Page Heading -->--}}
{{--            مالكيين الصالات--}}
{{--            <a href="{{ asset('dashboard/ownerofhalls') }}"  class="float-right">اضافة</a>--}}

{{--        </div>--}}
{{--        <div class="card-body">--}}

{{--            <!-- Page Content -->--}}
{{--            <div class="table-responsive">--}}
{{--                <table class="table table-bordered table-hover table-striped">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th class="text-center">ID</th>--}}
{{--                        <th class="text-center">الاسم</th>--}}
{{--                        <th class="text-center">رقم الجوال</th>--}}
{{--                        <th class="text-center">كلمة السر</th>--}}
{{--                        <th class="text-center">الايميل</th>--}}
{{--                        <th class="text-center">العمليات</th>--}}
{{--                    </tr>--}}

{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($records as  $record)--}}
{{--                        <tr>--}}
{{--                            <td >{{$record->id  }}</td>--}}
{{--                            <td >{{$record->name  }}</td>--}}
{{--                            <td >{{$record->phone  }}</td>--}}
{{--                            <td >{{$record->password  }}</td>--}}
{{--                            <td >{{$record->email  }}</td>--}}
{{--                            <td ><a href="{{ asset('dashboard/ownerofhalls/'.$record->id.'/edit') }}" class="btn btn-info">تعديل</a></td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}


{{--                </table>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}

@endsection






