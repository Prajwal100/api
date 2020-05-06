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
                <a class="active" href="{{route('admin')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('category.index')}}"><i class="sidebar-item-icon fa fa-folder-open-o"></i> Category Manager</a>
            </li>
            <li>
                <a href="{{route('post.index')}}"><i class="sidebar-item-icon fa fa-clone"></i> Post Manager</a>
            </li>
            <li>
                <a href="{{route('tab.index')}}"><i class="sidebar-item-icon fa fa-clone"></i> Tab Manager</a>
            </li>
            <li>
                <a href="{{route('type.index')}}"><i class="sidebar-item-icon fa fa-clone"></i> Type Manager</a>
            </li>
            {{-- <li class="heading">ADMIN SHOP</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-cart-arrow-down"></i>
                    <span class="nav-label">Order Manager</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="colors.html"><i class="sidebar-item-icon fa fa-shopping-cart"></i> Order Manager</a>
                    </li>
                    <li>
                        <a href="colors.html"><i class="sidebar-item-icon fa fa-asterisk"></i> Order Status</a>
                    </li>
                    <li>
                        <a href="colors.html"><i class="sidebar-item-icon fa fa-recycle"></i> Payment Status</a>
                    </li>
                    <li>
                        <a href="colors.html"><i class="sidebar-item-icon fa fa-truck"></i> Shipping Status</a>
                    </li>
                  
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-folder-open"></i>
                    <span class="nav-label">Product & Catalog</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('category.index')}}"><i class="sidebar-item-icon fa fa-folder-open-o"></i> Category Manager</a>
                    </li>
                    <li>
                        <a href="{{route('product.index')}}"><i class="sidebar-item-icon fa fa-file-photo-o"></i> Product Manager</a>
                    </li>
                </ul>
            </li>
            <li>    
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-group"></i>
                    <span class="nav-label">Customer Manager</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href=""><i class="sidebar-item-icon fa fa-user"></i> Customer Manager</a>
                    </li>
                    <li>
                        <a href=""><i class="sidebar-item-icon fa fa-user-circle-o"></i> Suscriber</a>
                    </li>
                </ul>
            </li>

            <li class="heading">ADMIN CONTENT</li>
            <li>
                <a href="{{route('file-manager')}}"><i class="sidebar-item-icon fa fa-file-o"></i> File Manager</a>
            </li>
            <li>
                <a href="{{route('banner.index')}}"><i class="sidebar-item-icon fa fa-image"></i> Banner</a>
            </li>
            <li>
                <a href="{{route('page.index')}}"><i class="sidebar-item-icon fa fa-clone"></i> Pages</a>
            </li>
            <li>    
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-powerpoint-o"></i>
                    <span class="nav-label">Blog/News</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href=""><i class="sidebar-item-icon fa fa-clone"></i> Posts</a>
                    </li>
                    <li>
                        <a href="colors.html"><i class="sidebar-item-icon fa fa-user-circle-o"></i> Suscriber</a>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </div>
</nav>