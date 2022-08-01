@extends('dashboard.dashboard')

@section('createCA')
    <div class="row">
        <div class="col-md-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide"><i class="la la-gear"></i></span>
                            <h3 class="m-portlet__head-text">اضافة </h3>
                        </div>
                    </div>
                </div>


                <!--begin::Form-->
                <form method="POST" enctype="multipart/form-data" action="{{route('hall.store')}}" class="m-form m-form--fit m-form--label-align-right">
                    @csrf

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">الاسم </label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text" value="{{ old('name') }}"
                                       id="example-text-input" name="name">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    @if(Auth::user()->role == 'admin')
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">المالك </label>
                                <div class="col-10">

                                    <select  name="owner_id"class="form-control"  id="owner_id">
                                        <option value="{{ old('owner_id') }}">choose</option>
                                        @foreach($ownersOfHallslist as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('owner_id')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">رقم الجوال </label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text" value="{{ old('name') }}"
                                       id="example-text-input" name="phone">
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">رابط واتس اب </label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text"  value="{{ old('name') }}"
                                       id="example-text-input" name="whatsapp">
                                @error('whatsapp')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">المحافظة</label>
                        <div class="col-10">
                            <select  name="governorate_id"class="form-control"  id="governorate_id">
                                <option value="{{ old('name') }}">choose</option>
                                @foreach($governoratelist as $gov)
                                    <option value="{{$gov->id}}">{{$gov->name}}</option>
                                @endforeach
                            </select>

                            @error('governorate_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">العنوان</label>
                        <div class="col-10">
                            <input class="form-control m-input" type="text" value="{{ old('name') }}"
                                   id="example-text-input" name="address">
                            @error('address')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">سعر الحجز </label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text" value="{{ old('name') }}"
                                       id="example-text-input" name="price">
                                @error('price')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">وصف الصالة </label>
                            <div class="col-10">
                                <textarea class="form-control" id="exampleTextarea" name="description" rows="3"></textarea>

                                     @error('description')
                                     <div class="text-danger">{{ $message }}</div>
                                     @enderror
                            </div>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">تحميل صورة </label>
                            <div class="col-10">
                                <input class="" type="file" id="example-text-input" name="image">
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions">
                            <div class="row">
                                <div class="col-2">
                                </div>
                                <div class="col-10">
                                    <button type="submit" class="btn btn-success">حفظ</button>
                                    <a href="{{ asset('dashboard/hall') }}" class="btn btn-secondary">رجوع</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
        </div>
    </div>
@endsection
