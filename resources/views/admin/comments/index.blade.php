@extends('admin.master')

@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    @foreach($comments as $comment)
    <div class="comment-area my-2">
        <div class="card">
            <div class="card-header">
                {{ $comment->email }} | {{ TimeForHuman($comment->created_at) }} | <a href="{{ route('post.show', ['id' => $comment->post_id]) }}">Post ID: {{ $comment->post_id }}</a>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $comment->name }} <button class="btn btn-{{ ($comment->confirm == 1) ? "success" : "warning"}} confirm" data-id="{{ $comment->id }}" data-token="{{ csrf_token() }}">Confirm</button></h5>
                <p class="card-text">{{ $comment->body }}</p>
                <a href="#" class="btn btn-primary">Reply</a>
            </div>
        </div>
    </div>
    @endforeach
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('.confirm').click(function () {
                console.log('clicked.');
                var $this = $(this);
                var id = $(this).data("id");
                var token = $(this).data("token");
                $.ajax(
                    {
                        url: "{{ route('comments.update', ['id' => $comment->id]) }}",
                        type: 'POST',
                        dataType: "JSON",
                        data: {
                            "id": id,
                            "_method": 'PUT',
                            "_token": token,
                            "confirm" : {{ ($comment->confirm == 1) ? 0 : 1}}
                        },
                        success: function (result) {
                            console.log(result.confirm);

                            $(this).find('.confirm').removeClass('btn-warning').addClass('btn-success');
                        }
                    });
            });
        });
    </script>
@endsection