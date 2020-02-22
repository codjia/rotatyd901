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
                                    <p style="color:#fff;font-size: 2.5em;font-family: Raleway">Downloads</p>
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

        <div class="row">
            <div class="col-lg-4">
                <section class="call-to-action with-borders button-centered mb-5" style="background-image: url({{asset('Website/images/blog.jpg')}}); background-size: cover">
                    <div class="col-12">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                    <div class="col-12">
                        <div class="call-to-action-btn">
                            <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-danger">Download Now!</a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <section class="call-to-action with-borders button-centered mb-5" style="background-image: url({{asset('Website/images/blog.jpg')}}); background-size: cover">
                    <div class="col-12">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                    <div class="col-12">
                        <div class="call-to-action-btn">
                            <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-danger">Download Now!</a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <section class="call-to-action with-borders button-centered mb-5" style="background-image: url({{asset('Website/images/blog.jpg')}}); background-size: cover">
                    <div class="col-12">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                    <div class="col-12">
                        <div class="call-to-action-btn">
                            <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-danger">Download Now!</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
@endsection
