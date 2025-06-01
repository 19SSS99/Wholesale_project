@extends('seller.layouts.app')
@section('style')
    <style>
        .dataTables_wrapper .dataTables_filter input {
            width: 250px ;
            margin-right:10px;
            height: 30px;
            margin-bottom: 12px;        }
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            border-radius: 50%;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover{
            background:  #4839EB ;
            border-color:#4839EB ;
            color: whitesmoke !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            border-radius: 50%;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover{
            background:  #4839EB ;
            border-color:#4839EB ;
            color: whitesmoke !important;
        }

    </style>
@endsection
@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Product</h2>
                        @include('seller.layouts.includes.alerts.success')
                        @include('seller.layouts.includes.alerts.errors')
                    </div>
                </div>
            </div>

            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <a href="{{route('products.create')}}" class="btn btn-primary mb-2 waves-effect waves-light"><i class="feather icon-plus"></i>&nbsp; create</a>
                </div>
            </div>


        </div>
        <div class="content-detached">
            <div class="content-body">

                <div class="row" id="table-striped">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-content">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">product name</th>
                                                    <th scope="col">Quantity</th>



                                                <th scope="col">Measures</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                            @foreach ($products as $product)
                                            <tr>
                                                <?php $i++; ?>
                                                <th scope="row">{{$i}}</th>
                                                <td>{{$product->name}}</td>

                                                <td>{{$product->qnty - $product->qnty_sold}}</td>
                                                <td class="text-left">
                                                    <a class="btn btn-soft-info btn-icon btn-circle btn-sm" href="{{route('products.edit', $product->id)}}" >
                                                        <i style="color: cornflowerblue"  class="fa fa-edit"></i>
                                                    </a>

                                                    <a href="{{route('products.delete', $product->id)}}" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="" onclick="return confirm('Do you Want to delete product?');">
                                                        <i style="color: indianred" class="fa fa-trash"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('products.details', $product->id)}}" >
                                                        <i style="color: forestgreen" class="fa fa-eye"></i>                                                   </a>
                                                </td>

                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Ecommerce Pagination Starts -->

                <!-- Ecommerce Pagination Ends -->

            </div>
        </div>

    </div>
</div>

@endsection
@section('scripts')
    <script
        src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

    <script>

        $(document).ready(function(){

            $("#myTable").dataTable({
                "bStateSave": true,
                "fnStateSave": function (oSettings, oData) {
                    localStorage.setItem('dataTable2', JSON.stringify(oData));
                },
                "fnStateLoad": function (oSettings) {
                    return JSON.parse(localStorage.getItem('dataTable2'));
                },

            });

        });
    </script>
@endsection
