@extends('tracing.logreglayout')

@section('content')

    <x-jet-authentication-card>
        <x-slot name="logo">
           
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                    
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <span class="txt1 p-b-11">
						Name
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
						<span class="focus-input100"></span>
					</div>
            <span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="email" name="email" required autofocus >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" required autocomplete="current-password" >
						<span class="focus-input100"></span>
					</div>
                    <span class="txt1 p-b-11">
					Confirm	Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password_confirmation" required autocomplete="new-password" >
						<span class="focus-input100"></span>
					</div>


            <div class="alregaccount">
                <a class="txt3" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
</div>
                <div class="container-login100-form-btn">
						<button class="login100-form-btn">
                    {{ __('Register') }}
                    </button>
					</div>
            </div>
        </form>
        </div>
		</div>
	</div>
    </x-jet-authentication-card>

    @endsection