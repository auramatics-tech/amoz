@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
	<form action="{{ route('add_user_details')}}" method="POST" id="myform" class="form p-5 bg-white" >
		<!--begin::Heading-->
		<div class="mb-10 text-left">
		@csrf
			<h1 class="mb-3">Users Details</h1>
			<input type="hidden" name="id" value="{{isset($user->id) ? $user->id : ''}}">
		</div>
		<div class="d-flex flex-column mb-8 fv-row">
			<label class="d-flex align-items-center fs-6 fw-bold mb-2">
				<span class="required">Full name</span>
			</label>
			<input type="text" class="form-control form-control-solid" placeholder="Enter name" name="name" value="{{ isset($user->name) ? $user->name :'' }}" />
			@error('name')
				{{$message}}
			@enderror
		</div>
		<div class="d-flex flex-column mb-8 fv-row">
			<label class="d-flex align-items-center fs-6 fw-bold mb-2">
				<span class="required">Email</span>
			</label>
			<input type="email" class="form-control form-control-solid" placeholder="Enter email" name="email" value="{{ isset($user->email) ? $user->email : '' }}"/>
			
			@error('email')
				{{$message}}
			@enderror
		</div>
		<div class="row g-9 mb-8">
			<div class="col-md-6 fv-row">
				<label class="required fs-6 fw-bold mb-2">Role</label>
				<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select role" name="role" id="role">
					<option value="">Select Role...</option>
					@if(count($roles))
					@foreach($roles as $role)
					<option @if(isset($user->role) && $user->role == $role->id) selected @endif value="{{$role->id}}">{{$role->name}}</option>
					@endforeach
					@endif
				</select>
			</div>
			<div class="col-md-6 fv-row" id="agent_leader_sec" @if(isset($user->team_leader)) style="display: block;" @else style="display: none;" @endif>
				<label class="required fs-6 fw-bold mb-2">Agent Team Leader</label>
				<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select" name="team_leader" id="team_leader">
					<option value="">Select Team Leader</option>
					@if(count($team_leaders))
					@foreach($team_leaders as $team_leader)
						<option @if(isset($user->team_leader) && $user->team_leader == $team_leader->id) selected @endif value="{{$team_leader->id}}">{{$team_leader->name}}</option>
					@endforeach
					@endif
				</select>
			</div>
			<div class="col-md-6 fv-row" id="manager_sec" @if(isset($user->manager))  style="display: block;" @else style="display: none;" @endif>
				<label class="required fs-6 fw-bold mb-2" >Manager</label>
				<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select" name="manager" id="manager">
					<option value="">Select Manager</option>
					@if(count($managers))
					@foreach($managers as $manager)
						<option @if(isset($user->manager) && $user->manager == $manager->id) selected @endif value="{{$manager->id}}">{{$manager->name}}</option>
					@endforeach
					@endif
				</select>
			</div>
		</div>
		<div class="row g-9 mb-8">
			<!-- <div class="col-md-6 fv-row">
				<label class="required fs-6 fw-bold mb-2">Accounts</label>
				<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select role" name="role">
					<option value="">Select user...</option>
					<option value="1">Karina Clark</option>
					<option value="2">Robert Doe</option>
					<option value="3">Niel Owen</option>
					<option value="4">Olivia Wild</option>
					<option value="5">Sean Bean</option>
				</select>
			</div> -->
			
		</div>
		<div class="text-left">
			<button type="submit" id="myform" class="btn btn-primary">
				<span class="indicator-label">Create User</span>
			</button>
		</div>
	</form>
</main>

@endsection
@section('scripts')
<script>
	$(document).on('change','#role',function(){
		var value = $(this).val();
		if(value == 4){
			$('#agent_leader_sec').hide();
			$('#team_leader').attr('required', false);
			$('#manager_sec').show();
			$('#manager').attr('required', true);
		}else if(value == 5){
			$('#manager_sec').hide();
			$('#agent_leader_sec').show();
			$('#manager').attr('required', false);
			$('#team_leader').attr('required', true);
		}else{
			$('#manager_sec').hide();
			$('#agent_leader_sec').hide();
			$('#manager').attr('required', false);
			$('#team_leader').attr('required', false);
		}
	});
</script>
@endsection