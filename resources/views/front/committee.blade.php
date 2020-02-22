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
                                    <p style="color:#fff;font-size: 2.5em;font-family: Raleway">Committee</p>
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






    <div class="container">

            <h2 style="text-align:center"><strong>Our</strong> Committee!</h2>

            <div class="row">
                <div class="col">
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non pulvinar. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh metus.
                    </p>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-lg-8">
                    <div class="toggle toggle-primary mt-4" data-plugin-toggle>
                            @if (count($committees)>0)
                            @foreach ($committees as $committee )

                        <section class="toggle " >
                            <label>{{$committee->committee_name}}</label>
                            <div class="toggle-content">

                                <p>{{$committee->about}}</p> <p style="text-align:right"><i class="fas fa-calendar-alt"> </i>&nbsp;{{$committee->updated_at}}</p>
                                <p><a class="btn btn-primary mb-4" href="{{route('website.committee.members', $committee->id)}}">View Members</a></p>

                        </div>
                        </section>

                        @endforeach
                        @endif

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-box featured-box-primary">
                        <div class="box-content">
                            <h4 class="text-uppercase">About Committee</h4>


                            <hr>

                            <ul class="list list-icons text-left">
                                <li><i class="fas fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non pulvinar. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                                <li><i class="fas fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non pulvinar. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>


@endsection
