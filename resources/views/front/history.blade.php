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
                                    <p style="color:#fff;font-size: 2.5em;font-family: Raleway">History</p>
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
        <h2 style="text-align:center"><strong>Our </strong> History</h2>



        <div class="row">
            <div class="col-lg-2">
                <p  class="img-fluid appear-animation animated slideInLeft appear-animation-visible lead"
                data-appear-animation="slideInLeft" data-appear-animation-delay="0"
                data-appear-animation-duration="1s" style="animation-duration: 1s; animation-delay: 0ms;
                color:blue;float:right;font-size:30px">
                1958</p>
            </div>
            <div class="col-lg-10 lead">

                <p style="color:black;">
                    Ghana was the first English-speaking country in the region to receive Rotary through the initiative of an
                    indigene, a peculiarly interesting history worth mentioning.  Michael Daniel Quist, an accountant with an
                    American oil company TEXACO in Accra, having studied in the UK got to know of Rotary in the UK and got
                    interested enough to introduce it in Ghana. The Rotary Club of Accra was chartered followed by Rotary Clubs
                    of Kano, Lagos and Ibadan in Nigeria, and Freetown in Sierra Leone.

                </p>
                <hr class="tall">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <p  class="img-fluid appear-animation animated slideInLeft appear-animation-visible lead"
                data-appear-animation="slideInLeft" data-appear-animation-delay="0"
                data-appear-animation-duration="1s" style="animation-duration: 1s; animation-delay: 0ms;
                color:blue;float:right;font-size:30px">
                1969</p>
            </div>
            <div class="col-lg-10 lead">

                <p style="color:black;">
                    In Ghana, the Rotary Club of Accra –
                    West, the second club, was chartered to accommodate the growing numbers of the Rotary Club of Accra.

                </p>
                <hr class="tall">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-2">
                <p  class="img-fluid appear-animation animated slideInLeft appear-animation-visible lead"
                data-appear-animation="slideInLeft" data-appear-animation-delay="0"
                data-appear-animation-duration="1s" style="animation-duration: 1s; animation-delay: 0ms;
                color:blue;float:right;font-size:30px">
                1986</p>
            </div>
            <div class="col-lg-10 lead">

                <p style="color:black;">
                    The Rotary Club of Accra, Ring Road Central owes its birth to the Rotary Club of Accra
                     West. It is interesting to note that the origins of the Rotary Club of Accra-Ring Road
                     Central would be insignificant without reference to the determination and tenacity of
                     the late Past District Governor (PDG) George Takyi in particular. PDG George Takyi
                     personally took charge and invested a tremendous amount of passion and commitment to
                     see the Rotary Club of Accra Ring Road Central translated from an idea to viable
                      proposition and finally to a reality on April 24, 1986. He is a sterling example of
                      what a committed, determined individual can achieve and a vindication of Rotary's
                       focus on providing an environment to groom potential leaders beyond their club
                        duties.

            Rotary Club of Accra – Ring Road Central was the very first club in Ghana to admit a woman member
            in 1995 after Rotary International opened up its membership to women and we have a number of women
             and men playing prominent leadership roles in the club and district.

                </p>
                <hr class="tall">
            </div>
        </div>


    </div>
@endsection
