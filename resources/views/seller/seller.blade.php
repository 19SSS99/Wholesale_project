@extends('seller.layouts.app')

@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0"></h4>
                                </div>
                                <div class="card-content">

                                    <div class="row pb-50">

                                        <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                                            <div>
                                                <h2 class="text-bold-700 mb-25">{{\App\Models\Product::where('user_id',\Illuminate\Support\Facades\Auth::id())->count()}}</h2>
                                                <p class="text-bold-500 mb-75">Products count</p>
                                                <h5 class="font-medium-2">

                                                </h5>
                                            </div>

                                        </div>
                                            <div id="avg-session-chart"></div>
                                        </div>
                                    <div class="row pb-50">
                                    <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                                        <div>
                                            <h2 class="text-bold-700 mb-25">{{\App\Models\Product::where('user_id',Auth::id())->where('qnty', '!=', 0)->whereColumn('qnty', 'qnty_sold')->count()}}</h2>
                                            <p class="text-bold-500 mb-75">Orders count</p>
                                            <h5 class="font-medium-2">

                                            </h5>
                                        </div>

                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Analytics end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection


