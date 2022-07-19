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

    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Select Manager</strong></li>
                                    <li id="personal"><strong>Select Orders</strong></li>
                                    <li id="payment"><strong>Submit</strong></li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <!-- <h2 class="fs-title">Account Information</h2>
                                    <input type="email" name="email" placeholder="Email Id"/>
                                    <input type="text" name="uname" placeholder="UserName"/>
                                    <input type="password" name="pwd" placeholder="Password"/>
                                    <input type="password" name="cpwd" placeholder="Confirm Password"/> -->
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Personal Information</h2>
                                        <input type="text" name="fname" placeholder="First Name" />
                                        <input type="text" name="lname" placeholder="Last Name" />
                                        <input type="text" name="phno" placeholder="Contact No." />
                                        <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Payment Information</h2>
                                        <div class="radio-group">
                                            <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                            <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div>
                                            <br>
                                        </div>
                                        <label class="pay">Card Holder Name*</label>
                                        <input type="text" name="holdername" placeholder="" />
                                        <div class="row">
                                            <div class="col-9">
                                                <label class="pay">Card Number*</label>
                                                <input type="text" name="cardno" placeholder="" />
                                            </div>
                                            <div class="col-3">
                                                <label class="pay">CVC*</label>
                                                <input type="password" name="cvcpwd" placeholder="***" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <label class="pay">Expiry Date*</label>
                                            </div>
                                            <div class="col-9">
                                                <select class="list-dt" id="month" name="expmonth">
                                                    <option selected>Month</option>
                                                    <option>January</option>
                                                    <option>February</option>
                                                    <option>March</option>
                                                    <option>April</option>
                                                    <option>May</option>
                                                    <option>June</option>
                                                    <option>July</option>
                                                    <option>August</option>
                                                    <option>September</option>
                                                    <option>October</option>
                                                    <option>November</option>
                                                    <option>December</option>
                                                </select>
                                                <select class="list-dt" id="year" name="expyear">
                                                    <option selected>Year</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>You Have Successfully Signed Up</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
<script>
    $(document).ready(function() {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;

        $(".next").click(function() {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $('.radio-group .radio').click(function() {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".submit").click(function() {
            return false;
        })

    });
</script>
@endsection