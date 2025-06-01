@extends('dashboard.layouts.app')

@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Order</h2>
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
                                    <h4 class="card-title">product details</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" >

                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical"> name</label>
                                                            <input type="text" id="first-name-vertical" class="form-control" name="name" value="{{$order->username}}" readonly>

                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical"> phone</label>
                                                            <input type="text" id="first-name-vertical" class="form-control" value="{{$order->phone}}" readonly>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical"> address</label>
                                                            <input type="text" id="first-name-vertical" class="form-control"  value="{{$order->address}}" readonly>

                                                        </div>
                                                    </div>


                                                </div>
                                        </form>

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
                                                                                    <th scope="col"> product name</th>
                                                                                    <th scope="col"> product price</th>
                                                                                    <th scope="col"> seller Name</th>
                                                                                    <th scope="col"> Qnt</th>
                                                                                    <th scope="col"> Total</th>


                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <?php $i = 0; ?>
                                                                                @foreach ($order->order_details as $ord)
                                                                                    <tr>
                                                                                            <?php $i++; ?>
                                                                                        <th scope="row">{{$i}}</th>
                                                                                        <td>{{$ord->products->name}}</td>
                                                                                        <td>{{$ord->products->price}}</td>
                                                                                        <td>{{$ord->products->user->username}}</td>
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
