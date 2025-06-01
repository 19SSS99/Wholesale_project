<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" >
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('seller_dashboard')}}">

                    <img style="width: 180px;margin-bottom: 20px;height: 35px" src="{{asset('public/images/logo2.png')}}">

                </a></li>
        </ul>

    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" >
            <li class="nav-item "><a id="" href="{{route('seller_dashboard')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dasboard </span></a>
            </li>

            <li class=" nav-item"> <a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Ecommerce">Products</span></a>
                <ul class="menu-content">

                    <li ><a href="{{route('products.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">products</span></a>
                    </li>


                </ul>
            </li>
            <li class=" nav-item"> <a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Ecommerce">orders</span></a>
                <ul class="menu-content">

                    <li ><a href="{{route('seller.orders.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">orders</span></a>
                    </li>


                </ul>
            </li>


        </ul>
    </div>
</div>

