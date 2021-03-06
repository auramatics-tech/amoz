@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
<div class="mb-10 text-left">
			<h1 class="mb-3">Profile</h1>
		</div>
<form action="" method="" id="" class="form p-5 bg-white" action="#">
		<div class="mb-10 text-left">
			<h5 class="mb-3">User Details</h5>
		</div>
		<div class="d-flex flex-column mb-8 fv-row">
			<label class="d-flex align-items-center fs-6 fw-bold mb-2">
				<span class="required">Full name</span>
			</label>
			<input type="text" class="w-lg-50 form-control form-control-solid" placeholder="Enter name" name="" />
		</div>
		<div class="d-flex flex-column mb-8 fv-row">
			<label class="d-flex align-items-center fs-6 fw-bold mb-2">
				<span class="required">Email</span>
			</label>
			<input type="email" class="w-lg-50 form-control form-control-solid" placeholder="Enter email" name="" />
		</div>
		<div class="d-flex flex-column mb-8 fv-row">
			<label class="d-flex align-items-center fs-6 fw-bold mb-2">
				<span class="required">Password</span>
			</label>
			<input type="password" class="w-lg-50 form-control form-control-solid" placeholder="Enter password" name="" />
		</div>
		<div class="text-left">
			<button type="submit" id="" class="btn btn-primary">
				<span class="indicator-label">Save</span>
			</button>
		</div>
	</form>
</main>

@endsection
@section('script')
@endsection