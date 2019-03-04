@extends('admin.master')

@section('content')
    <section class="content row justify-content-center my-3">
        <div class="col-md-6 col-md-offset-3 shadow">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Post</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form id="update_profile" class="floating-labels" method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    <div class="box-body">
                        {{ csrf_field() }}
                        <div class="form-group m-b-40">
                            <label for="title">title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required><span class="highlight"></span> <span class="bar"></span>
                        </div>

                        <div class="form-group m-b-40">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" required><span class="highlight"></span> <span class="bar"></span>
                        </div>

                        <div class="form-group m-b-40">
                            <label for="image" class="btn btn-success w-25">Image</label>
                            <input type="file" class="form-control" id="image" name="image" hidden><span class="highlight" ></span> <span class="bar"></span>
                            <small id="imageName"></small>
                        </div>

                        <div class="form-group m-b-40">
                            <label for="details">Details</label>
                            <textarea name="details" class="form-control" id="details" cols="30" rows="10"></textarea><span class="highlight"></span> <span class="bar"></span>
                        </div>

                    </div> <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Add</button>
                        <a href="{{ route('dashboard') }}" class="btn btn-inverse waves-effect waves-light">Cancel</a>
                    </div>
                </form>

            </div><!-- box-primary -->
        </div><!-- /.row -->
    </section>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#title').on('keyup', () => {
                $value =  $('#title').val();
                $slug = $value.replace(/\s/gm, '-');
                $('#slug').val($slug);
            });

            $('#image').on('change', () => {
                $file = $('#image').val();
                $imageName = $file.split('\\');
                $('#imageName').html($imageName[$imageName.length-1]);
            });
            ClassicEditor
                .create( document.querySelector( '#details' ) )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
        });
    </script>
@endsection