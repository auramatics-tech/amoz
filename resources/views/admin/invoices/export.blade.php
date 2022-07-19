@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
<h1 class="py-4">
               Export
          </h1>
     <div class="p-5 px-10 bg-white">
          <div class=" pt-5 d-flex pb-10">
               <h5 class="mt-1">Include</h5>
               <div class="si_icons_margin_60">
                    <div class="d-flex pb-10">
                         <div class=" d-flex">
                              <input type="radio" id="" name="" value="">
                                <p class="mt-1">All</p>
                         </div>
                         <div class="d-flex ml-left">
                                <input type="radio" id="" name="" value="">
                                <p class="mt-1">Selected</p>
                         </div>
                    </div>
                    <div class="d-flex pt-10">
                         <div class=" d-flex">
                              <input type="radio" id="" name="" value="">
                                <p class="mt-1">Invoice no</p>
                         </div>
                         <div class="d-flex ml-left">
                                <input type="radio" id="" name="" value="">
                                <p class="mt-1">Date</p>
                         </div>
                    </div>
                    <div class="d-flex py-3">
                         <div class=" d-flex">
                              <input type="radio" id="" name="" value="">
                                <p class="mt-1">Client Name</p>
                         </div>
                         <div class="d-flex ml-left">
                                <input type="radio" id="" name="" value="">
                                <p class="mt-1">Order QTY</p>
                         </div>
                    </div>
                    <div class="d-flex py-2">
                         <input type="radio" id="" name="" value="">
                           <p class="mt-1">Status</p>
                    </div>
               </div>
          </div>
     </div>
</main>

@endsection
@section('script')
@endsection