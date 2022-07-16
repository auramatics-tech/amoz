@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
    <div class="form p-5 bg-white rounded">
    <form class="p-3">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Joe Smith">
  </div>
  
  <div class="form-group">
    <label for="seeAnotherField">Do You Want To See Another Field?</label>
    <select class="form-control" id="seeAnotherField">
          <option value="no">No Way.</option>
          <option value="yes">Absolutely!</option>
    </select>
  </div>
  
  <div class="form-group" id="otherFieldDiv">
    <label for="otherField">Here you go!</label>
    <select class="form-control" id="otherField">
      <option>Yay</option>
      <option>Woo</option>
      <option>Hazah</option>
      <option>Yipee</option>
      <option>Hoorah</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="seeAnotherFieldGroup">Do You Want To See Another Group of Fields?</label>
    <select class="form-control" id="seeAnotherFieldGroup">
          <option value="no">Not Particularly.</option>
          <option value="yes">I Guess!</option>
    </select>
  </div>
  
  <div class="form-group" id="otherFieldGroupDiv">
    <div class="row">
      <div class="col-6">
        <label for="otherField1">Group: Heres One!</label>
        <input type="text" class="form-control w-100" id="otherField1">
      </div>
      <div class="col-6">
        <label for="otherField2">Group: Another One!</label>
        <input type="text" class="form-control w-100" id="otherField2">
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label for="comments">Comments/Questions</label>
    <textarea class="form-control" id="comments" rows="3"</textarea><button class="btn btn-primary" type="submit">Submit</button>

<h2>CSS</h2>

<p>The CSS here makes the form centered and look nice on desktop in case you wish to download.</p>
<textarea class="codemirror-monokai">form {
  max-width: 900px;
  display: block;
  margin: 0 auto;
}
    </div>
</main>
@endsection
@section('script')
<script>
  $("#seeAnotherField").change(function() {
  if ($(this).val() == "yes") {
    $('#otherFieldDiv').show();
    $('#otherField').attr('required', '');
    $('#otherField').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldDiv').hide();
    $('#otherField').removeAttr('required');
    $('#otherField').removeAttr('data-error');
  }
});
$("#seeAnotherField").trigger("change");

$("#seeAnotherFieldGroup").change(function() {
  if ($(this).val() == "yes") {
    $('#otherFieldGroupDiv').show();
    $('#otherField1').attr('required', '');
    $('#otherField1').attr('data-error', 'This field is required.');
    $('#otherField2').attr('required', '');
    $('#otherField2').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldGroupDiv').hide();
    $('#otherField1').removeAttr('required');
    $('#otherField1').removeAttr('data-error');
    $('#otherField2').removeAttr('required');
    $('#otherField2').removeAttr('data-error');
  }
});
$("#seeAnotherFieldGroup").trigger("change");
</script>
@endsection