@extends('buyer.layouts.app')
@section('class')
    class="sub_page"
@endsection
@section('content')

    <div class="row" style="text-align: center;margin-top: 100px;margin-bottom: 100px">


            <div class="col-sm-6 col-xl-8">
                <div class="box">

                        <div class="img-box" >
                            <img style="width: 200px;height: 300px" src="{{$product->photo}}" alt="">
                        </div>
                </div>
            </div>
                        <div  class="col-sm-6 col-xl-4" style="padding-right: 160px;padding-top: 50px">
                            @include('buyer.layouts.includes.alerts.success')
                            @include('buyer.layouts.includes.alerts.errors')
                        <div class="detail-box" >
                            <h6>
                                {{$product->name}}
                            </h6>
                            <p>{{$product->description}}</p>
                            <h6>
                                Price:
                                <span>
                    {{$product->price}}
                  </span>
                            </h6>
                            <h6>
                            Quantity:
                            <span>
                    {{($product->qnty - $product->qnty_sold)}}
                  </span>
                            </h6>
                        </div>

                            <div @auth() @if(\Illuminate\Support\Facades\Auth::user()->type ==2)style="display: none" @endif @endauth class="btn-box" >

                                <form action="{{route('add_cart')}}" method="post"  style="margin-top: 50px">
                                    @csrf
                                    <label> Qnt</label>
                                    <input value="1" type="number" name="qnt" >
                                    <input value="{{{$product->id}}}" type="hidden" name="product_id" >

                                    <button style="margin-top: 10px" type="submit" class="btn btn-dark" >
                                        Add Cart
                                    </button>
                                </form>

                            </div>
                        </div>


                </div>
            </div>


    </div>

@endsection
