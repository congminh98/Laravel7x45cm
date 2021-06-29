@extends('layouts.master')
@section('content')
@section('title','Đăng nhập')
@push('style-login')
<link rel="stylesheet" href="{{asset('assets/auth/login.css')}}">
@endpush
<div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
        <section class="heading-content">
            <div class="heading-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="page-heading-inner heading-group">
                            <div class="breadcrumb-group">
                                <div class="breadcrumb clearfix">
                                    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                        <a href="https://cs-locamart-1.myshopify.com" title="Locamart #1" itemprop="url"><span itemprop="title">Home</span></a></span>
                                    <span class="arrow-space"></span>
                                    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                        <a href="/account/login" title="Login" itemprop="url">
                                            <span itemprop="title">Login</span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="customers-layout">
            <div class="customers-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="customers-inner">
                            <div class="customers-content">
                                <div class="login-layout" style="margin: auto;">
                                    <div class="login-content">
                                        <div id="login" class="customers">
                                            <h2>Login</h2>
                                            <form method="POST" action="{{ \LaravelLocalization::localizeURL(route('account.login')) }}" accept-charset="UTF-8">
                                                @csrf
                                                <input type="hidden" name="form_type" value="customer_login" />
                                                <input type="hidden" name="utf8" value="✓" />
                                                <div class="clearfix large_form form-item">
                                                    <input type="email" placeholder="Email Address" required name="email" id="customer_email" class="text @error('email') is-invalid @enderror"
                                                        value="{{ old('email') }}" />
                                                </div>
                                                <div class=" large_form form-item form-password">
                                                    <div style="position: relative">
                                                        <input type="password" placeholder="Password" required name="password" id="customer_password"
                                                            class="text @error('password') is-invalid @enderror" />
                                                        <span class="cs-icon icon-eye" style="cursor: pointer"></span>
                                                    </div>
                                                </div>
                                                <div class="action_bottom login-action">
                                                    <input class="_btn" type="submit" value="Sign In" />
                                                </div>
                                                <div class="div-custom_css form-item">
                                                    <a href="#">Forgot your password?</a>
                                                    <a href="#" data-toggle="modal" data-target="#phoneModal" data-backdrop="static" data-keyboard="false">Create account</a>
                                                </div>
                                                <div class="or-login form-item note text-center">
                                                    <hr>
                                                    <h6 style="margin: 0 20px">Or login with</h6>
                                                    <hr>
                                                </div>
                                                <div class="custom-social_login">
                                                    <a href="{{route('social.facebook.index')}}" type="button">
                                                        <img src="{{asset('images/facebook.png')}}" alt="">
                                                        <span>Facebook</span>
                                                    </a>
                                                    <a href="{{route('social.google.index')}}" type="button">
                                                        <img src="{{asset('images/google.png')}}" alt="">
                                                        <span>Google</span>
                                                    </a>
                                                    <a href="{{route('social.zalo.index')}}" type="button">
                                                        <img src="{{asset('images/zalo.png')}}" alt="">
                                                        <span>Zalo</span>
                                                    </a>
                                                </div>
                                            </form>
                                            <!-- Modal -->
                                            <div class="modal fade custom-modal_phone" id="phoneModal" tabindex="-1" role="dialog" aria-labelledby="phoneModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title" id="phoneModalLabel">Register with phone number</h6>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="input-phone">
                                                                <input type="text" value="+84565251103" name="phone" id="phoneNumber" placeholder="Phone number">
                                                            </div>
                                                            <div id="recaptcha-container"></div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary" onclick="sendOTP()">Send</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="confirm-code">
                                                                <input type="text" id="verification" placeholder="Verification code">
                                                                <button type="button" class="btn btn-primary" onclick="verify()">Verify code</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="recover-password" style="display:none;" class="customers">
                                            <h2>Reset Password</h2>
                                            <p class="note">We will send you an email to reset your password.</p>
                                            <form method="post" action="/account/recover" accept-charset="UTF-8"><input type="hidden" name="form_type" value="recover_customer_password" /><input
                                                    type="hidden" name="utf8" value="✓" />
                                                <div class="clearfix large_form form-item">
                                                    <input type="email" value="" placeholder="Email Address" size="30" name="email" id="recover-email" class="text" />
                                                </div>
                                                <div class="action_bottom">
                                                    <input class="_btn" type="submit" value="Login" />
                                                    <div class="note note_text_group">
                                                        or<span class="note_link"><a href="#" onclick="hideRecoverPasswordForm();return false;">Cancel</a></span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
            function showRecoverPasswordForm() {
                document.getElementById('recover-password').style.display = 'block';
                document.getElementById('login').style.display = 'none';
            }
            function hideRecoverPasswordForm() {
                document.getElementById('recover-password').style.display = 'none';
                document.getElementById('login').style.display = 'block';
            }
            if (window.location.hash == '#recover') {
                showRecoverPasswordForm()
            }
        </script>
    </main>
</div>
@push('phone-register')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<script>
    var firebaseConfig = {
        apiKey: "AIzaSyDincJG1FhimhUNB1jB-GF005MjWDlHL5s",
        authDomain: "cm-15cd0.firebaseapp.com",
        projectId: "cm-15cd0",
        storageBucket: "cm-15cd0.appspot.com",
        messagingSenderId: "599523935987",
        appId: "1:599523935987:web:9e340af35e83f0955a5986",
        measurementId: "G-RX8QPSVFQK"
    };
    firebase.initializeApp(firebaseConfig);
</script>
<script type="text/javascript">
    window.onload = function () {
        render();
    };
    function render() {
        window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
        recaptchaVerifier.render();
    }
    function sendOTP() {
        var phoneNumber = $("#phoneNumber").val();
        firebase.auth().signInWithPhoneNumber(phoneNumber, window.recaptchaVerifier).then(function (confirmationResult) {
            window.confirmationResult = confirmationResult;
            coderesult = confirmationResult;
            console.log(coderesult);
            $("#successAuth").text("Message sent");
            $("#successAuth").show();
        }).catch(function (error) {
            $("#error").text(error.message);
            $("#error").show();
        });
    }
    function verify() {
        var code = $("#verification").val();
        if(code) $(".confirm-code").show();
        coderesult.confirm(code).then(function (result) {
            var user = result.user;
            console.log(user);
            sendAjax({
                user : user,
                code:code
            });
            $("#successOtpAuth").text("Auth is successful");
            $("#successOtpAuth").show();
        }).catch(function (error) {
            $("#error").text(error.message);
            $("#error").show();
        });
    }
    function sendAjax(data) {
        console.log(data);
        $.ajax({
            url: '{{route("social.phone.register")}}',
            type: 'POST',
            data: {
                user:data.user,
                code:data.code,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
            },
            error: function (data) {
                console.log(data);
            }
        });
    }
</script>
@endpush
@endsection