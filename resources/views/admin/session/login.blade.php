@extends('layouts.guest')
@section('guest-contents')
    <div class="relative flex flex-col items-center justify-center">
        <div class="flex justify-center">
            <div class="max-w-2xl p-4 mx-auto">
                <div class="card overflow-hidden">

                    <!-- Logo -->
                    <div class="bg-primary">
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/images/logo-dark.png') }}" alt="logo" class="h-20">
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="text-center mx-auto w-3/4">
                            <h4 class="text-dark/70 text-center text-lg font-bold dark:text-light/80 mb-2">Log In</h4>

                        </div>

                        <form role="form" method="POST" action="{{ route('session.store') }}">
                            @csrf

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="mb-2" for="email">Email</label>
                                <input type="text" id="email" class="form-input" name="email" autocomplete="email"
                                    value="{{ old('email') }}" placeholder="Email" required>
                                @error('email')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label class="mb-2" for="password">Password</label>
                                <div class="flex items-center">
                                    <input type="password" id="password" class="form-input" name="password"
                                        autocomplete="new-password" placeholder="Password" required>
                                </div>
                                @error('password')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Remember Me -->

                            <div class="flex items-center gap-2 mb-3">
                                <input type="checkbox" class="form-checkbox rounded border border-gray-200" id="rememberMe"
                                    name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="text-gray-800 text-sm font-medium inline-block" for="rememberMe">Remember
                                    me</label>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center mb-4">
                                <button class="px-3 py-2 rounded bg-primary text-white text-base w-fit-content"
                                    type="submit">
                                    <i class="mgc_add_line"></i>
                                    Log In
                                </button>
                            </div>

                        </form>
                    </div>
                    <div class="text-center mb-4">
                        <p class="text-muted m-2">Don't have account?
                            <a href="{{ route('register') }}"
                                class="text-muted ms-1 link-offset-3 underline underline-offset-4">
                                <b>Register here</b>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- end card -->
            </div>
        </div>
    </div>
@endsection
