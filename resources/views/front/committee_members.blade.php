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
                                    <p style="color:#fff;font-size: 2.5em;font-family: Raleway">Committee Members</p>
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
                <div class="col">

                    <ul class="row portfolio-list">

                            @if (count($members)>0)
                            @foreach ($members as $member )
                                <li class="col-12 col-sm-6 col-lg-3">
                                    <div class="portfolio-item">
                                        <a href="#">
                                                        <span class="thumb-info thumb-info-lighten">
                                                            <span class="thumb-info-wrapper">
                                                                <img src="https://rotary.npontu.com/img/{{$member->profile_picture}}" class="img-fluid" alt="">
                                                                <span class="thumb-info-title">
                                                                    <span class="thumb-info-inner"><font style="font-family: Arial Black; font-size: 1em">{{$member->first_name}}  {{$member->last_name}}</font></span>
                                                                <span class="thumb-info-type" style=" font-size: 0.9em">{{$member->designation}}</span>
                                                                </span>
                                                                <span class="thumb-info-action">
                                                                    <span class="thumb-info-action-icon"><i class="fas fa-link"></i></span>
                                                                </span>
                                                            </span>
                                                        </span>
                                        </a>
                                    </div>
                                </li>

                            @endforeach

                        @else
                            {{-- <p>No Posts Found</p> --}}

                        @endif

                                        </ul>

                </div>
            </div>

    </div>
@endsection
