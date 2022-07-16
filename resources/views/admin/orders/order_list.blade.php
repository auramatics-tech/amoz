@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
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
           <a href="{{route('create_order')}}"><button type="submit" id="" class="d-flex btn btn-primary ">
                <span class="indicator-label">New Order</span>
            </button></a> 
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
    <div class="form px-5 py-5 bg-white rounded">
        <h5 class="py-4">Orders</h5>
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
    </div>
</main>
@endsection
@section('script')

@endsection