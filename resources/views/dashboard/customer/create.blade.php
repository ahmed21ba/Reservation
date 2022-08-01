{{--@extends('layouts.main')--}}

{{--@section('content')--}}

<div class="card">

    <div class="card-header">

        <!-- Page Heading -->
        customer - Create New
        <a href="{{ asset('dashboard/customer') }}" class="float-right">index</a>

    </div>

    <div class="card-body">

        @if(session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        @endif

        <form method="post" action={{route('customer.store')}}>
            @csrf

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                    <label for="name">name :</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                    <label for="phone">phone :</label>
                    <input type="text" name="phone" class="form-control" id="phone" >
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                    <label for="password">password :</label>
                    <input type="text" name="password" class="form-control" id="password" >
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                    <label for="email">email :</label>
                    <input type="email" name="email" class="form-control" id="email" >
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 form-group">
                    <button type="submit" class="btn btn-outline-primary">create</button>
                </div>
            </div>

        </form>
    </div>

</div>
{{--@endsection--}}
