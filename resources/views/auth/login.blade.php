{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}
@extends('admin.layouts.master')
@section('css')
<style>
	/* .aside-enabled.aside-fixed .wrapper {
    padding-left: 0px !important;
}
.header-fixed.toolbar-fixed .wrapper {
    padding-top: auto !important;
} */
</style>
@endsection

@section('content')
<main class="d-flex justify-content-center m-lg-auto w-100">
	<form method="POST" id="" class="form p-5 bg-white rounded" action="{{ route('login') }}">
    @csrf
		<!--begin::Heading-->
		<div class="mb-10 text-center">
			<h1 class="mb-3">Portal login</h1>
		</div>
		<div class="d-flex flex-column mb-8 fv-row">
			<label class="d-flex align-items-center fs-6 fw-bold mb-2">
				<span class="required">Email</span>
			</label>
            <input id="email" type="email" class="form-control form-control-solid @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
		<div class="d-flex flex-column mb-8 fv-row">
			<label class="d-flex align-items-center fs-6 fw-bold mb-2">
				<span class="required">Password</span>
			</label>
            <input id="password" type="password" class="form-control form-control-solid @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
		
		</div>
		<div class="text-center">
			<button type="submit" id="" class=" w-100 btn btn-primary">
				<span class="indicator-label">Login</span>
			</button>
		</div>
	</form>
</main>
@endsection
@section('script')
@endsection
