@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
    <div class="mb-10 mt-5 text-left d-flex justify-content-between">
        <h1 class="mb-3">Products</h1>
        <a href="{{route('create_product')}}"><button type="submit" id="" class="btn btn-primary">
                <span class="indicator-label">Add Product</span>
            </button></a>
    </div>
    <!-- <div class="form p-5 bg-white rounded">
        <table>
            <tr>
                <th>#</th>
                <th>Product</th>
                <th>Price</th>
                <th>Category</th>
                <th>Remark</th>
                <th>Action</th>
            </tr>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->pro_name}}</td>
                    <td>{{$product->pro_price}}</td>
                    <td>{{isset($product->get_category->cat_name) ? $product->get_category->cat_name: ''}}</td>
                    <td>{{$product->remarks}}</td>
                    <td>
                        <a href="{{route('edit_product',$product->id)}}"><button type="submit" id="" class="btn btn-success">
                                <span class="indicator-label">Edit</span>
                            </button></a>
                        <a href="{{route('destroy_product_details',$product->id)}}"><button type="submit" id="" class="btn btn-danger show_confirm">
                <span class="indicator-label">Delete</span>
            </button></a>
</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> -->
    <div class="form p-5 bg-white rounded card-body pt-0">
        <table class="table align-middle table-row-dashed fs-6 gy-5 table-responsive" id="kt_customers_table">
            <thead>
                <tr class="text-start text-dark-400 fw-bolder fs-7 gs-0 text-center">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                        </div>
                    </th>
                    <th class="min-w-125px">S.no </th>
                    <th class="min-w-125px">Product</th>
                    <th class="min-w-125px">Price</th>
                    <th class="min-w-125px">Category</th>
                    <th class="min-w-125px">Remarks</th>
                    <th class="min-w-125px">Status</th>
                    <th class="min-w-125px">Actions</th>
                </tr>
            </thead>
            <tbody class="fw-bold text-dark-600 text-center">
                @if(count($products))
                @foreach($products as $key => $product)
                <tr>
                    <td class="w-10px pe-4">
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <td class="text-center">{{++$key}}</td>
                    <td class="text-center">
                        {{$product->pro_name}}
                    </td>
                    <td class="text-center">
                        {{$product->pro_price}}
                    </td>
                    <td class="text-center">
                        {{isset($product->get_category->cat_name) ? $product->get_category->cat_name: ''}}
                    </td>
                    <td class="text-center">
                        {{$product->remarks}}
                    </td>
                    <td class="text-center">
                        <div class="badge badge-light-success">
                            @if($product->status == 1)
                            Active
                            @else
                            Inactive
                            @endif
                        </div>
                    <td class="text-center pe-4">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                </svg>
                            </span>
                        </a>
                        <div class=" text-center menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <div class="menu-item px-3">
                                <a href="{{route('edit_product',$product->id)}}" class="menu-link px-3">Edit</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="{{route('destroy_product_details',$product->id)}}" class="menu-link px-3 show_confirm" data-kt-customer-table-filter="delete_row">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</main>

@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.show_confirm').click(function() {

        swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    submit();
                }
            });
    });
    
</script>
@endsection