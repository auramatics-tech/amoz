@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
    <div class="py-3">
        <h1 class="mb-3">Orders</h1>
    </div>
    <div class="d-flex pb-5">
        <div>
            <div class="accordion" id="accordionExample">
                <div class="">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="btn accordion-button si_accordian bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Search
                        </button>

                    </h2>
                </div>
            </div>
        </div>
        <div class="d-flex si_margin_left justify-content-around">
            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form action="{{route('create_order')}}" method="get">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <h5 class="text-center">Is this residential or business?</h5>
                                <div class="d-flex justify-content-center py-5">
                                    <input type="hidden" name="category" id="category_value" value="">
                                    <button type="button" id="residential_button" class="btn btn-primary">
                                        <span class="indicator-label">Residential</span>
                                    </button>
                                    <button type="button" id="business_button" class="btn btn-primary">
                                        <span class="indicator-label">Business</span>
                                    </button>

                                </div>
                                <div class="pt-10 justify-content-center">
                                    <h5 class="py-3 text-center">Select ISP</h5>
                                    <div class="d-flex flex-column mb-8">
                                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select ISP" name="role">
                                            <option value="">Select ISP</option>
                                            <option value="1">Karina Clark</option>
                                            <option value="2">Robert Doe</option>
                                            <option value="3">Niel Owen</option>
                                            <option value="4">Olivia Wild</option>
                                            <option value="5">Sean Bean</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="py-5 px-5">
                                <button class="btn btn-primary justiy-content-center w-100" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Create Order</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">New Order</a> -->
            <button type="button" id="" class="d-flex btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                <span class="indicator-label">New Order</span>
            </button>
            <!-- <a href="{{route('create_order')}}"><button type="submit" id="" class="d-flex btn btn-primary ">
                <span class="indicator-label">New Order</span>
            </button></a>  -->
            <button type="submit" id="" class="btn btn-primary">
                <span class="indicator-label">Edit Order</span>
            </button>
            <button type="submit" id="" class="btn btn-primary">
                <span class="indicator-label">Submit Order</span>
            </button>
        </div>
    </div>
    <div id="collapseOne" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="">
            <div class="py-5">
                <div class=" border bg-white rounded px-10 p-10">
                    <div class="row g-9 mb-8">
                        <div class="col-md-4 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Product</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select" name="">
                                <option value="">Select user...</option>
                                <option value="1">Karina Clark</option>
                                <option value="2">Robert Doe</option>
                                <option value="3">Niel Owen</option>
                                <option value="4">Olivia Wild</option>
                                <option value="5">Sean Bean</option>
                            </select>
                        </div>
                        <div class="col-md-4 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Order status</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select" name="">
                                <option value="">Select user...</option>
                                <option value="1">Karina Clark</option>
                                <option value="2">Robert Doe</option>
                                <option value="3">Niel Owen</option>
                                <option value="4">Olivia Wild</option>
                                <option value="5">Sean Bean</option>
                            </select>
                        </div>
                        <div class="col-md-4 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Date</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select" name="">
                                <option value="">Select user...</option>
                                <option value="1">Karina Clark</option>
                                <option value="2">Robert Doe</option>
                                <option value="3">Niel Owen</option>
                                <option value="4">Olivia Wild</option>
                                <option value="5">Sean Bean</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-9 mb-8">
                        <div class="col-md-4 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Search</label>
                            <input type="text" class="form-control form-control-solid" placeholder="" name="" />
                        </div>
                    </div>
                    <div class="text-left d-flex pt-3 w-25 justify-content-between si_btn_padding">
                        <button type="submit" id="" class="d-flex btn btn-primary ">
                            <span class="indicator-label">Submit</span>
                        </button>
                        <button type="submit" id="" class="ml-left d-flex btn btn-primary ">
                            <span class="indicator-label">Reset</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="form px-5 py-5 bg-white rounded">
        <table>
            <tr>
                <th></th>
                <th>Eform ID</th>
                <th>Order no</th>
                <th>Invoice</th>
                <th>Name/Company</th>
                <th>Agent</th>
                <th>Package</th>
                <th>Status</th>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>123</td>
                <td>77</td>
                <td>completed</td>
                <td>john</td>
                <td>john</td>
                <td>100 home</td>
                <td>completed</td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>32133</td>
                <td>45</td>
                <td>submitted</td>
                <td>john</td>
                <td>john</td>
                <td>100 home</td>
                <td>port full</td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>21313</td>
                <td>34</td>
                <td>completed</td>
                <td>john</td>
                <td>john</td>
                <td>100 home</td>
                <td>Missing unit</td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>2131</td>
                <td>23</td>
                <td>on hold</td>
                <td>john</td>
                <td>john</td>
                <td>100 home</td>
                <td>processing</td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>6546</td>
                <td>98</td>
                <td>-</td>
                <td>john</td>
                <td>john</td>
                <td>100 home</td>
                <td>cancelled</td>
            </tr>
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
                    <th class="min-w-125px">Eform ID</th>
                    <th class="min-w-125px">Order No</th>
                    <th class="min-w-125px">Invoice</th>
                    <th class="min-w-125px">Name/company</th>
                    <th class="min-w-125px">Agent</th>
                    <th class="min-w-125px">Package</th>
                    <th class="min-w-125px">Status</th>
                    <th class="min-w-125px">Actions</th>
                </tr>
            </thead>
            <tbody class="fw-bold text-dark-600 text-center">
                <tr>
                    <td class="w-10px pe-4">
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <td class="text-center">123</td>
                    <td class="text-center">
                        34
                    </td>
                    <td class="text-center">
                        submitted
                    </td>
                    <td class="text-center">
                        company 1
                    </td>
                    <td class="text-center">
                        Mr.John
                    </td>
                    <td class="text-center">
                        100 home
                    </td>
                    <td class="text-center">
                        <div class="badge badge-light-danger">Completed</div>
                    </td>
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
                                <a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="w-10px pe-4">
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <td class="text-center">123</td>
                    <td class="text-center">
                        34
                    </td>
                    <td class="text-center">
                        submitted
                    </td>
                    <td class="text-center">
                        company 1
                    </td>
                    <td class="text-center">
                        Mr.John
                    </td>
                    <td class="text-center">
                        100 home
                    </td>
                    <td class="text-center">
                        <div class="badge badge-light-danger">Completed</div>
                    </td>
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
                                <a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="w-10px pe-4">
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <td class="text-center">123</td>
                    <td class="text-center">
                        34
                    </td>
                    <td class="text-center">
                        submitted
                    </td>
                    <td class="text-center">
                        company 1
                    </td>
                    <td class="text-center">
                        Mr.John
                    </td>
                    <td class="text-center">
                        100 home
                    </td>
                    <td class="text-center">
                        <div class="badge badge-light-danger">Completed</div>
                    </td>
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
                                <a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                    <tr>
                    <td class="w-10px pe-4">
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <td class="text-center">123</td>
                    <td class="text-center">
                        34
                    </td>
                    <td class="text-center">
                        submitted
                    </td>
                    <td class="text-center">
                        company 1
                    </td>
                    <td class="text-center">
                        Mr.John
                    </td>
                    <td class="text-center">
                        100 home
                    </td>
                    <td class="text-center">
                        <div class="badge badge-light-danger">Completed</div>
                    </td>
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
                                <a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="w-10px pe-4">
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <td class="text-center">123</td>
                    <td class="text-center">
                        34
                    </td>
                    <td class="text-center">
                        submitted
                    </td>
                    <td class="text-center">
                        company 1
                    </td>
                    <td class="text-center">
                        Mr.John
                    </td>
                    <td class="text-center">
                        100 home
                    </td>
                    <td class="text-center">
                        <div class="badge badge-light-danger">Completed</div>
                    </td>
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
                                <a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</main>
@endsection
@section('scripts')
<script>
    $(document).on('click', '#residential_button', function() {
        $('#category_value').val('residential');
        $('.category_active').removeClass('category_active');
        $(this).addClass('category_active');
    })
    $(document).on('click', '#business_button', function() {
        $('#category_value').val('business');
        $('.category_active').removeClass('category_active');
        $(this).addClass('category_active');
    })
</script>
@endsection