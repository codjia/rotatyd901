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
                                    <p style="color:#fff;font-size: 2.5em;font-family: Raleway">Stories</p>
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

    <section class="section mt-0 section-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    {{--<h2>Our <strong> Stories</strong></h2>--}}
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3">
                    <img class="img-fluid" src="{{asset('Website/images/blog.jpg')}}" alt="Blog">
                    <div class="recent-posts mt-3 mb-4">
                        <article class="post">
                            <h5><a class="text-dark" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                            <div class="post-meta">
                                <span><i class="fas fa-calendar-alt"></i> January 10, 2017 </span>
                                <span><i class="fas fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fas fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fas fa-comments"></i> <a href="#">12 Comments</a></span>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-3">
                    <img class="img-fluid" src="{{asset('Website/images/frn.jpg')}}" alt="Blog">
                    <div class="recent-posts mt-3 mb-4">
                        <article class="post">
                            <h5><a class="text-dark" href="blog-post.html">Lorem consectetur adipiscing elit.</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                            <div class="post-meta">
                                <span><i class="fas fa-calendar-alt"></i> January 10, 2017 </span>
                                <span><i class="fas fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fas fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fas fa-comments"></i> <a href="#">12 Comments</a></span>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-3">
                    <img class="img-fluid" src="{{asset('Website/images/blog02.jpg')}}" alt="Blog">
                    <div class="recent-posts mt-3 mb-4">
                        <article class="post">
                            <h5><a class="text-dark" href="blog-post.html">Lorem dolor sit amet, consectetur adipiscing elit.</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                            <div class="post-meta">
                                <span><i class="fas fa-calendar-alt"></i> January 10, 2017 </span>
                                <span><i class="fas fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fas fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fas fa-comments"></i> <a href="#">12 Comments</a></span>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-3">
                    <img class="img-fluid" src="{{asset('Website/images/blog03.jpg')}}" alt="Blog">
                    <div class="recent-posts mt-3 mb-4">
                        <article class="post">
                            <h5><a class="text-dark" href="blog-post.html">Lorem ipsum dot, consectetur adipiscing elit.</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                            <div class="post-meta">
                                <span><i class="fas fa-calendar-alt"></i> January 10, 2017 </span>
                                <span><i class="fas fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fas fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fas fa-comments"></i> <a href="#">12 Comments</a></span>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
