@extends('layouts.master')
@section('content')
@section('title','Col sidebar')
<!-- Main Content -->
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
                                        <a href="/collections" title="List Collection" itemprop="url">
                                            <span itemprop="title">List Collection</span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="list-collection-layout">
            <div class="container">
                <div class="row">
                    <div class="list-collection-inner">
                        @includeIf('layouts.pages.collections.categories.view_full_width')
                        @includeIf('layouts.pages.collections.categories.view_sidebar')
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection