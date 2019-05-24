<!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <img class="avatar" width="24px" src="{{asset('public/images/users/profile.png')}}">
                               
                            <span class="hide-menu">{{Auth::user()->name}}</span>
                        </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{url('admin/profile')}}"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="{{url('logout')}}" ><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        
                       
                        <li> <a class="waves-effect waves-dark" href="{{url('dashboard')}}"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="{{url('buckets')}}" aria-expanded="false"><i class="fa fa-group"></i><span class="hide-menu">Buckets</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="{{url('categories')}}" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Categories</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->