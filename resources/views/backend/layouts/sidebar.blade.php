<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{asset('backend/img/admin-avatar.png')}}" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">{{Auth::user()->name}}</div><small>{{Auth::user()->role}}</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="@if(request()->segment(2) == 'admin') active @endif" href="{{route('admin')}}"><i class="sidebar-item-icon fa fa-compass" aria-hidden="true"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="@if(request()->segment(2) == 'category') active @endif" href="{{route('category.index')}}"><i class="sidebar-item-icon fa fa-sitemap"></i> Category Manager</a>
            </li>
            <li>
                <a class="@if(request()->segment(2) == 'post') active @endif" href="{{route('post.index')}}"><i class="sidebar-item-icon fa fa-clone"></i> Post Manager</a>
            </li>
            <li>
                <a class="@if(request()->segment(2) == 'tab') active @endif" href="{{route('tab.index')}}"><i class="sidebar-item-icon fa fa-th-large"></i> Tab Manager</a>
            </li>
            {{-- <li>
                <a href="{{route('type.index')}}"><i class="sidebar-item-icon fa fa-clone"></i> Type Manager</a>
            </li> --}}
          
        </ul>
    </div>
</nav>