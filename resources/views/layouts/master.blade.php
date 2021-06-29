<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <?php $time = time() ?>

    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>45cm - @yield('title')</title>
        <meta name="description" content="The small framework with powerful features">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- style -->
        <link rel="shortcut icon" href="//laravel.com/img/favicon/favicon-32x32.png" type="image/png">
        {{-- <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/0097/2954/0154/files/f_ico_16x16.png?v=45cm20211534839652" type="image/png"> --}}
        <link rel="stylesheet" href="{{asset('assets/app.css?v='.time())}}">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/cs-locamart.styles.scss.css?v=45cm202111572228082987249774" rel="stylesheet" type="text/css" media="all" />
        <link href="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/cs-font-icon.scss.css?v=45cm2021961994641092038836" rel="stylesheet" type="text/css" media="all" />
        <link href="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/owl.carousel.css?v=45cm20218144978463140523962" rel="stylesheet" type="text/css" media="all" />
        <link href="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/cs.animate.css?v=45cm202117224502066238329574" rel="stylesheet" type="text/css" media="all" />
        <link href="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/slideshow-fade.css?v=45cm2021570127101561232615" rel="stylesheet" type="text/css" media="all" />
        <link href="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/animations.css?v=45cm20212525858275981523280" rel="stylesheet" type="text/css" media="all" />
        <link href="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/jquery.fancybox.scss.css?v=45cm202115288084958268359363" rel="stylesheet" type="text/css" media="all" />
        <link href="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/slick.css?v=13226781297073473370" rel="stylesheet" type="text/css" media="all" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/owl.carousel.min.js?v=45cm202111524421238300965855" type="text/javascript"></script>
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/slick.min.js?v=8998077448227001557" type="text/javascript"></script>
        <!-- end style -->
    </head>

    <body>
        <section class="newsletter-container">
            <div id="newsletter-popup" class="modal fade" style="display: none;" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="nl-wraper-popup bounceInDown" style="background-image:  url(//cdn.shopify.com/s/files/1/0097/2954/0154/files/Popup_bg.png);">
                    <div class="nl-popup-close"><span onclick="$('#newsletter-popup').modal('hide')" data-toggle="tooltip" data-placement="top" title="Close"><i class="cs-icon icon-close"></i></span>
                    </div>
                    <div class="nl-wraper-popup-inner">
                        <h4 class="title">Newsletter!</h4>
                        <form action="https://codespot.us5.list-manage.com/subscribe/post?u=ed73bc2d2f8ae97778246702e&amp;id=c63b4d644d" method="post" name="mc-embedded-subscribe-form"
                            target="_blank">
                            <p class="caption">Be the firtst in the know by getting special deals and offers sent directly to your inbox </p>
                            <div class="group_input">
                                <input class="form-control" type="email" name="EMAIL" placeholder="Enter your email here" />
                                <button class="_btn" type="submit">Sign Up</button>
                            </div>
                        </form>
                        <div id="popup-hide">
                            <input type="checkbox" id="mc-popup-hide" value="0" onclick="checkcookie()" checked="checked"> <label for="mc-popup-hide">Don't show this popup again</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="scroll-top">
            <!-- Float right icon -->
            <div class="float-right-icon" style="z-index: 99999;">
                <ul>
                    <li>
                        <div id="scroll-to-top" data-toggle="" data-placement="left" title="Scroll to Top" class="off">
                            <i class="fa fa-angle-up"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- HEADER: MENU + HEROE SECTION -->
        <header>
            @includeIf('layouts.partials.header')
        </header>
        <!-- CONTENT -->
        <section class="main-content_container">
            @yield('content')
            @includeIf('sweetalert::alert')
            @stack('style-login')
            @stack('phone-register')
        </section>
        <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
        <footer>
            @includeIf('layouts.partials.footer')
        </footer>
        {{-- <script src="{{ asset('/js/app.js') }}"></script> --}}
        <!-- script -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js" type="text/javascript"></script>
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/imagesloaded.pkgd.min.js?v=45cm20215820985433317357554" type="text/javascript"></script>
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/modernizr.min.js?v=45cm20212662005555110224600" type="text/javascript"></script>
        <script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js" type="text/javascript"></script>
        <script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js" type="text/javascript"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js" type="text/javascript"></script>
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/jquery.touchSwipeMobile.min.js?v=45cm20216687179408903515166" type="text/javascript"></script>
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/instafeed.min.js?v=45cm20219003247094669648496" type="text/javascript"></script>
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/jquery.fancybox.js?v=45cm202118455314495685835" type="text/javascript"></script>
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/modernizr.js?v=45cm20219865522083544884188" type="text/javascript"></script>
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/classie.js?v=45cm20212553876034997405128" type="text/javascript"></script>
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/scripts.js?v=45cm20218189853570011813905" type="text/javascript"></script>
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/jquery.flexslider.min.js?v=45cm20213323765235605948987" type="text/javascript"></script>
        <!-- zoom img product -->
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/jquery.zoom.min.js?v=45cm20218774171225184114080" type="text/javascript"></script>
        <!---->
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/application-appear.js?v=45cm202113337507278471060813" type="text/javascript"></script>
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/cs-locamart.script.js?v=45cm202114565918526157819616" type="text/javascript"></script>
        <!-- <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/cs-locamart.cart.js?v=45cm20217755552824840757419" type="text/javascript"></script> -->
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/cs-locamart.optionSelect.js?v=45cm202117169567798415304377" type="text/javascript"></script>
        <!-- <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/cs-locamart.wishlist.js?v=45cm20211386704817737788170" type="text/javascript"></script> -->
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/jquery.currencies.min.js?v=45cm20215828149325599179599" type="text/javascript"></script>
        <script src="//cdn.shopify.com/s/files/1/0097/2954/0154/t/2/assets/linkOptionSelectors.js?v=45cm202113104736964003451843" type="text/javascript"></script>
        <script type="text/javascript">
            var qs_quantity = '',
            wishlistpage = 0,
            comparepage = 0,
            checkCollection = 0,
            checkProductV3 = 0;
        </script>
        <script>
            window.fbAsyncInit = function() {
              FB.init({
                appId      : '3467704560122004',
                cookie     : true,
                xfbml      : true,
                version    : 'v11.0'
              });
              FB.AppEvents.logPageView();   
            };
            (function(d, s, id){
               var js, fjs = d.getElementsByTagName(s)[0];
               if (d.getElementById(id)) {return;}
               js = d.createElement(s); js.id = id;
               js.src = "https://connect.facebook.net/en_US/sdk.js";
               fjs.parentNode.insertBefore(js, fjs);
             }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- end script -->
    </body>

</html>