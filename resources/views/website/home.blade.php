@extends('website.main')

@section('home')
     <div class="hero-section wf-section"   >

        <div class="hero-content w-container" >
            <form method="post" action="{{ route('search') }}">
                @csrf
                <div class="container" style="padding: 10px 60px 10px 40px;">
                    <div class="row height d-flex justify-content-center align-items-center">
                        <div class="col-md-8">
                            <div class="search">
                                <i class="fa fa-search"></i>
                                <input type="text" name="name" id="name"  class="form-control" placeholder="ادخل اسم الصالة">
                                <button class="btn btn-primary">بحث</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <div id="posts" class="main-section bottom-padding wf-section">
        <div id="Latest-post" class="w-container">
            <div class="section-heading" style="    padding-top: 61px;">
                <h2 class="section-title">الصالات</h2>
                <div class="med-divider">
                </div>
            </div>


            <div class="w-dyn-list">
                <div role="list" class="w-clearfix w-dyn-items w-row">

                    @foreach($halls as $hall)
                    <div role="listitem" class="featuredthumbnail w-dyn-item w-col w-col-6">
                        <a href="{{ asset( 'reserve/'.$hall->id.'/create' ) }}" data-w-id="3c1b0055-dd47-cc77-5812-26c30ac7c948" class="featured-wrapper w-inline-block">
                            <div>
                                <div  class="featured-image">
                                <img src="{{ asset( $hall->image ) }}" />
                                </div>
                            </div>
                            <div class="featured-text">
                                <div class="featured-title" style="text-align: right;"> صالة {{ $hall->name }} </div>
                                <div class="featured-description" style="text-align: right;">المنطقة :{{ $hall->governorate->name }} </div>
                            </div>
                        </a>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>


    </div>
@endsection
