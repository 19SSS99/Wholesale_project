@extends('buyer.layouts.app')
@section('class')
    class="sub_page"
@endsection
@section('content')

<!--=======================================================================-->
<div class="page-head" style="margin-top: 100px">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h3>Login  </h3>

        </div>
    </div>
</div>
</div>

<!--=======================================================================-->

<div class="login">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">


                <div class="form-login">
                    <form action="{{route('login.post')}}" method="post">
                        @include('buyer.layouts.includes.alerts.errors')
                        @csrf
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label> email </label>
                            <i class="fa fa-mobile-alt"></i>
                            <input name="email" placeholder="xxx@xxxx"  type="text" >
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label> password </label>
                            <i class="fa fa-lock"></i>
                            <input name="password" type="password" id="myInput">
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <i onclick="myFunction()" class="fas fa-eye eye"></i>
                        </div>
                        <div class="clearfix"></div>

                        <button>Login</button>


                        <span> You do not have an account? <a href="{{route('front.create_register')}}">Create Account</a> </span>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  <!--=======================================================================-->



@endsection
