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
                <a class="@if(request()->segment(2) == '') active @endif" href="{{route('admin')}}"><i class=" sidebar-item-icon fa fa-tachometer" aria-hidden="true"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="@if(request()->segment(2) == 'category') active @endif" href="{{route('category.index')}}"><i class="sidebar-item-icon fa fa-sitemap"></i> <span class="nav-label">Category Manager</span></a>
            </li>
            <li>
                <a class="@if(request()->segment(2) == 'post') active @endif" href="{{route('post.index')}}"><i class="sidebar-item-icon fa fa-clone"></i><span class="nav-label">Post Manager</span> </a>
            </li>
            <li>
                <a class="@if(request()->segment(2) == 'tab') active @endif" href="{{route('tab.index')}}"><i class="sidebar-item-icon fa fa-th-large"></i><span class="nav-label">Tab Manager</span></a>
            </li>
            {{-- <li>
                <a href="{{route('type.index')}}"><i class="sidebar-item-icon fa fa-clone"></i> Type Manager</a>
            </li> --}}
          
        </ul>
    </div>
</nav>
<style>
    .side-menu>li a:focus,.side-menu>li a:hover{
        background-color:#12405f;
    }
    .side-menu li a.active{
        background-color:#3498db;
    }

</style>