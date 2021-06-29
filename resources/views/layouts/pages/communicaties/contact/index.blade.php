@extends('layouts.master')
@section('content')
@section('title','Contact')
<!-- Main Content -->
<div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
        <section class="heading-content heading-page">
            <div class="container">
                <div class="row">
                    <div class="page-heading-inner heading-group">
                        <div class="breadcrumb-group">
                            <h1 class="page-title hidden">Contact Version 1</h1>
                            <div class="breadcrumb clearfix">
                                <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://cs-locamart-1.myshopify.com" title="Locamart #1" itemprop="url"><span
                                            itemprop="title">Home</span></a></span>
                                <span class="arrow-space"></span>
                                <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                    <a href="/pages/contact-version-1" title="Contact Version 1" itemprop="url"><span itemprop="title">Contact Version 1</span></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-content">
            <div class="page-wrapper">
                <div class="page-inner">
                    <div id="shopify-section-contact-v1-template" class="shopify-section">
                        <div class="contact-content contact-v1">
                            <div class="detail-layout">
                                <div class="container">
                                    <div class="row">
                                        <div class="detail-inner">
                                            <div class="detail-title">
                                                <h2>Contact info</h2>
                                                <p class="sub-title">
                                                    Welcome to our Website. We are glad to have you around.
                                                </p>
                                            </div>
                                            <div class="detail-content">
                                                <div class="detail-content-item">
                                                    <div class="title">
                                                        <i class="cs-icon icon-mail"></i>
                                                        <span>Email</span>
                                                    </div>
                                                    <div class="content">
                                                        <a href="mailto:hello@locamart.com">hello@locamart.com</a>
                                                    </div>
                                                </div>
                                                <div class="detail-content-item">
                                                    <div class="title">
                                                        <i class="cs-icon icon-phone"></i>
                                                        <span>Phone number</span>
                                                    </div>
                                                    <div class="content">
                                                        <a href="tel:+84 (800) 55 555 55">+84 (800) 55 555 55</a>
                                                    </div>
                                                </div>
                                                <div class="detail-content-item">
                                                    <div class="title">
                                                        <i class="cs-icon icon-marker"></i>
                                                        <span>Address</span>
                                                    </div>
                                                    <div class="content">
                                                        <address>59 Downtown St, Melbourne Australia</address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-map-layout">
                                <div class="google-maps-layout clearfix">
                                    <div id="contact_map" class="m_map"></div>
                                </div>
                                <div class="form-layout">
                                    <div class="form-title">
                                        <h2>Get in Touch</h2>
                                    </div>
                                    <div class="form-content">
                                        <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type"
                                                value="contact" /><input type="hidden" name="utf8" value="✓" />
                                            <div id="contactFormWrapper" class="group_form">
                                                <div class="form-item-top">
                                                    <div class="form-item-top-inner">
                                                        <div class="form-item">
                                                            <label>Name</label>
                                                            <input type="text" name="contact[name]" placeholder="Name" />
                                                        </div>
                                                        <div class="form-item">
                                                            <label>Email</label>
                                                            <input type="email" name="contact[email]" placeholder="Email" />
                                                        </div>
                                                        <div class="form-item">
                                                            <label>Subject</label>
                                                            <input type="text" name="contact[subject]" placeholder="Subject" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-item">
                                                    <label>Your message</label>
                                                    <textarea rows="15" cols="75" name="contact[body]" placeholder="Your message"></textarea>
                                                </div>
                                                <div class="form-item">
                                                    <input type="submit" value="Send" class="_btn" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(window).ready(function($) {
                                if(jQuery().gMap){
                                if($('#contact_map').length){
                                    $('#contact_map').gMap({
                                    zoom: 17,
                                    scrollwheel: true,
                                    maptype: 'ROADMAP',
                                    markers:[
                                        {
                                        address: '474 Ontario St Toronto, ON M4X 1M7 Canada',
                                        html: '_address'
                                        }
                                    ]
                                    });
                                }
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection