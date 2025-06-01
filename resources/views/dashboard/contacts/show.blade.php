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
                        <h2 class="content-header-title float-left mb-0">contact</h2>
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
                                    <h4 class="card-title">contact details</h4>
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
                                                            <input type="text" id="first-name-vertical" class="form-control" name="name" value="{{$contact->name}}" readonly>

                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical"> email</label>
                                                            <input type="text" id="first-name-vertical" class="form-control" name="name" value="{{$contact->email}}" readonly>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical"> phone</label>
                                                            <input type="text" id="first-name-vertical" class="form-control" name="name" value="{{$contact->phone}}" readonly>

                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical"> message</label>
                                                            <input type="text" id="first-name-vertical" class="form-control" name="name" value="{{$contact->message}}" readonly>
                                                        </div>
                                                    </div>

                                                </div>


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
