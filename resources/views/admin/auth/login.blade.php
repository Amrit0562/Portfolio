<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Amrit Bhandari">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ '/assets/images/favicon/fav.png' }}">
    <title>portfolio @yield('title')</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}?v={{ time() }}">
    <!-- plugin css -->
    <link href="{{ asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body class="relative flex flex-col">
    <div class="relative flex flex-col items-center justify-center mt-10">
        <div class="flex justify-center">
            <div class="p-4 mx-auto" style="width: 300px;">
                <div class="card overflow-hidden"
                    style="border: groove; box-shadow: 0px 4px 15px rgba(157, 186, 231, 0.8);">
                    <!-- Logo -->
                    <div class="">
                        <div class="flex font-bold italic justify-center text-3xl text-primary p-3"
                            style="font-family: 'Dancing Script', cursive;">
                            Portfolio
                        </div>

                    </div>
                    <hr>

                    <div class="px-6">
                        <div class="text-center mx-auto w-3/4">
                            <h4 class="underline text-dark/70 text-center text-lg font-bold dark:text-light/80 mb-3">
                                Admin Login
                            </h4>
                        </div>

                        <form role="form" method="POST" action="{{ route('admin.store') }}">
                            @csrf
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="mb-2" for="email">Email<span class="text-danger">*</span></label>
                                <input type="text" id="email" class="form-input" name="email"
                                    autocomplete="email" value="{{ old('email') }}" placeholder="Email" required>
                                @error('email')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label class="mb-2" for="password">Password<span class="text-danger">*</span></label>
                                <input type="password" id="password" class="form-input" name="password"
                                    autocomplete="new-password" placeholder="Password" required>
                                @error('password')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
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
                </div>
                <!-- end card -->
            </div>
        </div>
    </div>
    @include('admin.message.flash')

</body>

</html>
