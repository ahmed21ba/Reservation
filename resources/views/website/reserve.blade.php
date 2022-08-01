@extends('website.main')

@section('reserve')
    <div class="wrapper" style="padding-top: 60px; padding-bottom: 60px; background: white;">

        @if(session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        @endif

        <div class="wrapper" style="margin-right: 886px;padding-top: 60px; padding-bottom: 60px; background: white;">
            <div class="registration_form">

                @if( isset($hall) )
                    <form method="POST" enctype="multipart/form-data" action="{{ asset('reserve/'.$hall->id) }}">
                        @csrf
                        <div class="form_wrap">

                            <div class="input_wrap">
                                <label for="name">إسم الصالة  </label>
                                <input type="text" name="name" id="name" value="{{ $hall->name }}" disabled>
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div></div>
                            </div>

                            <div class="input_wrap">
                                <label for="">وقت بداية الحجز</label>
                                <input name="start_time" type="datetime-local" value="{{ old('start_time') }}">
                                @error('start_time')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input_wrap">
                                <label for="">وقت نهاية الحجز</label>
                                <input name="end_time" type="datetime-local" value="{{ old('end_time') }}">
                                @error('end_time')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input_wrap">
                                <label>نوع الخدمة</label>
                                <ul>
                                    <li>
                                        <label class="radio_wrap">
                                            <input type="radio" name="occasion" value="1" class="input_radio" checked>
                                            <span>صالة افراح</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio_wrap">
                                            <input type="radio" name="occasion" value="2" class="input_radio">
                                            <span>قاعة مؤتمرات</span>
                                        </label>
                                    </li>
                                </ul>
                                @error('occasion')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input_wrap">
                                <input type="submit" value="حفظ" class="submit_btn">
                            </div>

                        </div>

                    </form>
                @endif
            </div>
        </div>


        <div class="wrapper" style="margin-left: 868px;padding-right: 64px; padding-top: 60px; padding-bottom: 60px; background: white;">
            <div class="registration_form" style="width: 746px;">
                <label style="    font-size: 20px;text-align: center">الاوقات المحجوزة</label>

                <div style="width: 702px;
        height: 387px;direction: ltr; overflow:auto;">
                    <table class="table" cellspacing="0" cellpadding="1" border="1" width="350" style="width: 660px;" >
                        <thead>
                        <tr>

                            <th>وقت بدء الحجز</th>
                            <th>وقت نهاية الحجز</th>
                        </tr>
                        </thead>

                        @foreach($reserve as  $hhhh )
                            <tr >
                                <td>{{ $hhhh->start_time }}</td>
                                <td>{{ $hhhh->end_time }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>

    </div>


@endsection

