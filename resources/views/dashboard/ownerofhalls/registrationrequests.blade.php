@extends('dashboard.dashboard')

@section('r')

    <div class="card">
        <div class="card-header">

            <!-- Page Heading -->
            طلبات تسجيل المالكيين الجدد
            <a href="{{ asset('dashboard/ownerofhalls') }}"  class="float-right">اضافة</a>

        </div>
        <div class="card-body">

            <!-- Page Content -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>phone</th>
                        <th>password</th>
                        <th>email</th>
                        <th>Manage</th>
                    </tr>

                    </thead>
                    <tbody>
                    @foreach($records as  $record)
                        <tr>
                            <td class="text-center">{{$record->id  }}</td>
                            <td>{{$record->name  }}</td>
                            <td>{{$record->phone  }}</td>
                            <td>{{$record->password  }}</td>
                            <td>{{$record->email  }}</td>
                            <td><a href="{{ asset('dashboard/ownerofhalls/'.$record->id.'/edit') }}" class="btn btn-info">تعديل</a></td>
                        </tr>
                    @endforeach
                    </tbody>


                </table>
            </div>

        </div>

    </div>

@endsection






