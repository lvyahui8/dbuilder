<div class="row">

    <!-- Profile Info and Notifications -->
    <div class="col-md-6 col-sm-8 clearfix">

        <ul class="user-info pull-left pull-none-xsm">

            <!-- Profile Info -->
            <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('assets/images/rc.jpg')}}" alt="" class="img-circle" width="44"/>
                    Super Admin
                </a>

                <ul class="dropdown-menu">

                    <!-- Reverse Caret -->
                    <li class="caret"></li>

                    <!-- Profile sub-links -->
                    <li>
                        <a href="{{URL::to('admin')}}">
                            <i class="entypo-user"></i>
                            操作日志
                        </a>
                    </li>

                    <li>
                        <a href="{{URL::to('admin/module/list')}}">
                            <i class="entypo-mail"></i>
                            GModule管理
                        </a>
                    </li>

                    <li>
                        <a href="{{URL::to('admin/data-source/list')}}">
                            <i class="entypo-calendar"></i>
                            数据源管理
                        </a>
                    </li>

                    <li>
                        <a href="{{URL::to('site/clear')}}">
                            <i class="entypo-calendar"></i>
                            清除缓存
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class="user-info pull-left pull-right-xs pull-none-xsm hidden">
            <!-- Raw Notifications -->
            <li class="notifications dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                   data-close-others="true">
                    <i class="entypo-attention"></i>
                    <span class="badge badge-info">6</span>
                </a>

                <ul class="dropdown-menu">
                    <li class="top">
                        <p class="small">
                            <a href="#" class="pull-right">Mark all Read</a>
                            You have <strong>3</strong> new notifications.
                        </p>
                    </li>

                    <li>
                        <ul class="dropdown-menu-list scroller">
                            <li class="unread notification-success">
                                <a href="#">
                                    <i class="entypo-user-add pull-right"></i>

                                            <span class="line">
                                                <strong>New user registered</strong>
                                            </span>

                                            <span class="line small">
                                                30 seconds ago
                                            </span>
                                </a>
                            </li>

                            <li class="notification-warning">
                                <a href="#">
                                    <i class="entypo-rss pull-right"></i>

                                            <span class="line">
                                                New comments waiting approval
                                            </span>

                                            <span class="line small">
                                                last week
                                            </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="external">
                        <a href="#">View all notifications</a>
                    </li>
                </ul>

            </li>

            <!-- Message Notifications -->
            <li class="notifications dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                   data-close-others="true">
                    <i class="entypo-mail"></i>
                    <span class="badge badge-secondary">10</span>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <form class="top-dropdown-search">

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search anything..." name="s"/>
                            </div>

                        </form>

                        <ul class="dropdown-menu-list scroller">
                            <li class="active">
                                <a href="#">
                                            <span class="image pull-right">
                                                <img src="{{asset('assets/images/dj.jpg')}}" alt="" class="img-circle"/>
                                            </span>

                                            <span class="line">
                                                <strong>Luc Chartier</strong>
                                                - yesterday
                                            </span>

                                            <span class="line desc small">
                                                This ain’t our first item, it is the best of the rest.
                                            </span>
                                </a>
                            </li>

                            <li class="active">
                                <a href="#">
                                            <span class="image pull-right">
                                                <img src="{{asset('assets/images/dj.jpg')}}" alt="" class="img-circle"/>
                                            </span>

                                            <span class="line">
                                                <strong>Salma Nyberg</strong>
                                                - 2 days ago
                                            </span>

                                            <span class="line desc small">
                                                Oh he decisively impression attachment friendship so if everything.
                                            </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="external">
                        <a href="mailbox.html">All Messages</a>
                    </li>
                </ul>

            </li>

            <!-- Task Notifications -->
            <li class="notifications dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                   data-close-others="true">
                    <i class="entypo-list"></i>
                    <span class="badge badge-warning">1</span>
                </a>

                <ul class="dropdown-menu">
                    <li class="top">
                        <p>You have 6 pending tasks</p>
                    </li>

                    <li>
                        <ul class="dropdown-menu-list scroller">
                            <li>
                                <a href="#">
                                            <span class="task">
                                                <span class="desc">Procurement</span>
                                                <span class="percent">27%</span>
                                            </span>

                                            <span class="progress">
                                                <span style="width: 27%;" class="progress-bar progress-bar-success">
                                                    <span class="sr-only">27% Complete</span>
                                                </span>
                                            </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                            <span class="task">
                                                <span class="desc">App Development</span>
                                                <span class="percent">83%</span>
                                            </span>

                                            <span class="progress progress-striped">
                                                <span style="width: 83%;" class="progress-bar progress-bar-danger">
                                                    <span class="sr-only">83% Complete</span>
                                                </span>
                                            </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="external">
                        <a href="#">See all tasks</a>
                    </li>
                </ul>

            </li>

        </ul>

    </div>


    <!-- Raw Links -->
    <div class="col-md-6 col-sm-4 clearfix hidden-xs">

        <ul class="list-inline links-list pull-right">

            <!-- Language Selector -->
            <li class="dropdown language-selector">

                语言: &nbsp;
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                    <img src="{{asset('assets/images/china.png')}}"/>
                </a>

                <ul class="dropdown-menu pull-right">

                    <li>
                        <a href="#">
                            <img src="{{asset('assets/images/english.png')}}"/>
                            <span>English</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            <img src="{{asset('assets/images/china.png')}}" />
                            <span>中文</span>
                        </a>
                    </li>
                </ul>

            </li>

            <li class="sep"></li>


            <li>
                <a href="{{URL::to('admin/help')}}" data-toggle="chat" data-collapse-sidebar="1">
                    <i class="entypo-help"></i>
                    帮助

                    <span class="badge badge-success chat-notifications-badge is-hidden">0</span>
                </a>
            </li>

            <li class="sep"></li>

            <li>
                <a href="extra-login.html">
                    退出 <i class="entypo-logout right"></i>
                </a>
            </li>
        </ul>

    </div>

</div>