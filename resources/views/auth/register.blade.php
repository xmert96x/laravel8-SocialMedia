<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Register Form - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      crossorigin="anonymous">

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-5">
            <div class="card cardbox">
                <div class="card-header bg-success text-white text-center">Üye Ol</div>
                <div class="card-body">


                    <div class="form-group">
                        <x-jet-validation-errors class="mb-4"/>

                        <form id="login-nav" method="POST" action="{{ route('register') }}"  role="form" class="form" accept-charset="UTF-8">

                                @csrf
                            <div class="form-group">
                                <label class="sr-only">Ad</label>
                                <input type="text" id="reg_name" name="name" :value="old('name')" autofocus
                                       autocomplete="name" class="form-control"
                                       placeholder="Ad" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Soyad</label>
                                <input type="text" id="reg_surname" :value="old('name')" class="form-control"
                                       placeholder="Soyad" name="surname" :value="old('surname')" required autofocus
                                       autocomplete="surname">
                            </div>


                            <!-- password group -->
                            <div class="form-group">

                                <!-- password label -->
                                <label class="sr-only">Şifre</label>
                                <!-- password input -->
                                <div class="input-group">
                                    <input type="password" id="reg_userpassword"
                                           class="form-control" data-placement="bottom" data-toggle="popover"
                                           data-container="body"
                                           data-html="true" value="" placeholder="Şifre"   name="password" required autocomplete="new-password">

                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-append1"
                                                onclick="togglePassword()">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- password progresbar -->
                                <div class="progress mt-1" id="reg-password-strength">
                                    <div id="password-strength" class="progress-bar progress-bar-success"
                                         role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                         style="width:0%">
                                    </div>
                                </div>
                                <!-- password remember & results -->
                                <div class="help-block  text-right">
                                    <small><a href="#">Şifremi Unuttum</a></small>
                                    <span id="reg-password-quality" class="hide pull-left block-help">
                   <small>Password <span id="reg-password-quality-result"></span></small>
                  </span>
                                </div>
                                <!-- Password Rules -->
                                <div id="reg_passwordrules" class="hide password-rule mt-2"><small>

                                        <ul class="list-unstyled">
                                            <li class="">
                                                <span class="eight-character"><i class="fa fa-check-circle"
                                                                                 aria-hidden="true"></i></span>
                                                &nbsp;en az 8 karakter
                                            </li>
                                            <li class="">
                                                <span class="low-upper-case"><i class="fa fa-check-circle"
                                                                                aria-hidden="true"></i></span>
                                                &nbsp;en az 1 büyük harf ve 1 küçük harf karakteri
                                            </li>
                                            <li class="">
                                                <span class="one-number"><i class="fa fa-check-circle"
                                                                            aria-hidden="true"></i></span>
                                                &nbsp;en az 1 sayı
                                            </li>
                                            <li class="">
                                                <span class="one-special-char"><i class="fa fa-check-circle"
                                                                                  aria-hidden="true"></i></span>
                                                &nbsp; min 1 özel karakter (! @ # $% ^ & *)
                                            </li>
                                        </ul>
                                    </small></div>

                            </div>

                            <!-- password-confirm group -->
                            <div class="form-group">

                                <!-- password-confirm label -->
                                <label class="sr-only">Password Confirm</label>
                                <!-- password-confirm input -->
                                <div class="input-group">
                                    <input type="password" id="reg_userpasswordconfirm" class="form-control"
                                           data-placement="bottom"
                                           data-toggle="popover" data-container="body" data-html="true"
                                           placeholder="Şifre onaylama" name="password_confirmation" required autocomplete="new-password"  >

                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-append2"
                                                onclick="togglePassword2()">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                </div>
                                <!-- password-confirm error message -->
                                <div class="help-block text-right">
                                    <small><span id="error-confirmpassword" class="hide pull-right block-help">
                  <i class="fa fa-info-circle text-danger" aria-hidden="true"></i>Şifre eşleşmiyor'</span></small>
                                </div>

                            </div>

                            <!-- email group -->
                            <div class="form-group">
                                <label class="sr-only">E-mail Address</label>
                                <input type="email" id="reg_useremail"  class="form-control"
                                        name="email" :value="old('email')" required placeholder="xxx@xxx.com">
                            </div>


                            <!-- Submit -->
                            <div class="form-group">
                                <button id="reg_submit" name="submit" value="1" class="btn btn-block btn-success"
                                        disabled="disabled">Üye Ol
                                </button>
                                <div id="sign-up-popover" class="hide"><p>is empty</p></div>
                            </div>

                            <!-- Remember -->

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())

                                    <x-jet-label for="terms">

                                            <x-jet-checkbox name="terms" id="terms"/>


                                                {!! __(':terms_of_service ve :privacy_policy Kabul Ediyorum', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Hizmet Şartlarını').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Gizlilik Politikasını').'</a>',
                                                ]) !!}

                                    </x-jet-label>

                            @endif

                        </form>
                    </div>

                    <div class="login-or">
                        <hr class="hr-or">
                    </div>
                    <!-- Links -->
                    <div class="bottom text-center">
                        Zaten Üyemisin <a href="/"><b>Giriş Yap</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">

    .row {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .masthead-text {
        height: 300px;
    }

    .form-control {
        height: 45px;
    }

    select:hover {
        color: #444645;
        background: #ddd;
    }

    .login-or {
        position: relative;
        font-size: 18px;
        color: #aaa;
        margin-top: 20px;
        margin-bottom: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .span-or {
        display: block;
        position: absolute;
        left: 50%;
        top: -2px;
        margin-left: -25px;
        background-color: #fff;
        width: 50px;
        text-align: center;
    }

    .hr-or {
        background-color: #cdcdcd;
        height: 1px;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    #login-dp {
        min-width: 250px;
        padding: 14px 14px 0;
        overflow: hidden;
        background-color: rgba(255, 255, 255, .8);
    }

    #login-dp .help-block {
        font-size: 12px
    }

    #login-dp .social-buttons {
        margin: 12px 0
    }

    #login-dp .social-buttons a {
        width: 49%;
    }

    #login-dp .form-group {
        margin-bottom: 10px;
    }

    .btn-fb {
        color: #fff;
        background-color: #3b5998;
    }

    .btn-fb:hover {
        color: #fff;
        background-color: #496ebc
    }

    .btn-tw {
        color: #fff;
        background-color: #55acee;
    }

    .btn-tw:hover {
        color: #fff;
        background-color: #59b5fa;
    }

    @media (max-width: 768px) {
        #login-dp {
            background-color: inherit;
            color: #fff;
        }

        #login-dp .bottom {
            background-color: inherit;
            border-top: 0 none;
        }
    }

    .progress {
        height: 5px;
    }

    .block-help {
        font-weight: 300;
    }

    .hide {
        display: none;
    }

</style>

<script type="text/javascript">


    $(document).ready(function () {

        // şifre kurallı değilse butonu disable et
        $('#reg_userpassword').keyup(function () {
            var password = $('#reg_userpassword').val();
            var confirmpassword = $('#reg_userpasswordconfirm').val();

            if (checkStrength(password) == false) {
                $('#reg_submit').attr('disabled', true);
            }
        });

        // password-rule divi hide/show
        $('#reg_userpassword').keyup(function () {
            if ($('#reg_userpassword').val()) {
                $('#reg_passwordrules').removeClass('hide');
                $('#reg-password-strength').removeClass('hide');
            } else {
                $('#reg_passwordrules').addClass('hide');
                $('#reg-password-quality').addClass('hide')
                $('#reg-password-quality-result').addClass('hide')
                $('#reg-password-strength').addClass('hide')

            }
        });

        // password-confirm error divi hide/show
        $('#reg_userpasswordconfirm').blur(function () {
            if ($('#reg_userpassword').val() !== $('#reg_userpasswordconfirm').val()) {
                $('#error-confirmpassword').removeClass('hide');
                $('#reg_submit').attr('disabled', true);
            } else {
                $('#error-confirmpassword').addClass('hide');
                $('#reg_submit').attr('disabled', false);
            }
        });


        $('#reg_submit').hover(function () {
            if ($('#reg_submit').prop('disabled')) {
                $('#reg_submit').popover({
                    html: true,
                    trigger: 'hover',
                    placement: 'below',
                    offset: 20,
                    content: function () {
                        return $('#sign-up-popover').html();
                    }
                });
            }
        });

        // karakter doğrulama
        function checkStrength(password) {
            var strength = 0;

            //If password contains both lower and uppercase characters, increase strength value.
            if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
                strength += 1;
                $('.low-upper-case').addClass('text-success');
                $('.low-upper-case i').removeClass('fa-check').addClass('fa-check');
                $('#reg-password-quality').addClass('hide');


            } else {
                $('.low-upper-case').removeClass('text-success');
                $('.low-upper-case i').addClass('fa-check').removeClass('fa-check');
                $('#reg-password-quality').removeClass('hide');
            }

            //If it has numbers and characters, increase strength value.
            if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) {
                strength += 1;
                $('.one-number').addClass('text-success');
                $('.one-number i').removeClass('fa-check').addClass('fa-check');
                $('#reg-password-quality').addClass('hide');

            } else {
                $('.one-number').removeClass('text-success');
                $('.one-number i').addClass('fa-check').removeClass('fa-check');
                $('#reg-password-quality').removeClass('hide');
            }

            //If it has one special character, increase strength value.
            if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
                strength += 1;
                $('.one-special-char').addClass('text-success');
                $('.one-special-char i').removeClass('fa-check').addClass('fa-check');
                $('#reg-password-quality').addClass('hide');

            } else {
                $('.one-special-char').removeClass('text-success');
                $('.one-special-char i').addClass('fa-check').removeClass('fa-check');
                $('#reg-password-quality').removeClass('hide');
            }

            if (password.length > 7) {
                strength += 1;
                $('.eight-character').addClass('text-success');
                $('.eight-character i').removeClass('fa-check').addClass('fa-check');
                $('#reg-password-quality').removeClass('hide');

            } else {
                $('.eight-character').removeClass('text-success');
                $('.eight-character i').addClass('fa-check').removeClass('fa-check');
                $('#reg-password-quality').removeClass('hide');
            }
            // ------------------------------------------------------------------------------
            // If value is less than 2
            if (strength < 2) {
                $('#reg-password-quality-result').removeClass()
                $('#password-strength').addClass('progress-bar-danger');

                $('#reg-password-quality-result').addClass('text-danger').text('zayıf');
                $('#password-strength').css('width', '10%');
            } else if (strength == 2) {
                $('#reg-password-quality-result').addClass('good');
                $('#password-strength').removeClass('progress-bar-danger');
                $('#password-strength').addClass('progress-bar-warning');
                $('#reg-password-quality-result').addClass('text-warning').text('idare eder')
                $('#password-strength').css('width', '60%');
                return 'Week'
            } else if (strength == 4) {
                $('#reg-password-quality-result').removeClass()
                $('#reg-password-quality-result').addClass('strong');
                $('#password-strength').removeClass('progress-bar-warning');
                $('#password-strength').addClass('progress-bar-success');
                $('#reg-password-quality-result').addClass('text-success').text('güçlü');
                $('#password-strength').css('width', '100%');

                return 'Strong'
            }

        }


    });

    // Şifre gizle göster
    function togglePassword() {

        var element = document.getElementById('reg_userpassword');
        element.type = (element.type == 'password' ? 'text' : 'password');


    };

    function togglePassword2() {
        var element = document.getElementById('reg_userpasswordconfirm');
        element.type = (element.type == 'password' ? 'text' : 'password');


    };


</script>
</body>
</html>



