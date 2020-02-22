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
                                    <p style="color:#fff;font-size: 2.5em;font-family: Raleway">Secretariat</p>
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

            @if(count($secretariats)>0)

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

          @foreach($secretariats as $secretariat )
            <tbody>
            <tr>

                <td>                 {{$secretariat->first_name}}               </td>
                <td>                 {{$secretariat->last_name}}               </td>
                <td>                 {{$secretariat->club}}               </td>
                <td>                 {{$secretariat->designation}}               </td>
                <td>                 {{$secretariat->email}}               </td>
                <td>                 {{$secretariat->telephone_number}}               </td>


            </tr>


            </tbody>

                @endforeach
        </table>


        @endif
    </div>
@endsection
