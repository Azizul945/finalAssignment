<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Password Reset</title>
  
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="d-flex align-items-center min-vh-100">
    <form method="POST" action="{{ route('password.email') }}" class="w-100">
        @csrf

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6">
                    <div class="card animated fadeIn w-100 p-4">
                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">EMAIL ADDRESS</h4>
                            <br/>
                            <div class="mb-3">
                                <label for="email" class="form-label">Your email address</label>
                                <input id="email" placeholder="User Email" class="form-control" type="email" name="email" :value="old('email')" required autofocus>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="d-flex justify-content-end">
                                <x-primary-button class="btn btn-primary">
                                    {{ __('Email Password Reset Link') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
