@extends('master.site_master')
@section('content')
    <section class="parallax section section-parallax section-center" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{asset('Website/images/wallpaper-blue-2_02.jpg')}}" style="margin-top: -1em">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="owl-carousel owl-theme nav-bottom rounded-nav mt-4 mb-0" data-plugin-options="{'items': 1, 'loop': false}">
                        <div>
                            <div class="col">
                                <div class="testimonial testimonial-style-6 testimonial-with-quotes mb-0">
                                    {{--<blockquote>--}}
                                    <p style="color:#fff;font-size: 2.5em;font-family: Raleway">Photo Categories</p>
                                    {{--</blockquote>--}}
                                    <div class="testimonial-author">
                                        <p><strong style="color:#fff">Rotary</strong><span style="color:#FF8800">D9102</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <hr class="tall">
    <div class="container">

        <div class="featured-boxes">

            <div class="row">
                @if (count($categories)>0)
                @foreach ($categories as $category )
                <div class="col-lg-3 col-sm-6">
                    <div class="featured-box featured-box-primary featured-box-effect-1 mt-0 mt-lg-5">
                        <div class="box-content">
                            <i class="icon-featured fas fa-image"></i>
                            <h4 class="text-uppercase">{{$category->category_name}}</h4>
                            <p><a href="{{route('website.photo_album',$category->id)}}" class="lnk-primary learn-more">View <i class="fas fa-angle-right"></i></a></p>
                        </div>
                    </div>
                </div>

                @endforeach
                @endif
                {{-- <div class="col-lg-3 col-sm-6">
                    <div class="featured-box featured-box-secondary featured-box-effect-1 mt-0 mt-lg-5">
                        <div class="box-content">
                            <i class="icon-featured fas fa-users"></i>
                            <h4 class="text-uppercase">Anniversary Album 2</h4>
                            <p><a href="{{route('website.photo_album')}}" class="lnk-secondary learn-more">View <i class="fas fa-angle-right"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="featured-box featured-box-tertiary featured-box-effect-1 mt-0 mt-lg-5">
                        <div class="box-content">
                            <i class="icon-featured fas fa-user-circle"></i>
                            <h4 class="text-uppercase">Anniversary Album 3</h4>
                            <p><a href="{{route('website.photo_album')}}" class="lnk-tertiary learn-more">View <i class="fas fa-angle-right"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="featured-box featured-box-quaternary featured-box-effect-1 mt-0 mt-lg-5">
                        <div class="box-content">
                            <i class="icon-featured fas fa-cogs"></i>
                            <h4 class="text-uppercase">Anniversary Album 4</h4>
                            <p><a href="{{route('website.photo_album')}}" class="lnk-quaternary learn-more">View <i class="fas fa-angle-right"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="featured-box featured-box-quaternary featured-box-effect-1 mt-0 mt-lg-5">
                        <div class="box-content">
                            <i class="icon-featured fas fa-cogs"></i>
                            <h4 class="text-uppercase">Anniversary Album 4</h4>
                            <p><a href="{{route('website.photo_album')}}" class="lnk-quaternary learn-more">View <i class="fas fa-angle-right"></i></a></p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

    </div>
@endsection
