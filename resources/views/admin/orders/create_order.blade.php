@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-auto">

<form action="" method="" id="" class="form px-5 bg-white" action="#">
							<div class="mb-10 text-left">
								<h1 class="mb-3">Create Order</h1>
							</div>
							<div>
        <label><input type="radio" name="colorRadio" value="red"> residential</label>
        <label><input type="radio" name="colorRadio" value="green"> business</label>
        <!-- <label><input type="radio" name="colorRadio" value="blue"> </label> -->
    </div>
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

						@endsection
						@section('script')
						<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>
						@endsection