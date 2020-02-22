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
                                    <p style="color:#fff;font-size: 2.5em;font-family: Raleway">Clubs Details</p>
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

            @if(count($clubs)>0)

        <table class="table table-striped">
            <thead>
            <tr>

                <th>         Club Name                </th>
                <th>                    Venue                </th>
                <th>                    Meeting Days                </th>
                <th>                        Meeting time                </th>
                <th>                        Address                </th>
                <th>                        Date of creation                </th>
            </tr>
          </thead>

          @foreach($clubs as $club )
            <tbody>
            <tr>

                <td>                 {{$club->club_name}}               </td>
                <td>                 {{$club->venue}}               </td>
                <td>                 {{$club->meeting_days}}               </td>
                <td>                 {{$club->meeting_time}}               </td>
                <td>                 {{$club->address}}               </td>
                <td>                 {{$club->updated_at}}               </td>


            </tr>


            </tbody>

                @endforeach
        </table>


        @endif
    </div>
@endsection
