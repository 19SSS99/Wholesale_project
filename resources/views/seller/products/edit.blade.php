@extends('seller.layouts.app')

@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Edit</h2>
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
                                    <h4 class="card-title">Product details</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="{{route('products.update', $product->id)}}" method="post" enctype="multipart/form-data">

                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Product name</label>
                                                            <input type="text" id="first-name-vertical" class="form-control" name="name" value="{{$product->name}}">
                                                            @error('name')
                                                            <span class=" text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Price</label>
                                                            <input type="number" id="first-name-vertical" class="form-control" name="price"  value="{{$product->price}}">
                                                            @error('price')
                                                            <span class=" text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Quantity</label>
                                                            <input type="number" id="first-name-vertical" class="form-control" name="qnty" value="{{$product->qnty - $product->qnty_sold}}">
                                                            @error('qnty')
                                                            <span class=" text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">  Photo</label>
                                                            <input type="file" id="first-name-vertical" class="form-control" name="photo" >
                                                            @error('photo')
                                                            <span class=" text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Description</label>
                                                            <textarea type="text" id="first-name-vertical" class="form-control" name="description" >
                                                                {{$product->description}}
                                                            </textarea>
                                                            @error('description')
                                                            <span class=" text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">  Category </label>
                                                            <select name="category_id" id="first-name-vertical" class="form-control">
                                                                @foreach($categories as $category )
                                                                    <option @if($product->category_id==$category->id)  selected @endif  value="{{$category->id}}"> {{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('category_id')
                                                            <span class=" text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>


                                                    </div>


                                                </div>
                                                <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <img width="200px" height="200px" src="{{$product->photo}}" >
                                                    </div>

                                                </div>



                                                    <div class="col-12" style="margin: auto;margin-bottom:20px;margin-top:20px">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Edit</button>

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
