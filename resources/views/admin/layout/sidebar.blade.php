<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/admin-dashboard/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                            class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            

            <!-- Yoga start -->
            <li><a href="{{ route('home') }}"><i class="fa fa-circle-o text-blue"></i> <span>Dashboard Home Page</span></a></li>
            {{-- <li><a href="{{ route('yogahealth.index') }}"><i class="fa fa-circle-o text-red"></i> <span>Yoga Health</span></a></li> --}}
            <li><a href="{{ url('goodhealths') }}"><i class="fa fa-circle-o"></i> <span>Yooga For Good Health</span></a></li>
            <li><a href="{{ url('welcomes') }}"><i class="fa fa-circle-o text-red"></i> <span>Welcome Yooga</span></a></li>
            <li><a href="{{ url('yogahealths') }}"><i class="fa fa-circle-o"></i> <span>Yoga For Health</span></a></li>
            <li><a href="{{ url('trainers') }}"><i class="fa fa-circle-o text-red"></i> <span>Expert Yoga Trainer</span></a></li>
            <li><a href="{{ url('clients') }}"><i class="fa fa-circle-o"></i> <span>Our Clients</span></a></li>
            <li><a href="{{ url('articles') }}"><i class="fa fa-circle-o text-red"></i> <span>Yoga Articles</span></a></li> 
            <li><a href="{{route('categories.index') }}"><i class="fa fa-circle-o"></i> <span>Categories</span></a></li>
            <li><a href="{{ url('anyquerys') }}"><i class="fa fafa fa-circle-o text-red"></i> <span>Any Query</span></a></li>
            <br>
            <br>
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->