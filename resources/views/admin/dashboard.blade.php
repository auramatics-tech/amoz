@extends('admin.layouts.master')
@section('content')
    <!--begin::Toolbar-->
    <div class="container" id="">
        <div class="px-10 py-10">
            <h1 class="py-6">Dashboard</h1>
            <div class="row py-4">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="bg-white border rounded p-3 h-100">
                        <p>Total Users</p>
                        <h1 class="py-1"><b>123</b></h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class=" bg-white border rounded p-3 h-100">
                        <p>In Progress</p>
                        <h1 class="py-1"><b>12</b></h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="bg-white border rounded p-3 h-100">
                        <p>Completed</p>
                        <h1 class="pt-2"><b>3,137</b></h1>
                        <p> <span class="text-success">23% <i class="fa fa-arrow-up text-success" aria-hidden="true"></i></span> than the last year </p>
                    </div>
                </div>
            </div>
            <div class="pt-5">
                <div class="bg-white rounded border p-4">
                    <div class="d-flex justify-content-between">
                        <p><b>Total Sales</b></p>
                        <div>
                            <select name="cars" id="cars" class="border none bg-white">
                                <option value="">Last 12 Months</option>
                                <option value="">Jan</option>
                                <option value="">Feb</option>
                                <option value="">Mar</option>
                                <option value="">Apr</option>
                                <option value="">May</option>
                                <option value="">June</option>
                                <option value="">July</option>
                                <option value="">Aug</option>
                                <option value="">Sept</option>
                                <option value="">Oct</option>
                                <option value="">Nov</option>
                                <option value="">Dec</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <canvas id="line-chart" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--end::Toolbar-->
<!--begin::Post-->

<!--end::Post-->
</div>
@endsection
@section('scripts')
<script>
    new Chart(document.getElementById("line-chart"), {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"],
            datasets: [{
                data: [86, 114, 106, 106, 107, 111, 133, 221, 783, 2478],
                label: "Completed",
                backgroundColor: "green",
                fill: false
            }, {
                data: [282, 350, 411, 502, 635, 809, 947, 1402, 3700, 5267],
                label: "Processing",
                backgroundColor: "blue",
                fill: false
            },]
        },
    
    });
</script>
@endsection