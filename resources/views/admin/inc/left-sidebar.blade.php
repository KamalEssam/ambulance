<aside id="leftsidebar" class="sidebar">
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image"><a href="{{url('/profile')}}"><img src="{{url(Auth::user()->photo ?? '')}}" alt="User" onerror="this.src='{{url('assets/images/profile_av.jpg')}}';"></a></div>
                            <div class="detail">
                                <h4>{{Auth::user()->name}}</h4>
                            </div>
                        </div>
                    </li>
                    <li class="active open">
                        <a href="{{url('admin/dashboard')}}" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                    </li>
                    <li class="open">
                        <a href="{{url('admin/blogs')}}" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Blog/News</span></a>
                    </li>
                    <li class="open">
                        <a href="{{url('admin/reservation')}}" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Reservation</span></a>
                    </li>
                    <li class="open">
                        <a href="{{url('admin/inquery')}}" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Inquiry</span></a>
                    </li>

                    <li class="open">
                        <a href="{{url('admin/setting')}}" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Setting</span></a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</aside>
