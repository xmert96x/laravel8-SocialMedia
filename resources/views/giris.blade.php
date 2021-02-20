<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>bs4 beta login - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            margin-top: 20px;
            background: #eee;
        }

        .container {
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
            width: 100%;
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }


        .card-columns .card {
            margin-bottom: 0.75rem;
        }

        @media (min-width: 576px) {
            .card-columns {
                column-count: 3;
                column-gap: 1.25rem;
            }

            .card-columns .card {
                display: inline-block;
                width: 100%;
            }
        }

        .text-muted {
            color: #9faecb !important;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        .mb-3 {
            margin-bottom: 1rem !important;
        }

        .input-group {
            position: relative;
            display: flex;
            width: 100%;
        }
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group mb-0">
                <div class="card p-4">
                    <div class="card-body">
                        <h1>Giriş Yap</h1>
                        <p class="text-muted">Hesabınıza giriş yapın
                        </p>

                        <x-slot name="logo">

                        </x-slot>

                        <x-jet-validation-errors class="mb-4"/>

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <x-jet-input id="email" placeholder="Email" class="form-control" type="email"
                                             name="email" :value="old('email')" required autofocus/>
                            </div>

                            <div class="input-group mb-4">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <x-jet-input id="password" placeholder="Şifre" class="form-control" type="password"
                                             name="password" required autocomplete="current-password"/>
                            </div>

                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Beni Hatırla') }}</span>
                                </label>
                            </div>


                            <div class="row" style="justify-content:space-between">
                                <x-jet-button class="btn btn-primary px-4">
                                    {{ __('Giriş Yap') }}
                                </x-jet-button>


                                @if (Route::has('password.request'))
                                    <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                        {{ __('Şifremi Unuttum') }}
                                    </a>
                            @endif


                        </form>
                    </div>
                </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="text-align: justify">
                <div class="border border-0 border-primary "
                     style="padding-left: 10px; padding-right: 10px; text-align: justify">
                    <div class=" text-center">
                        <h2>Üye ol</h2>
                        <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button style="cursor: pointer" onclick="window.location.href='/register'" type="button"
                                class="btn btn-primary active mt-3">
                            Şimdi üye Ol!
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>
 
