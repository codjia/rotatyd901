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
                                    <p style="color:#fff;font-size: 2.5em;font-family: Raleway">District Leaders</p>
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



{{--profile--}}
@if(count($leaders)>0)
  @foreach($leaders as $leader )

<article class="post post-medium">
        <div class="row">
                <div class="col-lg-2">

                              </div>
            <div class="col-lg-3">
                <div class="post-image">

                        <div >
                            <div >
                                <img style="width:200px;height:250px"class="img-fluid" src="http://127.0.0.1:8081/img/{{$leader->picture}}" alt="sac">
                                {{-- src="{{asset('Website/img/blog/blog-image-1.jpg')}}" --}}
                            </div>
                        </div>


                </div>
            </div>
            <div class="col-lg-7">

                <div class="post-content">

                    <h2><a href="#">{{$leader->first_name}}&nbsp; {{$leader->last_name}}</a></h2>
                    <span style="font-size:20px">Designation:<b style="font-size:25px;color:black"> {{$leader->designation}}</b> </span><br><br>
                    <span style="font-size:20px">Club:<b style="font-size:25px;color:black"> {{$leader->club}} </b></span><br><br>
                    <span style="font-size:20px">email: <b style="font-size:25px;color:black">{{$leader->email}}</b></span><br><br>
                    <span style="font-size:20px">Contact:<b style="font-size:25px;color:black"> {{$leader->telephone}}</b></span><br><br>
                    {{-- <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p> --}}

                </div>
            </div>

        </div>


    </article>
    <hr class="tall">

                @endforeach
                @endif






            {{-- @if(count($leaders)>0)

        <table class="table table-striped">
            <thead>
            <tr>

                <th>         First Name                </th>
                <th>                   Last Name                </th>
                <th>                    Club               </th>
                <th>                        Designation                </th>
                <th>                        Email                </th>
                <th>                        Telephone Number               </th>
            </tr>
          </thead>

          @foreach($leaders as $leader )
            <tbody>
            <tr>

                <td>                 {{$leader->first_name}}               </td>
                <td>                 {{$leader->last_name}}               </td>
                <td>                 {{$leader->club}}               </td>
                <td>                 {{$leader->designation}}               </td>
                <td>                 {{$leader->email}}               </td>
                <td>                 {{$leader->telephone_number}}               </td>


            </tr>


            </tbody>

                @endforeach
        </table>


        @endif --}}
    </div>
@endsection
