<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="{{route('admin.post.index')}}" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
                Posts
                <span class="badge badge-info right">{{ isset($all_posts) ? $all_posts : $posts->total() }}</span>
            </p>
        </a>
    </li>
</ul>
