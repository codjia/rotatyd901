@extends('back.Auth.layouts.master')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit History</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            @include('back.Auth.inc.messages')


            <form method ="POST" action="{{ route('history.update',$history->id) }}" enctype="multipart/form-data" >
                {{csrf_field()}}
                @method('PUT')
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" id="title" value="{{$history->title}}" placeholder="Title here">
                    </div>

                    <div class="form-group">
                      <label for="body">Boby</label>
                      <textarea class="form-control" name="body" id="body" rows="9">{{$history->body}}</textarea>

                    </div>

                <div class="form-group">

                    <input type="file"  name="cover_image" class="form-control-file" >
                </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>


            </form>




        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
@endsection
