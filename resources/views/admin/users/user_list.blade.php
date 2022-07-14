@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-5 py-4">
    <div class="mb-10 mt-5">
        <button type="submit" id="" class="d-flex btn btn-primary si_margin_left">
            <span class="indicator-label">Add User</span>
        </button>
    </div>
    <div class="form p-5 bg-white rounded">
        <h5 class="py-4">User Overview</h5>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
            <tr>
                <td>simi</td>
                <td>simi@gmail.com</td>
                <td>admin</td>
            </tr>
            <tr>
                <td>pllu</td>
                <td>sisdafsi@gmail.com</td>
                <td>agent</td>
            </tr>
            <tr>
                <td>ram</td>
                <td>sadad@gmail.com</td>
                <td>accounts</td>
            </tr>
            <tr>
                <td>sham</td>
                <td>hjkj@gmail.com</td>
                <td>manager</td>
            </tr>
            <tr>
                <td>dsagdh</td>
                <td>ouyut@gmail.com</td>
                <td>agent</td>
            </tr>
        </table>
    </div>
</main>

@endsection
@section('script')
@endsection