<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('assets')}}/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{route('admin.index')}}">
                    <i class="fa fa-home"></i>Home
                </a>
            </li>
            <li>
                <a href="{{route('admin.setting')}}">
                    <i class="fa fa-gear"></i>Settings
                </a>
            </li>
            <li>
                <a href="{{route('admin.message.index')}}">
                    <i class="fa fa-message"></i>Message
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gift"></i>
                    <span>Products</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.product.index')}}"><i class="fa fa-circle-o"></i>Products</a></li>
                    <li><a href="{{route('admin.product.create')}}"><i class="fa fa-circle-o"></i>Add Product</a></li>
                </ul>
            </li>
            <li>
                <a href="/admin/comment">
                    <i class="fa fa-comment"></i>Comments
                </a>
            </li>
            <li>
                <a href="/admin/faq">
                    <i class="fa fa-asterisk"></i>Frequently Ask
                </a>
            </li>
            <li>
                <a href="/admin/messages">
                    <i class="fa fa-comments"></i>Messages
                </a>
            </li>
            <li>
                <a href="/admin/settings">
                    <i class="fa fa-cog"></i>Settings
                </a>
            </li>
            <li>
                <a href="/admin/social">
                    <i class="fa fa-globe"></i>Social Media
                </a>
            </li>
            <li>
                <a href="/admin/users">
                    <i class="fa fa-users"></i>Users
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-diamond"></i>
                    <span>Orders</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>New Orders</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Accepted Orders</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Shipping Orders</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Completed Orders</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Categories</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.category.index')}}"><i class="fa fa-circle-o"></i>Categories</a></li>
                    <li><a href="{{route('admin.category.create')}}"><i class="fa fa-circle-o"></i>Add Category</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
