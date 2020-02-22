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
                                    <p style="color:#fff;font-size: 2.5em;font-family: Raleway">Birthdays & Anniversary</p>
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
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="tabs tabs-vertical tabs-left">
                    <ul class="nav nav-tabs">
                        <li class="nav-item active">
                            <a class="nav-link" href="#popular11" data-toggle="tab">Bithdays</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#recent11" data-toggle="tab">Anniversary</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="popular11" class="tab-pane active">
                            <div class="col">

                                <h3 class="heading-primary mt-5" style="font-family: Raleway">Our <strong>Celebrants</strong></h3>

                                <ul class="history">
                                    <li class="appear-animation" data-appear-animation="fadeInUp">
                                        <div class="thumb">
                                            <img src="{{asset('Website/img/office/office-4.jpg')}}" alt="" />
                                        </div>
                                        <div class="featured-box">
                                            <div class="box-content">
                                                <p style="font-family: Raleway">Birthday Wish : Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia.
                                                    Proin adipiscing porta tellus, Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula
                                                    lacinia. Proin adipiscing porta tellus,
                                                    <br>
                                                    <strong style="float: right;font-weight: bold;color:#0d47a1">First Name Last Name</strong>
                                                </p>

                                            </div>
                                        </div>
                                    </li>





                                    <li class="appear-animation" data-appear-animation="fadeInUp">
                                        <div class="thumb">
                                            <img src="{{asset('Website/img/office/office-4.jpg')}}" alt="" />
                                        </div>
                                        <div class="featured-box">
                                            <div class="box-content">
                                                <p style="font-family: Raleway">Birthday Wish : Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia.
                                                    Proin adipiscing porta tellus, Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula
                                                    lacinia. Proin adipiscing porta tellus,
                                                    <br>
                                                    <strong style="float: right;font-weight: bold;color:#0d47a1">First Name Last Name</strong>
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="appear-animation" data-appear-animation="fadeInUp">
                                        <div class="thumb">
                                            <img src="{{asset('Website/img/office/office-4.jpg')}}" alt="" />
                                        </div>
                                        <div class="featured-box">
                                            <div class="box-content">
                                                <p style="font-family: Raleway">Birthday Wish : Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia.
                                                    Proin adipiscing porta tellus, Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula
                                                    lacinia. Proin adipiscing porta tellus,
                                                    <br>
                                                    <strong style="float: right;font-weight: bold;color:#0d47a1">First Name Last Name</strong>
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="appear-animation" data-appear-animation="fadeInUp">
                                        {{-- <div class="thumb">
                                            <img src="{{asset('Website/img/office/office-4.jpg')}}" alt="" />
                                        </div> --}}
                                        <div class="featured-box">
                                            <div class="box-content">
                                                <p style="font-family: Raleway">Birthday Wish : Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia.
                                                    Proin adipiscing porta tellus, Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula
                                                    lacinia. Proin adipiscing porta tellus,
                                                    <br>
                                                    <strong style="float: right;font-weight: bold;color:#0d47a1">First Name Last Name</strong>
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>

            <div id="recent11" class="tab-pane">

                    @if (count($anifs)>0)
                    @foreach ($anifs as $anif )


                            <p class="heading-primary mt-5" style="font-family: Raleway"><h3><strong>{{$anif->anniversary_name}}</strong></h3></p>
                            <p>{{$anif->anniversary_desc}}</p>


                        @endforeach

                        @else
                            {{-- <p>No Posts Found</p> --}}

                        @endif

            </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
