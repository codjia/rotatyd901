@extends('master.site_master')
@section('content')


<div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">
            <div>
                @if(count($errors))
                    <div class="alert bg-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="container">

            <div class="row">
                <div class="col">

                    <div class="featured-boxes">
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-6">

                                    <div class="featured-box featured-box-primary text-left mt-5">
                                            <div class="box-content">
                                                <h4 class="heading-primary text-uppercase mb-3">Enter your Credentials to view Photos </h4>
                                                <form action="{{route('website.photo.category')}}" id="frmSignIn" method="post">
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="form-group col">
                                                            <label>Username </label>
                                                            <input type="text" value="" name="username" class="form-control form-control-lg" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col">
                                                            {{-- <a class="float-right" href="#">(Lost Password?)</a> --}}
                                                            <label>Password</label>
                                                            <input type="password" name="password" value="" class="form-control form-control-lg" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-lg-6">
                                                            {{-- <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" id="rememberme" name="rememberme"> Remember Me
                                                                </label>
                                                            </div> --}}
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <input type="submit" value="Login" class="btn btn-primary float-right mb-5" data-loading-text="Loading...">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
            {{-- <form class="form-inline">
                    <div class="form-group mb-2">
                      <label for="staticEmail2" class="sr-only">Username</label>
                      <input type="text" class="form-control-plaintext" id="staticEmail2" value="">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="inputPassword2" class="sr-only">Password</label>
                      <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
                  </form> --}}


@endsection
