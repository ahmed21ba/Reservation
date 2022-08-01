@extends('website.main')

@section('about')

<div style="background: white;padding-bottom: 60px;padding-top: 60px;">
    <div class="container">
        <div class="content" >


            <div class="right-side">

                <div class="topic-text" style="margin-top: -134px;font-size: 37px;">من نحن</div>
                <br><br> <br><br>
<p style="font-size: 22px;">

    نحن شركة مناسبات قمنا بتطوير موقع الكتروني يعرض صالات الافراع وقاعات المؤتمرات
    <br><br>
     ويقوم المستخدم بالبحث عن صالات حسب المنطقة والاسم والحجز عبر الموقع
    <br><br>
    ويوفر الموقع الوقت والجهد المبذول في اختيار صالة مناسبة

</p>
            </div>
            <div class="left-side" style="width: 45%">
                <img src="{{asset("image/h.png")}}" style="max-width: 100%;"/>
            </div>
        </div>
    </div>
</div>


@endsection
