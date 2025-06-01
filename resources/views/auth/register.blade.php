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
          <h3> Create a new account    </h3>
        </div>
      </div>
    </div>
  </div>

<!--=======================================================================-->
<div class="sign-up">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="sign-up-form">
            <form action="{{route('front.store_register')}}" method="post">
                @csrf
              <div class="col-md-12 col-sm-12 col-xs-12">
                <label>  FullName   </label>
                <i class="fa fa-user-alt"></i>
                <input name="fullname" type="text" value="{{old('fullname')}}">

              </div>
                @error('fullname')
                <span class="text-danger">{{$message}}</span>
                @enderror
              <div class="col-md-12 col-sm-12 col-xs-12">
                <label>   UserName </label>
                <i class="fa fa-user-alt"></i>
                <input name="username" type="text" value="{{old('username')}}">
              </div>
                @error('username')
                <span class="text-danger">{{$message}}</span>
                @enderror
              <div class="col-md-12 col-sm-12 col-xs-12">
                <label>  Phone     </label>
                <i class="fa fa-mobile-alt"></i>
                <input name="phone" placeholder="05xxxxxxxx" type="text" value="{{old('phone')}}" maxlength="10">

              </div>
                @error('phone')
                <span class="text-danger">{{$message}}</span>
                @enderror
              <div class="col-md-12 col-sm-12 col-xs-12">
                <label>     Email </label>
                <i class="fa fa-envelope"></i>
                <input name="email" type="text" value="{{old('email')}}">

              </div>
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
              <div class="col-md-12 col-sm-12 col-xs-12">
                <label> Password </label>
                <i class="fa fa-lock"></i>
                <input name="password" type="password" id="myInput" >
                <i onclick="myFunction()" class="fas fa-eye eye"></i>

              </div>
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <label> User type </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="2">
                    <label class="form-check-label" for="inlineRadio1">Seller</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="1">
                    <label class="form-check-label" for="inlineRadio2">Buyer</label>
                </div>
                    @error('type')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="agree">
                  <label>  Agree <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Terms and Conditions</a>   </label>
                  <input name="condition" type="checkbox" >
                    @error('condition')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


              </div>


              <button type="submit">  Create   account </button>

              <span>   Already have an account? <a href="">Login </a> </span>


            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--=======================================================================-->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            where you let the public know the terms, rules and guidelines for using your website or mobile app. They include topics such as acceptable use, restricted behavior and limitations of liability.
        </div>
    </div>
</div>



@endsection
