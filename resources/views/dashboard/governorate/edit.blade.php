@extends('dashboard.dashboard')

@section('governoratee')

<div class="card">
    <div class="card-header">

        <!-- Page Heading -->
        المنطقة
        <a href="{{ asset('dashboard/governorate') }}" class="float-right">عرض </a>

    </div>
    <div class="card-body">

{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                @foreach($errors->all() as $message  )--}}
{{--                    <div class="alert alert-danger"> {{ $message }} </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}


        <form method="post" action={{route('governorate.update',$governorate->id)}}>
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                    <label for="name">name :</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$governorate->name}}">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 form-group">
                    <button type="submit" class="btn btn-info">تعديل</button>
                </div>
            </div>

        </form>

        <hr/>

        <div class="alert alert-danger"> اذا اردت حذف المنطقة اضغط على زر الحذف </div>
        <form method="post" action={{route('governorate.destroy',$governorate->id)}}>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">حذف</button>
        </form>

    </div>
</div>

@endsection

