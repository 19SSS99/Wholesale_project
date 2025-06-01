<div class="hero_area">
    @yield('social')

    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="{{route('index')}}">
            <span>
              Wholesale
            </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-toggle nav-link" type="button" data-toggle="dropdown">  Categories </a>
                            <ul class="dropdown-menu-right dropdown-menu " style="margin-right: 670px;width: 200px;background-color: ghostwhite">
                                <div class="arrow-up"></div>
                                <?php $cactegories=\App\Models\Category::get(); ?>
                                @foreach($cactegories as $category)


                                   <a href="{{route('products.show' , $category->id)}}" style="font-size: medium;color: black ;text-align: center; "> <li style="background-color: whitesmoke;margin-bottom: 3px">{{$category->name}}  </li> </a>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}"> About </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact_us')}}">Contact Us</a>
                        </li>
                    </ul>
                    <div class="user_option-box">


                                <span class="dropdown-toggle" type="button" data-toggle="dropdown">   <i class="fa fa-user" aria-hidden="true" ></i> </span>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <div class="arrow-up"></div>
                                    @guest()
                                    <li><a href="{{route('front.create_register')}}" style="font-size: medium;"><i class="fa fa-user-plus" style="padding-right: 8px"></i>Register   </a></li>
                                    <li><a href="{{route('login')}}" style="font-size: medium;"><i class="fa fa-user" style="padding-right: 8px"></i>login </a></li>
                                    @endguest
                                    @auth()
                                        <li><a href="{{route('logout')}}" style="font-size: medium;"><i class="fa fa-user" style="padding-right: 8px"></i>logout </a></li>
                                    @endauth
                                </ul>



{{--                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">--}}
{{--                <span class="mr-1">--}}
{{--                  <span >--}}
{{--                      <i class="fa fa-user" aria-hidden="true" ></i> </span>--}}
{{--                </span>--}}

{{--                            </a>--}}
{{--                            <div class="dropdown-menu dropdown-menu-right">--}}

{{--<ul  class="dropdown-menu">--}}
{{--    <div class="arrow-up"></div>--}}

{{--                                <li> <a style="padding: 5px" href="#">--}}
{{--                                     register--}}
{{--                                    </a> </li>--}}

{{--                                <li>    <a style="padding: 5px" href="#">--}}
{{--                                     login--}}
{{--                                </a></li>--}}
{{--</ul>--}}

{{--                                    <div class="dropdown-divider"></div>--}}

{{--                            </div>--}}


                        @auth()
                            @if(Auth::user()->type==1)
                        <a href="{{route('front.cart')}}">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i> @if(\App\Models\Cart::where('user_id',\Illuminate\Support\Facades\Auth::id())->count() >0)<span style="width: 19px;line-height: 16px;color: #fff;font-size: 13px;padding: 2px 5px;;height:19px;position: absolute; top: -2px;right: -3px;border-radius: 130px;background: red;color: white" class="cart_count">{{ \App\Models\Cart::where('user_id',\Illuminate\Support\Facades\Auth::id())->count()}}</span>@endif
                        </a>
                            @endif
                        @endauth
                        @auth()
                        @if(Auth::user()->type==2)
                        <a href="{{route('seller_dashboard')}}" ><button  class="btn btn-success">Go to Dashboard</button></a>
                        @endif
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    @yield('slider')

    <!-- end slider section -->
</div>
