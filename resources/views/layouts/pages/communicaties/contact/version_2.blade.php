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
                            <h1 class="page-title hidden">Contact Version 2</h1>
                            <div class="breadcrumb clearfix">
                                <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                    <a href="https://cs-locamart-1.myshopify.com" title="Locamart #1" itemprop="url">
                                        <span itemprop="title">Home</span>
                                    </a>
                                </span>
                                <span class="arrow-space"></span>
                                <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                    <a href="/pages/contact-version-2" title="Contact Version 2" itemprop="url"><span itemprop="title">Contact Version 2</span></a>
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
                    <div id="shopify-section-contact-v2-template" class="shopify-section">
                        <div class="contact-content contact-v2">
                            <div class="container">
                                <div class="row">
                                    <div class="contact-content-group">
                                        <div class="contact-content-inner">
                                            <div class="detail-layout col-sm-6">
                                                <div class="detail-content">
                                                    <div class="detail-item-layout">
                                                        <h5 class="detail-title">Our Address</h5>
                                                        <div class="detail-item-content">
                                                            <address>42 Champs Elysées 75000 Paris France</address>
                                                            <p>Call: <a href="tel:+44%20(0)%20800%20123%204567">+44 (0) 800 123 4567</a></p>
                                                            <p>Email: <a href="mailto:info@monia.com">info@monia.com</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="detail-item-layout">
                                                        <h5 class="detail-title">Opening hours</h5>
                                                        <div class="detail-item-content">
                                                            <p>Monday to Friday: 10am to 7pm</p>
                                                            <p>Saturday: 10am to 4pm</p>
                                                            <p>Sunday: 12am t0 4pm</p>
                                                        </div>
                                                    </div>
                                                    <div class="detail-item-layout">
                                                        <h5 class="detail-title">Info</h5>
                                                        <div class="detail-item-content">
                                                            <p>
                                                                Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit. Cras neque nulla, convallis non commodo et, euismod
                                                                nonsese. At vero eos et accusamus et iusto odio
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="social-layout">
                                                        <h5 class="detail-title">Stay social</h5>
                                                        <div class="social-content">
                                                            <a href="https://www.facebook.com/shopify" title="Locamart #1 on Facebook" class="icon-social facebook"><i
                                                                    class="cs-icon icon-social-facebook"></i></a>
                                                            <a href="Stay social" title="Locamart #1 on Twitter" class="icon-social twitter"><i class="cs-icon icon-social-twitter"></i></a>
                                                            <a href="https://www.pinterest.com/shopify" title="Locamart #1 on Pinterest" class="icon-social pinterest"><i
                                                                    class="cs-icon icon-social-pinterest"></i></a>
                                                            <a href="https://instagram.com/shopify" title="Locamart #1 on Instagram" class="icon-social instagram"><i
                                                                    class="cs-icon icon-social-instagram"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-layout col-sm-6">
                                                <div class="form-content">
                                                    <div class="form-title">
                                                        <h2 class="detail-title">Get in Touch</h2>
                                                    </div>
                                                    <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden"
                                                            name="form_type" value="contact" /><input type="hidden" name="utf8" value="✓" />
                                                        <div id="contactFormWrapper" class="group_form">
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