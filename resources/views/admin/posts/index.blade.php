@extends('admin.master')

@section('content')
    <table id="post-table" class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Details</th>
            <th>Image</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>{!! strlen($post->details) > 50 ? substr($post->details,0,50)."..." : $post->details !!}</td>
                <td><img src="{{ $post->image }}" width="40" class="thumbnail" alt=""></td>
                <td class="pull-left d-flex">
                    <a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="btn btn-warning">ویرایش</a>
                    <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <a type="submit" class="btn btn-danger ml-2">حذف</a>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#post-table').dataTable();
        })
    </script>
@endsection