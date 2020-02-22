@extends('master.site_master')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="container" style="background-color: rgba(0, 0, 0, 0.58);padding: 1em">
        <br>
        <br>
        <br>

        <h1 class="display-3" align="middle" style="color: #fff">Thank You For Donating!</h1>
        <p class="lead" align="middle" style="color: #ffa000">Follow the steps to <strong style="color:#fff">complete</strong> payment</p>
        <br>
        {{--<img class="img-rounded" src="{{asset('newUI/images/mtn-logo.jpg')}}" style="width:4em;border-radius: 3em !important;margin-left: 50%">--}}

        <div class="row">

            <div class="col-lg-4">

            </div>

            <div class="col-lg-4">
        <p align="middle" style="color: #fff">
                1. On the Mobile handset dial *170#
                <br>
                <br>
                2. Select Option 6 : My wallet
                <br>
                <br>
                3. Select Option 3 : My approvals (all pending payments are populated)
                <br>
                <br>
                4. Enter your Pin
                <br>
                <br>
                5. Confirm payment.
                <br>
                <br>
                6. You have successfully made a donation
        </p>
        </div>


        </div>
        <hr>
        <p align="middle" style="color: #fff">
            Having trouble? <a href="{{route('website.contact')}}" target="_blank" style="color: #ffa000">Contact us</a>
        </p>
        <p class="lead" align="middle">
            <a class="btn btn-primary btn-sm" href="{{route('website.home')}}"  role="button" style="color: white">Continue to homepage</a>
        </p>

    </div>
@endsection
