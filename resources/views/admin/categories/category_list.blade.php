@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
    <div class="mb-10 mt-5 text-left d-flex justify-content-between">
        <h1 class="mb-3">Categories</h1>
    <a href="{{route('create_category')}}"><button type="submit" id="" class="btn btn-primary">
            <span class="indicator-label">Create Ctaegory</span>
        </button></a>
    </div>
    <div class="form p-5 bg-white rounded">
        <table>
            <tr>
                <th>S.no</th>
                <th>Name</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>unifi 100 mbps</td>
                <td>100</td>
                <td>20%</td>
            </tr>
            <tr>
                <td>unifi 300 mbps</td>
                <td>400</td>
                <td>28%</td>
            </tr>
            <tr>
                <td>unifi 500 mbps</td>
                <td>200</td>
                <td>10%</td>
            </tr>
            <tr>
                <td>unifi bizz 100</td>
                <td>100</td>
                <td>22%</td>
            </tr>
            <tr>
                <td>unifi bizz 300</td>
                <td>500</td>
                <td>10%</td>
            </tr>
        </table>
    </div>
</main>

@endsection
@section('script')
@endsection