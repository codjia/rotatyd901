@extends('master.site_master')
@section('content')


<hr class="tall">
    <div class="jumbotron jumbotron-fluid">
        <div class="container" style="width:500px">
                <p style="font-size: 2.5em;font-family: Raleway;color:mediumblue;text-align:center">Make Donation</p>

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
                                <input type="number" placeholder="0000000000" maxlength="10" name="number" id="number" required class="form-control @error('number') is-invalid @enderror"
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
                                <input type="number" name="amount" id="amount" class="form-control @error('amount') is-invalid @enderror" required
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
    </div>











    <!-- CONTENT -->
	{{-- <div class="section">
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
	</div> --}}





@endsection
