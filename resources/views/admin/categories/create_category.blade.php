@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
    <div class="d-flex justify-content-center">
    <form action="{{ route('add_category_details')}}" method="POST" id="catform" class="form p-5 bg-white w-50">
    @csrf
    <input type="hidden" name="id" value="{{ isset($categories->id) ? $categories->id : ''}}">
        <div class="d-flex flex-column mb-8 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Category name</span>
             
            </label>
            <input type="text" class="form-control form-control-solid"  name="cat_name" value="{{ isset($categories->cat_name) ? $categories->cat_name : ''}}" />
            @error('cat_name')
				{{$message}}
			@enderror
        </div>
        <div class="d-flex justify-content-between">
        
        <button type="submit" id="catform" class="btn btn-primary">
            <span class="indicator-label">Cancel</span>
        </button>
        
        <button type="submit" id="catform" class="btn btn-primary">
            <span class="indicator-label">Save</span>
        </button>
        </div>
    </form>
    </div>
</main>
@endsection
@section('script')
@endsection