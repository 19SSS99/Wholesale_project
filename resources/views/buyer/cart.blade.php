@extends('buyer.layouts.app')
@section('class')
    class="sub_page"
@endsection
@section('content')

    <section class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="form_container">
                        @include('buyer.layouts.includes.alerts.success')
                        <div class="heading_container">
                            <h2>
                               Cart
                            </h2>
                        </div>
                        <div class="pro-table">
                            <div class="container">
                                <div class="row">
                                    <input type="hidden" id="count" value="1">
                                    <div class="col-sm-12 col-xs-12">
                                        <form action="" method="post">
                                            @csrf
                                            <table class="table" id="myTable">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">product name</th>
                                                    <th scope="col">price</th>
                                                        <th scope="col">Qnt</th>
                                                    <th scope="col">total</th>
                                                    <th scope="col"></th>

                                                </tr>
                                                </thead>
                                                <tbody id='add-product-invoice'>
@foreach($carts as $cart)
    <tr>
    <td>#</td>
    <td>{{$cart->product->name}}</td>
    <td>{{$cart->product->price}}</td>
    <td>{{$cart->qnt}}</td>
    <td>{{$cart->sum}}</td>
    <td><a href="{{route('cart.delete',$cart->id)}}"><i class="fa fa-times-circle remove_filed"></i></a></td>
    </tr>
@endforeach


                                                </tbody>
                                            </table>

                                    </div><!--col-sm-12-->



                                </div>
                            </div>
                        </div>





                        <div class="sum">
                            <div class="container">
                                <div class="row">

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="total">
                                            <h5>Total : {{$total}} <span id="val"> </span></h5>
                                        </div>
                                    </div><!--col-sm-6-->

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="tax">

                                        </div><!--tax-->
                                    </div><!--col-sm-6-->
                                    <hr>

                                    <div class="col-sm-12 col-xs-12">
                                        <div class="links">
                                            <a href="{{route('order.index')}}" class="btn btn-success" style="border: none;border-radius: 5px;" type="submit" >make order </a>
                                            <a href="{{route('delete.all.cart')}}" onclick="return confirm('Do you Want to delete Cart?');"  class="closing btn btn-danger">Cancel</a>
                                        </div>
                                    </div>
                                    </form>

                                </div>
                            </div>
                        </div><!--sum-->

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
