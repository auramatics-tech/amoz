@extends('admin.layouts.master')
@section('css')
<style>
    table,thead,tr,th{
        padding: 20px;
    }
</style>
@endsection
@section('content')
<main class="px-5 py-4">
<table class="table bg-white px-5">
  <thead>
    <tr>
      <th scope="col">s.no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</main>

						@endsection
						@section('script')
						@endsection