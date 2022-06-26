@extends('tracing.logreglayout')

@section('content')


    <x-jet-authentication-card>
        <x-slot name="logo">
          
        </x-slot>
        <x-jet-validation-errors class="mb-4" />

@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
        <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                      <form method="POST" action="{{ route('login') }}" class="login100-form validate-form flex-sb flex-w">
                 @csrf

             <span class="login100-form-title p-b-32" style="font-weight:bolder">
						ACCOUNT LOGIN
					</span>

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
					
					<div class="flex-sb-m w-full p-b-48">
						<div>
						<a class="txt3" href="{{ route('register') }}">
                    Create Account
                </a>
						</div>

					<div>
                         @if (Route::has('password.request'))
                         <a class="txt3" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                              </a>
                         @endif
						</div>

</div>

                        <div class="container-login100-form-btn">
						<button class="login100-form-btn">
                    {{ __('Login') }}
                    </button>
					</div>
                
            </div>
        </form>
        </div>
		</div>
	</div>
	
    </x-jet-authentication-card>

@endsection