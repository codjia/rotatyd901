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
                                <p style="color:#fff;font-size: 2.5em;font-family: Raleway">View Blog </p>
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
        <div class="row mt-4">


						<div class="col-lg-12">
							<div class="blog-posts single-post">

								<article class="post post-large blog-single-post">




									<div class="post-content">
                                        <h1 style="text-align:center">{{$blogs->title}}</h1>
                                        <hr>
                                        <h5 style="text-align:center">{{$blogs->subtitle}}</h5>
                                            <img style="width: 100%;height: 100%;"src="https://rotary.npontu.com/img/{{$blogs->cover_image}}" class="card-img-top" alt="...">

                                            <hr>


                                        <p><b>{{$blogs->content}}</b></p>
                                        <hr>
                                        <div class="post-beta" style="text-align:right">
                                                <span><i class="fas fa-calendar-alt"></i> {{$blogs->updated_at}}&nbsp;<i class="fas fa-user"></i> By <b>{{$blogs->publisher}}</b></span>
                                                {{-- <span><i class="fas fa-tag"></i> Duis, <a href="#">News</a> </span>
                                                <span><i class="fas fa-comments"></i> 12 Comments</span> --}}
                                            </div>

										<div class="post-block post-comments clearfix">
											<h3 class="heading-primary"><i class="fas fa-comments"></i>Comments </h3>
                                                    @if (count($comments)>0)
                                                 @foreach ($comments as $comment )
											<ul class="comments">


												<li>
													<div class="comment">
														<div class="img-thumbnail d-none d-sm-block">
															<img class="avatar" alt="" src="https://rotary.npontu.com/img/profileimage.png">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong>{{$comment->name}}</strong>
																<span class="float-right">
																	{{-- <span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span> --}}
																</span>
															</span>
															<p style="overflow: hidden;
                                                            text-overflow: ellipsis;
                                                            display: -webkit-box;
                                                            /* line-height: 50px;     fallback */

                                                              /* fallback */
                                                            -webkit-line-clamp: 3; /* number of lines to show */
                                                            -webkit-box-orient: vertical">{{$comment->comment}}</p>
															<span class="date float-right">Posted on &nbsp; {{$comment->updated_at}}</span>
														</div>
													</div>
                                                </li></ul>
                                                 @endforeach
                                                 @else
                                                  @endif



                                        </div>




										<div class="post-block post-leave-comment">



                                                @if(count($errors)>0)
                                                @foreach ( $errors->all() as $error)

                                                <div class="alert alert-danger">
                                                    {{$error}}
                                                </div>

                                                @endforeach
                                            @endif

                                            @if(session('success'))
                                                <div class="alert alert-success">
                                                        {{session('success')}}
                                                </div>

                                            @endif
                                            @if(session('error'))
                                                <div class="alert alert-danger">
                                                        {{session('error')}}
                                                </div>

                                            @endif
											<h3 class="heading-primary">Leave a comment</h3>

											<form  action="{{route('website.blog.comment.add',['id'=>$id])}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <div class="form-row">
													<div class="form-group col-lg-6">
														<label>Your name *</label>
														<input type="text" value="" maxlength="100" class="form-control" name="name" id="name" required>
													</div>
													<div class="form-group col-lg-6">
														<label>Your email address *</label>
														<input type="email" value="" maxlength="100" class="form-control" name="email" id="email" required>
													</div>
												</div>
												<div class="form-row">
													<div class="form-group col">
														<label>Comment *</label>
														<textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment" required></textarea>
													</div>
												</div>
												<div class="form-row">
													<div class="form-group col">
														<input type="submit" value="Post Comment" class="btn btn-primary btn-lg" data-loading-text="Loading...">
													</div>
												</div>
											</form>
										</div>

									</div>
								</article>

							</div>
						</div>


					</div>



    </div>
</section>
@endsection
