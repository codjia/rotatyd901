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
                                    <p style="color:#fff;font-size: 2.2em;font-family: Raleway">Meeting Information and Location</p>
                                {{--</blockquote>--}}
                                <div class="testimonial-author">
                                    <p><strong style="color:#fff">Rotary</strong><span style="color:#FF8800">ARRC</span></p>
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
<p align="middle" style="font-family: Raleway;font-size:25px">Meeting every <strong style="color:#212121">TUESDAYS</strong>  at<b style="color:#212121"> Swiss Spirit Alisa</b> -- 6:30pm</p>
<br>
<div class="container">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Accra&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                    </div>
                </div>
</div>
@endsection
