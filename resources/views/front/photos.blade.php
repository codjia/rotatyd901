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
                                <p style="color:#fff;font-size: 2.5em;font-family: Raleway">Photos</p>
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


                    <ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter">
                        <li  data-option-value="*"><a class="nav-link " href="#"></a></li>

                    </ul>


                    <div class="sort-destination-loader sort-destination-loader-showing">
                        <div class="row image-gallery sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                                @if (count($photos)>0)
                                @foreach ($photos as $photo )
                            <div class="col-sm-6 col-lg-3 isotope-item websites mb-4 mb-lg-0">
                                <div class="image-gallery-item">
                                    <a  id="photoview" href="https://rotary.npontu.com/img/{{$photo->url}}" class="lightbox-portfolio">
                                        <span class="thumb-info">
                                            <span class="thumb-info-wrapper">
                                                <img id="photo-{{ $photo->id }}"src="https://rotary.npontu.com/img/{{$photo->url}}" class="img-fluid" alt="">

                                                <span class="thumb-info-action">
                                                    <span class="thumb-info-action-icon"><i class="fas fa-link"></i></span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                    @endforeach
                    @endif

                        </div>
                    </div>




                </div>
            </div>
        </div>










{{--

<div class="col-lg-4 mx-auto">
    <div class="thumb-gallery">
        <div style="width:500px;"class="owl-carousel owl-theme manual thumb-gallery-detail " id="thumbGalleryDetail">
            <div >
												<span class="img-thumbnail d-block " >
													<img id="photoview" alt="Project Image" src="{{asset('website/img/projects/project.jpg')}}" class="img-fluid">
												</span>
            </div>


        </div>
        <div class="owl-carousel owl-theme manual thumb-gallery-thumbs show-nav-hover mt" id="thumbGalleryThumbs">
                @if (count($photos)>0)
                @foreach ($photos as $photo )
            <div>
												<span class="img-thumbnail d-block cur-pointer">
                                                <img id="photo-{{ $photo->id }}"alt="Project Image" src="https://rotary.npontu.com/img/{{$photo->url}}" onclick="image('{{ $photo->id}}')" class="img-fluid">
												</span>
            </div>
            @endforeach
                @endif

        </div>
    </div>
</div> --}}




<script type="text/javascript">
    function image(photoId) {
        //photo-1, photo-2
        var photo1 = document.getElementById('photo-'+photoId);
        var photo2 = document.getElementById('photoview');
        photo2.src=photo1.src;

    }
    </script>


@endsection
