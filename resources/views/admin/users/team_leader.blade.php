@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
<form action="" method="" id="" class="form p-5 bg-white" action="#">
		<!--begin::Heading-->
		<div class="mb-10 text-left">
			<h1 class="mb-3">Users Details</h1>
		</div>
		<div class="d-flex flex-column mb-8 fv-row">
			<label class="d-flex align-items-center fs-6 fw-bold mb-2">
				<span class="required">Team leader location</span>
			</label>
			<input type="text" class="form-control form-control-solid" placeholder="Enter name" name="name" />
		</div>
		<div class="d-flex flex-column mb-8 fv-row">
			<label class="d-flex align-items-center fs-6 fw-bold mb-2">
				<span class="required">Email</span>
			</label>
			<input type="email" class="form-control form-control-solid" placeholder="Enter email" name="email" />
		</div>
		<div class="row g-9 mb-8">
			<div class="col-md-6 fv-row">
				<label class="required fs-6 fw-bold mb-2">Role</label>
				<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select role" name="role">
					<option value="">Select user...</option>
					<option value="1">Karina Clark</option>
					<option value="2">Robert Doe</option>
					<option value="3">Niel Owen</option>
					<option value="4">Olivia Wild</option>
					<option value="5">Sean Bean</option>
				</select>
			</div>
			<div class="col-md-6 fv-row">
				<label class="required fs-6 fw-bold mb-2">Manager</label>
				<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select" name="team_leader">
					<option value="">Select user...</option>
					<option value="1">Karina Clark</option>
					<option value="2">Robert Doe</option>
					<option value="3">Niel Owen</option>
					<option value="4">Olivia Wild</option>
					<option value="5">Sean Bean</option>
				</select>
			</div>
		</div>
		<div class="text-left">
			<button type="submit" id="" class="btn btn-primary">
				<span class="indicator-label">Created User</span>
			</button>
		</div>
	</form>
</main>

@endsection
@section('script')
@endsection