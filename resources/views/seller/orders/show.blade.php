@extends('seller.layouts.app')

@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Orders</h2>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-detached">
            <div class="content-body">



                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">product orders</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">


                                                <div class="content-detached">
                                                    <div class="content-body">

                                                        <div class="row" id="table-striped">
                                                            <div class="col-12">
                                                                <div class="card">

                                                                    <div class="card-content">
                                                                        <div class="table-responsive">
                                                                            <table id="myTable" class="table table-striped mb-0">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th scope="col">#</th>
                                                                                    <th scope="col"> username</th>
                                                                                    <th scope="col"> phone</th>
                                                                                    <th scope="col"> address</th>
                                                                                    <th scope="col"> Qnt</th>
                                                                                    <th scope="col"> Total</th>


                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <?php $i = 0; ?>
                                                                                @foreach ($product->order_details as $ord)
                                                                                    <tr>
                                                                                            <?php $i++; ?>
                                                                                        <th scope="row">{{$i}}</th>
                                                                                        <td>{{$ord->order->username}}</td>
                                                                                        <td>{{$ord->order->phone}}</td>
                                                                                        <td>{{$ord->order->address}}</td>
                                                                                        <td>{{$ord->qnt}}</td>
                                                                                        <td>{{$ord->sum}}</td>






                                                                                    </tr>
                                                                                @endforeach

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <!-- Ecommerce Pagination Starts -->

                                                        <!-- Ecommerce Pagination Ends -->

                                                    </div>
                                                </div>
                                                </div>
                                            </div>


                            </div>
                        </div>
                    </div>
                </section>



            </div>
        </div>

    </div>
</div>

@endsection
