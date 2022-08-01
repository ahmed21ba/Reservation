@extends('website.main')

@section('halls')
    <div style="background: white;padding-bottom: 60px;padding-top: 300px;">



        @if(session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        @endif


        @if( isset($records) )
            @if( count($records) )
                @foreach($records as  $record)

                    <div style="background: white;padding-bottom: 60px;padding-top: 60px;">
                        <div class="container">
                            <div class="content" >


                                <div class="right-side">
                                    <div class="topic-text" style="padding-top: 41px;font-size: 37px;">{{ $record->name }}</div>
                                    <br><br> <br><br>

                                    <div class="phone details" >
                                        <i class="fas fa-phone-alt"></i>
                                        <div class="topic" style="color:black;font-size: 30px;">المنطقة :
                                            <span style="font-size: 25px;color:#3e2093;" >{{ $record->governorate->name }}</span>
                                        </div><br>
                                    </div>

                                    <br><br>


                                    <div class="phone details" >
                                        <i class="fas fa-phone-alt"></i>
                                        <div class="topic" style="color:black;font-size: 30px;">رقم الهاتف :
                                            <span style="font-size: 25px;color:#3e2093;" >{{ $record->owner->phone }}</span>
                                        </div><br>
                                    </div>
                                    <br><br>
                                    <div class="phone details" >
                                        <i class="fas fa-phone-alt"></i>
                                        <div class="topic" style="color:black;font-size: 30px;">وصف الصالة :
                                            <span style="font-size: 25px;color:#3e2093;" >{{ $record->description }} </span>
                                        </div><br>
                                    </div>

                                    <br><br>
                                    <div class="phone details" >
                                        <i class="fas fa-phone-alt"></i>
                                        <div class="topic" style="color:black;font-size: 30px;">واتس اب للاستفسار :
                                            <a href="{{ $record->whatsapp }}">
                                                <i class="fa-brands fa-whatsapp"><img src="data:image/jpeg;base64,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" style="max-width: 7%;" ></i>
                                            </a>
                                        </div><br>
                                    </div>







                                    <div class="button" style=" background-color: white; margin-top: 104px;">


                                        <a href="{{ asset( 'reserve/'.$record->id.'/create' ) }}"  style="width: 203px;height: 74px;">
                                            <input type="button"  value="أحجز الان" style="width: 203px;height: 74px;" >
                                        </a>

                                    </div>
                                </div>

                                <div class="left-side" style="width: 45%">
                                    <img src="{{ asset( $record->image ) }}" style="    max-width: 100%;" />
                                </div>
                            </div>
                        </div>
                    </div>


                @endforeach
            @else
                <div class="container" style="margin-top: -210px;
    height: 400px;border-radius: 17px;
    padding: 63px 116px 13px 52px;">
                    <div class="content" >
                        <label>
                            الصالة التي تبحث عنها غير موجودة يرجى ادخال صالة مسجلة لدينا
                        </label>

                    </div>
                </div>
            @endif
        @else
            Please insert at least one search field
        @endif


        @endsection
    </div>


