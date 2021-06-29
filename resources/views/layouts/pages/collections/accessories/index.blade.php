@extends('layouts.master')
@section('content')
@section('title','Accessories')
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
                                        <a href="/collections/accessories" title="Accessories" itemprop="url">
                                            <span itemprop="title">
                                                Accessories
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
                    <div id="shopify-section-collection-sidebar-4-template" class="shopify-section">
                        <div class="collection-inner collection-sidebar collection-sidebar-4">
                            <div class="collection-wrapper">
                                <div id="tags-load" style="display:none;"><i class="fa fa-spinner fa-pulse fa-2x"></i></div>
                                <div id="collection">
                                    <div class="collection-content">
                                        @includeIf('layouts.partials.sidebar', ['data' => 'accessories','filter' => 'true'])
                                        <div class="collection-mainarea  col-sm-9 clearfix">
                                            <div class="collection-toolbar">
                                                <div class="group-toolbar">
                                                    <div class="group-left">
                                                        <div class="filterCollections-layout">
                                                            <a href="javascript:void(0)" class="show-leftsidebar">
                                                                <span class="cs-icon icon-equalizer"></span>
                                                                <span class="filterCollections-title">Filter</span>
                                                            </a>
                                                        </div>
                                                        <div class="grid_list">
                                                            <ul class="list-inline option-set hidden-xs" data-option-key="layoutMode">
                                                                <li data-option-value="fitRows" id="goGrid" class="active goAction" data-toggle="tooltip" data-placement="top" title="Grid">
                                                                    <i class="cs-icon icon-grid"></i>
                                                                </li>
                                                                <li data-option-value="straightDown" id="goList" class="goAction" data-toggle="tooltip" data-placement="top" title="List">
                                                                    <i class="cs-icon icon-list-two"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="sortBy">
                                                            <div class="sortButtonWarper dropdown-toggle" data-toggle="dropdown">
                                                                <span class="toolbar-title">Sort by</span>
                                                                <button class="sortButton">
                                                                    <span class="name">Featured</span><i class="cs-icon icon-ios-arrow-down"></i>
                                                                </button>
                                                                <i class="sub-dropdown1"></i>
                                                                <i class="sub-dropdown"></i>
                                                            </div>
                                                            <div class="sortBox control-container dropdown-menu">
                                                                <ul class="sortForm list-unstyled option-set text-left list-styled" data-option-key="sortBy">
                                                                    <li class="sort manual"><a href="/collections/accessories/?sort_by=manual">Featured</a></li>
                                                                    <li class="sort price-ascending"><a href="/collections/accessories/?sort_by=price-ascending">Price, low to high</a></li>
                                                                    <li class="sort price-descending"><a href="/collections/accessories/?sort_by=price-descending">Price, high to low</a></li>
                                                                    <li class="sort title-ascending"><a href="/collections/accessories/?sort_by=title-ascending">Alphabetically, A-Z</a></li>
                                                                    <li class="sort title-descending"><a href="/collections/accessories/?sort_by=title-descending">Alphabetically, Z-A</a></li>
                                                                    <li class="sort created-ascending"><a href="/collections/accessories/?sort_by=created-ascending">Date, old to new</a></li>
                                                                    <li class="sort created-descending"><a href="/collections/accessories/?sort_by=created-descending">Date, new to old</a></li>
                                                                    <li class="sort best-selling"><a href="/collections/accessories/?sort_by=best-selling">Best Selling</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="group-right">
                                                        <div class="toolbar-pagination">
                                                            <div class="product-pagination">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="collection-title-counter">
                                                <h1 class="collection-title">Accessories</h1>
                                                <div class="product-counter">
                                                    Items 1 to 10 of 10 total
                                                </div>
                                            </div>
                                            <div class="collection-items clearfix">
                                                <div class="products">
                                                    <div class="product-item col-sm-3 ">
                                                        <div class="product">
                                                            <div class="row-left">
                                                                <a href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}" class="hoverBorder container_item">
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/f1_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                                        alt="Antique Black Carved Bar" />
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/f2_600x_crop_center.jpg" class="rotation img-responsive"
                                                                        alt="Antique Black Carved Bar" />
                                                                </a>
                                                                <div class="hover-mask">
                                                                    <ul class="quickview-wishlist-wrapper">
                                                                        <li class="quickview">
                                                                            <div class="product-ajax-cart">
                                                                                <div data-handle="antique-black-carved-bar-2" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
                                                                                    <a class="">Quick View</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-label">
                                                                    <div class="label-element deal-label">
                                                                        <span>42%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-wishlist">
                                                                    <div class="wishlist">
                                                                        <a title="Add To Wishlist" class="wishlist wishlist-antique-black-carved-bar-2"
                                                                            data-wishlisthandle="antique-black-carved-bar-2"><span class="cs-icon icon-heart"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-right animMix">
                                                                <div class="grid-mode">
                                                                    <div class="product-title-price">
                                                                        <div class="group">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Antique
                                                                                    Black Carved Bar</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1447994949690"></span>
                                                                            </div>
                                                                            <div class="product-price">
                                                                                <span class="price_sale"><span class='money'>$40.00</span></span>
                                                                                <del class="price_compare"> <span class='money'>$69.00</span></del>
                                                                            </div>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="14171523907642">Default Title</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Add To Cart"><span
                                                                                        class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="list-mode hide">
                                                                    <div class="list-collection-left">
                                                                        <div class="list-title-rating">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Antique
                                                                                    Black Carved Bar</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1447994949690"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            description Ultra-slim, ultra-powerful Not many laptops offer such a standout blend of style and power as the Samsung ATIV
                                                                            Book 9 2014 Edition. Its seductively...
                                                                        </div>
                                                                        <div class="product-list-type">
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">SKU:</span>
                                                                                <div class="item-info">
                                                                                    CA78970
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Vendor:</span>
                                                                                <div class="item-info">
                                                                                    Vendor 3
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Type:</span>
                                                                                <div class="item-info">
                                                                                    Type 3
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-collection-right">
                                                                        <div class="product-stock management-content ">
                                                                            <span class="management-title">Availability:</span>
                                                                            <div class="management-description">
                                                                                In-Stock
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <span class="price_sale"><span class='money'>$40.00</span></span>
                                                                            <del class="price_compare"> <span class='money'>$69.00</span></del>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="14171523907642">Default Title</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Add To Cart"><span
                                                                                        class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item col-sm-3 ">
                                                        <div class="product">
                                                            <div class="row-left">
                                                                <a href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}" class="hoverBorder container_item">
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/q3_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                                        alt="Hand Painted Tea Canisters With Cork Lids Set Of" />
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/q2_600x_crop_center.jpg" class="rotation img-responsive"
                                                                        alt="Hand Painted Tea Canisters With Cork Lids Set Of" />
                                                                </a>
                                                                <div class="hover-mask">
                                                                    <ul class="quickview-wishlist-wrapper">
                                                                        <li class="quickview">
                                                                            <div class="product-ajax-cart">
                                                                                <div data-handle="hand-painted-tea-canisters-with-cork-lids-set-of-5" data-target="#quick-shop-modal" class="quick_shop"
                                                                                    data-toggle="modal">
                                                                                    <a class="">Quick View</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                        <span>New</span>
                                                                    </div>
                                                                    <div class="label-element best-label">
                                                                        <span>Best</span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-wishlist">
                                                                    <div class="wishlist">
                                                                        <a title="Add To Wishlist" class="wishlist wishlist-hand-painted-tea-canisters-with-cork-lids-set-of-5"
                                                                            data-wishlisthandle="hand-painted-tea-canisters-with-cork-lids-set-of-5"><span class="cs-icon icon-heart"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-right animMix">
                                                                <div class="grid-mode">
                                                                    <div class="product-title-price">
                                                                        <div class="group">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Hand Painted Tea
                                                                                    Canisters With Cork Lids Set Of</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1448061075514"></span>
                                                                            </div>
                                                                            <div class="product-price">
                                                                                <span class="price_sale price_normal">
                                                                                    <span class='money'>$40.00</span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="13906179850298">Default Title</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Add To Cart"><span
                                                                                        class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="list-mode hide">
                                                                    <div class="list-collection-left">
                                                                        <div class="list-title-rating">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Hand Painted Tea
                                                                                    Canisters With Cork Lids Set Of</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1448061075514"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            description Ultra-slim, ultra-powerful Not many laptops offer such a standout blend of style and power as the Samsung ATIV
                                                                            Book 9 2014 Edition. Its seductively...
                                                                        </div>
                                                                        <div class="product-list-type">
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">SKU:</span>
                                                                                <div class="item-info">
                                                                                    CA78971
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Vendor:</span>
                                                                                <div class="item-info">
                                                                                    Vendor 1
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Type:</span>
                                                                                <div class="item-info">
                                                                                    Type 3
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-collection-right">
                                                                        <div class="product-stock management-content ">
                                                                            <span class="management-title">Availability:</span>
                                                                            <div class="management-description">
                                                                                In-Stock
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <span class="price_sale price_normal">
                                                                                <span class='money'>$40.00</span>
                                                                            </span>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="13906179850298">Default Title</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Add To Cart"><span
                                                                                        class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item col-sm-3 ">
                                                        <div class="product">
                                                            <div class="row-left">
                                                                <a href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}" class="hoverBorder container_item">
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/501_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                                        alt="Gray Suede Druzy Cuff Bracelet" />
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/502_600x_crop_center.jpg" class="rotation img-responsive"
                                                                        alt="Gray Suede Druzy Cuff Bracelet" />
                                                                </a>
                                                                <div class="hover-mask">
                                                                    <ul class="quickview-wishlist-wrapper">
                                                                        <li class="quickview">
                                                                            <div class="product-ajax-cart">
                                                                                <div data-handle="gray-suede-druzy-cuff-bracelet-1" data-target="#quick-shop-modal" class="quick_shop"
                                                                                    data-toggle="modal">
                                                                                    <a class="">Quick View</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-label">
                                                                </div>
                                                                <div class="product-wishlist">
                                                                    <div class="wishlist">
                                                                        <a title="Add To Wishlist" class="wishlist wishlist-gray-suede-druzy-cuff-bracelet-1"
                                                                            data-wishlisthandle="gray-suede-druzy-cuff-bracelet-1"><span class="cs-icon icon-heart"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-right animMix">
                                                                <div class="grid-mode">
                                                                    <div class="product-title-price">
                                                                        <div class="group">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Gray
                                                                                    Suede Druzy Cuff Bracelet</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1447869546554"></span>
                                                                            </div>
                                                                            <div class="product-price">
                                                                                <span class="price_sale price_normal">
                                                                                    <span class='money'>$40.00</span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="14171825373242">Default Title</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Add To Cart"><span
                                                                                        class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="list-mode hide">
                                                                    <div class="list-collection-left">
                                                                        <div class="list-title-rating">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Gray
                                                                                    Suede Druzy Cuff Bracelet</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1447869546554"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            description Ultra-slim, ultra-powerful Not many laptops offer such a standout blend of style and power as the Samsung ATIV
                                                                            Book 9 2014 Edition. Its seductively...
                                                                        </div>
                                                                        <div class="product-list-type">
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">SKU:</span>
                                                                                <div class="item-info">
                                                                                    CA78970
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Vendor:</span>
                                                                                <div class="item-info">
                                                                                    Vendor 2
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Type:</span>
                                                                                <div class="item-info">
                                                                                    Type 2
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-collection-right">
                                                                        <div class="product-stock management-content ">
                                                                            <span class="management-title">Availability:</span>
                                                                            <div class="management-description">
                                                                                In-Stock
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <span class="price_sale price_normal">
                                                                                <span class='money'>$40.00</span>
                                                                            </span>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="14171825373242">Default Title</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Add To Cart"><span
                                                                                        class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item col-sm-3 ">
                                                        <div class="product">
                                                            <div class="row-left">
                                                                <a href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}" class="hoverBorder container_item">
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/04_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                                        alt="Gray Suede Druzy Cuff Bracelet" />
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/03_600x_crop_center.jpg" class="rotation img-responsive"
                                                                        alt="Gray Suede Druzy Cuff Bracelet" />
                                                                </a>
                                                                <div class="hover-mask">
                                                                    <ul class="quickview-wishlist-wrapper">
                                                                        <li class="quickview">
                                                                            <div class="product-ajax-cart">
                                                                                <div data-handle="gray-suede-druzy-cuff-bracelet" data-target="#quick-shop-modal" class="quick_shop"
                                                                                    data-toggle="modal">
                                                                                    <a class="">Quick View</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-label">
                                                                    <div class="label-element hotting-label">
                                                                        <span>Hot</span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-wishlist">
                                                                    <div class="wishlist">
                                                                        <a title="Add To Wishlist" class="wishlist wishlist-gray-suede-druzy-cuff-bracelet"
                                                                            data-wishlisthandle="gray-suede-druzy-cuff-bracelet"><span class="cs-icon icon-heart"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-right animMix">
                                                                <div class="grid-mode">
                                                                    <div class="product-title-price">
                                                                        <div class="group">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Gray
                                                                                    Suede Druzy Cuff Bracelet</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1447739850810"></span>
                                                                            </div>
                                                                            <div class="product-price">
                                                                                <span class="price_sale price_normal">
                                                                                    <span class='money'>$40.00</span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="14171792801850">Default Title</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Add To Cart"><span
                                                                                        class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="list-mode hide">
                                                                    <div class="list-collection-left">
                                                                        <div class="list-title-rating">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Gray
                                                                                    Suede Druzy Cuff Bracelet</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1447739850810"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            description Ultra-slim, ultra-powerful Not many laptops offer such a standout blend of style and power as the Samsung ATIV
                                                                            Book 9 2014 Edition. Its seductively...
                                                                        </div>
                                                                        <div class="product-list-type">
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">SKU:</span>
                                                                                <div class="item-info">
                                                                                    CA78971
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Vendor:</span>
                                                                                <div class="item-info">
                                                                                    Vendor 1
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Type:</span>
                                                                                <div class="item-info">
                                                                                    Type 1
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-collection-right">
                                                                        <div class="product-stock management-content ">
                                                                            <span class="management-title">Availability:</span>
                                                                            <div class="management-description">
                                                                                In-Stock
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <span class="price_sale price_normal">
                                                                                <span class='money'>$40.00</span>
                                                                            </span>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="14171792801850">Default Title</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Add To Cart"><span
                                                                                        class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item col-sm-3 ">
                                                        <div class="product">
                                                            <div class="row-left">
                                                                <a href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}" class="hoverBorder container_item">
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/r1_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                                        alt="Copper Tapered 3 Tier Tiffin Lunch Boxes Set Of" />
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/r2_600x_crop_center.jpg" class="rotation img-responsive"
                                                                        alt="Copper Tapered 3 Tier Tiffin Lunch Boxes Set Of" />
                                                                </a>
                                                                <div class="hover-mask">
                                                                    <ul class="quickview-wishlist-wrapper">
                                                                        <li class="quickview">
                                                                            <div class="product-ajax-cart">
                                                                                <div data-handle="copper-tapered-3-tier-tiffin-lunch-boxes-set-of-3" data-target="#quick-shop-modal" class="quick_shop"
                                                                                    data-toggle="modal">
                                                                                    <a class="">Quick View</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-label">
                                                                </div>
                                                                <div class="product-wishlist">
                                                                    <div class="wishlist">
                                                                        <a title="Add To Wishlist" class="wishlist wishlist-copper-tapered-3-tier-tiffin-lunch-boxes-set-of-3"
                                                                            data-wishlisthandle="copper-tapered-3-tier-tiffin-lunch-boxes-set-of-3"><span class="cs-icon icon-heart"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-right animMix">
                                                                <div class="grid-mode">
                                                                    <div class="product-title-price">
                                                                        <div class="group">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Copper Tapered 3 Tier
                                                                                    Tiffin Lunch Boxes Set Of</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1448063795258"></span>
                                                                            </div>
                                                                            <div class="product-price">
                                                                                <span class="price_sale price_normal">
                                                                                    <span class='money'>$40.00</span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="13431925571642">S / black</option>
                                                                                    <option value="13431925637178">S / yellow</option>
                                                                                    <option value="13431925669946">S / red</option>
                                                                                    <option value="13431925735482">M / black</option>
                                                                                    <option value="13431925768250">M / yellow</option>
                                                                                    <option value="13431925833786">M / red</option>
                                                                                    <option value="13431925866554">L / black</option>
                                                                                    <option value="13431925932090">L / yellow</option>
                                                                                    <option value="13431925964858">L / red</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn select-option" type="button"
                                                                                    onclick="window.location='/products/copper-tapered-3-tier-tiffin-lunch-boxes-set-of-3';" title="Select Option"><span
                                                                                        class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="list-mode hide">
                                                                    <div class="list-collection-left">
                                                                        <div class="list-title-rating">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Copper Tapered 3 Tier
                                                                                    Tiffin Lunch Boxes Set Of</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1448063795258"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            description Ultra-slim, ultra-powerful Not many laptops offer such a standout blend of style and power as the Samsung ATIV
                                                                            Book 9 2014 Edition. Its seductively...
                                                                        </div>
                                                                        <div class="product-list-type">
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">SKU:</span>
                                                                                <div class="item-info">
                                                                                    CA78963
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Vendor:</span>
                                                                                <div class="item-info">
                                                                                    Vendor 3
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Type:</span>
                                                                                <div class="item-info">
                                                                                    Type 3
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-collection-right">
                                                                        <div class="product-stock management-content ">
                                                                            <span class="management-title">Availability:</span>
                                                                            <div class="management-description">
                                                                                In-Stock
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <span class="price_sale price_normal">
                                                                                <span class='money'>$40.00</span>
                                                                            </span>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="13431925571642">S / black</option>
                                                                                    <option value="13431925637178">S / yellow</option>
                                                                                    <option value="13431925669946">S / red</option>
                                                                                    <option value="13431925735482">M / black</option>
                                                                                    <option value="13431925768250">M / yellow</option>
                                                                                    <option value="13431925833786">M / red</option>
                                                                                    <option value="13431925866554">L / black</option>
                                                                                    <option value="13431925932090">L / yellow</option>
                                                                                    <option value="13431925964858">L / red</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn select-option" type="button"
                                                                                    onclick="window.location='/products/copper-tapered-3-tier-tiffin-lunch-boxes-set-of-3';" title="Select Option"><span
                                                                                        class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item col-sm-3 ">
                                                        <div class="product">
                                                            <div class="row-left">
                                                                <a href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}" class="hoverBorder container_item">
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/p3_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                                        alt="Tribal Drum Table Lamp Shade" />
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/p1_600x_crop_center.jpg" class="rotation img-responsive"
                                                                        alt="Tribal Drum Table Lamp Shade" />
                                                                </a>
                                                                <div class="hover-mask">
                                                                    <ul class="quickview-wishlist-wrapper">
                                                                        <li class="quickview">
                                                                            <div class="product-ajax-cart">
                                                                                <div data-handle="tribal-drum-table-lamp-shade-1" data-target="#quick-shop-modal" class="quick_shop"
                                                                                    data-toggle="modal">
                                                                                    <a class="">Quick View</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                        <span>New</span>
                                                                    </div>
                                                                    <div class="label-element deal-label">
                                                                        <span>42%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-wishlist">
                                                                    <div class="wishlist">
                                                                        <a title="Add To Wishlist" class="wishlist wishlist-tribal-drum-table-lamp-shade-1"
                                                                            data-wishlisthandle="tribal-drum-table-lamp-shade-1"><span class="cs-icon icon-heart"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-right animMix">
                                                                <div class="grid-mode">
                                                                    <div class="product-title-price">
                                                                        <div class="group">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Tribal
                                                                                    Drum Table Lamp Shade</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1448053375034"></span>
                                                                            </div>
                                                                            <div class="product-price">
                                                                                <span class="price_sale"><span class='money'>$40.00</span></span>
                                                                                <del class="price_compare"> <span class='money'>$69.00</span></del>
                                                                            </div>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="13431765041210">S / black</option>
                                                                                    <option value="13431765073978">S / yellow</option>
                                                                                    <option value="13431765139514">S / red</option>
                                                                                    <option value="13431765172282">M / black</option>
                                                                                    <option value="13431765237818">M / yellow</option>
                                                                                    <option value="13431765270586">M / red</option>
                                                                                    <option value="13431765303354">L / black</option>
                                                                                    <option value="13431765368890">L / yellow</option>
                                                                                    <option value="13431765401658">L / red</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn select-option" type="button" onclick="window.location='/products/tribal-drum-table-lamp-shade-1';"
                                                                                    title="Select Option"><span class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="list-mode hide">
                                                                    <div class="list-collection-left">
                                                                        <div class="list-title-rating">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Tribal
                                                                                    Drum Table Lamp Shade</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1448053375034"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            description Ultra-slim, ultra-powerful Not many laptops offer such a standout blend of style and power as the Samsung ATIV
                                                                            Book 9 2014 Edition. Its seductively...
                                                                        </div>
                                                                        <div class="product-list-type">
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">SKU:</span>
                                                                                <div class="item-info">
                                                                                    CA78963
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Vendor:</span>
                                                                                <div class="item-info">
                                                                                    Vendor 2
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Type:</span>
                                                                                <div class="item-info">
                                                                                    Type 1
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-collection-right">
                                                                        <div class="product-stock management-content ">
                                                                            <span class="management-title">Availability:</span>
                                                                            <div class="management-description">
                                                                                In-Stock
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <span class="price_sale"><span class='money'>$40.00</span></span>
                                                                            <del class="price_compare"> <span class='money'>$69.00</span></del>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="13431765041210">S / black</option>
                                                                                    <option value="13431765073978">S / yellow</option>
                                                                                    <option value="13431765139514">S / red</option>
                                                                                    <option value="13431765172282">M / black</option>
                                                                                    <option value="13431765237818">M / yellow</option>
                                                                                    <option value="13431765270586">M / red</option>
                                                                                    <option value="13431765303354">L / black</option>
                                                                                    <option value="13431765368890">L / yellow</option>
                                                                                    <option value="13431765401658">L / red</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn select-option" type="button" onclick="window.location='/products/tribal-drum-table-lamp-shade-1';"
                                                                                    title="Select Option"><span class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item col-sm-3 ">
                                                        <div class="product">
                                                            <div class="row-left">
                                                                <a href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}" class="hoverBorder container_item">
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/81_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                                        alt="Whitewash Wood Ladder Decor" />
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/71_600x_crop_center.jpg" class="rotation img-responsive"
                                                                        alt="Whitewash Wood Ladder Decor" />
                                                                </a>
                                                                <div class="hover-mask">
                                                                    <ul class="quickview-wishlist-wrapper">
                                                                        <li class="quickview">
                                                                            <div class="product-ajax-cart">
                                                                                <div data-handle="whitewash-wood-ladder-decor-1" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
                                                                                    <a class="">Quick View</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-label">
                                                                    <div class="label-element deal-label">
                                                                        <span>42%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-wishlist">
                                                                    <div class="wishlist">
                                                                        <a title="Add To Wishlist" class="wishlist wishlist-whitewash-wood-ladder-decor-1"
                                                                            data-wishlisthandle="whitewash-wood-ladder-decor-1"><span class="cs-icon icon-heart"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-right animMix">
                                                                <div class="grid-mode">
                                                                    <div class="product-title-price">
                                                                        <div class="group">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Whitewash Wood Ladder
                                                                                    Decor</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1447807254586"></span>
                                                                            </div>
                                                                            <div class="product-price">
                                                                                <span class="price_sale"><span class='money'>$40.00</span></span>
                                                                                <del class="price_compare"> <span class='money'>$69.00</span></del>
                                                                            </div>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="13429293318202">S / black</option>
                                                                                    <option value="13429293350970">S / yellow</option>
                                                                                    <option value="13429293383738">S / red</option>
                                                                                    <option value="13429293416506">M / black</option>
                                                                                    <option value="13429293449274">M / yellow</option>
                                                                                    <option value="13429293482042">M / red</option>
                                                                                    <option value="13429293514810">L / black</option>
                                                                                    <option value="13429293547578">L / yellow</option>
                                                                                    <option value="13429293580346">L / red</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn select-option" type="button" onclick="window.location='/products/whitewash-wood-ladder-decor-1';"
                                                                                    title="Select Option"><span class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="list-mode hide">
                                                                    <div class="list-collection-left">
                                                                        <div class="list-title-rating">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Whitewash Wood Ladder
                                                                                    Decor</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1447807254586"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            description Ultra-slim, ultra-powerful Not many laptops offer such a standout blend of style and power as the Samsung ATIV
                                                                            Book 9 2014 Edition. Its seductively...
                                                                        </div>
                                                                        <div class="product-list-type">
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">SKU:</span>
                                                                                <div class="item-info">
                                                                                    CA78963
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Vendor:</span>
                                                                                <div class="item-info">
                                                                                    Vendor 3
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Type:</span>
                                                                                <div class="item-info">
                                                                                    Type 3
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-collection-right">
                                                                        <div class="product-stock management-content ">
                                                                            <span class="management-title">Availability:</span>
                                                                            <div class="management-description">
                                                                                In-Stock
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <span class="price_sale"><span class='money'>$40.00</span></span>
                                                                            <del class="price_compare"> <span class='money'>$69.00</span></del>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="13429293318202">S / black</option>
                                                                                    <option value="13429293350970">S / yellow</option>
                                                                                    <option value="13429293383738">S / red</option>
                                                                                    <option value="13429293416506">M / black</option>
                                                                                    <option value="13429293449274">M / yellow</option>
                                                                                    <option value="13429293482042">M / red</option>
                                                                                    <option value="13429293514810">L / black</option>
                                                                                    <option value="13429293547578">L / yellow</option>
                                                                                    <option value="13429293580346">L / red</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn select-option" type="button" onclick="window.location='/products/whitewash-wood-ladder-decor-1';"
                                                                                    title="Select Option"><span class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item col-sm-3 ">
                                                        <div class="product">
                                                            <div class="row-left">
                                                                <a href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}" class="hoverBorder container_item">
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/703_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                                        alt="Whitewash Wood Ladder Decor" />
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/701_600x_crop_center.jpg" class="rotation img-responsive"
                                                                        alt="Whitewash Wood Ladder Decor" />
                                                                </a>
                                                                <div class="hover-mask">
                                                                    <ul class="quickview-wishlist-wrapper">
                                                                        <li class="quickview">
                                                                            <div class="product-ajax-cart">
                                                                                <div data-handle="whitewash-wood-ladder-decor-2" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
                                                                                    <a class="">Quick View</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-label">
                                                                    <div class="label-element hotting-label">
                                                                        <span>Hot</span>
                                                                    </div>
                                                                    <div class="label-element deal-label">
                                                                        <span>42%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-wishlist">
                                                                    <div class="wishlist">
                                                                        <a title="Add To Wishlist" class="wishlist wishlist-whitewash-wood-ladder-decor-2"
                                                                            data-wishlisthandle="whitewash-wood-ladder-decor-2"><span class="cs-icon icon-heart"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-right animMix">
                                                                <div class="grid-mode">
                                                                    <div class="product-title-price">
                                                                        <div class="group">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Whitewash Wood Ladder
                                                                                    Decor</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1447880294458"></span>
                                                                            </div>
                                                                            <div class="product-price">
                                                                                <span class="price_sale"><span class='money'>$40.00</span></span>
                                                                                <del class="price_compare"> <span class='money'>$69.00</span></del>
                                                                            </div>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="14173002530874">Default Title</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Add To Cart"><span
                                                                                        class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="list-mode hide">
                                                                    <div class="list-collection-left">
                                                                        <div class="list-title-rating">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Whitewash Wood Ladder
                                                                                    Decor</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1447880294458"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            description Ultra-slim, ultra-powerful Not many laptops offer such a standout blend of style and power as the Samsung ATIV
                                                                            Book 9 2014 Edition. Its seductively...
                                                                        </div>
                                                                        <div class="product-list-type">
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">SKU:</span>
                                                                                <div class="item-info">
                                                                                    CA78971
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Vendor:</span>
                                                                                <div class="item-info">
                                                                                    Vendor 2
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Type:</span>
                                                                                <div class="item-info">
                                                                                    Type 2
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-collection-right">
                                                                        <div class="product-stock management-content ">
                                                                            <span class="management-title">Availability:</span>
                                                                            <div class="management-description">
                                                                                In-Stock
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <span class="price_sale"><span class='money'>$40.00</span></span>
                                                                            <del class="price_compare"> <span class='money'>$69.00</span></del>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="14173002530874">Default Title</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Add To Cart"><span
                                                                                        class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item col-sm-3 ">
                                                        <div class="product">
                                                            <div class="row-left">
                                                                <a href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}" class="hoverBorder container_item">
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/w1_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                                        alt="Wood Barn Door Storage" />
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/w2_600x_crop_center.jpg" class="rotation img-responsive"
                                                                        alt="Wood Barn Door Storage" />
                                                                </a>
                                                                <div class="hover-mask">
                                                                    <ul class="quickview-wishlist-wrapper">
                                                                        <li class="quickview">
                                                                            <div class="product-ajax-cart">
                                                                                <div data-handle="wood-barn-door-storage-3" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
                                                                                    <a class="">Quick View</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-label">
                                                                    <div class="label-element deal-label">
                                                                        <span>42%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-wishlist">
                                                                    <div class="wishlist">
                                                                        <a title="Add To Wishlist" class="wishlist wishlist-wood-barn-door-storage-3"
                                                                            data-wishlisthandle="wood-barn-door-storage-3"><span class="cs-icon icon-heart"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-right animMix">
                                                                <div class="grid-mode">
                                                                    <div class="product-title-price">
                                                                        <div class="group">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Wood Barn
                                                                                    Door Storage</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1448093909050"></span>
                                                                            </div>
                                                                            <div class="product-price">
                                                                                <span class="price_sale"><span class='money'>$40.00</span></span>
                                                                                <del class="price_compare"> <span class='money'>$69.00</span></del>
                                                                            </div>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="14172921167930">Default Title</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Add To Cart"><span
                                                                                        class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="list-mode hide">
                                                                    <div class="list-collection-left">
                                                                        <div class="list-title-rating">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Wood Barn
                                                                                    Door Storage</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1448093909050"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            description Ultra-slim, ultra-powerful Not many laptops offer such a standout blend of style and power as the Samsung ATIV
                                                                            Book 9 2014 Edition. Its seductively...
                                                                        </div>
                                                                        <div class="product-list-type">
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">SKU:</span>
                                                                                <div class="item-info">
                                                                                    CA78970
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Vendor:</span>
                                                                                <div class="item-info">
                                                                                    Vendor 3
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Type:</span>
                                                                                <div class="item-info">
                                                                                    Type 3
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-collection-right">
                                                                        <div class="product-stock management-content ">
                                                                            <span class="management-title">Availability:</span>
                                                                            <div class="management-description">
                                                                                In-Stock
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <span class="price_sale"><span class='money'>$40.00</span></span>
                                                                            <del class="price_compare"> <span class='money'>$69.00</span></del>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="14172921167930">Default Title</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Add To Cart"><span
                                                                                        class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item col-sm-3 ">
                                                        <div class="product">
                                                            <div class="row-left">
                                                                <a href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}" class="hoverBorder container_item">
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/31_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                                        alt="Yuma Fire Pit" />
                                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/32_600x_crop_center.jpg" class="rotation img-responsive"
                                                                        alt="Yuma Fire Pit" />
                                                                </a>
                                                                <div class="hover-mask">
                                                                    <ul class="quickview-wishlist-wrapper">
                                                                        <li class="quickview">
                                                                            <div class="product-ajax-cart">
                                                                                <div data-handle="yuma-fire-pit" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
                                                                                    <a class="">Quick View</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-label">
                                                                    <div class="label-element deal-label">
                                                                        <span>42%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-wishlist">
                                                                    <div class="wishlist">
                                                                        <a title="Add To Wishlist" class="wishlist wishlist-yuma-fire-pit" data-wishlisthandle="yuma-fire-pit"><span
                                                                                class="cs-icon icon-heart"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-right animMix">
                                                                <div class="grid-mode">
                                                                    <div class="product-title-price">
                                                                        <div class="group">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Yuma Fire Pit</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1447769997370"></span>
                                                                            </div>
                                                                            <div class="product-price">
                                                                                <span class="price_sale"><span class='money'>$40.00</span></span>
                                                                                <del class="price_compare"> <span class='money'>$69.00</span></del>
                                                                            </div>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="14172900884538">Default Title</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Add To Cart"><span
                                                                                        class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="list-mode hide">
                                                                    <div class="list-collection-left">
                                                                        <div class="list-title-rating">
                                                                            <div class="product-title"><a class="title-5"
                                                                                    href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Yuma Fire Pit</a></div>
                                                                            <div class="rating-star">
                                                                                <span class="shopify-product-reviews-badge" data-id="1447769997370"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            description Ultra-slim, ultra-powerful Not many laptops offer such a standout blend of style and power as the Samsung ATIV
                                                                            Book 9 2014 Edition. Its seductively...
                                                                        </div>
                                                                        <div class="product-list-type">
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">SKU:</span>
                                                                                <div class="item-info">
                                                                                    CA78970
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Vendor:</span>
                                                                                <div class="item-info">
                                                                                    Vendor 2
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-list-item">
                                                                                <span class="item-title">Type:</span>
                                                                                <div class="item-info">
                                                                                    Type 2
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-collection-right">
                                                                        <div class="product-stock management-content ">
                                                                            <span class="management-title">Availability:</span>
                                                                            <div class="management-description">
                                                                                In-Stock
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <span class="price_sale"><span class='money'>$40.00</span></span>
                                                                            <del class="price_compare"> <span class='money'>$69.00</span></del>
                                                                        </div>
                                                                        <form action="/cart/add" method="post">
                                                                            <div class="hide clearfix">
                                                                                <select name="id">
                                                                                    <option selected="selected" value="14172900884538">Default Title</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1" />
                                                                                <button class="_btn add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Add To Cart"><span
                                                                                        class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
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
                                        <div class="col-sm-12 collection-bottom-toolbar">
                                            <div class="product-pagination">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            /* Handle Grid - List */
  function handleGridList(){
    if($('#goList').length){
      $('#goList').on(clickEv, function(e){
        $(this).parent().find('li').removeClass('active');
        $(this).addClass('active');
        $('.collection-items').addClass('listMode').removeClass('gridMode');
        $('.collection-items .row-left').addClass('col-md-5');
        $('.collection-items .row-right').addClass('col-md-7');
        $('.collection-items .product-item').removeClass('col-sm-3');
        $('.grid-mode').addClass("hide");
        $('.list-mode').removeClass("hide");
      });
    }
    if($('#goGrid').length){
      $('#goGrid').on(clickEv, function(e){
        $(this).parent().find('li').removeClass('active');
        $(this).addClass('active');
        $('.collection-items').removeClass('listMode').addClass('gridMode');
        $('.collection-items .row-left').removeClass('col-md-5');
        $('.collection-items .row-right').removeClass('col-md-7');
        $('.collection-items .product-item').addClass('col-sm-3');
        $('.grid-mode').removeClass("hide");
        $('.list-mode').addClass("hide");
      });
    }
  }
  $(document).ready(function() {
    if(location.search.search("sort_by=") != -1){
      if(location.search != ""){
        var stpo = location.search.search("sort_by=")+8, sortby_url = '.'+location.search.substr(stpo).split('='), sortby_url_a = sortby_url+" a";
        $(sortby_url).addClass("active");
        $('.sortButton .name').html($(sortby_url_a).html());
      }
      else{
        $('.manual').addClass("active");
      }
    }
    handleGridList();
  });
                        </script>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection