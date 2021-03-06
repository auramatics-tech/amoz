@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="d-flex justify-content-center m-lg-auto">
<div class="mb-10 text-center">
			<h1 class="mb-3">Portal login</h1>
		</div>
	<form action="" method="" id="" class="form p-5 bg-white rounded w-25" action="#">
		<!--begin::Heading-->
	<div class="d-flex flex-column mb-8 fv-row">
			<label class="d-flex align-items-center fs-6 fw-bold mb-2">
				<span class="required">Email</span>
			</label>
			<input type="email" class="form-control form-control-solid" placeholder="Enter name" name="email" />
		</div>
		<div class="d-flex flex-column mb-8 fv-row">
			<label class="d-flex align-items-center fs-6 fw-bold mb-2">
				<span class="required">Password</span>
			</label>
			<input type="password" class="form-control form-control-solid" placeholder="Enter email" name="password" />
		</div>
		<div class="text-center">
			<button type="submit" id="" class=" w-100 btn btn-primary">
				<span class="indicator-label">Login</span>
			</button>
		</div>
	</form>
</main>
@endsection
@section('script')
@endsection