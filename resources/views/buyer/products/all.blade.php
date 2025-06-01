@extends('buyer.layouts.app')
@section('class')
    class="sub_page"
@endsection
@section('content')

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    All Products
                </h2>
            </div>
            <div class="row">
                @foreach($products as $product)

                <div class="col-sm-6 col-xl-4">
                    <div class="box">
                        <a href="{{route('products.details',$product->id)}}">
                            <div class="img-box">
                                <img src="{{$product->photo}}" alt="">
                            </div>

                            <div class="detail-box">
                                <div>
                                    Quantity:
                                    <span>
                    {{$product->qnty - $product->qnty_sold}}
                  </span>
                                </div>
                                <h6>
                                    {{$product->name}}
                                </h6>
                                <h6>
                                    Price:
                                    <span>
                    {{$product->price}}
                  </span>
                                </h6>
                            </div>
                            <div class="new">

                            </div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>

        </div>

    </section>
    <div class="justify-content-center d-flex">
        {!! $products->links() !!}
    </div>

@endsection
