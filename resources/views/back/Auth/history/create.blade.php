@extends('back.Auth.layouts.master')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create History</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            @include('back.Auth.inc.messages')
            <form method ="POST" action="{{ route('history.store') }}" enctype="multipart/form-data" >
                {{csrf_field()}}
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Title here">
                    </div>

                    <div class="form-group">
                      <label for="body">Boby</label>
                      <textarea class="form-control" name="body" id="body" rows="9"></textarea>

                    </div>

                <div class="form-group">

                    <input type="file"  name="cover_image" class="form-control-file" >
                </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Submit">
                       {{-- <a href="{{ route('history.show') }}"> <button type="button" class="btn btn-primary">
                            show </button></a> --}}

                    </div>





            </form>




        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
@endsection
