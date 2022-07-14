@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-5 py-4">
    <div class="mb-10 mt-5 d-flex si_margin_left justify-content-around">
        <button type="submit" id="" class="d-flex btn btn-primary ">
            <span class="indicator-label">New Order</span>
        </button>
        <button type="submit" id="" class="d-flex btn btn-primary ">
            <span class="indicator-label">Edit Order</span>
        </button>
        <button type="submit" id="" class="d-flex btn btn-primary ">
            <span class="indicator-label">Submit Order</span>
        </button>
    </div>
    <div class="form p-5 bg-white rounded">
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