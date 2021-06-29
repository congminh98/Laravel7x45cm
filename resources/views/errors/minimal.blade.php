@extends('layouts.master')
@section('content')
@section('title','404')
<!-- Main Content -->
<div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
        <section class="page-404-layout">
            <div class="page-404-wrapper">
                <h1 class="hidden">Page not found</h1>
                <div class="container">
                    <div class="row">
                        <div class="page-404-inner">
                            <div class="page-404-content">
                                <div class="page-group">
                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/404.png?v=1529481535" alt="" />
                                    <h2 class="title">Oop, that link is broken.</h2>
                                    <div class="caption">We are sorry, but something went wrong</div>
                                    <a href="/" class="_btn">connect to support</a>
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