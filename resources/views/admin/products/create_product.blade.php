@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-5 py-4">
    <form action="" method="" id="" class="form p-5 bg-white w-50 mx-auto" action="#">
        <div class="d-flex flex-column mb-8 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Product name</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter name" name="name" />
        </div>
        <div class="d-flex flex-column mb-8 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Price</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter email" name="email" />
        </div>
        <div class="d-flex flex-column mb-8 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Remarks</span>
            </label>
        <textarea name="" id="" cols="" rows="10" class="w-100 form-control form-control-solid"></textarea>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" id="" class="btn btn-primary">
                <span class="indicator-label">Cancel</span>
            </button>
            <button type="submit" id="" class="btn btn-primary">
                <span class="indicator-label">Save</span>
            </button>
        </div>
    </form>
</main>
@endsection
@section('script')
@endsection