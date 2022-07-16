@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
<div class="p-5 bg-white">
    <h1 class="py-4">
        Export
    </h1>
	<div class="pt-5 d-flex pb-10">
        <div>
        <p class="fs-6 fw-bold">Include</p>
        </div>
     <div class="mt-1 ml-left">
     <input type="radio" id="" name="" value="">
  <label for="">All</label>
  <input type="radio" id="" name="" value="" class="ml-left">
  <label for="">Selected</label> 
     </div> 
     </div>
     <div class="mt-1 mt-10 si_icons_margin_60">
     <input type="radio" id="" name="" value="">
  <label for="">Invoice no</label>
  <input type="radio" id="" name="" value="" class="ml-left">
  <label for="">Date</label> 
     </div> 
     <div class="mt-1 si_icons_margin_60 mt-5">
     <input type="radio" id="" name="" value="">
  <label for="">Client Name</label>
  <input type="radio" id="" name="" value="" class="ml-left">
  <label for="">Order QTY</label> 
     </div> 
     <div class="mt-1 si_icons_margin_60 mt-5">
     <input type="radio" id="" name="" value="">
  <label for="">Status</label> 
     </div>
</div>
</main>

@endsection
@section('script')
@endsection