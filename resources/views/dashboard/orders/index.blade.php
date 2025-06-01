@extends('dashboard.layouts.app')
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
                        <h2 class="content-header-title float-left mb-0">orders</h2>
                        @include('seller.layouts.includes.alerts.success')
                        @include('seller.layouts.includes.alerts.errors')
                    </div>
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
                                                <th scope="col"> name</th>
                                                <th scope="col"> phone</th>
                                                <th scope="col"> address</th>
                                                <th scope="col"> count order</th>
                                                <th scope="col"> Total</th>
                                                <th scope="col">Measures</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                            @foreach ($orders as $order)
                                            <tr>
                                                <?php $i++; ?>
                                                <th scope="row">{{$i}}</th>
                                                <td>{{$order->username}}</td>
                                                <td>{{$order->phone}}</td>
                                                <td>{{$order->address}}</td>
                                                <td>{{$order->order_count}}</td>
                                                <td>{{$order->total}}</td>



                                                <td class="text-left">

                                                    <a href="{{route('dashboard.orders.show', $order->id)}}" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="" >
                                                        <i style="color: forestgreen" class="fa fa-eye"></i>                                                   </a>
                                                    <a href="{{route('dashboard.orders.delete', $order->id)}}" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="" onclick="return confirm('Do you Want to delete order?');">
                                                        <i style="color: indianred" class="fa fa-trash"></i>
                                                    </a>

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
