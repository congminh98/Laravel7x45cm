<div class="collection-leftsidebar sidebar col-sm-3 clearfix" style="display: {{isset($type) && $type == '' ? 'none' : ''}}">
    <div class="collection-leftsidebar-group">
        <div class="close-leftsidebar-group">
            <a href="javascript:void(0)" class="close-leftsidebar">
                <span class="cs-icon icon-close"></span>
            </a>
        </div>
        <div class="collection-leftsidebar-group-inner">
            <div class="sidebar-block collection-block">
                <h3 class="sidebar-title">
                    <span class="text">Categories</span>
                    <span class="fa fa-angle-double-right"></span>
                </h3>
                <div class="sidebar-content">
                    <ul class="list-cat">
                        <li><a class="{{isset($data) && $data == "all-products" ? 'active' : ''}}" href="{{route('collections.accessories')}}"><span>All Products</span><span
                                    class="count">43</span></a></li>
                        <li class="{{isset($data) && $data == "accessories" ? 'active' : ''}}"><a href="/collections/accessories"><span>Accessories</span><span class="count"><span>10</span></span></a>
                        </li>
                        <li><a href="{{route('collections.accessories')}}"><span>Bedroom</span><span class="count">15</span></a></li>
                        <li><a href="{{route('collections.accessories')}}"><span>Decor</span><span class="count">15</span></a></li>
                        <li><a href="{{route('collections.accessories')}}"><span>Featured</span><span class="count">13</span></a></li>
                        <li><a href="{{route('collections.accessories')}}"><span>Gifs</span><span class="count">21</span></a></li>
                        <li><a href="{{route('collections.accessories')}}"><span>Heath & Beauty</span><span class="count">13</span></a></li>
                        <li><a href="{{route('collections.accessories')}}"><span>Home & Garden</span><span class="count">14</span></a></li>
                        <li><a href="{{route('collections.accessories')}}"><span>Livingroom</span><span class="count">16</span></a></li>
                    </ul>
                </div>
            </div>
            @if($filter == 'true')
            <!-- filter tags group -->
            <div class="sidebar-block filter-block">
                <h3 class="sidebar-title">
                    <span class="text">Filter by color</span>
                    <span class="fa fa-angle-double-right"></span>
                </h3>
                <div class="sidebar-content">
                    <ul class="filter-content filter-color">
                        <li data-handle="green" class="swatch-tag ">
                            <a href="{{route('collections.accessories',['color'=>'green'])}}" title="Narrow selection to products matching tag Green">
                                <span style="background-color: green; background-image: url(//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/green.png?v=10912521498005916277);"
                                    class="color-swatch btooltip" title="Green">
                                </span>
                                <span>Green</span>
                            </a>
                        </li>
                        <li data-handle="black" class="swatch-tag ">
                            <a href="{{route('collections.accessories',['color'=>'black'])}}" title="Narrow selection to products matching tag Black">
                                <span style="background-color: black; background-image: url(//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/black.png?v=10504700648667204755);"
                                    class="color-swatch btooltip" title="Black">
                                </span>
                                <span>Black</span>
                            </a>
                        </li>
                        <li data-handle="blue" class="swatch-tag ">
                            <a href="{{route('collections.accessories',['color'=>'blue'])}}" title="Narrow selection to products matching tag Blue">
                                <span style="background-color: blue; background-image: url(//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/blue.png?v=13380226402887259120);"
                                    class="color-swatch btooltip" title="Blue">
                                </span>
                                <span>Blue</span>
                            </a>
                        </li>
                        <li data-handle="red" class="swatch-tag ">
                            <a href="{{route('collections.accessories',['color'=>'red'])}}" title="Narrow selection to products matching tag Red">
                                <span style="background-color: red; background-image: url(//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/red.png?v=14927944861062642344);"
                                    class="color-swatch btooltip" title="Red">
                                </span>
                                <span>Red</span>
                            </a>
                        </li>
                        <li data-handle="brown" class="swatch-tag ">
                            <a href="{{route('collections.accessories',['color'=>'brown'])}}" title="Narrow selection to products matching tag Brown">
                                <span style="background-color: brown; background-image: url(//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/brown.png?31);" class="color-swatch btooltip"
                                    title="Brown">
                                </span>
                                <span>Brown</span>
                            </a>
                        </li>
                        <li da ta-h andle="silver" class="swatch-tag ">
                            <a href="{{route('collections.accessories',['color'=>'silver'])}}" title="Narrow selection to products matching tag Silver">
                                <span style="background-color: silver; background-image: url(//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/silver.png?v=9031537276593806572);"
                                    class="color-swatch btooltip" title="Silver">
                                </span>
                                <span>Silver</span>
                            </a>
                        </li>
                        <li data-handle="gray" class="swatch-tag ">
                            <a href="{{route('collections.accessories',['color'=>'gray'])}}" title="Narrow selection to products matching tag Gray">
                                <span style="background-color: gray; background-image: url(//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/gray.png?v=15639045215056365859);"
                                    class="color-swatch btooltip" title="Gray">
                                </span>
                                <span>Gray</span>
                            </a>
                        </li>
                        <li data-handle="pink" class="swatch-tag ">
                            <a href="{{route('collections.accessories',['color'=>'pink'])}}" title="Narrow selection to products matching tag Pink">
                                <span style="background-color: pink; background-image: url(//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/pink.png?v=11260171052543853073);"
                                    class="color-swatch btooltip" title="Pink">
                                </span>
                                <span>Pink</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-block filter-block">
                <h3 class="sidebar-title">
                    <span class="text">Filter by size</span>
                    <span class="fa fa-angle-double-right"></span>
                </h3>
                <div class="sidebar-content">
                    <ul class="filter-content ">
                        <li data-handle="xl"><a href="{{route('collections.accessories')}}" title="Narrow selection to products matching tag XL"><span class="fe-checkbox"></span> XL</a>
                        </li>
                        <li data-handle="l"><a href="{{route('collections.accessories')}}" title="Narrow selection to products matching tag L"><span class="fe-checkbox"></span> L</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-block filter-block">
                <h3 class="sidebar-title">
                    <span class="text">Filter by price</span>
                    <span class="fa fa-angle-double-right"></span>
                </h3>
                <div class="sidebar-content">
                    <ul class="filter-content ">
                        <li data-handle="under-100"><a href="{{route('collections.accessories')}}" title="Narrow selection to products matching tag Under $100">
                                <span class="fe-checkbox"></span> Under $100</a>
                        </li>
                        <li data-handle="100-200"><a href="{{route('collections.accessories')}}" title="Narrow selection to products matching tag $100 - $200">
                                <span class="fe-checkbox"></span> $100 - $200</a>
                        </li>
                        <li data-handle="above-200"><a href="{{route('collections.accessories')}}" title="Narrow selection to products matching tag Above $200">
                                <span class="fe-checkbox"></span> Above $200</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-block type-block">
                <h3 class="sidebar-title">
                    <span class="text">Type List</span>
                    <span class="fa fa-angle-double-right"></span>
                </h3>
                <div class="sidebar-content">
                    <ul class="type-content">
                        <!--type-->
                        <li class="">
                            <a href="{{route('collections.accessories')}}" title="Type 1">Type 1</a>
                        </li>
                        <li class="">
                            <a href="{{route('collections.accessories')}}" title="Type 2">Type 2</a>
                        </li>
                        <li class="">
                            <a href="{{route('collections.accessories')}}" title="Type 3">Type 3</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-block vendor-block">
                <h3 class="sidebar-title">
                    <span class="text">Vendor List</span>
                    <span class="fa fa-angle-double-right"></span>
                </h3>
                <div class="sidebar-content">
                    <ul class="vendor-content">
                        <!--vendor-->
                        <li class="">
                            <a href="{{route('collections.accessories')}}" title="Vendor 1">Vendor 1</a>
                        </li>
                        <li class="">
                            <a href="{{route('collections.accessories')}}" title="Vendor 2">Vendor 2</a>
                        </li>
                        <li class="">
                            <a href="{{route('collections.accessories')}}" title="Vendor 3">Vendor 3</a>
                        </li>
                    </ul>
                </div>
            </div>
            @elseif($filter == "false")
            <div class="sidebar-block banner-block">
                <div class="sidebar-content">
                    <a href="{{route('collections.accessories')}}" class="banner-item">
                        <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/1_1.png?v=1529636219" alt="" />
                    </a>
                    <a href="{{route('collections.accessories')}}" class="banner-item">
                        <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/2_40dd5e49-38a5-497e-8c9c-9d15e3ec7215.png?v=1529636228" alt="" />
                    </a>
                    <a href="{{route('collections.accessories')}}" class="banner-item">
                        <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/3_e9c3b275-f162-4665-aa37-18cda1d7a5c9.png?v=1529636240" alt="" />
                    </a>
                </div>
            </div>
            <div class="sidebar-block service-block">
                <div class="sidebar-content">
                    <div class="service-item service-item-two">
                        <div class="item-top">
                            <span class="img">
                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/ah1_bcf857b8-194c-47a4-ac99-5f98fde0bf34.png?v=1529911616" alt="" />
                                <img class="icon-hover" src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/a1.png?v=1529636306" alt="" />
                            </span>
                            <span class="title">
                                Safe Payment
                            </span>
                        </div>
                        <p class="caption">
                            Pay with the world’s most popular and secure payment methods.
                        </p>
                    </div>
                    <div class="service-item service-item-two">
                        <div class="item-top">
                            <span class="img">
                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/ah2.png?v=1528860038" alt="" />
                                <img class="icon-hover" src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/a2_fc745912-758e-4308-8a6a-beebac9c47a7.png?v=1529910745" alt="" />
                            </span>
                            <span class="title">
                                Daily Promotion
                            </span>
                        </div>
                        <p class="caption">
                            Get a new great bonus every day. Check out the Locamart
                        </p>
                    </div>
                    <div class="service-item service-item-two">
                        <div class="item-top">
                            <span class="img">
                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/ah3.png?v=1528860058" alt="" />
                                <img class="icon-hover" src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/a3.png?v=1529910736" alt="" />
                            </span>
                            <span class="title">
                                24/7 Help Center
                            </span>
                        </div>
                        <p class="caption">
                            Round-the-clock assistance for a smooth shopping experience.
                        </p>
                    </div>
                    <div class="service-item service-item-two">
                        <div class="item-top">
                            <span class="img">
                                <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/ah4.png?v=1528860087" alt="" />
                                <img class="icon-hover" src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/a4_01bc695b-8be7-49c9-9dc9-120ae92ab73d.png?v=1529910751" alt="" />
                            </span>
                            <span class="title">
                                Daily Promotion
                            </span>
                        </div>
                        <p class="caption">
                            Get a new great bonus every day. Check out the Locamart
                        </p>
                    </div>
                </div>
            </div>
            <div class="sidebar-block recently-block">
                <h3 class="sidebar-title">
                    <span class="text">Recently viewed</span>
                    <span class="fa fa-angle-double-right"></span>
                </h3>
                <div class="sidebar-content">
                    <div class="content-product">
                        <div class="row-container">
                            <div class="product home_product">
                                <div class="row-left">
                                    <a href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}" class="container_item">
                                        <div class="hoverBorderWrapper">
                                            <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/z3_200x_crop_center.jpg?v=1528777929" class="not-rotation img-responsive front"
                                                alt="Whitewash Wood Ladder Decor" />
                                            <div class="mask"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="row-right">
                                    <div class="product-title"><a class="title-5" href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Whitewash Wood Ladder
                                            Decor</a></div>
                                    <div class="rating-star">
                                        <span class="shopify-product-reviews-badge" data-id="1448084766778"></span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price_sale price_normal">
                                            <span class='money'>$40.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-product">
                        <div class="row-container">
                            <div class="product home_product">
                                <div class="row-left">
                                    <a href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}" class="container_item">
                                        <div class="hoverBorderWrapper">
                                            <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/j4_200x_crop_center.jpg?v=1528776422" class="not-rotation img-responsive front"
                                                alt="Whitewash Wood Ladder Decor" />
                                            <div class="mask"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="row-right">
                                    <div class="product-title"><a class="title-5" href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Whitewash Wood Ladder
                                            Decor</a></div>
                                    <div class="rating-star">
                                        <span class="shopify-product-reviews-badge" data-id="1448030240826"></span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price_sale"><span class='money'>$40.00</span></span>
                                        <del class="price_compare"> <span class='money'>$69.00</span></del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-product">
                        <div class="row-container">
                            <div class="product home_product">
                                <div class="row-left">
                                    <a href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}" class="container_item">
                                        <div class="hoverBorderWrapper">
                                            <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/i4_200x_crop_center.jpg?v=1528776313" class="not-rotation img-responsive front"
                                                alt="Wood Barn Door Storage" />
                                            <div class="mask"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="row-right">
                                    <div class="product-title"><a class="title-5" href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Wood Barn Door Storage</a>
                                    </div>
                                    <div class="rating-star">
                                        <span class="shopify-product-reviews-badge" data-id="1448027914298"></span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price_sale price_normal">
                                            <span class='money'>$40.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-product">
                        <div class="row-container">
                            <div class="product home_product">
                                <div class="row-left">
                                    <a href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}" class="container_item">
                                        <div class="hoverBorderWrapper">
                                            <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/u2_200x_crop_center.jpg?v=1528777817" class="not-rotation img-responsive front"
                                                alt="Wood Barn Door Storage" />
                                            <div class="mask"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="row-right">
                                    <div class="product-title"><a class="title-5" href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}">Wood Barn Door Storage</a>
                                    </div>
                                    <div class="rating-star">
                                        <span class="shopify-product-reviews-badge" data-id="1448079130682"></span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price_sale"><span class='money'>$40.00</span></span>
                                        <del class="price_compare"> <span class='money'>$69.00</span></del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-product">
                        <div class="row-container">
                            <div class="product home_product">
                                <div class="row-left">
                                    <a href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}" class="container_item">
                                        <div class="hoverBorderWrapper">
                                            <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/products/31_200x_crop_center.jpg?v=1528772387" class="not-rotation img-responsive front"
                                                alt="Yuma Fire Pit" />
                                            <div class="mask"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="row-right">
                                    <div class="product-title"><a class="title-5" href="{{route('products.detail',['slug'  => Str::slug('Whitewash Wood Ladder Decor')])}}"></a></div>
                                    <div class="rating-star">
                                        <span class="shopify-product-reviews-badge" data-id="1447769997370"></span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price_sale"><span class='money'>$40.00</span></span>
                                        <del class="price_compare"> <span class='money'>$69.00</span></del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-block testimonials-block">
                <div class="sidebar-content testimonials-product-content">
                    <div class="testimonials-item">
                        <span class="group_img">
                            <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/ava1.png?v=1529911967" alt="" />
                        </span>
                        <p class="testimonials-caption">
                            In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best. Nomore picking up the stroller for uneven
                            sidewalk. It may not be the most expensive jogging stroller but for moms who just want a more comfortable ride…it’s perfect.
                        </p>
                        <div class="testimonials-caption-group">
                            <p class="testimonials-name">
                                Nicomede
                            </p>
                            <p class="testimonials-position">
                                Happy Customer
                            </p>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <span class="group_img">
                            <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/ava3.png?v=1529915895" alt="" />
                        </span>
                        <p class="testimonials-caption">
                            In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best. Nomore picking up the stroller for uneven
                            sidewalk. It may not be the most expensive jogging stroller but for moms who just want a more comfortable ride…it’s perfect.
                        </p>
                        <div class="testimonials-caption-group">
                            <p class="testimonials-name">
                                Brind Hudson
                            </p>
                            <p class="testimonials-position">
                                Happy Customer
                            </p>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <span class="group_img">
                            <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/ava2.png?v=1529915902" alt="" />
                        </span>
                        <p class="testimonials-caption">
                            In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best. Nomore picking up the stroller for uneven
                            sidewalk. It may not be the most expensive jogging stroller but for moms who just want a more comfortable ride…it’s perfect.
                        </p>
                        <div class="testimonials-caption-group">
                            <p class="testimonials-name">
                                John Doe
                            </p>
                            <p class="testimonials-position">
                                Happy Customer
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="sidebarMobile sidebar-bottom">
            <button class="sidebarMobile-clear _btn">
                Clear All
            </button>
            <button class="sidebarMobile-close _btn">
                Apply &amp; Close
            </button>
        </div>
    </div>
</div>