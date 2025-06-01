<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" >
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('admin_dashboard')}}">

                    <img style="width: 200px;margin-bottom: 45px;height: 50px" src="{{asset('public/images/images.png')}}">

                </a></li>
        </ul>

    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" >
            <li class="nav-item "><a id="" href="{{route('admin_dashboard')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard </span></a>
            </li>

            <li class=" nav-item"> <a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Ecommerce">Categories</span></a>
                <ul class="menu-content">

                    <li ><a href="{{route('categories.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">categories</span></a>
                    </li>


                </ul>
            </li>
            <li class=" nav-item"> <a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Ecommerce">Users</span></a>
                <ul class="menu-content">

                    <li ><a href="{{route('users.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">users</span></a>
                    </li>


                </ul>
            </li>
            <li class=" nav-item"> <a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Ecommerce">contacts</span></a>
                <ul class="menu-content">

                    <li ><a href="{{route('dashboard.contacts.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">contacts</span></a>
                    </li>


                </ul>
            </li>
            <li class=" nav-item"> <a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Ecommerce">orders</span></a>
                <ul class="menu-content">

                    <li ><a href="{{route('dashboard.orders.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">orders</span></a>
                    </li>


                </ul>
            </li>

        </ul>
    </div>
</div>

