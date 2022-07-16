@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
	<div class="mb-10 text-left">
		<h1 class="mb-3">Create Order</h1>
	</div>
	<div class="d-flex">
		<label class="fs-6 fw-bold" id="div1"><input type="radio" name="yesno" id="yesCheck"> Residential</label>
		<label class="fs-6 fw-bold ml-left" id="div2"><input type="radio" name="yesno" class="div1" id="noCheck"> Business</label>
	</div>
	<div style="display:none;" id='form1' name=''>
		<main class="px-auto py-10">
			<form action="" method="" id="" class="form p-5 bg-white rounded" action="#">
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">EForm ID</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Order no</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="required fs-6 fw-bold mb-2">Product</label>
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
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Customer/Company name</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">IC no/ BRN no</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Contact no</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
				</div>
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Email</span>
						</label>
						<input type="email" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Service ID</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
				</div>
				<div class="d-flex flex-column mb-8 fv-row">
					<label class="d-flex align-items-center fs-6 fw-bold mb-2">
						<span class="required">Address</span>
					</label>
					<textarea name="" id="" cols="" rows="6" class="w-100 form-control form-control-solid"></textarea>
				</div>
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Long</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Lat</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="required fs-6 fw-bold mb-2">Status</label>
						<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select" name="team_leader">
							<option value="">Processing</option>
							<option value="1">Port full</option>
							<option value="2">Missing unit</option>
							<option value="3">Cancelled</option>
						</select>
					</div>
				</div>

				<div class="mb-10 text-left mt-4">
					<h2 class="mb-3">Director details</h2>
				</div>
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Director name</span>
						</label>
						<input type="file" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Director IC</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
				</div>
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Upload</span>
						</label>
						<input type="file" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Remarks</span>
						</label>
						<textarea name="" id="" cols="" rows="5" class="form-control form-control-solid"></textarea>
					</div>
				</div>
				<div class="text-left">
					<button type="submit" id="" class="btn btn-primary">
						<span class="indicator-label">Created Order</span>
					</button>
				</div>
			</form>
		</main>
	</div>
	<div style="display:none;" id='form2' name=''>
		<main class="px-auto py-10">
			<form action="" method="" id="" class="form p-5 bg-white rounded" action="#">
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">EForm ID</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Order no</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="required fs-6 fw-bold mb-2">Product</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
				</div>
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Customer/Company name</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">IC no/ BRN no</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Contact no</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
				</div>
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Email</span>
						</label>
						<input type="email" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Service ID</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
				</div>
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Address</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">State</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Postcode</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
				</div>
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Long</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Lat</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" <label class="required fs-6 fw-bold mb-2">Status</label>
						<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select" name="team_leader">
							<option value="">Processing</option>
							<option value="1">Port full</option>
							<option value="2">Missing unit</option>
							<option value="3">Cancelled</option>
						</select>
					</div>
				</div>

				<div class="mb-10 text-left mt-4">
					<h2 class="mb-3">Director details</h2>
				</div>
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Director name</span>
						</label>
						<input type="file" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Director IC</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
				</div>
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Upload</span>
						</label>
						<input type="file" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Remarks</span>
						</label>
						<textarea name="" id="" cols="" rows="5" class="form-control form-control-solid"></textarea>
					</div>
				</div>
				<div class="text-left">
					<button type="submit" id="" class="btn btn-primary">
						<span class="indicator-label">Created Order</span>
					</button>
				</div>
			</form>
		</main>
	</div>
	<div id='form3' name=''>
		<main class="px-auto py-10">
			<form action="" method="" id="" class="form p-5 bg-white rounded" action="#">
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">EForm ID</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Order no</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="required fs-6 fw-bold mb-2">Customer/Company name</label>
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
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">IC no/ BRN no</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Address</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Email</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
				</div>
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Contact no</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Service ID</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="required fs-6 fw-bold mb-2">Product</label>
						<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select" name="team_leader">
							<option value="">Select product...</option>
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
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Long</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Lat</span>
						</label>
						<input type="text" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="required fs-6 fw-bold mb-2">Status</label>
						<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select" name="team_leader">
							<option value="">Processing</option>
							<option value="1">Port full</option>
							<option value="2">Missing unit</option>
							<option value="3">Cancelled</option>
						</select>
					</div>
				</div>
				<div class="row g-9 mb-8">
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Upload</span>
						</label>
						<input type="file" class="form-control form-control-solid" placeholder="" name="" />
					</div>
					<div class="col-md-4 fv-row">
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Remarks</span>
						</label>
						<textarea name="" id="" cols="" rows="5" class="form-control form-control-solid"></textarea>
					</div>
				</div>
				<div class="text-left">
					<button type="submit" id="" class="btn btn-primary">
						<span class="indicator-label">Created Order</span>
					</button>
				</div>
			</form>
		</main>
	</div>
</main>

@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
	console.log("here");

	$(document).on('click', '#div1', function() {
		$('#form1').show();
		$('#form2').hide();
		$('#form3').hide();
	})
	$(document).on('click', '#div2', function() {
		$('#form2').show();
		$('#form1').hide();
		$('#form3').hide();
	})
</script>
@endsection