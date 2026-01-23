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
        <script type="text/javascript">
            (function (c, l, a, r, i, t, y) {
                c[a] =
                    c[a] ||
                    function () {
                        (c[a].q = c[a].q || []).push(arguments);
                    };
                t = l.createElement(r);
                t.async = 1;
                t.src = "https://www.clarity.ms/tag/" + i;
                y = l.getElementsByTagName(r)[0];
                y.parentNode.insertBefore(t, y);
            })(window, document, "clarity", "script", "g8g0172zsy");
        </script>
        <link rel="canonical" href="{{ url()->current() }}" />
        <meta name="google-site-verification" content="qd1Sl3ASzGRmQzz8CkQdFonfHGcU_D9aLIjSkVJ8Cg4" />
        <meta charset="UTF-8" />
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        {{--
        <meta name="description" content="This is the description of my website." />
        --}}
        <meta name="google-site-verification" content="qd1Sl3ASzGRmQzz8CkQdFonfHGcU_D9aLIjSkVJ8Cg4" />
        <meta charset="UTF-8" />
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <meta name="keywords" content="sales CRM, lead management system, lead management CRM, sales CRM software, free sales CRM, CRM to manage leads, sales CRM tools, sales lead tracking software, CRM for sales and marketing" />
        <meta name="author" content="creativegigs" />
        {{-- <meta name="keywords" content="Digital marketing agency, Digital marketing company, Digital marketing services" /> --}}
        <meta name="author" content="creativegigs" />

        {{--
        <meta name="description" content="getlead" />
        --}}

        <meta name="og:image" content='{{ url("website/images/fav-icon/icon.png") }}' />
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- For Window Tab Color -->
        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#fff" />
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#fff" />
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#fff" />
        <meta name="google-site-verification" content="qd1Sl3ASzGRmQzz8CkQdFonfHGcU_D9aLIjSkVJ8Cg4" />

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="56x56" href="{{ url('website/images/fav-icon/icon.png') }}" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  
        <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">


        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- <link rel="stylesheet" type="text/css" href="css/flashy.min.css"> -->
        <!-- Main style sheet -->
        {{ Html::style('website/css/style.css') }} 
        {{ Html::style('website/css/responsive.css') }} 
        {{ Html::style('website/css/resp.css') }} 
        {{ Html::style('website/css/owl-carousel/owl.carousel.css') }} 
        {{ Html::style('website/css/owl-carousel/owl.theme.css') }} 
        {{ Html::style('website/css/owl-carousel/animate.css') }} 
        {{ Html::style('website/css/custom.css') }}
        {{ Html::style('website/css/flashy.css/flashy.min.css') }}
        <!-- Fix Internet Explorer ______________________________________-->
        <!-- Fix Internet Explorer ______________________________________-->
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script src="website/vendor/html5shiv.js"></script>
            <script src="website/vendor/respond.js"></script>
        <![endif]-->

        @yield('title') @yield('css')

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
            <img height="1" width="1" style="display: none;" src="https://www .facebook.com/tr?id=928667834850317&ev=PageView&noscript=1" />
        </noscript>
        <!-- End Meta Pixel Code -->

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
            }
        </style>
		
		
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
		
		
    </head>

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

    <body>
        <!-- Google Tag Manager (noscript) -->
        {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFXWSC5" height="0" width="0" style="display: none; visibility: hidden;"></iframe></noscript> --}}
        <!-- End Google Tag Manager (noscript) -->
        <div class="main-page-wrapper">
            <div class="theme-main-menu theme-menu-one menu-white main-p-color container-fluid">
                <div class="d-flex align-items-center">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            {{ Html::image('website/images/logo/logo.svg', 'logo', array('class' => 'logo-class','width'=> 225)) }}
                        </a>
                    </div>
                    <nav id="mega-menu-holder" class="navbar navbar-expand-lg pl-5 ml-auto">
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
                                                        



                                                        
<!-- <div class="col-sm-12">
                                                            <a href="{{ route('telecalling') }}" class="img-box">
                                                                <span class="text text-left">Telecalling </span>
                                                               
                                                            </a>
                                                        </div>



                                                        <div class="col-sm-12">
                                                            <a href="{{ route('education-consultancy-crm') }}" class="img-box">
                                                                <span class="text text-left">Education Consultancy </span>
                                                             
                                                            </a>
                                                        </div>


                                                            <div class="col-sm-12">
                    <a href="{{ route('facebook-crm') }}" class="img-box">
                        <span class="text text-left">Facebook CRM</span>
          
                        
                    </a>
                </div>
                <div class="col-sm-12">
                    <a href="{{ route('information-technology') }}" class="img-box">
                        <span class="text text-left">Information Technology </span>
                      
                        
                    </a>
                </div>
                <div class="col-sm-12">
                    <a href="{{ route('manufacturing-crm') }}" class="img-box">
                        <span class="text text-left">Manufacturing </span>
                     
                
                    </a>
                </div>
                <div class="col-sm-12">
                    <a href="{{ route('real-estate-crm') }}" class="img-box">
                        <span class="text text-left">Real Estate </span>
                      
                    </a>
                </div>
                
                <div class="col-sm-12">
                    <a href="{{ route('travel-crm') }}" class="img-box">
                        <span class="text text-left">Tours & Travels </span>
                      
                    </a>
                </div>
                <div class="col-sm-12">
                    <a href="{{ route('whatsapp-crm') }}" class="img-box">
                        <span class="text text-left">WhatsApp CRM</span>
                     
                    </a>
                </div>
                                                         -->
                                               
                                                  
                                                       
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
                                        <!-- <li><a href="" class="login">Login</a></li> -->
                                        <li><a href="https://app.getleadcrm.com/login" class="secondary-btn" target="_blank">Login</a></li>
                                        <li><a href="https://app.getleadcrm.com/register" class="primary-btn" target="_blank">Free Trial</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            {{-- code :START --}} @yield('code') {{-- code : END --}}
            <footer class="theme-footer-one pt-60">
                <div class="top-footer">
                    <div class="container">
                        <div class="subscribe-col">
                            <h4>Join our newsletter to keep up to date with us!</h4>
                            <form class="d-flex align-items-center justify-content-center">
                                <input type="text" placeholder="Enter your email" />
                                <button class="primary-btn">Subscribe</button>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-12 footer-list">
                                <h5 class="footer-title">Resources</h5>
                                <ul>
                                    {{-- <li><a href="{{ route('help-center-page') }}">Help Center</a></li> --}}
                                    <li><a href="https://glhelp.getleadcrm.com" target="_blank">Help Center</a></li>
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
                                    <li><a href="https://partner.getleadcrm.com/" target="_blank">Partner With Us</a></li>
                                    <li><a href="{{ route('contact-us-page') }}"> Contact us</a></li>
				    <li><a href="{{ route('career-page') }}"> Careers</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-12 footer-list">
                                <h5 class="footer-title">Features</h5>
                                <ul>
                                    <li><a href="{{ route('lead-management-page') }}">Lead Management CRM </a></li>
                                    <li><a href="{{ route('deal-management-page') }}">Deal management CRM </a></li>
                                    <!-- <li><a href="{{ route('features') }}">Ticketing System </a></li> -->
                                    <li><a href="{{ route('integration-page') }}">Integrations</a></li>
                                    <li><a href="{{ route('contact-management') }}">Contact management</a></li>
                                    <li><a href="{{ route('sales-pipeline') }}">Sales pipeline</a></li>
                                    {{-- <li><a href="{{ route('integration-page') }}">Integrations</a></li> --}}
                                    {{-- <li><a href="{{ route('integration-page') }}">Integrations</a></li> --}}
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-12 footer-list">
                                <h5 class="footer-title">Products</h5>
                                <ul>
                                    <li><a href="{{ route('whats_new') }}">What's new</a></li>
                                    <!-- <li><a href="{{ route('integration-page') }}">Integration</a></li> -->
                                    <li><a href="{{ route('crm-mobile-app') }}">Mobile App</a></li>
                                    {{-- <li><a href="{{ route('crm-page') }}">CRM</a></li> --}}
                                    <li><a href="https://app.getleadcrm.com/register">Demo</a></li>
                                    <!-- <li><a href="{{ route('sitemap') }}">Sitemap</a></li> -->
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-12 footer-list">
                                <h5 class="footer-title">Industry</h5>
                                <ul>
                                    <!-- <li><a href="{{ route('industries') }}">Manufacturing CRM</a></li> -->
                                    <!-- <li><a href="{{ route('industries') }}">Information Technology CRM </a></li> -->
                                    <li><a href="{{ route('automative-CRM') }}">Automotive CRM</a></li>
                                    <!-- <li><a href="{{ route('industries') }}">Tours & Travels CRM</a></li> -->
                                    <li><a href="{{ route('healthcare') }}">Healthcare</a></li>
                                    <li><a href="{{ route('financial') }}">Financial CRM</a></li>
                                    <li><a href="{{ route('consulting') }}">Consulting CRM</a></li>
                                    <li><a href="{{ route('retail') }}">Retail CRM </a></li>
                                    <!-- <li><a href="{{ route('industries') }}">Chemical CRM</a></li> -->
                                    <!-- <li><a href="{{ route('industries') }}">Food CRM</a></li> -->
                                    <!-- <li><a href="{{ route('industries') }}">Textile CRM</a></li> -->
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-12 footer-links">
                                <h5 class="footer-title">Get the app</h5>
                                <div>
                                    <a href="https://play.google.com/store/apps/details?id=com.getlead.app" target="_blank" class="d-flex align-items-center justify-content-center">
                                        {{ Html::image('website/images/playstore1.svg','getlead') }}&nbsp;&nbsp;Playstore
                                    </a>
                                </div>
                                <div>
                                    <a href="https://apps.apple.com/in/app/getlead/id1557445421" target="_blank" class="d-flex align-items-center justify-content-center">
                                        {{ Html::image('website/images/apple.svg','getlead') }}&nbsp;&nbsp;App store
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container copy-links">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="">
                            <ul class="mt-4 mb-4 f-social-links">
    <li>
        <a href="https://www.facebook.com/getleadconnect" target="_blank" aria-label="Visit our Facebook page">
            <i class="fa-brands fa-facebook-f"></i>
        </a>
    </li>
    <li>
        <a href="https://instagram.com/getleadconnect" target="_blank" aria-label="Visit our Instagram profile">
            <i class="fa-brands fa-instagram"></i>
        </a>
    </li>
    <li>
        <a href="https://www.youtube.com/channel/UCY7DNqAFvIKvvDn0agBFDGQ" target="_blank" aria-label="Visit our YouTube channel">
            <i class="fa-brands fa-youtube"></i>
        </a>
    </li>
    <li>
        <a href="https://twitter.com/getleadconnect" target="_blank" aria-label="Visit our X profile">
            <i class="">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="font-size: 12px; width: 15px; fill: #fff;">
                    <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
                </svg>
            </i>
        </a>
    </li>
    <li>
        <a href="https://www.linkedin.com/in/getleadconnect" target="_blank" aria-label="Visit our LinkedIn profile">
            <i class="fa-brands fa-linkedin-in"></i>
        </a>
    </li>
</ul>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="bottom-footer-content">
                                <p>Design with love &copy; <span style="color:#ffffff;">Getlead Analytics 2025.</span> All right reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <button class="scroll-top tran3s">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </button>
        </div>
    
    <!-- WhatsApp button -->
    <a id="whatsapp-button" href="https://wa.me/918453555000" target="_blank" title="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
            <!--Start of Tawk.to Script-->
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
<!--End of Tawk.to Script-->
        {{ Html::script('website/vendor/jquery.2.2.3.min.js') }} {{ Html::script('website/vendor/popper.js/popper.min.js') }} 
        {{ Html::script('website/vendor/bootstrap/js/bootstrap.min.js') }} 
        {{ Html::script('website/vendor/mega-menu/assets/js/custom.js') }} 
        {{ Html::script('website/vendor/aos-next/dist/aos.js') }} 
        {{ Html::script('website/vendor/WOW-master/dist/wow.min.js') }} 
        {{ Html::script('website/js/owl.carousel.min.js') }} 
        {{ Html::script('website/vendor/ajaxchimp/jquery.ajaxchimp.min.js') }} 
        {{ Html::script('website/vendor/tilt.jquery.js') }} 
        {{ Html::script('website/vendor/fancybox/dist/jquery.fancybox.min.js') }} 
        {{ Html::script('website/js/theme.js') }}
                <!-- /.main-page-wrapper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        {{ Html::script('website/js/flashy.js/flashy.min.js') }}

        @yield('script')
    </body>
</html>
