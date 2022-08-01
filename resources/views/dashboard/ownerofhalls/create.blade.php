@extends('dashboard.dashboard')

@section('c')

    <div class="card">

        <div class="card-header">

            <!-- Page Heading -->
            مالكين الصالات - انشاء جديد
            <a href="{{ asset('dashboard/ownerofhalls') }}" class="float-right">عرض</a>

        </div>

        <div class="card-body">


            <form method="post" action={{route('ownerofhalls.store')}}>
                @csrf

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                        <label for="name">الاسم :</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                        <label for="phone">رقم الهاتف :</label>
                        <input type="text" name="phone" class="form-control" id="phone" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                        <label for="password">كلمة السر :</label>
                        <input type="text" name="password" class="form-control" id="password" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">
                        <label for="email">البريد الالكتروني :</label>
                        <input type="email" name="email" class="form-control" id="email" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 form-group">


                        <input type="text" name="role" class="form-control" id="role" value="owner" hidden >
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
@endsection
