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
                                <p style="color:#fff;font-size: 2.5em;font-family: Raleway">Blogs</p>
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

<section class="section mt-0 section-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                {{--<h2>Our <strong> News</strong></h2>--}}
            </div>
        </div>



        <div class="pricing-table princig-table-flat row no-gutters no-borders mt-2 mb-2" >
                @if (count($blogs)>0)
           @foreach ($blogs as $blog )

                   <div class="col-lg-3 col-sm-6 text-center" style="margin-top:20px" >
                       <div class="plan most-popular">
                             <a href="{{route('website.blog.view',$blog->id)}}"><img style="width: 17rem;height: 15rem;"  src="https://rotary.npontu.com/img/{{$blog->cover_image}}" class="card-img-top" alt="..."></a>
                             {{-- src="https://rotary.npontu.com/img/{{$blog->cover_image}}" --}}
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
@push('scripts')
<script>
    $(document).ready(function() {
    var myDiv = $('#bref');
    myDiv.text(myDiv.text().substring(0,30)}
</script>
@endpush
@endsection
