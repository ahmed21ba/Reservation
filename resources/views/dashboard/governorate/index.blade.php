@extends('dashboard.dashboard')

@section('governoratei')

<div class="card">
    <div class="card-header">

        <!-- Page Heading -->
        المنطقة
        <a href="{{ asset('dashboard/governorate/create') }}"  class="float-right">اضافة</a>

    </div>
    <div class="card-body">

        <!-- Page Content -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>الاسم</th>
                    <th>العمليات</th>
                </tr>

                </thead>
                <tbody>
                @foreach($records as  $record)
                    <tr>
                        <td class="text-center">{{$record->id  }}</td>
                        <td>{{$record->name  }}</td>
                        <td><a href="{{ asset('dashboard/governorate/'.$record->id.'/edit') }}" class="btn btn-info">تعديل</a></td>
                    </tr>
                @endforeach
                </tbody>


            </table>
        </div>

    </div>

</div>

@endsection






