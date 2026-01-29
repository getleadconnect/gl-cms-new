<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-DEE9B3QZ66"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());
            gtag("config", "G-DEE9B3QZ66");
        </script>
        
        <!-- Google Tag Manager -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-MFXWSC5");
        </script>
        <!-- End Google Tag Manager -->
        
        <!-- Microsoft Clarity -->
        <script type="text/javascript">
            (function (c, l, a, r, i, t, y) {
                c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments); };
                t = l.createElement(r);
                t.async = 1;
                t.src = "https://www.clarity.ms/tag/" + i;
                y = l.getElementsByTagName(r)[0];
                y.parentNode.insertBefore(t, y);
            })(window, document, "clarity", "script", "g8g0172zsy");
        </script>
        
        <!-- Basic Meta Tags (NO DUPLICATES) -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- SEO Meta Tags -->
        <meta name="google-site-verification" content="qd1Sl3ASzGRmQzz8CkQdFonfHGcU_D9aLIjSkVJ8Cg4" />
        <meta name="author" content="Getlead Analytics" />
        <meta name="robots" content="index, follow" />
        <link rel="canonical" href="{{ url()->current() }}" />
        
        <!-- Default Keywords (can be overridden per page) -->
        <meta name="keywords" content="CRM software India, lead management system, sales CRM software, best CRM India, free CRM software, CRM for small business, sales tracking software, customer relationship management" />
        
        <!-- Open Graph / Social Media Tags -->
        <meta property="og:site_name" content="Getlead CRM" />
        <meta property="og:locale" content="en_IN" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:image" content="{{ url('website/images/og-image.png') }}" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        @yield('og_tags')
        
        <!-- Twitter Card Tags -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@getleadconnect" />
        <meta name="twitter:image" content="{{ url('website/images/og-image.png') }}" />
        @yield('twitter_tags')
        
        <!-- Theme Colors -->
        <meta name="theme-color" content="#f91942" />
        <meta name="msapplication-navbutton-color" content="#f91942" />
        <meta name="apple-mobile-web-app-status-bar-style" content="#f91942" />
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="56x56" href="{{ url('website/images/fav-icon/icon.png') }}" />
        <link rel="apple-touch-icon" href="{{ url('website/images/fav-icon/icon.png') }}" />
        
        <!-- Preconnect for Performance -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link rel="preconnect" href="https://cdnjs.cloudflare.com" />
        
        <!-- Fonts & Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        
        <!-- Main Stylesheets -->
        {{ Html::style('website/css/style.css') }} 
        {{ Html::style('website/css/responsive.css') }} 
        {{ Html::style('website/css/resp.css') }} 
        {{ Html::style('website/css/owl-carousel/owl.carousel.css') }} 
        {{ Html::style('website/css/owl-carousel/owl.theme.css') }} 
        {{ Html::style('website/css/owl-carousel/animate.css') }} 
        {{ Html::style('website/css/custom.css') }}
        {{ Html::style('website/css/flashy.css/flashy.min.css') }}
        
        <!-- Page-specific Title & Meta -->
        @yield('title')
        @yield('css')
        
        <!-- Facebook Pixel -->
        <script>
            !(function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = "2.0";
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s);
            })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
            fbq("init", "928667834850317");
            fbq("track", "PageView");
        </script>
        <noscript>
            <img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=928667834850317&ev=PageView&noscript=1" />
        </noscript>
        
        <!-- Chatwoot -->
        <script>
            (function(d,t) {
                var BASE_URL="https://app.chatwoot.com";
                var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
                g.src=BASE_URL+"/packs/js/sdk.js";
                g.defer = true;
                g.async = true;
                s.parentNode.insertBefore(g,s);
                g.onload=function(){
                    window.chatwootSDK.run({
                        websiteToken: 'Rb76G98NV2P1TNH3cUk7mDdH',
                        baseUrl: BASE_URL
                    })
                }
            })(document,"script");
        </script>
        
        <!-- Schema.org Organization Markup -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Getlead CRM",
            "url": "https://www.getleadcrm.com",
            "logo": "https://www.getleadcrm.com/website/images/logo/logo.svg",
            "description": "Best CRM software in India for lead management, sales tracking, and customer relationship management.",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "IN"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91-8453-555-000",
                "contactType": "sales",
                "availableLanguage": ["English", "Hindi"]
            },
            "sameAs": [
                "https://www.facebook.com/getleadconnect",
                "https://instagram.com/getleadconnect",
                "https://twitter.com/getleadconnect",
                "https://www.linkedin.com/in/getleadconnect",
                "https://www.youtube.com/channel/UCY7DNqAFvIKvvDn0agBFDGQ"
            ]
        }
        </script>
        
        <!-- Schema.org SoftwareApplication Markup -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "Getlead CRM",
            "operatingSystem": "Web, Android, iOS",
            "applicationCategory": "BusinessApplication",
            "offers": {
                "@type": "Offer",
                "price": "0",
                "priceCurrency": "INR",
                "description": "Free trial available"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.5",
                "ratingCount": "1300"
            }
        }
        </script>
        
        @yield('schema')
        
        <style>
            #whatsapp-button {
                position: fixed;
                bottom: 20px;
                left: 27px;
                background-color: #25D366;
                color: #fff;
                border: none;
                border-radius: 50%;
                padding: 15px;
                font-size: 34px;
                cursor: pointer;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                z-index: 9999;
            }
        </style>
    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFXWSC5" height="0" width="0" style="display: none; visibility: hidden;"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        
        <div class="main-page-wrapper">
            <div class="theme-main-menu theme-menu-one menu-white main-p-color container-fluid">
                <div class="d-flex align-items-center">
                    <div class="logo">
                        <a href="{{ url('/') }}" aria-label="Getlead CRM Home">
                            {{ Html::image('website/images/logo/logo.svg', 'Getlead CRM - Best CRM Software in India', array('class' => 'logo-class','width'=> 225)) }}
                        </a>
                    </div>
                    <nav id="mega-menu-holder" class="navbar navbar-expand-lg pl-5 ml-auto" aria-label="Main Navigation">
                        <div class="container nav-container">
                            <button
                                class="navbar-toggler navbar-toggler-right"
                                type="button"
                                data-toggle="collapse"
                                data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent"
                                aria-expanded="false"
                                aria-label="Toggle navigation"
                            >
                                <i class="flaticon-setup"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-5">
                                    <li class="nav-item dropdown mega-dropdown-holder">
                                        <a class="nav-link dropdown-toggle" href="{{ route('features') }}" data-toggle="dropdown">Features</a>
                                        <ul class="dropdown-menu mega-container">
                                            <li>
                                                <div class="clearfix">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-4 col-sm-6">
                                                            <a href="{{ route('lead-management-page') }}" class="img-box">
                                                                <span class="text text-left">Lead management</span>
                                                                <p>Organized sales funnels</p>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-6 col-md-4 col-sm-6">
                                                            <a href="{{ route('task-page') }}" class="img-box">
                                                                <span class="text text-left">Task</span>
                                                                <p>Efficient task assignment</p>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-6 col-md-4 col-sm-6">
                                                            <a href="{{ route('deal-management-page') }}" class="img-box">
                                                                <span class="text text-left">Deal management</span>
                                                                <p>Simplifies closing process</p>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-6 col-md-4 col-sm-6">
                                                            <a href="{{ route('campaign-page') }}" class="img-box">
                                                                <span class="text text-left">Campaigns</span>
                                                                <p>Targeted marketing strategies</p>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-6 col-md-4 col-sm-6">
                                                            <a href="{{ route('integration-page') }}" class="img-box">
                                                                <span class="text text-left">Integrations</span>
                                                                <p>Smooth data exchange</p>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-6 col-md-4 col-sm-6">
                                                            <a href="{{ route('crm-mobile-app') }}" class="img-box">
                                                                <span class="text text-left">Mobile App</span>
                                                                <p>On-the-go accessibility</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown mega-dropdown-holder">
                                        <a class="nav-link" href="{{ route('industries') }}">Industries</a>
                                        <ul class="dropdown-menu mega-container" style="width:auto">
                                            <li>
                                                <div class="clearfix">
                                                    <div class="row"> 
                                                        <div class="col-sm-12">
                                                            <a href="{{ route('automative-CRM') }}" class="img-box">
                                                                <span class="text text-left">Automotive </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <a href="{{ route('financial') }}" class="img-box">
                                                                <span class="text text-left">Financial </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <a href="{{ route('retail') }}" class="img-box">
                                                                <span class="text text-left">Retail </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <a href="{{ route('healthcare') }}" class="img-box">
                                                                <span class="text text-left">Healthcare</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <a href="{{ route('consulting') }}" class="img-box">
                                                                <span class="text text-left">Consulting </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown mega-dropdown-holder">
                                        <a class="nav-link" href="{{ route('integration-page') }}">Integrations</a>
                                    </li>
                                    <li class="nav-item dropdown mega-dropdown-holder">
                                        <a class="nav-link" href="{{ route('price-page') }}">Pricing</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="https://getleadcrm.com/blog">Blog</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="{{ route('about-us-page') }}">About</a>
                                    </li>
                                </ul>
                                <div class="menu-cta">
                                    <ul>
                                        <li><a href="tel:+918453555000" class="ph">+91 8453 555 000</a></li>
                                        <li><a href="https://app.getleadcrm.com/login" class="secondary-btn" target="_blank" rel="noopener">Login</a></li>
                                        <li><a href="https://app.getleadcrm.com/register" class="primary-btn" target="_blank" rel="noopener">Free Trial</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            
            {{-- Main Content --}}
            @yield('code')
            
            <footer class="theme-footer-one pt-60">
                <div class="top-footer">
                    <div class="container">
                        <div class="subscribe-col">
                            <h4>Join our newsletter to keep up to date with us!</h4>
                            <form class="d-flex align-items-center justify-content-center" aria-label="Newsletter signup">
                                <input type="email" placeholder="Enter your email" aria-label="Email address" required />
                                <button class="primary-btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-12 footer-list">
                                <h5 class="footer-title">Resources</h5>
                                <ul>
                                    <li><a href="https://glhelp.getleadcrm.com" target="_blank" rel="noopener">Help Center</a></li>
                                    <li><a href="{{ route('developer-hub-page') }}">Developer Hub</a></li>
                                    <li><a href="{{ route('faq-page') }}">FAQ</a></li>
                                    <li><a href="https://getleadcrm.com/blog">Blog</a></li>
                                    <li><a href="https://getleadcrm.com/sitemap.xml">Sitemap</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-12 footer-list">
                                <h5 class="footer-title">Quick Links</h5>
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ route('about-us-page') }}">About</a></li>
                                    <li><a href="{{ route('price-page') }}">Pricing</a></li>
                                    <li><a href="https://partner.getleadcrm.com/" target="_blank" rel="noopener">Partner With Us</a></li>
                                    <li><a href="{{ route('contact-us-page') }}">Contact us</a></li>
                                    <li><a href="{{ route('career-page') }}">Careers</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-12 footer-list">
                                <h5 class="footer-title">Features</h5>
                                <ul>
                                    <li><a href="{{ route('lead-management-page') }}">Lead Management CRM</a></li>
                                    <li><a href="{{ route('deal-management-page') }}">Deal Management CRM</a></li>
                                    <li><a href="{{ route('integration-page') }}">Integrations</a></li>
                                    <li><a href="{{ route('contact-management') }}">Contact Management</a></li>
                                    <li><a href="{{ route('sales-pipeline') }}">Sales Pipeline</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-12 footer-list">
                                <h5 class="footer-title">Products</h5>
                                <ul>
                                    <li><a href="{{ route('whats_new') }}">What's New</a></li>
                                    <li><a href="{{ route('crm-mobile-app') }}">Mobile App</a></li>
                                    <li><a href="https://app.getleadcrm.com/register" target="_blank" rel="noopener">Demo</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-12 footer-list">
                                <h5 class="footer-title">Industry</h5>
                                <ul>
                                    <li><a href="{{ route('automative-CRM') }}">Automotive CRM</a></li>
                                    <li><a href="{{ route('healthcare') }}">Healthcare CRM</a></li>
                                    <li><a href="{{ route('financial') }}">Financial CRM</a></li>
                                    <li><a href="{{ route('consulting') }}">Consulting CRM</a></li>
                                    <li><a href="{{ route('retail') }}">Retail CRM</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-12 footer-links">
                                <h5 class="footer-title">Get the App</h5>
                                <div>
                                    <a href="https://play.google.com/store/apps/details?id=com.getlead.app" target="_blank" rel="noopener" class="d-flex align-items-center justify-content-center" aria-label="Download from Google Play Store">
                                        {{ Html::image('website/images/playstore1.svg','Google Play Store') }}&nbsp;&nbsp;Playstore
                                    </a>
                                </div>
                                <div>
                                    <a href="https://apps.apple.com/in/app/getlead/id1557445421" target="_blank" rel="noopener" class="d-flex align-items-center justify-content-center" aria-label="Download from Apple App Store">
                                        {{ Html::image('website/images/apple.svg','Apple App Store') }}&nbsp;&nbsp;App Store
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container copy-links">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <ul class="mt-4 mb-4 f-social-links">
                                <li>
                                    <a href="https://www.facebook.com/getleadconnect" target="_blank" rel="noopener" aria-label="Visit our Facebook page">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/getleadconnect" target="_blank" rel="noopener" aria-label="Visit our Instagram profile">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCY7DNqAFvIKvvDn0agBFDGQ" target="_blank" rel="noopener" aria-label="Visit our YouTube channel">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/getleadconnect" target="_blank" rel="noopener" aria-label="Visit our X profile">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="font-size: 12px; width: 15px; fill: #fff;">
                                                <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
                                            </svg>
                                        </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/getleadconnect" target="_blank" rel="noopener" aria-label="Visit our LinkedIn profile">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="bottom-footer-content">
                                <p>Design with love &copy; <span style="color:#ffffff;">Getlead Analytics {{ date('Y') }}.</span> All rights reserved | <a href="{{ route('privacy-policy') }}" style="color:#fff;">Privacy Policy</a> | <a href="{{ route('terms-and-conditions') }}" style="color:#fff;">Terms</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            
            <button class="scroll-top tran3s" aria-label="Scroll to top">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </button>
        </div>
    
        <!-- WhatsApp Button -->
        <a id="whatsapp-button" href="https://wa.me/918453555000" target="_blank" rel="noopener" title="Chat with us on WhatsApp" aria-label="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
        
        <!-- Tawk.to Chat -->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/5bf63a1440105007f379171d/default';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        
        <!-- Scripts -->
        {{ Html::script('website/vendor/jquery.2.2.3.min.js') }}
        {{ Html::script('website/vendor/popper.js/popper.min.js') }} 
        {{ Html::script('website/vendor/bootstrap/js/bootstrap.min.js') }} 
        {{ Html::script('website/vendor/mega-menu/assets/js/custom.js') }} 
        {{ Html::script('website/vendor/aos-next/dist/aos.js') }} 
        {{ Html::script('website/vendor/WOW-master/dist/wow.min.js') }} 
        {{ Html::script('website/js/owl.carousel.min.js') }} 
        {{ Html::script('website/vendor/ajaxchimp/jquery.ajaxchimp.min.js') }} 
        {{ Html::script('website/vendor/tilt.jquery.js') }} 
        {{ Html::script('website/vendor/fancybox/dist/jquery.fancybox.min.js') }} 
        {{ Html::script('website/js/theme.js') }}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
        {{ Html::script('website/js/flashy.js/flashy.min.js') }}

        @yield('script')
    </body>
</html>
