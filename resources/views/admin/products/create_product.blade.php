@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
    <div class="">
        <form action="{{route('add_product_details')}}" method="POST" id="" class="form p-5 bg-white " >
            @csrf
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <input type="hidden" name="id" value="{{ isset($product->id) ? $product->id : ''}}">
                    <span class="required">Product name</span>
                </label>
                
                <input type="text" class="form-control form-control-solid" placeholder="" name="pro_name" value="{{ isset($product->pro_name) ? $product->pro_name :'' }}"/>
                @error('pro_name')
				{{$message}}
			@enderror
            </div>
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="required">Price</span>
                </label>
                <input type="number" class="form-control form-control-solid"  name="pro_price" value="{{ isset($product->pro_price) ? $product->pro_price :'' }}" />
                @error('pro_price')
				{{$message}}
			@enderror
            </div>
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="required fs-6 fw-bold mb-2">Category</label>
                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select category" name="category">

					@if(count($categories))
					@foreach($categories as $category)
					<option @if(isset($product->$category) && $product->$category == $category->id) selected @endif value="{{$category->id}}">{{$category->cat_name}}</option>
					@endforeach
					@endif
                </select>
                @error('category')
				{{$message}}
			@enderror
            </div>
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="required">Remarks</span>
                </label>
                <textarea name="remarks" id="remarks" cols="" rows="10" class="w-100 form-control form-control-solid" >{{ isset($product->remarks) ? $product->remarks :'' }}</textarea>
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