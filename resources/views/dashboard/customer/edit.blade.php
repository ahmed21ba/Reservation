{{--@extends('layouts.main')--}}

{{--@section('content')--}}

<div class="card">
    <div class="card-header">

        <!-- Page Heading -->
        customer
        <a href="{{ asset('dashboard/customer') }}" class="float-right">index</a>

    </div>
    <div class="card-body">

        <form method="post" action={{route('customer.update',$customer->id)}}>
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                    <label for="name">name :</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$customer->name}}">
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                    <label for="phone">phone :</label>
                    <input type="text" name="phone" class="form-control" id="phone" value="{{$customer->phone}}">
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                    <label for="password">password :</label>
                    <input type="text" name="password" class="form-control" id="password" value="{{$customer->password}}">
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                    <label for="email">email :</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{$customer->email}}">
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 form-group">
                    <button type="submit" class="btn btn-info">update</button>
                </div>
            </div>

        </form>

        <hr/>

        <div class="alert alert-danger"> if you wan't to remove this record, click delete </div>
        <form method="post" action={{route('customer.destroy',$customer->id)}}>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">delete</button>
        </form>

    </div>
</div>

{{--@endsection--}}
