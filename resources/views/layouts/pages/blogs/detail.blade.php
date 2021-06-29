@extends('layouts.master')
@section('content')
@section('title','Detail')
<!-- Main Content -->
<div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
        <section class="heading-content">
            <div class="heading-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="page-heading-inner heading-group">
                            <div class="breadcrumb-group">
                                <h3 class="page-title hidden"><span>Post Detail</span></h3>
                                <div class="breadcrumb clearfix">
                                    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://cs-locamart-1.myshopify.com" title="Locamart #1" itemprop="url"><span
                                                itemprop="title">Home</span></a></span>
                                    <span class="arrow-space"></span>
                                    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb" itemprop="title">
                                        <a href="{{route('blog.news')}}" title="News" itemprop="url"><span itemprop="title">News</span></a>
                                    </span>
                                    <span class="arrow-space"></span>
                                    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                        <a href="{{route('blog.detail',['slug' => Str::slug('Top 4 tips to handle job interviews in English')])}}" title="Top 4 tips to handle job interviews in English" itemprop="url"><span
                                                itemprop="title">Top 4 tips to handle job interviews in English</span></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="article-layout">
            <div class="container">
                <div class="row">
                    <div id="shopify-section-article-template" class="shopify-section">
                        <div class="article-inner" itemscope itemtype="http://schema.org/NewsArticle">
                            <meta itemprop="datePublished" content="2018-07-06 00:05:26 -0400" />
                            <meta itemprop="dateModified" content="2018-07-06 00:05:00 -0400" />
                            <meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="{{route('blog.detail',['slug' => Str::slug('Top 4 tips to handle job interviews in English')])}}" />
                            <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                    <meta itemprop="url" content="https://cdn.shopify.com/s/files/1/0097/2954/0154/articles/b2.jpg?v=1530849926">
                                </div>
                                <meta itemprop="name" content="Shopify">
                            </div>
                            <div class="article-content">
                                <div class="group_article">
                                    <div class="col-sm-9 article-left-group">
                                        <!-- Begin article -->
                                        <div class="article-body clearfix">
                                            <div class="group-blog-top">
                                                <div class="article-title">
                                                    <h1 class="article-name" itemprop="headline">Top 4 tips to handle job interviews in English</h1>
                                                </div>
                                                <ul class="article-info list-inline">
                                                    <li class="article-info-content">
                                                        <span class="info-title">By</span>
                                                        <span class="info-caption">Locamart Alkaid</span>
                                                    </li>
                                                    <li class="article-info-content">
                                                        <span class="info-title">On</span>
                                                        <span class="info-caption">Jul 06, 2018</span>
                                                    </li>
                                                    <li class="article-info-content">
                                                        <span class="info-title">Comment</span>
                                                        <span class="info-caption">0</span>
                                                    </li>
                                                    <li class="article-info-content share-with supports-fontface">
                                                        <span class="info-title">
                                                            <i class="cs-icon icon-share-alt"></i>
                                                            Share this post
                                                        </span>
                                                        <div class="share-content hover">
                                                            <div class="social-blog social-sharing is-clean"
                                                                data-permalink="https://cs-locamart-1.myshopify.com{{route('blog.detail',['slug' => Str::slug('Top 4 tips to handle job interviews in English')])}}">
                                                                <a target="_blank"
                                                                    href="//www.facebook.com/sharer.php?u=https://cs-locamart-1.myshopify.com{{route('blog.detail',['slug' => Str::slug('Top 4 tips to handle job interviews in English')])}}"
                                                                    class="share-facebook">
                                                                    <span class="fa fa-facebook"></span>
                                                                </a>
                                                                <a target="_blank"
                                                                    href="//twitter.com/share?text=Top%204%20tips%20to%20handle%20job%20interviews%20in%20English&amp;url=https://cs-locamart-1.myshopify.com{{route('blog.detail',['slug' => Str::slug('Top 4 tips to handle job interviews in English')])}}"
                                                                    class="share-twitter">
                                                                    <span class="fa fa-twitter"></span>
                                                                </a>
                                                                <a target="_blank"
                                                                    href="//pinterest.com/pin/create/button/?url=https://cs-locamart-1.myshopify.com{{route('blog.detail',['slug' => Str::slug('Top 4 tips to handle job interviews in English')])}}&amp;media=http://cdn.shopify.com/s/files/1/0097/2954/0154/articles/b2_1024x1024.jpg?v=1530849926&amp;description=Top%204%20tips%20to%20handle%20job%20interviews%20in%20English"
                                                                    class="share-pinterest">
                                                                    <span class="fa fa-pinterest"></span>
                                                                </a>
                                                                <a target="_blank"
                                                                    href="//plus.google.com/share?url=https://cs-locamart-1.myshopify.com{{route('blog.detail',['slug' => Str::slug('Top 4 tips to handle job interviews in English')])}}"
                                                                    class="share-google">
                                                                    <!-- Cannot get Google+ share count with JS yet -->
                                                                    <span class="fa fa-google-plus"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="top-banner article_banner_show article-image" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/articles/b2.jpg?v=1530849926" alt="" />
                                                    <meta itemprop="url" content="https://cdn.shopify.com/s/files/1/0097/2954/0154/articles/b2.jpg?v=1530849926">
                                                    <meta itemprop="width" content="863">
                                                    <meta itemprop="height" content="575">
                                                </div>
                                            </div>
                                            <div class="articledescript_group">
                                                <div class="article-description" itemprop="description">
                                                    <p>A professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content
                                                        still not being ready. Think of a news blog that’s filled with content hourly on the day of going live. However, reviewers tend to be distracted
                                                        by comprehensible content, say, a random text copied newspaper or the internet.</p>
                                                    <div class="_group_blog_detail">
                                                        <div class="_text_blog_left">
                                                            <p>Consectetur cras cubilia amet a non proin id et vitae fermentum parturient dui urna ullamcorper scelerisque ipsum praesent mattis. A ac
                                                                vestibulum dignissim consectetur scelerisque blandit neque est condimentum non fringilla nisl augue litora sem suspendisse tempor a
                                                                parturient. Cras scelerisque diam ultricies iaculis natoque tincidunt dis cursus pulvinar ad sed eget ornare a ullamcorper.</p>
                                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                                                incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                        </div>
                                                        <div class="_img_blog_detail"><img alt="" src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/2_large.jpg?v=1528686191" style="float: none;">
                                                        </div>
                                                    </div>
                                                    <h5 class="t1">WHAT WE WILL DOT ? IT IS FOR YOU</h5>
                                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                                                        labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                                                        nisi ut aliquid ex ea commodi consequatur. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                                                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum
                                                        necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                                                    <p><strong class="quote">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                                                            modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam
                                                            corporis suscipit laboriosam</strong></p>
                                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                                                        labore et dolore magnam aliquam quaerat voluptatem. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et magnis dis
                                                        parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                                                        Donec vitae sapien ut libero venenatis faucibus Nulla consequat massa quis enim.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End article -->
                                        <!-- Social & Tags -->
                                        <div class="group-blog-btm">
                                            <div class="tags-area">
                                                <a href="{{route('blog.news')}}/tagged/buy-it" title="Show articles tagged buy it">buy it</a>
                                                <a href="{{route('blog.news')}}/tagged/locamart" title="Show articles tagged locamart">locamart</a>
                                                <a href="{{route('blog.news')}}/tagged/marketplace" title="Show articles tagged Marketplace">Marketplace</a>
                                                <a href="{{route('blog.news')}}/tagged/multi-vendor" title="Show articles tagged Multi Vendor">Multi Vendor</a>
                                                <a href="{{route('blog.news')}}/tagged/responsive" title="Show articles tagged Responsive">Responsive</a>
                                                <a href="{{route('blog.news')}}/tagged/shopify" title="Show articles tagged Shopify">Shopify</a>
                                            </div>
                                        </div>
                                        <!-- Prev Next -->
                                        <div class="current-body">
                                            <a class="prev" href="{{route('blog.news')}}/gopro-s-karma-drone-is-back-on-sale-after-design-1">
                                                <span class="current-title"><i class="cs-icon icon-ios-arrow-left"></i>Previous Post</span>
                                                <span class="current-article-title">GoPro’s Karma drone is back on sale after design</span>
                                            </a>
                                            <a class="next" href="{{route('blog.news')}}/huawei-s-just-bought-an-internet-of-things-startup-2">
                                                <span class="current-title">Next Post<i class="cs-icon icon-ios-arrow-right"></i></span>
                                                <span class="current-article-title">Huawei’s just bought an internet-of-things startup</span>
                                            </a>
                                        </div>
                                        <!-- End Prev Next -->
                                        <!-- Begin comments -->
                                        <div id="comments" class="comments">
                                            <div class="comment_form">
                                                <form method="post" action="{{route('blog.detail',['slug' => Str::slug('Top 4 tips to handle job interviews in English')])}}/comments#comment_form" id="comment_form" accept-charset="UTF-8"
                                                    class="comment-form"><input type="hidden" name="form_type" value="new_comment" /><input type="hidden" name="utf8" value="✓" />
                                                    <h2 class="article-title page-title"><span>Leave your comment</span></h2>
                                                    <div class="group_form">
                                                        <div class="col-sm-6">
                                                            <div class="input-row">
                                                                <input type="text" placeholder="Your Name" id="comment_author" name="comment[author]" size="40" class="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="input-row">
                                                                <input type="text" placeholder="Email Address" id="comment_email" name="comment[email]" size="40" class="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="input-row">
                                                                <textarea id="comment_body" placeholder="Comment" name="comment[body]" cols="40" rows="5" class="text"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="input-row">
                                                                <input type="submit" value="Submit Comment" class="_btn" id="comment-submit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End comments -->
                                    </div>
                                    <div class="col-sm-3 sidebar-blog sidebar">
                                        <div class="sidebar-block blog-search">
                                            <div class="sidebar-content">
                                                <form class="search" action="/search">
                                                    <input type="hidden" name="type" value="article" />
                                                    <input type="text" name="q" class="search_box" placeholder="Search ports here..." value="" />
                                                    <button class="search-submit" type="submit">
                                                        <span class="cs-icon icon-search"></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="sidebar-block blog-category">
                                            <h3 class="sidebar-title">
                                                <span class="text">Our Blogs</span>
                                                <span class="cs-icon icon-ios-minus-empty"></span>
                                            </h3>
                                            <div class="sidebar-content">
                                                <ul class="category">
                                                    <li class="nav-item active">
                                                        <a href="{{route('blog.news')}}">
                                                            Accessories
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{route('blog.masonry')}}">
                                                            Design
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{route('blog.masonry')}}">
                                                            Desktop PCs
                                                        </a>
                                                    </li>
                                                    <li class="nav-item active">
                                                        <a href="{{route('blog.news')}}">
                                                            Events
                                                        </a>
                                                    </li>
                                                    <li class="nav-item active">
                                                        <a href="{{route('blog.news')}}">
                                                            Laptops
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{route('blog.masonry')}}">
                                                            Links & Quotes
                                                        </a>
                                                    </li>
                                                    <li class="nav-item active">
                                                        <a href="{{route('blog.news')}}">
                                                            News
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{route('blog.masonry')}}">
                                                            PC Components
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{route('blog.masonry')}}">
                                                            Social
                                                        </a>
                                                    </li>
                                                    <li class="nav-item active">
                                                        <a href="{{route('blog.news')}}">
                                                            Technology
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{route('blog.masonry')}}">
                                                            Uncategorized
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="sidebar-block blog-recent">
                                            <h3 class="sidebar-title">
                                                <span class="text">Recent posts</span>
                                                <span class="cs-icon icon-ios-minus-empty"></span>
                                            </h3>
                                            <div class="sidebar-content recent-article">
                                                <div class="ra-item-inner">
                                                    <div class="article-item">
                                                        <div class="article-image">
                                                            <a href="{{route('blog.news')}}/most-comfortable-gaming-seats-for-playing-station"><img
                                                                    src="//cdn.shopify.com/s/files/1/0097/2954/0154/articles/b7.jpg?v=1530850151" alt="" /></a>
                                                        </div>
                                                        <div class="articleinfo_group">
                                                            <div class="blog-title-group">
                                                                <a class="blog-title" href="{{route('blog.news')}}">
                                                                    News
                                                                </a>
                                                            </div>
                                                            <div class="article-title">
                                                                <h2 class="article-name"><a href="{{route('blog.news')}}/most-comfortable-gaming-seats-for-playing-station">Most comfortable Gaming Seats for
                                                                        Playing Station</a></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="article-item">
                                                        <div class="article-image">
                                                            <a href="{{route('blog.news')}}/gopro-s-karma-drone-is-back-on-sale-after-design-1"><img
                                                                    src="//cdn.shopify.com/s/files/1/0097/2954/0154/articles/b4_ffd391c5-6658-47df-a70f-f5134545b9b2.jpg?v=1530849999" alt="" /></a>
                                                        </div>
                                                        <div class="articleinfo_group">
                                                            <div class="blog-title-group">
                                                                <a class="blog-title" href="{{route('blog.news')}}">
                                                                    News
                                                                </a>
                                                            </div>
                                                            <div class="article-title">
                                                                <h2 class="article-name"><a href="{{route('blog.news')}}/gopro-s-karma-drone-is-back-on-sale-after-design-1">GoPro’s Karma drone is back on sale
                                                                        after design</a></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="article-item">
                                                        <div class="article-image">
                                                            <a href="{{route('blog.detail',['slug' => Str::slug('Top 4 tips to handle job interviews in English')])}}"><img
                                                                    src="//cdn.shopify.com/s/files/1/0097/2954/0154/articles/b2.jpg?v=1530849926" alt="" /></a>
                                                        </div>
                                                        <div class="articleinfo_group">
                                                            <div class="blog-title-group">
                                                                <a class="blog-title" href="{{route('blog.news')}}">
                                                                    News
                                                                </a>
                                                            </div>
                                                            <div class="article-title">
                                                                <h2 class="article-name"><a href="{{route('blog.detail',['slug' => Str::slug('Top 4 tips to handle job interviews in English')])}}">Top 4 tips to handle job interviews in
                                                                        English</a></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="article-item">
                                                        <div class="article-image">
                                                            <a href="{{route('blog.news')}}/huawei-s-just-bought-an-internet-of-things-startup-2"><img
                                                                    src="//cdn.shopify.com/s/files/1/0097/2954/0154/articles/b1.jpg?v=1530849902" alt="" /></a>
                                                        </div>
                                                        <div class="articleinfo_group">
                                                            <div class="blog-title-group">
                                                                <a class="blog-title" href="{{route('blog.news')}}">
                                                                    News
                                                                </a>
                                                            </div>
                                                            <div class="article-title">
                                                                <h2 class="article-name"><a href="{{route('blog.news')}}/huawei-s-just-bought-an-internet-of-things-startup-2">Huawei’s just bought an
                                                                        internet-of-things startup</a></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sidebar-block blog-banner">
                                            <div class="sidebar-content">
                                                <a href="">
                                                    <img src="//cdn.shopify.com/s/files/1/0097/2954/0154/files/ad1.png?v=1530515183" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="sidebar-block blog-tags">
                                            <h3 class="sidebar-title">
                                                <span class="text">Tags</span>
                                                <span class="cs-icon icon-ios-minus-empty"></span>
                                            </h3>
                                            <div class="sidebar-content">
                                                <ul class="tags-inner tags">
                                                    <li class="active"><a href="https://cs-locamart-1.myshopify.com{{route('blog.news')}}">All</a></li>
                                                    <li><a href="{{route('blog.news')}}/tagged/amazon-like" title="Show articles tagged amazon like">amazon like</a></li>
                                                    <li><a href="{{route('blog.news')}}/tagged/awesome" title="Show articles tagged Awesome">Awesome</a></li>
                                                    <li><a href="{{route('blog.news')}}/tagged/bootstrap" title="Show articles tagged bootstrap">bootstrap</a></li>
                                                    <li><a href="{{route('blog.news')}}/tagged/buy-it" title="Show articles tagged buy it">buy it</a></li>
                                                    <li><a href="{{route('blog.news')}}/tagged/clean-design" title="Show articles tagged clean design">clean design</a></li>
                                                    <li><a href="{{route('blog.news')}}/tagged/dokan" title="Show articles tagged Dokan">Dokan</a></li>
                                                    <li><a href="{{route('blog.news')}}/tagged/electronics" title="Show articles tagged electronics">electronics</a></li>
                                                    <li><a href="{{route('blog.news')}}/tagged/locamart" title="Show articles tagged locamart">locamart</a></li>
                                                    <li><a href="{{route('blog.news')}}/tagged/marketplace" title="Show articles tagged Marketplace">Marketplace</a></li>
                                                    <li><a href="{{route('blog.news')}}/tagged/multi-vendor" title="Show articles tagged Multi Vendor">Multi Vendor</a></li>
                                                    <li><a href="{{route('blog.news')}}/tagged/responsive" title="Show articles tagged Responsive">Responsive</a></li>
                                                    <li><a href="{{route('blog.news')}}/tagged/shopify" title="Show articles tagged Shopify">Shopify</a></li>
                                                </ul>
                                            </div>
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