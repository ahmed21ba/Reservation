@extends('dashboard.dashboard')

@section('governoratec')

<div class="card">

    <div class="card-header">

        <!-- Page Heading -->
        المنطقة
        <a href="{{ asset('dashboard/governorate') }}" class="float-right">عرض</a>

    </div>

    <div class="card-body">

        @if(session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        @endif

{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    @foreach($errors->all() as $message  )--}}
{{--                        <div class="alert alert-danger"> {{ $message }} </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}


        <form method="post" action={{route('governorate.store')}}>
            @csrf

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                    <label for="name">الاسم  :</label>
                    <input type="text" name="name" class="form-control" id="name">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 form-group">
                    <button type="submit" class="btn btn-outline-primary">انشاء</button>
                </div>
            </div>

        </form>
    </div>

</div>
@endsection
