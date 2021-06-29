@extends('layouts.master')
@section('title','Đăng ký')
@section('content')

<div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
        <section class="heading-content">
            <div class="heading-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="page-heading-inner heading-group">
                            <div class="breadcrumb-group">
                                <div class="breadcrumb clearfix">
                                    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://cs-locamart-1.myshopify.com" title="Locamart #1" itemprop="url"><span
                                                itemprop="title">Home</span></a></span>
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
                                <div class="register-layout" style="margin: auto;">
                                    <div class="register-content">
                                        <div id="register" class="customers">
                                            <h2>Register</h2>
                                            <form action="" method="post" id="create_customer" accept-charset="utf-8">
                                                <input type="hidden" name="form_type" value="create_customer" />
                                                <input type="hidden" name="utf8" value="✓" />
                                                <div id="name" class="clearfix large_form form-item">
                                                    <input type="text" value="" placeholder="Name" name="name" id="name" class="text" size="30" />
                                                </div>
                                                <div id="email" class="clearfix large_form form-item">
                                                    <input type="email" value="" placeholder="Email" name="email" id="email" class="text" size="30" />
                                                </div>
                                                <div id="phone" class="clearfix large_form form-item">
                                                    <input type="text" value="" placeholder="Phone" name="phone" id="phone" class="text" size="10" />
                                                </div>
                                                <div id="password" class="clearfix large_form form-password form-item">
                                                    <input type="password" value="" placeholder="Password" name="password" id="password" class="password text" size="30" />
                                                    <span class="cs-icon icon-eye"></span>
                                                </div>
                                                <div id="confirmPassword" class="clearfix large_form form-password form-item">
                                                    <input type="password" value="" placeholder="confirmPassword" name="confirmPassword" id="confirmPassword" class="password text" size="30" />
                                                    <span class="cs-icon icon-eye"></span>
                                                </div>
                                                <div class="action_bottom">
                                                    <input class="_btn" type="submit" value="Create" />
                                                    <span class="note"><span class="or">or</span><a href="/">Return to Store</a></span>
                                                </div>
                                            </form>

                                        </div><!-- #register -->
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

@endsection