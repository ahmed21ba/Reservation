<!DOCTYPE html>
<html>
<head>
    {{--    <meta charset="utf-8"/>--}}
    <title>مناسباتي</title>
    <link href="https://assets.website-files.com/5e4b1929fccc7f2575de825e/css/escape-free-template.webflow.547566f2e.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link href="fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
    <style media="screen">
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

        *{
            direction: rtl;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: 'Montserrat', sans-serif;
        }


        .wrapper{
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .registration_form{
            background: whitesmoke;
            padding: 25px;
            border-radius: 5px;
            width: 400px;
        }

        .registration_form .title{
            text-align: center;
            font-size: 25px;
            text-transform: uppercase;
            color: white;
            letter-spacing: 2px;
            font-weight: 700;
            margin-top: -25px;
            margin-left:-25px;
            margin-right:-25px;
        }

        .form_wrap{
            margin-top: 35px;
        }

        .form_wrap .input_wrap{
            margin-bottom: 15px;
        }

        .form_wrap .input_wrap:last-child{
            margin-bottom: 0;
        }

        .form_wrap .input_wrap label{
            display: block;
            margin-bottom: 3px;
            color: #1a1a1f;
        }

        .form_wrap .input_grp{
            display: flex;
            justify-content: space-between;
        }

        .form_wrap .input_grp  input[type="text"]{
            width: 165px;
        }

        .form_wrap  input{
            width: 100%;
            border-radius: 3px;
            border: 1.3px solid #9597a6;
            padding: 10px;
            outline: none;
        }

        .form_wrap  input[type="text"]:focus{
            border-color: #063abd;
        }

        .form_wrap ul{
            border:1px solid rgb(115, 185, 235);
            width:70%;
            background: rgb(206, 238, 242);
            margin-left: 15%;
            padding: 8px 10px;
            border-radius: 20px;
            display: flex;
            justify-content: center;
        }

        .form_wrap ul li:first-child{
            margin-right: 15px;
        }

        .form_wrap ul .radio_wrap{
            position: relative;
            margin-bottom: 0;
        }

        .form_wrap ul .radio_wrap .input_radio{
            position: absolute;
            top: 0;
            right: 0;
            opacity: 0;
        }

        .form_wrap ul .radio_wrap span{
            display: inline-block;
            font-size: 17px;
            padding: 3px 15px;
            border-radius: 15px;
            color: #101749;
        }

        .form_wrap .input_radio:checked ~ span{
            background: #105ce2;
            color:white;
        }

        .form_wrap .submit_btn{
            width: 100%;
            background: #0d6ad7;
            padding: 10px;
            border: 0;
            color:white;
            font-size:17px;
            border-radius: 3px;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
        }

        .form_wrap .submit_btn:hover{
            background: #051c94;
        }
    </style>
    <style>/* Google Font CDN Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins" , sans-serif;
        }
        body{
            min-height: 100vh;
            width: 100%;
            background: #c8e8e9;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container{
            width: 85%;
            background: #fff;
            border-radius: 6px;
            padding: 20px 60px 30px 40px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .container .content{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .container .content .left-side{
            width: 25%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
            position: relative;
        }
        .content .left-side::before{
            content: '';
            position: absolute;
            height: 70%;
            width: 2px;
            right: -15px;
            top: 50%;
            transform: translateY(-50%);
            background: #afafb6;
        }
        .content .left-side .details{
            margin: 14px;
            text-align: center;
        }
        .content .left-side .details i{
            font-size: 30px;
            color: #3e2093;
            margin-bottom: 10px;
        }
        .content .left-side .details .topic{
            font-size: 18px;
            font-weight: 500;
        }
        .content .left-side .details .text-one,
        .content .left-side .details .text-two{
            font-size: 14px;
            color: #afafb6;
        }
        .container .content .right-side{
            width: 75%;
            margin-left: 75px;
        }
        .content .right-side .topic-text{
            font-size: 23px;
            font-weight: 600;
            color: #3e2093;
        }
        .right-side .input-box{
            height: 50px;
            width: 100%;
            margin: 12px 0;
        }
        .right-side .input-box input,
        .right-side .input-box textarea{
            height: 100%;
            width: 100%;
            border: none;
            outline: none;
            font-size: 16px;
            background: #F0F1F8;
            border-radius: 6px;
            padding: 0 15px;
            resize: none;
        }
        .right-side .message-box{
            min-height: 110px;
        }
        .right-side .input-box textarea{
            padding-top: 6px;
        }
        .right-side .button{
            display: inline-block;
            margin-top: 12px;
        }
        .right-side .button input[type="button"]{
            color: #fff;
            font-size: 18px;
            outline: none;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            background: #3e2093;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .button input[type="button"]:hover{
            background: #5029bc;
        }

        @media (max-width: 950px) {
            .container{
                width: 90%;
                padding: 30px 40px 40px 35px ;
            }
            .container .content .right-side{
                width: 75%;
                margin-left: 55px;
            }
        }
        @media (max-width: 820px) {
            .container{
                margin: 40px 0;
                height: 100%;
            }
            .container .content{
                flex-direction: column-reverse;
            }
            .container .content .left-side{
                width: 100%;
                flex-direction: row;
                margin-top: 40px;
                justify-content: center;
                flex-wrap: wrap;
            }
            .container .content .left-side::before{
                display: none;
            }
            .container .content .right-side{
                width: 100%;
                margin-left: 0;
            }
        }
    </style>
  <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");


      body{
          background-color:#eee;
          font-family: "Poppins", sans-serif;
          font-weight: 300;
      }



      .search{
          position: relative;
          box-shadow: 0 0 40px rgba(51, 51, 51, .1);

      }

      .search input{

          height: 60px;
          text-indent: 60px;
          /*border: 2px solid #d6d4d4;*/
          font-size: 25px;

          border: white;
          margin-right: 125px;
          width: 555px;

      }


      .search input:focus{

          box-shadow: none;
          border: 2px solid blue;


      }

      .search .fa-search{

          position: absolute;
          top: 20px;
          left: 16px;

      }

      .search button{

          position: absolute;
          top: 0px;
          right: 5px;
          height: 58px;
          width: 120px;
          background: #0d6ad7;
          color: white;
          border-radius: 8px;





      }
  </style>
    <style>
        .hero-section{
            background: url("https://images.pexels.com/photos/4717550/pexels-photo-4717550.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1") no-repeat center center;

            object-fit: contain;
            width: 100%;
        }
    </style>

</head>
<body>
<div>


{{--    @if(session('msg'))--}}
{{--        <div class="alert alert-success d-block">{!! session('msg') !!}</div>--}}
{{--    @endif--}}

    <div data-collapse="tiny" data-animation="over-right" style="background-color: grey;" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">

        <div class="w-container" style="line-height: 32px;direction:rtl;">
            <a  aria-current="page" class="logo w-nav-brand w--current">
                <div class="long-text">مناسباتي</div>
            </a>
            <nav role="navigation" class="nav-menu e-nav-menu" style="margin-bottom: 12px;">
                {{--                <a href="{{ route('website.home.index') }}" aria-current="page" class="nav-link w-nav-link w--current">الرئيسية</a>--}}
                <a href="{{ asset('/') }}" aria-current="page" class="nav-link w-nav-link w--current">الرئيسية</a>
                {{--                <a href="{{asset('/halls')}}" class="nav-link w-nav-link">الصالات </a>--}}
                {{--                <a href="{{route('reserve.create')}}" class="nav-link w-nav-link">احجز</a>--}}
                <a href="{{asset('/contact')}}" class="nav-link w-nav-link">للتواصل معنا</a>
                <a href="{{asset('/about')}}" class="nav-link w-nav-link">من نحن</a>

                @auth

                    @if(auth()->user()->role == 'admin')
                        <a href="{{ url('/dashboard') }}" class="nav-link w-nav-link">لوحة التحكم</a>
                    @elseif(\Illuminate\Support\Facades\Auth::user()->role == 'owner')
                        <a href="{{ url('/owner') }}" class="nav-link w-nav-link">لوحة التحكم</a>
                    @else
                        <a href="{{ url('/customer') }}" class="nav-link w-nav-link">الحجوزات</a>
                    @endif

                    <a class="nav-link w-nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        تسجيل الخروج
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                @else
                    <a href="{{ route('login') }}" class="nav-link w-nav-link">تسجيل الدخول</a>
                @endif

            </nav>
        </div>



        @yield('home')
        @yield('halls')
        @yield('about')
        @yield('contact')
        @yield('reserve')



        <div class="main-section dark wf-section" style="font-size: 20px;padding-bottom: 39px;margin-bottom: -20px;">
            <div class="w-container">
                <div class="section-heading"></div>

                <div style="    margin-left: 817px;
                            text-align: center;
                           ">
                    <label style="color: lavender;">الشركة</label><br>
                    <a href="" style="color: initial;"> شروط الاستخدام</a><br><br>
                    <a href="" style="color: initial;">سياسة الخصوصية</a><br><br>
                    <a href="" style="color: initial;"> من نحن </a><br><br>
                </div>

                <div style="    margin-top: -165px;
                            text-align: center;
                            ">
                    <label style="color: lavender;">الميزات</label><br>
                    <a href="" style="color: initial;">  تسجيل الدخول</a><br><br>
                    <a href="" style="color: initial;">خريطة الموقع </a><br><br>
                    <a href="" style="color: initial;">  </a><br><br>
                </div>

                <div style="    margin-top: -165px;
                            text-align: center;
                                margin-right: 781px;
                            ">
                    <label style="color:lavender;">للتواصل</label><br>
                    <a href="" style="color: initial;">تواصل معنا</a><br><br>
                    <a href="" style="color: initial;">  </a><br><br>
                    <a href="" style="color: initial;">  </a><br><br>
                </div>

            </div>

        </div>
    </div>
    </div>
</body>
</html>
