@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white text-center" style="background-color: #81bc89; font-size: 20px">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-1">
                            <div class="col mb-1">
                                <label for="firstname" class="col-md-4 col-form-label col-form-label-sm ">{{ __('First Name') }}</label>
                                <input id="firstname"type="text" class="form-control form-control-sm @error('firstname') is-invalid @enderror" placeholder="First name" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col mb-1">
                                <label for="lastname" class="col-md-5 col-form-label col-form-label-sm ">{{ __('Last Name') }}</label>
                                <input id="lastname" type="text" class="form-control form-control-sm @error('lastname') is-invalid @enderror" placeholder="Last name" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col mb-1">
                                <label for="email" class="col-md-2 col-form-label col-form-label-sm">{{ __('Email') }}</label>
                                <input id="email" type="text" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 

                            <div class="col mb-1">
                                <label for="roles" class="col-md-4 col-form-label col-form-label-sm pt=0">{{ __('Role') }}</label>
                                <select id="roles" class="form-select form-select-sm @error('roles') is-invalid @enderror" name="roles" required autocomplete="roles">
                                    <option selected hidden></option>
                                    <option>user</option>
                                    <option>admin</option>
                                </select>
                                @error('roles')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col mb-1">
                                <label class="col-md-3 col-form-label col-form-label-sm">{{ __('Gender') }}</label>
                                    <div class="col-md-5 col-form-label">
                                        <div id="gender" class="form check custom-radio form-control-sm custom-control-inline">
                                            <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" value="Male" id="male" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
                                            <label class="form-check-label" for="male">Male</label> &nbsp;&nbsp;
                                            <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" value="Female" id="female" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
    
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col mb-1">
                                <label for="password" class="col-md-2 col col-form-label col-form-label-sm">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col mb-1">
                            <label for="password-confirm" class="col-md-4 col-form-label col-form-label-sm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control form-control-sm" name="password_confirmation" required autocomplete="new-confirm password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection