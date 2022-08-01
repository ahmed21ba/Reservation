@extends('dashboard.dashboard')

@section('editCA')
    <div class="row">
        <div class="col-md-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide"><i class="la la-gear"></i></span>
                            <h3 class="m-portlet__head-text">تعديل </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->


{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        @foreach($errors->all() as $message  )--}}
{{--                    <div class="alert alert-danger"> {{ $message }} </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}



                <form method="POST" action="{{route('hall.update',$hall->id)}}" class="m-form m-form--fit m-form--label-align-right">
                    @csrf
                    @method('put')
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">الاسم</label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text" value="{{$hall->name}}"
                                       id="example-text-input" name="name">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">المنطقة</label>
                            <div class="col-10">
                                <select  name="governorate_id" class="form-control"  id="governorate_id">
                                    <option value="{{$hall->governorate_id}}">choose</option>
                                    @foreach($governoratelist as $item)
                                        <option value="{{$item->id}}" {{ (($hall->governorate_id == $item->id)?'selected':'') }}>{{$item->name}}</option>
                                    @endforeach
                                </select>
                                @error('governorate')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">رقم الجوال </label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text" value="{{ $hall->phone   }}"
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
                                <input class="form-control m-input" type="text"  value="{{$hall->whatsapp}}"
                                       id="example-text-input" name="whatsapp">
                                @error('whatsapp')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">العنوان</label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text" value="{{$hall->address}}"
                                       id="example-text-input" name="address">
                                @error('address')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">سعر الحجز </label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text"  value="{{$hall->price}}"
                                       id="example-text-input" name="price">
                                @error('price')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">الوصف </label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text" value="{{$hall->description}}"
                                       id="example-text-input" name="description">
                                @error('description')
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

                                    <a href="{{ route('hall.index') }}" class="btn btn-secondary">رجوع</a>
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
