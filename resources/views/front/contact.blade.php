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
                                    <p style="color:#fff;font-size: 2.5em;font-family: Raleway">Contact Us</p>
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
            <div class="col-lg-6">

                    <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Accra&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                </iframe>
                            </div>
                        </div>



            </div>
            <div class="col-lg-6">

                <h4 class="heading-primary mt-4">Get in <strong>Touch</strong></h4>
                <p>“The most dynamic exciting Rotary Club in the world!" </p>

                <hr>

                <h4 class="heading-primary">The <strong>Office</strong></h4>
                <ul class="list list-icons list-icons-style-3 mt-4">
                    <li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> P. O. Box CT 8877, Cantonments,  Accra</strong> </li>
                    <li><i class="fas fa-phone"></i> <strong>Phone:</strong> +233 (0)24 480 9999 / +233 (0)24 417 7798</li>
                    <li><i class="far fa-envelope"></i> <strong>Email:</strong> <a >rrcrotarysec@gmail.com</a></li>
                </ul>

                <hr>

                <h4 class="heading-primary">Business <strong>Hours</strong></h4>
                <ul class="list list-icons list-dark mt-4">
                    <li><i class="far fa-clock"></i> Every TUESDAY- 9am to 5pm</li>

                    <li><i class="far fa-clock"></i> Wednesday-Monday Closed</li>
                </ul>

            </div>

        </div>

    </div>




{{--

    <hr class="tall">
    <p align="middle" style="font-family: Raleway;font-size:25px">Locate our club at &nbsp;<strong style="color:#212121">P. O. Box CT 8877, Cantonments,  Accra</strong> Open every <b style="color:#212121">TUESDAY</b></p>
    <p align="middle" style="font-family: Raleway;font-size:20px;text-align:center;">Get in touch at </p>
    <p align="middle" style="font-size:25px;text-align:center;color:#212121"><strong>+233 (0)24 480 9999 / +233 (0)24 417 7798</strong></p>
    <div class="container">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Accra&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
            </div>
        </div>
    </div> --}}
@endsection
