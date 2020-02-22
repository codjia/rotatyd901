@extends('master.site_master')
@section('content')
<div role="main" class="main">

    <div class="slider-container light rev_slider_wrapper">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 500, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500]}">
            <ul>
                <li data-transition="fade">

                    <img  src="{{asset('Website/images/thirdslider.jpg')}}"
                         alt=""

                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-kenburns="on"
                         data-duration="9000"
                         data-ease="Linear.easeNone"
                         data-scalestart="150"
                         data-scaleend="100"
                         data-rotatestart="0"
                         data-rotateend="0"
                         data-offsetstart="0 0"
                         data-offsetend="0 0"
                         data-bgparallax="0"
                         class="rev-slidebg">

                    <div class="tp-caption"
                         data-x="['177','177','center','center']" data-hoffset="['0','0','-150','-220']"
                         data-y="180"
                         data-start="1000"
                         data-transform_in="x:[-300%];opacity:0;s:500;"><img src="{{asset('Website/img/slides/slide-title-border-light.png')}}" alt=""></div>

                    <div class="tp-caption top-label"
                         data-x="['227','227','center','center']"
                         data-y="172"
                         data-fontsize="['24','24','24','36']"
                         data-start="500"
                         data-transform_in="y:[-300%];opacity:0;s:500;" style="color:#fff;font-family:'Raleway'"> Rotary <font style="color:#FF8800">RRC</font> </div>

                         <div class="tp-caption featured-label"
                         data-x="center"
                         data-y="210"
                         data-start="500"
                         data-fontsize="['52','52','52','82']"
                         style="z-index: 5"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"><font style="color:#fff">Welcome to the Rotary <br>Club of Accra Ring <br>Road Central (RRC)</font></div>

                    <div class="tp-caption bottom-label"
                         data-x="center"
                         data-y="['270','270','270','290']"
                         data-start="1000"
                         data-fontsize="['23','23','23','38']"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;e:Power4.easeInOut;"
                         data-transform_out="opacity:0;s:500;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-splitin="chars"
                         data-splitout="none"
                         data-responsive_offset="on"
                         style="font-size: 23px; line-height: 30px;margin-top:100px"
                         data-elementdelay="0.05"><font style="color:#fff;font-family:'Raleway'"> We embody service above self</font></div>



                </li>
                <li data-transition="fade">

                    <img src="{{asset('Website/images/fourthslider.jpg')}}"
                         alt=""
                         data-bgposition="right center"
                         data-bgpositionend="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-kenburns="on"
                         data-duration="9000"
                         data-ease="Linear.easeNone"
                         data-scalestart="110"
                         data-scaleend="100"
                         data-rotatestart="0"
                         data-rotateend="0"
                         data-offsetstart="0 0"
                         data-offsetend="0 0"
                         data-bgparallax="0"
                         class="rev-slidebg">

                         <div class="tp-caption main-label"
                         data-x="['135','135','center','center']"
                         data-y="['210','210','210','230']"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-fontsize="['62','62','62','82']"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         data-mask_in="x:0px;y:0px;" style="color:#fff">WELCOME TO OUR CLUB</div>

                    <div class="tp-caption bottom-label"
                         data-x="['185','185','center','center']"
                         data-y="['280','280','280','315']"
                         data-start="2000"
                         data-fontsize="['20','20','20','30']"
                         data-transform_in="y:[100%];opacity:0;s:500;" style="color:#fff;font-family:'Raleway'">Check out our club and get involved.</div>



                </li>
                <li data-transition="fade">

                    <img src="{{asset('Website/images/secondslider.jpg')}}"
                         alt=""
                         data-bgposition="right center"
                         data-bgpositionend="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-kenburns="on"
                         data-duration="9000"
                         data-ease="Linear.easeNone"
                         data-scalestart="110"
                         data-scaleend="100"
                         data-rotatestart="0"
                         data-rotateend="0"
                         data-offsetstart="0 0"
                         data-offsetend="0 0"
                         data-bgparallax="0"
                         class="rev-slidebg">

                    <div class="tp-caption featured-label"
                         data-x="center"
                         data-y="210"
                         data-start="500"
                         data-fontsize="['52','52','52','82']"
                         style="z-index: 5"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"><font style="color:#fff">ROTARY CLUB OF ACCRA <br>RING ROAD CENTRAL</font></div>

                    <div class="tp-caption bottom-label"
                         data-x="center"
                         data-y="['270','270','270','290']"
                         data-start="1000"
                         data-fontsize="['23','23','23','38']"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;e:Power4.easeInOut;"
                         data-transform_out="opacity:0;s:500;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-splitin="chars"
                         data-splitout="none"
                         data-responsive_offset="on"
                         style="font-size: 23px; line-height: 30px;margin-top:60px"
                         data-elementdelay="0.05"><font style="color:#fff;font-family:'Raleway'">Join Us Today. Contact Rotary</font></div>

                </li>


            </ul>
        </div>
    </div>


    <section class="section m-0" style="background-image: url({{asset('Website/images/wallpaper-blue-2_02.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><font style="color:#fff">Rotary </font><strong style="color:#FF8800">RRC</strong></h2>
                </div>
            </div>
            <div class="row text-center text-md-left mt-4">

                <div class="col-md-4">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-4">
                            {{-- <img class="img-fluid mb-4" src="{{asset('Website/img/icons/miss1.png')}}" alt=""> --}}
                            <img style="width:100px;height:100px;border-radius: 50%"
                             class="img-fluid mb-4" src="{{asset('Website/img/icons/mission.jpg')}}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <h4 class="mb-1" style="color:#fff;font-family: Raleway">Mission</h4>
                            <p style="color:#fff;font-family: Raleway"> The mission of Rotary International is to provide service to others, promote integrity, and advance world understanding, goodwill, and peace through its fellowship of business, professional, and community leaders.
                                </p>
                            {{-- <p><a class="btn-flat btn-xs" href="#" style="color:#FF8800">View More <i class="fas fa-arrow-right"></i></a></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-4">
                            {{-- <img class="img-fluid mb-4" src="{{asset('Website/img/icons/vision3.png')}}" alt=""> --}}
                            <img style="width:100px;height:100px;border-radius: 50%"
                             class="img-fluid mb-4" src="{{asset('Website/img/icons/Vision.jpg')}}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <h4 class="mb-1" style="color:#fff;font-family: Raleway">Vision</h4>
                            <p style="color:#fff;font-family: Raleway">  Together, we see a world where people unite and take action to create lasting change — across the globe, in our communities, and in ourselves.
                                 </p>
                            {{-- <p><a class="btn-flat btn-xs" href="#" style="color:#FF8800">View More <i class="fas fa-arrow-right"></i></a></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-4">
                            {{-- <img class="img-fluid mb-4" src="{{asset('Website/img/icons/guide.png')}}" alt=""> --}}
                            <img style="width:100px;height:100px;border-radius: 50%"
                             class="img-fluid mb-4" src="{{asset('Website/img/icons/Principles.jpg')}}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <h4 class="mb-1" style="color:#fff;font-family: Raleway">Guiding principles</h4>
                            <p style="color:#fff;font-family: Raleway">
                                These principles have been developed over the years to provide Rotarians with a strong, common
                                 purpose and direction. They serve as a foundation for our relationships with each other and the
                                 action we take in the world.
                                </p>
                            {{-- <p><a class="btn-flat btn-xs" href="#" style="color:#FF8800">View More <i class="fas fa-arrow-right"></i></a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section m-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="mb-1">Our <strong>Team</strong></h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-2 col-6 text-center mb-4">
                    <img style="width:200px;height:160px" src="{{asset('Website/img/team/Oswald.jpg')}}" class="img-fluid" alt="">
                    <h5 class="mt-2 mb-0">RP PE Oswald Oduro Gyaminah</h5>
                    <p class="mb-0">President</p>
                </div>
                <div class="col-lg-2 col-6 text-center mb-4">
                    <img style="width:200px;height:160px"src="{{asset('Website/img/team/team-12.jpg')}}" class="img-fluid" alt="">
                    <h5 class="mt-2 mb-0">Vice-President</h5>
                    <p class="mb-0">      PP Tony Asare      </p>
                </div>
                <div class="col-lg-2 col-6 text-center mb-4">
                    <img style="width:200px;height:160px"src="{{asset('Website/img/team/team-13.jpg')}}" class="img-fluid" alt="">
                    <h5 class="mt-2 mb-0">Rtn Florence Boye</h5>
                    <p class="mb-0">Secretary                        </p>
                </div>
                <div class="col-lg-2 col-6 text-center mb-4">
                    <img style="width:200px;height:160px"src="{{asset('Website/img/team/team-14.jpg')}}" class="img-fluid" alt="">
                    <h5 class="mt-2 mb-0">Rtn Richard Torku</h5>
                    <p class="mb-0">Treasurer     </p>
                </div>
                <div class="col-lg-2 col-6 text-center mb-4">
                    <img style="width:200px;height:160px"src="{{asset('Website/img/team/team-15.jpg')}}" class="img-fluid" alt="">
                    <h5 class="mt-2 mb-0">Rtn Kwame Afrani</h5>
                    <p class="mb-0">Club Administration </p>
                </div>
                <div class="col-lg-2 col-6 text-center mb-4">
                    <img style="width:200px;height:160px"src="{{asset('Website/img/team/team-16.jpg')}}" class="img-fluid" alt="">
                    <h5 class="mt-2 mb-0">Rtn Albert Bahun-Wilson</h5>
                    <p class="mb-0">Club Membership</p>
                </div>
                {{--  --}}
                <div class="col-lg-2 col-6 text-center mb-4">
                    <img style="width:200px;height:160px"src="{{asset('Website/img/team/Sam Donkor.jpg')}}" class="img-fluid" alt="">
                    <h5 class="mt-2 mb-0">Rtn Sam Donkoh</h5>
                    <p class="mb-0">Service Projects </p>
                </div>
                <div class="col-lg-2 col-6 text-center mb-4">
                    <img style="width:200px;height:160px"src="{{asset('Website/img/team/team-12.jpg')}}" class="img-fluid" alt="">
                    <h5 class="mt-2 mb-0">AG Victor Asante</h5>
                    <p class="mb-0">Rotary Foundation</p>
                </div>
                <div class="col-lg-2 col-6 text-center mb-4">
                    <img style="width:200px;height:160px"src="{{asset('Website/img/team/team-13.jpg')}}" class="img-fluid" alt="">
                    <h5 class="mt-2 mb-0">Rtn Florence Boye</h5>
                    <p class="mb-0">Secretary                        </p>
                </div>
                <div class="col-lg-2 col-6 text-center mb-4">
                    <img style="width:200px;height:160px"src="{{asset('Website/img/team/team-14.jpg')}}" class="img-fluid" alt="">
                    <h5 class="mt-2 mb-0">Rtn Kobla Nyaletey</h5>
                    <p class="mb-0">Fundraising</p>
                </div>
                <div class="col-lg-2 col-6 text-center mb-4">
                    <img style="width:200px;height:160px"src="{{asset('Website/img/team/Nana Darkoa Sekyiamah by Yinka 1.jpg')}}" class="img-fluid" alt="">
                    <h5 class="mt-2 mb-0">Rtn Nana Darkoa Sekyiamah</h5>
                    <p class="mb-0">Public Relations </p>
                </div>
                <div class="col-lg-2 col-6 text-center mb-4">
                    <img style="width:200px;height:160px"src="{{asset('Website/img/team/team-16.jpg')}}" class="img-fluid" alt="">
                    <h5 class="mt-2 mb-0">Rtn Phadeela Class-peters</h5>
                    <p class="mb-0">New Generations</p>
                </div>
                {{--  --}}
                <div class="col-lg-2 col-6 text-center mb-4">
                    <img style="width:200px;height:160px"src="{{asset('Website/img/team/team-13.jpg')}}" class="img-fluid" alt="">
                    <h5 class="mt-2 mb-0">PP Mawuse Nyahe</h5>
                    <p class="mb-0">Leadership/Club Trainer</p>
                </div>
                <div class="col-lg-2 col-6 text-center mb-4">
                    <img style="width:200px;height:160px"src="{{asset('Website/img/team/team-14.jpg')}}" class="img-fluid" alt="">
                    <h5 class="mt-2 mb-0">Rtn Hilda Ampadu</h5>
                    <p class="mb-0">Punctuality</p>
                </div>
                <div class="col-lg-2 col-6 text-center mb-4">
                    <img style="width:200px;height:160px"src="{{asset('Website/img/team/team-15.jpg')}}" class="img-fluid" alt="">
                    <h5 class="mt-2 mb-0">IPP Dennis Addo</h5>
                    <p class="mb-0">Immediate Past President </p>
                </div>
                <div class="col-lg-2 col-6 text-center mb-4">
                    <img style="width:200px;height:160px"src="{{asset('Website/img/team/Roma2.png')}}" class="img-fluid" alt="">
                    <h5 class="mt-2 mb-0">PE Roma Puni</h5>
                    <p class="mb-0">President Elect</p>
                </div>
                    <div class="col-lg-2 col-6 text-center mb-4">
                        <img style="width:200px;height:160px"src="{{asset('Website/img/team/Prince 2.jpg')}}" class="img-fluid" alt="">
                        <h5 class="mt-2 mb-0">Rtn Prince Odei</h5>
                        <p class="mb-0">Sergeant at Arms</p>
                    </div>

            </div>
        </div>
    </section>

    <section class="parallax section section-text-light section-parallax section-center mt-0 mb-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{asset('Website/images/dg.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <iframe   position: absolute;
                    width: 100%;
                    height: 100%; allowfullscreen
                    src="https://www.youtube.com/embed/bLtvNPEEDOs?autoplay=1">
                    </iframe>
                    {{-- <div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': false}">
                        <div>
                            <div class="col">
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                    <div class="testimonial-author">
                                        <img src="{{asset('Website/img/clients/client-1.jpg')}}" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    {{--Blog needs 500 x 500 images--}}
    <section class="section mt-0 section-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Our <strong> Blog</strong></h2>
                </div>
            </div>


            <div class="pricing-table princig-table-flat row no-gutters no-borders mt-2 mb-2" >
                 @if (count($blogs)>0)
            @foreach ($blogs as $blog )
                <a href="#">
                    <div class="col-lg-3 col-sm-6 text-center" style="margin-top:20px;margin-right:20px">
                        {{-- width: 17rem;height: 15rem; --}}
                        <div class="plan most-popular">
                              <a href="{{route('website.blog.view',$blog->id)}}"><img style="width: 17rem;height: 15rem;"  src="https://rotary.npontu.com/img/{{$blog->cover_image}}" class="card-img-top" alt="..."></a>

                                <ul>

                                <li><h5><a class="text-dark" >{{$blog->title}}</a></h5>
                                <p style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    display: -webkit-box;
                                    /* line-height: 50px;     fallback */

                                    max-height: 100px;      /* fallback */
                                    -webkit-line-clamp: 6; /* number of lines to show */
                                    -webkit-box-orient: vertical;
                                    padding:10px">
                                        {{$blog->content}}

                                    </p></li>
                                <li><span><i class="fas fa-calendar-alt"></i> {{$blog->updated_at}}</span> </li>
                                      <li><span><i class="fas fa-user"></i> By <b>{{$blog->publisher}}</b> </span> </li>
                              <li><a class="btn btn-primary" href="{{route('website.blog.view',$blog->id)}}">Read more..</a></li>
                            </ul>
                        </div>
                    </div>

@endforeach @else @endif

                </div>

        </div>
    </section>

</div>
@endsection
