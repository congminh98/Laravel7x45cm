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
                                    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                        <a href="https://cs-locamart-1.myshopify.com" title="Locamart #1" itemprop="url">
                                            <span itemprop="title">Home</span>
                                        </a>
                                    </span>
                                    <span class="arrow-space"></span>
                                    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                        <a href="/collections/shop-2-col-side-bar" title="Shop 2 col side bar" itemprop="url">
                                            <span itemprop="title">
                                                Shop col side bar
                                            </span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="collection-layout">
            <div class="container">
                <div class="row">
                    @includeIf('layouts.pages.collections.col-types.col_2')
                    @includeIf('layouts.pages.collections.col-types.col_3')
                    @includeIf('layouts.pages.collections.col-types.col_4')
                    @includeIf('layouts.pages.collections.col-types.col_5')
                    @includeIf('layouts.pages.collections.col-types.col_4_full_width')
                    @includeIf('layouts.pages.collections.col-types.col_5_full_width')
                    @includeIf('layouts.pages.collections.col-types.col_6_full_width')
                    @includeIf('layouts.pages.collections.col-types.col_full_width')
                </div>
            </div>
        </section>
    </main>
</div>
@endsection