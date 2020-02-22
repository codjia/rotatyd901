@extends('back.Auth.layouts.master')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">My History</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            @if (count($history)>0)
            @foreach ($history as $post )
            <div class=" card">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-2 col-sm-3">
                        <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="#"> {{$post->title}}</a>
                           <a href="{{ route('history.edit', ['id' => $post->id]) }}"> <button type="button" class="btn btn-primary">
                                 Edit
                            </button></a>
                            <br/>
    {{--                        <h5>{!!$post->body!!}</h5>--}}
                        </h3>
                        <h5>Written on {{$post->created_at}} </h5>
                    </div>
                </div>
            </div>
            </div>

            @endforeach

        @else
            <p>No Posts Found</p>

        @endif


        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
@endsection
