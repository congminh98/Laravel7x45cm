@extends('layouts.master')
@section('content')
@section('title', 'News')
<!-- Main Content -->
<div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
        <section class="heading-content blog-heading">
            <div class="heading-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="page-heading-inner heading-group">
                            <div class="breadcrumb-group">
                                <h1 class="page-title hidden">News</h1>
                                <div class="breadcrumb clearfix">
                                    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://cs-locamart-1.myshopify.com" title="Locamart #1" itemprop="url"><span
                                                itemprop="title">Home</span></a></span>
                                    <span class="arrow-space"></span>
                                    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                        <a href="/blogs/news" title="News" itemprop="url">
                                            <span itemprop="title">News</span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-layout">
            <div class="container">
                <div class="row">
                    @includeIf('layouts.pages.blogs.news')
                    @includeIf('layouts.pages.blogs.news_list')
                    @includeIf('layouts.pages.blogs.news_grid')
                </div>
            </div>
        </section>
    </main>
</div>
@endsection