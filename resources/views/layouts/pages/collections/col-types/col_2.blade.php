<div id="shopify-section-collection-sidebar-2-template" class="shopify-section" style="display: {{Request('type') == 'shop-2-col-side-bar' ? 'block':'none'}}">
    <div class="collection-inner collection-sidebar collection-sidebar-2">
        <div class="collection-wrapper">
            <!-- Tags loading -->
            <div id="tags-load" style="display:none;"><i class="fa fa-spinner fa-pulse fa-2x"></i></div>
            <div id="collection">
                <div class="collection-content">

                    @includeIf('layouts.partials.sidebar', ['filter' => 'true'])

                    <div class="collection-mainarea col-sm-9 clearfix">
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
                                                <li class="sort manual"><a href="/collections/shop-2-col-side-bar/?sort_by=manual">Featured</a></li>
                                                <li class="sort price-ascending"><a href="/collections/shop-2-col-side-bar/?sort_by=price-ascending">Price, low to high</a></li>
                                                <li class="sort price-descending"><a href="/collections/shop-2-col-side-bar/?sort_by=price-descending">Price, high to low</a></li>
                                                <li class="sort title-ascending"><a href="/collections/shop-2-col-side-bar/?sort_by=title-ascending">Alphabetically, A-Z</a></li>
                                                <li class="sort title-descending"><a href="/collections/shop-2-col-side-bar/?sort_by=title-descending">Alphabetically, Z-A</a></li>
                                                <li class="sort created-ascending"><a href="/collections/shop-2-col-side-bar/?sort_by=created-ascending">Date, old to new</a></li>
                                                <li class="sort created-descending"><a href="/collections/shop-2-col-side-bar/?sort_by=created-descending">Date, new to old</a></li>
                                                <li class="sort best-selling"><a href="/collections/shop-2-col-side-bar/?sort_by=best-selling">Best Selling</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-right">
                                    <div class="toolbar-pagination">
                                        <div class="product-pagination">
                                            <div class="pagination_group">
                                                <ul class="pagination pagination-collection">
                                                    <li class="prev"><a class="disabled" href="javascript:;"><i class="cs-icon icon-ios-arrow-left"></i><span>Previous</span></a>
                                                    </li>
                                                    <li class="active"><a href="javascript:;">1</a></li>
                                                    <li><a href="/collections/shop-2-col-side-bar?page=2&sort_by=manual">2</a></li>
                                                    <li><a href="/collections/shop-2-col-side-bar?page=3&sort_by=manual">3</a></li>
                                                    <li><a href="/collections/shop-2-col-side-bar?page=4&sort_by=manual">4</a></li>
                                                    <li class="next"><a href="/collections/shop-2-col-side-bar?page=2&sort_by=manual"><span>Next</span><i class="cs-icon icon-ios-arrow-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collection-title-counter">
                            <h1 class="collection-title">Shop 2 col side bar</h1>
                            <div class="product-counter">
                                Items 1 to 12 of 42 total
                            </div>
                        </div>
                        <div class="collection-items clearfix">
                            <div class="products">
                                <div class="product-item col-sm-6 ">
                                    <div class="product">
                                        <div class="row-left">
                                            <a href="/collections/shop-2-col-side-bar/products/antique-black-carved-bar" class="hoverBorder container_item">
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/12_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                    alt="Antique Black Carved Bar" />
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/11_cfd2f15c-8f9c-4ad3-8e54-b611c278f3e2_600x_crop_center.jpg"
                                                    class="rotation img-responsive" alt="Antique Black Carved Bar" />
                                            </a>
                                            <div class="hover-mask">
                                                <ul class="quickview-wishlist-wrapper">
                                                    <li class="quickview">
                                                        <div class="product-ajax-cart">
                                                            <div data-handle="antique-black-carved-bar" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
                                                    <a title="Add To Wishlist" class="wishlist wishlist-antique-black-carved-bar" data-wishlisthandle="antique-black-carved-bar"><span
                                                            class="cs-icon icon-heart"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-right animMix">
                                            <div class="grid-mode">
                                                <div class="product-title-price">
                                                    <div class="group">
                                                        <div class="product-title"><a class="title-5" href="/collections/shop-2-col-side-bar/products/antique-black-carved-bar">Antique Black Carved
                                                                Bar</a></div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1447753285690"></span>
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
                                                                <option selected="selected" value="13947025752122">Default Title</option>
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
                                                        <div class="product-title"><a class="title-5" href="/collections/shop-2-col-side-bar/products/antique-black-carved-bar">Antique Black Carved
                                                                Bar</a></div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1447753285690"></span>
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
                                                                <option selected="selected" value="13947025752122">Default Title</option>
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
                                <div class="product-item col-sm-6 ">
                                    <div class="product">
                                        <div class="row-left">
                                            <a href="/collections/shop-2-col-side-bar/products/antique-black-carved-bar-1" class="hoverBorder container_item">
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/601_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                    alt="Antique Black Carved Bar" />
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/602_600x_crop_center.jpg" class="rotation img-responsive"
                                                    alt="Antique Black Carved Bar" />
                                            </a>
                                            <div class="hover-mask">
                                                <ul class="quickview-wishlist-wrapper">
                                                    <li class="quickview">
                                                        <div class="product-ajax-cart">
                                                            <div data-handle="antique-black-carved-bar-1" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
                                            </div>
                                            <div class="product-wishlist">
                                                <div class="wishlist">
                                                    <a title="Add To Wishlist" class="wishlist wishlist-antique-black-carved-bar-1" data-wishlisthandle="antique-black-carved-bar-1"><span
                                                            class="cs-icon icon-heart"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-right animMix">
                                            <div class="grid-mode">
                                                <div class="product-title-price">
                                                    <div class="group">
                                                        <div class="product-title"><a class="title-5" href="/collections/shop-2-col-side-bar/products/antique-black-carved-bar-1">Antique Black Carved
                                                                Bar</a></div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1447874691130"></span>
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
                                                                <option selected="selected" value="14173035790394">Default Title</option>
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
                                                        <div class="product-title"><a class="title-5" href="/collections/shop-2-col-side-bar/products/antique-black-carved-bar-1">Antique Black Carved
                                                                Bar</a></div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1447874691130"></span>
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
                                                        <span class="price_sale price_normal">
                                                            <span class='money'>$40.00</span>
                                                        </span>
                                                    </div>
                                                    <form action="/cart/add" method="post">
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="14173035790394">Default Title</option>
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
                                <div class="product-item col-sm-6 ">
                                    <div class="product">
                                        <div class="row-left">
                                            <a href="/collections/shop-2-col-side-bar/products/antique-black-carved-bar-2" class="hoverBorder container_item">
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/f1_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                    alt="Antique Black Carved Bar" />
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/f2_600x_crop_center.jpg" class="rotation img-responsive" alt="Antique Black Carved Bar" />
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
                                                    <a title="Add To Wishlist" class="wishlist wishlist-antique-black-carved-bar-2" data-wishlisthandle="antique-black-carved-bar-2"><span
                                                            class="cs-icon icon-heart"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-right animMix">
                                            <div class="grid-mode">
                                                <div class="product-title-price">
                                                    <div class="group">
                                                        <div class="product-title"><a class="title-5" href="/collections/shop-2-col-side-bar/products/antique-black-carved-bar-2">Antique Black Carved
                                                                Bar</a></div>
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
                                                        <div class="product-title"><a class="title-5" href="/collections/shop-2-col-side-bar/products/antique-black-carved-bar-2">Antique Black Carved
                                                                Bar</a></div>
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
                                <div class="product-item col-sm-6 ">
                                    <div class="product">
                                        <div class="row-left">
                                            <a href="/collections/shop-2-col-side-bar/products/bird-on-newsprint-tea-tin-set-of-4" class="hoverBorder container_item">
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/n3_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                    alt="Bird On Newsprint Tea Tin Set Of" />
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/n2_600x_crop_center.jpg" class="rotation img-responsive"
                                                    alt="Bird On Newsprint Tea Tin Set Of" />
                                            </a>
                                            <div class="hover-mask">
                                                <ul class="quickview-wishlist-wrapper">
                                                    <li class="quickview">
                                                        <div class="product-ajax-cart">
                                                            <div data-handle="bird-on-newsprint-tea-tin-set-of-4" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
                                                    <a title="Add To Wishlist" class="wishlist wishlist-bird-on-newsprint-tea-tin-set-of-4"
                                                        data-wishlisthandle="bird-on-newsprint-tea-tin-set-of-4"><span class="cs-icon icon-heart"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-right animMix">
                                            <div class="grid-mode">
                                                <div class="product-title-price">
                                                    <div class="group">
                                                        <div class="product-title"><a class="title-5" href="/collections/shop-2-col-side-bar/products/bird-on-newsprint-tea-tin-set-of-4">Bird On
                                                                Newsprint Tea Tin Set
                                                                Of</a></div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1448040529978"></span>
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
                                                                <option selected="selected" value="13431592517690">S / black</option>
                                                                <option value="13431592550458">S / yellow</option>
                                                                <option value="13431592583226">S / red</option>
                                                                <option value="13431592615994">M / black</option>
                                                                <option value="13431592648762">M / yellow</option>
                                                                <option value="13431592681530">M / red</option>
                                                                <option value="13431592714298">L / black</option>
                                                                <option value="13431592747066">L / yellow</option>
                                                                <option value="13431592779834">L / red</option>
                                                            </select>
                                                        </div>
                                                        <div class="effect-ajax-cart">
                                                            <input type="hidden" name="quantity" value="1" />
                                                            <button class="_btn select-option" type="button" onclick="window.location='/products/bird-on-newsprint-tea-tin-set-of-4';"
                                                                title="Select Option"><span class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="list-mode hide">
                                                <div class="list-collection-left">
                                                    <div class="list-title-rating">
                                                        <div class="product-title"><a class="title-5" href="/collections/shop-2-col-side-bar/products/bird-on-newsprint-tea-tin-set-of-4">Bird On
                                                                Newsprint Tea Tin Set
                                                                Of</a></div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1448040529978"></span>
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
                                                                Vendor 1
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
                                                                <option selected="selected" value="13431592517690">S / black</option>
                                                                <option value="13431592550458">S / yellow</option>
                                                                <option value="13431592583226">S / red</option>
                                                                <option value="13431592615994">M / black</option>
                                                                <option value="13431592648762">M / yellow</option>
                                                                <option value="13431592681530">M / red</option>
                                                                <option value="13431592714298">L / black</option>
                                                                <option value="13431592747066">L / yellow</option>
                                                                <option value="13431592779834">L / red</option>
                                                            </select>
                                                        </div>
                                                        <div class="effect-ajax-cart">
                                                            <input type="hidden" name="quantity" value="1" />
                                                            <button class="_btn select-option" type="button" onclick="window.location='/products/bird-on-newsprint-tea-tin-set-of-4';"
                                                                title="Select Option"><span class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item col-sm-6 ">
                                    <div class="product">
                                        <div class="row-left">
                                            <a href="/collections/shop-2-col-side-bar/products/black-and-gold-rhinestone-multi-strand-cuff-bracelet" class="hoverBorder container_item">
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/93_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                    alt="Black And Gold Rhinestone Multi Strand Cuff Bracelet" />
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/92_600x_crop_center.jpg" class="rotation img-responsive"
                                                    alt="Black And Gold Rhinestone Multi Strand Cuff Bracelet" />
                                            </a>
                                            <div class="hover-mask">
                                                <ul class="quickview-wishlist-wrapper">
                                                    <li class="quickview">
                                                        <div class="product-ajax-cart">
                                                            <div data-handle="black-and-gold-rhinestone-multi-strand-cuff-bracelet" data-target="#quick-shop-modal" class="quick_shop"
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
                                                    <a title="Add To Wishlist" class="wishlist wishlist-black-and-gold-rhinestone-multi-strand-cuff-bracelet"
                                                        data-wishlisthandle="black-and-gold-rhinestone-multi-strand-cuff-bracelet"><span class="cs-icon icon-heart"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-right animMix">
                                            <div class="grid-mode">
                                                <div class="product-title-price">
                                                    <div class="group">
                                                        <div class="product-title"><a class="title-5"
                                                                href="/collections/shop-2-col-side-bar/products/black-and-gold-rhinestone-multi-strand-cuff-bracelet">Black And Gold
                                                                Rhinestone Multi Strand Cuff Bracelet</a></div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1447815315514"></span>
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
                                                                <option selected="selected" value="14171622408250">Default Title</option>
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
                                                                href="/collections/shop-2-col-side-bar/products/black-and-gold-rhinestone-multi-strand-cuff-bracelet">Black And Gold
                                                                Rhinestone Multi Strand Cuff Bracelet</a></div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1447815315514"></span>
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
                                                                <option selected="selected" value="14171622408250">Default Title</option>
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
                                <div class="product-item col-sm-6 ">
                                    <div class="product">
                                        <div class="row-left">
                                            <a href="/collections/shop-2-col-side-bar/products/black-and-gold-rhinestone-multi-strand-cuff-bracelet-1" class="hoverBorder container_item">
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/k2_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                    alt="Black And Gold Rhinestone Multi Strand Cuff Bracelet" />
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/k1_600x_crop_center.jpg" class="rotation img-responsive"
                                                    alt="Black And Gold Rhinestone Multi Strand Cuff Bracelet" />
                                            </a>
                                            <div class="hover-mask">
                                                <ul class="quickview-wishlist-wrapper">
                                                    <li class="quickview">
                                                        <div class="product-ajax-cart">
                                                            <div data-handle="black-and-gold-rhinestone-multi-strand-cuff-bracelet-1" data-target="#quick-shop-modal" class="quick_shop"
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
                                                    <a title="Add To Wishlist" class="wishlist wishlist-black-and-gold-rhinestone-multi-strand-cuff-bracelet-1"
                                                        data-wishlisthandle="black-and-gold-rhinestone-multi-strand-cuff-bracelet-1"><span class="cs-icon icon-heart"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-right animMix">
                                            <div class="grid-mode">
                                                <div class="product-title-price">
                                                    <div class="group">
                                                        <div class="product-title"><a class="title-5"
                                                                href="/collections/shop-2-col-side-bar/products/black-and-gold-rhinestone-multi-strand-cuff-bracelet-1">Black And
                                                                Gold Rhinestone Multi Strand Cuff Bracelet</a></div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1448034238522"></span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="price_sale"><span class='money'>$40.00</span></span>
                                                            <del class="price_compare"> <span class='money'>$69.00</span></del>
                                                        </div>
                                                    </div>
                                                    <form action="/cart/add" method="post">
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="13431440638010">S / black</option>
                                                                <option value="13431440670778">S / yellow</option>
                                                                <option value="13431440736314">S / red</option>
                                                                <option value="13431440769082">M / black</option>
                                                                <option value="13431440801850">M / yellow</option>
                                                                <option value="13431440834618">M / red</option>
                                                                <option value="13431440867386">L / black</option>
                                                                <option value="13431440900154">L / yellow</option>
                                                                <option value="13431440932922">L / red</option>
                                                            </select>
                                                        </div>
                                                        <div class="effect-ajax-cart">
                                                            <input type="hidden" name="quantity" value="1" />
                                                            <button class="_btn select-option" type="button"
                                                                onclick="window.location='/products/black-and-gold-rhinestone-multi-strand-cuff-bracelet-1';" title="Select Option"><span
                                                                    class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="list-mode hide">
                                                <div class="list-collection-left">
                                                    <div class="list-title-rating">
                                                        <div class="product-title"><a class="title-5"
                                                                href="/collections/shop-2-col-side-bar/products/black-and-gold-rhinestone-multi-strand-cuff-bracelet-1">Black And
                                                                Gold Rhinestone Multi Strand Cuff Bracelet</a></div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1448034238522"></span>
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
                                                                <option selected="selected" value="13431440638010">S / black</option>
                                                                <option value="13431440670778">S / yellow</option>
                                                                <option value="13431440736314">S / red</option>
                                                                <option value="13431440769082">M / black</option>
                                                                <option value="13431440801850">M / yellow</option>
                                                                <option value="13431440834618">M / red</option>
                                                                <option value="13431440867386">L / black</option>
                                                                <option value="13431440900154">L / yellow</option>
                                                                <option value="13431440932922">L / red</option>
                                                            </select>
                                                        </div>
                                                        <div class="effect-ajax-cart">
                                                            <input type="hidden" name="quantity" value="1" />
                                                            <button class="_btn select-option" type="button"
                                                                onclick="window.location='/products/black-and-gold-rhinestone-multi-strand-cuff-bracelet-1';" title="Select Option"><span
                                                                    class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item col-sm-6 ">
                                    <div class="product">
                                        <div class="row-left">
                                            <a href="/collections/shop-2-col-side-bar/products/copper-and-rope-3-tier-hanging-basket" class="hoverBorder container_item">
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/o1_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                    alt="Copper And Rope 3-Tier Hanging Basket" />
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/o3_600x_crop_center.jpg" class="rotation img-responsive"
                                                    alt="Copper And Rope 3-Tier Hanging Basket" />
                                            </a>
                                            <div class="hover-mask">
                                                <ul class="quickview-wishlist-wrapper">
                                                    <li class="quickview">
                                                        <div class="product-ajax-cart">
                                                            <div data-handle="copper-and-rope-3-tier-hanging-basket" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
                                                    <a title="Add To Wishlist" class="wishlist wishlist-copper-and-rope-3-tier-hanging-basket"
                                                        data-wishlisthandle="copper-and-rope-3-tier-hanging-basket"><span class="cs-icon icon-heart"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-right animMix">
                                            <div class="grid-mode">
                                                <div class="product-title-price">
                                                    <div class="group">
                                                        <div class="product-title"><a class="title-5" href="/collections/shop-2-col-side-bar/products/copper-and-rope-3-tier-hanging-basket">Copper And
                                                                Rope 3-Tier
                                                                Hanging Basket</a></div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1448046329914"></span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="price_sale"><span class='money'>$40.00</span></span>
                                                            <del class="price_compare"> <span class='money'>$69.00</span></del>
                                                        </div>
                                                    </div>
                                                    <form action="/cart/add" method="post">
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="14171680964666">Default Title</option>
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
                                                        <div class="product-title"><a class="title-5" href="/collections/shop-2-col-side-bar/products/copper-and-rope-3-tier-hanging-basket">Copper And
                                                                Rope 3-Tier
                                                                Hanging Basket</a></div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1448046329914"></span>
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
                                                                Vendor 3
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
                                                                <option selected="selected" value="14171680964666">Default Title</option>
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
                                <div class="product-item col-sm-6 ">
                                    <div class="product">
                                        <div class="row-left">
                                            <a href="/collections/shop-2-col-side-bar/products/copper-tapered-3-tier-tiffin-lunch-boxes-set-of-2" class="hoverBorder container_item">
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/402_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                    alt="Copper Tapered 3 Tier Tiffin Lunch Boxes Set Of" />
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/403_600x_crop_center.jpg" class="rotation img-responsive"
                                                    alt="Copper Tapered 3 Tier Tiffin Lunch Boxes Set Of" />
                                            </a>
                                            <div class="hover-mask">
                                                <ul class="quickview-wishlist-wrapper">
                                                    <li class="quickview">
                                                        <div class="product-ajax-cart">
                                                            <div data-handle="copper-tapered-3-tier-tiffin-lunch-boxes-set-of-2" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
                                                    <a title="Add To Wishlist" class="wishlist wishlist-copper-tapered-3-tier-tiffin-lunch-boxes-set-of-2"
                                                        data-wishlisthandle="copper-tapered-3-tier-tiffin-lunch-boxes-set-of-2"><span class="cs-icon icon-heart"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-right animMix">
                                            <div class="grid-mode">
                                                <div class="product-title-price">
                                                    <div class="group">
                                                        <div class="product-title"><a class="title-5"
                                                                href="/collections/shop-2-col-side-bar/products/copper-tapered-3-tier-tiffin-lunch-boxes-set-of-2">Copper Tapered 3
                                                                Tier Tiffin Lunch Boxes Set Of</a></div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1447864107066"></span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="price_sale"><span class='money'>$40.00</span></span>
                                                            <del class="price_compare"> <span class='money'>$69.00</span></del>
                                                        </div>
                                                    </div>
                                                    <form action="/cart/add" method="post">
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="13429844869178">S / black</option>
                                                                <option value="13429844934714">S / yellow</option>
                                                                <option value="13429844967482">S / red</option>
                                                                <option value="13429845033018">M / black</option>
                                                                <option value="13429845065786">M / yellow</option>
                                                                <option value="13429845098554">M / red</option>
                                                                <option value="13429845164090">L / black</option>
                                                                <option value="13429845196858">L / yellow</option>
                                                                <option value="13429845262394">L / red</option>
                                                            </select>
                                                        </div>
                                                        <div class="effect-ajax-cart">
                                                            <input type="hidden" name="quantity" value="1" />
                                                            <button class="_btn select-option" type="button" onclick="window.location='/products/copper-tapered-3-tier-tiffin-lunch-boxes-set-of-2';"
                                                                title="Select Option"><span class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="list-mode hide">
                                                <div class="list-collection-left">
                                                    <div class="list-title-rating">
                                                        <div class="product-title"><a class="title-5"
                                                                href="/collections/shop-2-col-side-bar/products/copper-tapered-3-tier-tiffin-lunch-boxes-set-of-2">Copper Tapered 3
                                                                Tier Tiffin Lunch Boxes Set Of</a></div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1447864107066"></span>
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
                                                                <option selected="selected" value="13429844869178">S / black</option>
                                                                <option value="13429844934714">S / yellow</option>
                                                                <option value="13429844967482">S / red</option>
                                                                <option value="13429845033018">M / black</option>
                                                                <option value="13429845065786">M / yellow</option>
                                                                <option value="13429845098554">M / red</option>
                                                                <option value="13429845164090">L / black</option>
                                                                <option value="13429845196858">L / yellow</option>
                                                                <option value="13429845262394">L / red</option>
                                                            </select>
                                                        </div>
                                                        <div class="effect-ajax-cart">
                                                            <input type="hidden" name="quantity" value="1" />
                                                            <button class="_btn select-option" type="button" onclick="window.location='/products/copper-tapered-3-tier-tiffin-lunch-boxes-set-of-2';"
                                                                title="Select Option"><span class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item col-sm-6 ">
                                    <div class="product">
                                        <div class="row-left">
                                            <a href="/collections/shop-2-col-side-bar/products/hand-painted-tea-canisters-with-cork-lids-set-of-4" class="hoverBorder container_item">
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/302_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                    alt="Hand Painted Tea Canisters With Cork Lids Set Of" />
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/301_600x_crop_center.jpg" class="rotation img-responsive"
                                                    alt="Hand Painted Tea Canisters With Cork Lids Set Of" />
                                            </a>
                                            <div class="hover-mask">
                                                <ul class="quickview-wishlist-wrapper">
                                                    <li class="quickview">
                                                        <div class="product-ajax-cart">
                                                            <div data-handle="hand-painted-tea-canisters-with-cork-lids-set-of-4" data-target="#quick-shop-modal" class="quick_shop"
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
                                                    <a title="Add To Wishlist" class="wishlist wishlist-hand-painted-tea-canisters-with-cork-lids-set-of-4"
                                                        data-wishlisthandle="hand-painted-tea-canisters-with-cork-lids-set-of-4"><span class="cs-icon icon-heart"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-right animMix">
                                            <div class="grid-mode">
                                                <div class="product-title-price">
                                                    <div class="group">
                                                        <div class="product-title"><a class="title-5"
                                                                href="/collections/shop-2-col-side-bar/products/hand-painted-tea-canisters-with-cork-lids-set-of-4">Hand Painted Tea
                                                                Canisters With Cork Lids Set Of</a></div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1447843168314"></span>
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
                                                                <option selected="selected" value="13429625815098">S / black</option>
                                                                <option value="13429625847866">S / yellow</option>
                                                                <option value="13429625880634">S / red</option>
                                                                <option value="13429625913402">M / black</option>
                                                                <option value="13429625946170">M / yellow</option>
                                                                <option value="13429625978938">M / red</option>
                                                                <option value="13429626011706">L / black</option>
                                                                <option value="13429626044474">L / yellow</option>
                                                                <option value="13429626077242">L / red</option>
                                                            </select>
                                                        </div>
                                                        <div class="effect-ajax-cart">
                                                            <input type="hidden" name="quantity" value="1" />
                                                            <button class="_btn select-option" type="button" onclick="window.location='/products/hand-painted-tea-canisters-with-cork-lids-set-of-4';"
                                                                title="Select Option"><span class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="list-mode hide">
                                                <div class="list-collection-left">
                                                    <div class="list-title-rating">
                                                        <div class="product-title"><a class="title-5"
                                                                href="/collections/shop-2-col-side-bar/products/hand-painted-tea-canisters-with-cork-lids-set-of-4">Hand Painted Tea
                                                                Canisters With Cork Lids Set Of</a></div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1447843168314"></span>
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
                                                                <option selected="selected" value="13429625815098">S / black</option>
                                                                <option value="13429625847866">S / yellow</option>
                                                                <option value="13429625880634">S / red</option>
                                                                <option value="13429625913402">M / black</option>
                                                                <option value="13429625946170">M / yellow</option>
                                                                <option value="13429625978938">M / red</option>
                                                                <option value="13429626011706">L / black</option>
                                                                <option value="13429626044474">L / yellow</option>
                                                                <option value="13429626077242">L / red</option>
                                                            </select>
                                                        </div>
                                                        <div class="effect-ajax-cart">
                                                            <input type="hidden" name="quantity" value="1" />
                                                            <button class="_btn select-option" type="button" onclick="window.location='/products/hand-painted-tea-canisters-with-cork-lids-set-of-4';"
                                                                title="Select Option"><span class="cs-icon icon-bag"></span><span class="cart-text">Add to cart</span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item col-sm-6 ">
                                    <div class="product">
                                        <div class="row-left">
                                            <a href="/collections/shop-2-col-side-bar/products/gray-suede-druzy-cuff-bracelet-1" class="hoverBorder container_item">
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/501_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                    alt="Gray Suede Druzy Cuff Bracelet" />
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/502_600x_crop_center.jpg" class="rotation img-responsive"
                                                    alt="Gray Suede Druzy Cuff Bracelet" />
                                            </a>
                                            <div class="hover-mask">
                                                <ul class="quickview-wishlist-wrapper">
                                                    <li class="quickview">
                                                        <div class="product-ajax-cart">
                                                            <div data-handle="gray-suede-druzy-cuff-bracelet-1" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
                                                    <a title="Add To Wishlist" class="wishlist wishlist-gray-suede-druzy-cuff-bracelet-1" data-wishlisthandle="gray-suede-druzy-cuff-bracelet-1"><span
                                                            class="cs-icon icon-heart"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-right animMix">
                                            <div class="grid-mode">
                                                <div class="product-title-price">
                                                    <div class="group">
                                                        <div class="product-title"><a class="title-5" href="/collections/shop-2-col-side-bar/products/gray-suede-druzy-cuff-bracelet-1">Gray Suede Druzy
                                                                Cuff Bracelet</a>
                                                        </div>
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
                                                        <div class="product-title"><a class="title-5" href="/collections/shop-2-col-side-bar/products/gray-suede-druzy-cuff-bracelet-1">Gray Suede Druzy
                                                                Cuff Bracelet</a>
                                                        </div>
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
                                <div class="product-item col-sm-6 ">
                                    <div class="product">
                                        <div class="row-left">
                                            <a href="/collections/shop-2-col-side-bar/products/gray-suede-druzy-cuff-bracelet" class="hoverBorder container_item">
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/04_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                    alt="Gray Suede Druzy Cuff Bracelet" />
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/03_600x_crop_center.jpg" class="rotation img-responsive"
                                                    alt="Gray Suede Druzy Cuff Bracelet" />
                                            </a>
                                            <div class="hover-mask">
                                                <ul class="quickview-wishlist-wrapper">
                                                    <li class="quickview">
                                                        <div class="product-ajax-cart">
                                                            <div data-handle="gray-suede-druzy-cuff-bracelet" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
                                                    <a title="Add To Wishlist" class="wishlist wishlist-gray-suede-druzy-cuff-bracelet" data-wishlisthandle="gray-suede-druzy-cuff-bracelet"><span
                                                            class="cs-icon icon-heart"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-right animMix">
                                            <div class="grid-mode">
                                                <div class="product-title-price">
                                                    <div class="group">
                                                        <div class="product-title"><a class="title-5" href="/collections/shop-2-col-side-bar/products/gray-suede-druzy-cuff-bracelet">Gray Suede Druzy
                                                                Cuff Bracelet</a>
                                                        </div>
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
                                                        <div class="product-title"><a class="title-5" href="/collections/shop-2-col-side-bar/products/gray-suede-druzy-cuff-bracelet">Gray Suede Druzy
                                                                Cuff Bracelet</a>
                                                        </div>
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
                                <div class="product-item col-sm-6 ">
                                    <div class="product">
                                        <div class="row-left">
                                            <a href="/collections/shop-2-col-side-bar/products/gray-suede-druzy-cuff-bracelet-2" class="hoverBorder container_item">
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/b1_600x_crop_center.jpg" class="not-rotation img-responsive front"
                                                    alt="Gray Suede Druzy Cuff Bracelet" />
                                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/b2_600x_crop_center.jpg" class="rotation img-responsive"
                                                    alt="Gray Suede Druzy Cuff Bracelet" />
                                            </a>
                                            <div class="hover-mask">
                                                <ul class="quickview-wishlist-wrapper">
                                                    <li class="quickview">
                                                        <div class="product-ajax-cart">
                                                            <div data-handle="gray-suede-druzy-cuff-bracelet-2" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
                                                    <a title="Add To Wishlist" class="wishlist wishlist-gray-suede-druzy-cuff-bracelet-2" data-wishlisthandle="gray-suede-druzy-cuff-bracelet-2"><span
                                                            class="cs-icon icon-heart"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-right animMix">
                                            <div class="grid-mode">
                                                <div class="product-title-price">
                                                    <div class="group">
                                                        <div class="product-title"><a class="title-5" href="/collections/shop-2-col-side-bar/products/gray-suede-druzy-cuff-bracelet-2">Gray Suede Druzy
                                                                Cuff Bracelet</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1447991935034"></span>
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
                                                                <option selected="selected" value="14171846213690">Default Title</option>
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
                                                        <div class="product-title"><a class="title-5" href="/collections/shop-2-col-side-bar/products/gray-suede-druzy-cuff-bracelet-2">Gray Suede Druzy
                                                                Cuff Bracelet</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="shopify-product-reviews-badge" data-id="1447991935034"></span>
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
                                                                <option selected="selected" value="14171846213690">Default Title</option>
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
                            <div class="pagination_group">
                                <ul class="pagination pagination-collection">
                                    <li class="prev"><a class="disabled" href="javascript:;"><i class="cs-icon icon-ios-arrow-left"></i><span>Previous</span></a></li>
                                    <li class="active"><a href="javascript:;">1</a></li>
                                    <li><a href="/collections/shop-2-col-side-bar?page=2&sort_by=manual">2</a></li>
                                    <li><a href="/collections/shop-2-col-side-bar?page=3&sort_by=manual">3</a></li>
                                    <li><a href="/collections/shop-2-col-side-bar?page=4&sort_by=manual">4</a></li>
                                    <li class="next"><a href="/collections/shop-2-col-side-bar?page=2&sort_by=manual"><span>Next</span><i class="cs-icon icon-ios-arrow-right"></i></a></li>
                                </ul>
                            </div>
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
                $('.collection-items .product-item').removeClass('col-sm-6');
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
                $('.collection-items .product-item').addClass('col-sm-6');
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