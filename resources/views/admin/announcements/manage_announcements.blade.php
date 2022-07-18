@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
    <div class="mb-10 mt-5 text-left d-flex justify-content-between">
        <h1 class="mb-3">Announcements</h1>
    </div>
    <div class="form p-5 bg-white rounded card-body pt-0">
        <table class="table align-middle table-row-dashed fs-6 gy-5 table-responsive" id="kt_customers_table">
            <thead>
                <tr class="text-start text-dark-400 fw-bolder fs-7 text-uppercase gs-0 text-center">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                        </div>
                    </th>
                    <th class="min-w-125px">S.no </th>
                    <th class="min-w-125px">Description</th>
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
                    <td class="text-center">1</td>
                    <td>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, mollitia corrupti! Labore aliquid neque omnis vitae quo est consequuntur harum, ratione, excepturi laudantium nam iusto quod sed corrupti natus tempore!
                    </td>
                    <td class="text-center">
                        <div class="badge badge-light-danger">Active</div>
                    </td>
                    <td class="text-end pe-4">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                </svg>
                            </span>
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                    <td class="text-center">2</td>
                    <td>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, mollitia corrupti! Labore aliquid neque omnis vitae quo est consequuntur harum, ratione, excepturi laudantium nam iusto quod sed corrupti natus tempore!
                    </td>
                    <td class="text-center">
                        <div class="badge badge-light-danger">Active</div>
                    </td>
                    <td class="text-end pe-4">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                </svg>
                            </span>
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                    <td class="text-center">3</td>
                    <td>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, mollitia corrupti! Labore aliquid neque omnis vitae quo est consequuntur harum, ratione, excepturi laudantium nam iusto quod sed corrupti natus tempore!
                    </td>
                    <td class="text-center">
                        <div class="badge badge-light-danger">Active</div>
                    </td>
                    <td class="text-end pe-4">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                </svg>
                            </span>
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                    <td class="text-center">4</td>
                    <td>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, mollitia corrupti! Labore aliquid neque omnis vitae quo est consequuntur harum, ratione, excepturi laudantium nam iusto quod sed corrupti natus tempore!
                    </td>
                    <td class="text-center">
                        <div class="badge badge-light-danger">Active</div>
                    </td>
                    <td class="text-end pe-4">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                </svg>
                            </span>
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                    <td class="text-center">5</td>
                    <td>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, mollitia corrupti! Labore aliquid neque omnis vitae quo est consequuntur harum, ratione, excepturi laudantium nam iusto quod sed corrupti natus tempore!
                    </td>
                    <td class="text-center">
                        <div class="badge badge-light-danger">Active</div>
                    </td>
                    <td class="text-end pe-4">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                </svg>
                            </span>
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
@section('script')
@endsection