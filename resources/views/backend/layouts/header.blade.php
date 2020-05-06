<header class="header">
    <div class="page-brand">
        {{-- <a class="link" href="{{route('admin')}}">
            <span class="brand">E-
                <span class="brand-tip">CROZA</span>
            </span>
            <span class="brand-mini">EC</span>
        </a> --}}
    </div>
    <div class="flexbox flex-1">
        <!-- START TOP-LEFT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li>
                <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
            </li>
            <li>
                <form class="navbar-search" action="javascript:;">
                    <div class="rel">
                        <span class="search-icon"><i class="ti-search"></i></span>
                        <input class="form-control" placeholder="Search here...">
                    </div>
                </form>
            </li>
        </ul>
        <!-- END TOP-LEFT TOOLBAR-->
        <!-- START TOP-RIGHT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li class="dropdown dropdown-inbox">
                <a href="{{route('home')}}" class="nav-link" target="_blank"><i class="fa fa-home"></i>
                </a>
            </li>
            {{-- <li class="dropdown dropdown-notification">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i>
                    @if(count(auth()->user()->unreadNotifications)==0)
                    @else
                    <span class="badge badge-primary envelope-badge">{{count(auth()->user()->unreadNotifications)}}</span>
                    @endif
                </a>                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                    <li class="dropdown-menu-header">
                        <div>
                            <span>You have <strong>{{count(auth()->user()->Notifications)}}</strong> new orders</span>
                            <a class="pull-right" href="{{route('mark-as-read')}}">Mark all as Read</a>
                        </div>
                    </li>
                    <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                        <div>
                            @foreach(auth()->user()->unreadNotifications as $notification)
                            <a href="{{route('orders')}}" class="list-group-item" style="background:#ddd">
                                <div class="media">
                                    <div class="media-img">
                                        <span class="badge badge-success badge-big"><i class="fa fa-shopping-cart"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-13">{{$notification->data['data']}}</div><small class="text-muted">{{$notification->created_at->diffForHumans()}}</small></div>
                                </div>
                            </a>
                            @endforeach
                            @foreach(auth()->user()->readNotifications as $notification)
                            <a href="{{route('orders')}}" class="list-group-item">
                                <div class="media">
                                    <div class="media-img">
                                        <span class="badge badge-success badge-big"><i class="fa fa-shopping-cart"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-13">{{$notification->data['data']}}</div><small class="text-muted">{{$notification->created_at->diffForHumans()}}</small></div>
                                </div>
                            </a>
                            @endforeach
                           
                        </div>
                    </li>
                </ul>
            </li> --}}
            <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    <img src="{{asset('backend/img/admin-avatar.png')}}" />
                    <span></span>{{Auth::user()->name}}<i class="fa fa-angle-down m-l-5"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Profile</a>
                    <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a>
                    <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                    <li class="dropdown-divider"></li>
                    {{-- logout --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </ul>
            </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
    </div>
</header>