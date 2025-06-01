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
                            <h2 class="content-header-title float-left mb-0">Edit Profile</h2>
                        </div>
                    </div>
                </div>

            </div>
            @include('dashboard.layouts.includes.alerts.success')
            @include('dashboard.layouts.includes.alerts.errors')
            <div class="content-detached">
                <div class="content-body">

                    <section id="basic-vertical-layouts">
                        <div class="row match-height">
                            <div class=" col-12">
                                <div class="card" >
                                    <div class="card-header">
                                        <h4 class="card-title">Edit </h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form class="form form-vertical" action="{{route('update.profile',$user->id)}}"
                                                  method="POST"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="first-name-vertical">Username</label>
                                                                <input type="text" id="first-name-vertical" class="form-control" value="{{$user->username}}" name="username">
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput2">Email  </label>
                                                                <input type="email"   class="form-control" value="{{$user->email}}"  name="email">


                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">Password  </label>
                                                                <input type="password" id="name"
                                                                       class="form-control"
                                                                       placeholder="  "
                                                                       name="password" value="{{$user->password}}">
                                                                @error("password")
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput2"> Confirm Password </label>
                                                                <input type="password" name="password_confirmation"  class="form-control" value="{{$user->password}}" >

                                                                @error('password_confirmation')
                                                                <span class="text-danger"> {{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Edit </button>

                                                </div>
                                        </div>

                                    </form>
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
