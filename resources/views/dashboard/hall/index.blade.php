@extends('dashboard.dashboard')
@section('indexCA')
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
                        ادراة الصالات
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
                    <th>المحافظة</th>
                    <th>العنوان</th>
                    <th>الوصف</th>
                    <th>السعر</th>
                    <th>تاريخ الانشاء</th>
                    <th>العمليات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($records as  $record)
                    <tr>
                        <td>{{$loop->index +1 }}</td>
                        <td>{{$record->name  }}</td>
                        <td>{{ $record->governorate->name }}</td>
                        <td>{{$record->address  }}</td>
                        <td>{{$record->description  }}</td>
                        <td>{{$record->price  }}</td>
                        <td>{{$record->created_at }}</td>
                        {{--                    <td><img src="{{$category->image}}" width="150" height="80"></td>--}}
                        <td>
                            <a href="{{ asset('dashboard/hall/'.$record->id .'/edit') }}" class="btn btn-success" >تعديل
                            <i class="fas fa-edit"></i> </a>
                        <form method="post" action="{{route('hall.destroy',$record->id)}}" >
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
        </div>
    </div>
@endsection
