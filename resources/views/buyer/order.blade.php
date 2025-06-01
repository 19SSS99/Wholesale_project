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
                        @include('buyer.layouts.includes.alerts.errors')
                        <div class="heading_container">
                            <h2>
                               Make Order
                            </h2>
                        </div>
                        <form action="{{route('order.store')}}" method="post">
                            @csrf
                            <div>
                                <input name="username" type="text" placeholder="Full Name " />
                                @error('username')
                                <span class=" text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div>
                                <input name="phone" type="text" placeholder="Phone number" />
                                @error('phone')
                                <span class=" text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div>
                                <input name="address" type="text"  placeholder="Address" />
                                @error('address')
                                <span class=" text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="d-flex ">
                                <button type="submit">
                                    Order
                                </button>
                            </div>
                        </form>







                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
