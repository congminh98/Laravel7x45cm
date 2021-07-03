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
                                            <form method="POST" action="{{ \LaravelLocalization::localizeURL(route('password.update')) }}">
                                                @csrf
                                                <input type="hidden" name="token" value="{{ $token }}">
                                                
                                                <div class="clearfix large_form form-item">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required
                                                        autocomplete="email" autofocus>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class=" large_form form-item form-password">
                                                    <div style="position: relative">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required
                                                            autocomplete="new-password">
                                                        <span class="cs-icon icon-eye" style="cursor: pointer"></span>
                                                    </div>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class=" large_form form-item form-password">
                                                    <div style="position: relative">
                                                        <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required
                                                            autocomplete="new-password">
                                                        <span class="cs-icon icon-eye" style="cursor: pointer"></span>
                                                    </div>
                                                </div>
                                                <div class="action_bottom login-action">
                                                    <input class="_btn" type="submit" value="Sign In" />
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
    </main>
</div>
@endsection