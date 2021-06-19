<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
          content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png"/>

    <title>Giriş Yap | Admin</title>
    <link href="{{asset('assets/admin')}}/css/app.css" rel="stylesheet">
    <script src="{{asset('assets/admin')}}/js/vendor.js"></script>
    <script src="{{asset('assets/admin')}}/js/app.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">Hoşgeldiniz</h1>
                        <p class="lead">
                            Devam etmek için hesabınızda oturum açın
                        </p>
                    </div>

                    @php  Cache::put('page', 'admin'); @endphp

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <x-jet-validation-errors class="mb-4"/>

                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">E-posta</label>
                                        <input class="form-control form-control-lg" type="email" name="email"
                                               :value="old('email')" required autofocus
                                               placeholder="E-postanızı giriniz
"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Şifre</label>
                                        <input class="form-control form-control-lg" type="password"
                                               placeholder="Şifrenizi girin"
                                               name="password" required autocomplete="current-password
                                        "/>
                                        <small>
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">
                                                    {{ __('Şifremi Unuttum') }}
                                                </a>
                                            @endif
                                        </small>
                                    </div>
                                    <div>
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   value="remember-me"
                                                   checked>
                                            <span class="form-check-label">
            Bir dahaki sefere Beni hatırla
            </span>
                                        </label>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-lg btn-primary">Oturum Aç</button>
                                        <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>


</body>

</html>
