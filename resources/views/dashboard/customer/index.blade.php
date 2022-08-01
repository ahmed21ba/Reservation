{{--@extends('layouts.main')--}}

{{--@section('content')--}}

<div class="card">
    <div class="card-header">

        <!-- Page Heading -->
        customer
        <a href="{{ asset('dashboard/customer') }}"  class="float-right">Create New</a>

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
                        <td><a href="{{ asset('dashboard/customer/'.$record->id.'/edit') }}" class="btn btn-info">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>


            </table>
        </div>

    </div>

</div>

{{--@endsection--}}






