@extends('dashboard.dashboard')

@section('e')

    <div class="card">
        <div class="card-header">

            <!-- Page Heading -->
            owner Of Halls
            <a href="{{ asset('dashboard/ownerofhalls') }}" class="float-right">index</a>

        </div>
        <div class="card-body">
            <form method="post" action={{route('ownerofhalls.update',$ownerOfHalls->id)}}>
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                        <label for="name">name :</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$ownerOfHalls->name}}">
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                        <label for="email">email :</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{$ownerOfHalls->email}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                        <label for="phone">phone :</label>
                        <input type="text" name="phone" class="form-control" id="phone" value="{{$ownerOfHalls->phone}}">
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
            <form method="post" action={{route('ownerofhalls.destroy',$ownerOfHalls->id)}}>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="{alert('Are you sure?')}">delete</button>
            </form>

        </div>
    </div>

@endsection
