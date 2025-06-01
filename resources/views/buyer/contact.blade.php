@extends('buyer.layouts.app')
@section('class')
    class="sub_page"
@endsection
@section('content')

    <section class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container">
                        @include('buyer.layouts.includes.alerts.success')
                        @include('buyer.layouts.includes.alerts.errors')
                        <div class="heading_container">
                            <h2>
                                Contact Us
                            </h2>
                        </div>

                        <form action="{{route('contact_us.store')}}" method="post">
                            @csrf
                            <div>
                                <input name="name" type="text" placeholder="Full Name " />
                                @error('name')
                                <span class=" text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div>
                                <input name="email" type="email" placeholder="Email" />
                                @error('email')
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
                                <input name="message" type="text" class="message-box" placeholder="Message" />
                                @error('message')
                                <span class=" text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="d-flex ">
                                <button type="submit">
                                    SEND
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{asset('public/images/contact-img.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
