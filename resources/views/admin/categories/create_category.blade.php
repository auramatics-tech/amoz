@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
    <div>
    <form action="" method="" id="" class="form p-5 bg-white" action="#">
        <div class="d-flex flex-column mb-8 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Category name</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="name" />
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
    </div>
</main>
@endsection
@section('script')
@endsection