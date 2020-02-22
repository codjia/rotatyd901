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
                                    <p style="color:#fff;font-size: 2.5em;font-family: Raleway">Donation</p>
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
    <h3 align="middle" style="font-family: Raleway">
        Why Donate?
    </h3>
    <div class="container">
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
    </div>


    <div class="section cta">
		<div class="content-wrap-20">
			<div class="container">
				<div class="row" style="text-align:left">
					<div class="col-sm-12 col-md-12">
						<div class="cta-1">
							<div class="body-text">
								{{-- <h4>Join your hand with us for a better life and beautiful future.</h4> --}}
							</div>
							<div class="body-action">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    DONATE NOW
                                  </button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<br>
<hr>


<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cash Donation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <!-- Modal fields -->



                            <form method="post" id="payment-form" action="{{ route('website.give.payment.donate') }}" class="bg-white p-md-5 p-4 mb-5 ">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="vendor"> Payment Network</label>
                                        <select class="form-control @error('vendor') is-invalid @enderror" name="vendor" id="vendor" required>
                                                <option  disabled="">Select vendor</option>
                                                {{-- <option value="{{ \App\Donation::$MTN_ID }}" {{ old('vendor') == \App\Donation::$MTN_ID ? 'selected' : '' }} >{{ \App\Donation::$MTN_NAME }}</option>
                                                <option value="{{ \App\Donation::$VODAFONE_ID }}"  {{ old('vendor') == \App\Donation::$VODAFONE_ID ? 'selected' : '' }}>{{ \App\Donation::$VODAFONE_NAME }}</option> --}}
                                                <option selected value="MTN" {{ old('vendor') == 'MTN' ? 'selected' : '' }} >{{ \App\Donation::$MTN_NAME }}</option>
                                                <option value="Vodafone"  {{ old('vendor') == 'Vodafone' ? 'selected' : '' }}>{{ \App\Donation::$VODAFONE_NAME }}</option>
                                            </select>

                                        @error('vendor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="number">Number</label>
                                        <input type="tel" placeholder="0000000000" maxlength="10" name="number" id="number" required class="form-control @error('number') is-invalid @enderror"
                                               value="">
                                               <small class="text-info">MoMo number</small>
                                        @error('number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row" id="voucher-div">
                                        <div class="col-md-12 form-group">
                                            <label for="voucher">Voucher Number <strong>(vodafone only)</strong></label>
                                            <input type="text" name="voucher" id="voucher" class="form-control @error('voucher') is-invalid @enderror"
                                                   value="{{ old('voucher') }}">
                                            <small class="text-info">*Dial *110#, select option 6. Provide your pin. Vodafone sends voucher number via sms.</small>
                                            @error('voucher')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                <div class="row" >
                                    <div class="col-md-12 form-group">
                                        <label for="voucher">Donation Amount</label>
                                        <input type="tel" name="amount" id="amount" class="form-control @error('amount') is-invalid @enderror" required
                                               value="{{ old('amount') }}">
                                        <small class="text-info">Any amount appreciated</small>
                                        @error('amount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <button type="submit" id="payment-btn" class="btn btn-primary  font-weight-bold">Donate</button>
                                    </div>
                                </div>

                            </form>


        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>
  </div>











    <!-- CONTENT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							Make a <span>Pledge</span>
						</h2>
						<div class="section-subheading">Tell us what you can give us to improve our mission.</div>
						<div class="margin-bottom-50"></div>

						<div class="content">
							<form action="#" class="form-contact" id="contactForm" data-toggle="validator" >
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="p_name" placeholder="Enter Name" required>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="email" class="form-control" id="p_email" placeholder="Enter Email" required>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="p_subject" placeholder="Subject">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="p_phone" placeholder="Enter Phone Number">
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<textarea id="p_message" class="form-control" rows="6" placeholder="Enter Your Pledge"></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<div id="success"></div>
									<button type="submit" class="btn btn-primary">SEND MESSAGE</button>
								</div>
							</form>
							<div class="margin-bottom-50"></div>
							<p><em>Note: Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</em></p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>





@endsection
