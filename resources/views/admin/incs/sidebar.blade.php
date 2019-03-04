<div class="sidebar sidebar-dark bg-dark">
    <ul class="list-unstyled">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-fw fa-home"></i> Dashboard</a></li>
        <li>
            <a href="#sm_expand_1" data-toggle="collapse">
                <i class="fa fa-fw fa-box"></i>Posts
            </a>
            <ul id="sm_expand_1" class="list-unstyled collapse">
                <li {{ setActive('admin/posts') }}><a href="{{ route('posts.index') }}">Posts list</a></li>
                <li {{ setActive('admin/posts/create') }}><a href="{{ route('posts.create') }}">Add Post</a></li>
            </ul>
        </li>
        <li>
            <a href="#sm_expand_2" data-toggle="collapse">
                <i class="fa fa-fw fa-box"></i>Users
            </a>
            <ul id="sm_expand_2" class="list-unstyled collapse">
                <li {{ setActive('admin/users') }}><a href="{{ route('users.index') }}">Users list</a></li>
                <li {{ setActive('admin/users/create') }}><a href="{{ route('users.create') }}">Add User</a></li>
            </ul>
        </li>
        <li><a href="#"><i class="fa fa-fw fa-link"></i> Menu Item</a></li>
        <li><a href="#"><i class="fa fa-fw fa-link"></i> Menu Item</a></li>
    </ul>
</div>
