@extends('website.layout.design')
@section('title')
<meta name="description" content="Close deals faster with Getlead CRM's deal management software. Automate workflows, access powerful analytics, and take control of your sales pipeline.">
<title>Deal Management with Getlead CRM - Close More Deals Faster</title>
@endsection
@section('og_tags')
<meta property="og:title" content="Deal Management Software | Getlead CRM" />
<meta property="og:description" content="Close deals faster with Getlead CRM's deal management. Automate workflows, access analytics, and control your sales pipeline." />
@endsection
@section('twitter_tags')
<meta name="twitter:title" content="Deal Management Software | Getlead CRM" />
<meta name="twitter:description" content="Close deals faster with Getlead CRM's deal management. Automate workflows, access analytics, and control your sales pipeline." />
@endsection
@section('css')
@endsection
@section('code')
<div class="rogan-hero-section-sec rogan-hero-section rogan-hero-section-v2 rogan-hero-five pt-150  md-pt-100 pos-r">
   <div class="container">
      <div class="main-wrapper pos-r">
         <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s"> Level-Up your<br> <span class="high">Deal management</span> with Getlead
         </h1>
         <p class="second-sub-title banner-sub-title pb-45 md-pb-30 wow fadeInUp animated" data-wow-delay="0.9s">
            The process of converting leads to deals is straightforward and simple. Once a lead has been qualified<br> 
            sand engaged with, the next step is to convert them into a paying customer.
         </p>
         <!-- <div class="banner-img" >
            {{-- <img src="images/deals.svg" alt="getlead"> --}}
            {{ Html::image('website/images/deals.svg','getlead') }}
         </div> -->
         <div class="clear"></div>
      </div>
   </div>
   <div class="chat-box">
      <a href="#">
      {{-- <img src="./images/chat-box.svg" alt="getlead"> --}}
      {{ Html::image('website/images/chat-box.svg','getlead') }}
      </a>
   </div>
</div>
<div class="single-text-section pt-150">
   <div class="container">
      <div class="row text-banner align-items-center">
         <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="">
               <p class="sub-title">ABOUT Deal MANAGEMENT</p>
               <h2>
                  Instantly track the progress of every Deal with a single glance.
               </h2>
               <p class="pb-40">Getlead CRM provides you with the tools and insights to spot potential sales opportunities at a glance, helping you seize them before the competition does.

               </p>
               <div class="yn-btn">
                  <a href="{{ route('request-demo') }}">
                     Request a Demo
                    
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-5 col-md-4 col-sm-12">
            <div class="col-img">
               {{ Html::image('website/images/w-deal.svg','deal management') }}
            </div>
         </div>
      </div>
   </div>
</div>
<div class="about-us-block-two pb-150 md-pt-100 md-pb-100 pos-r">
   <div class="shape-wrapper">
   </div>
   <div class="inner-wrapper pos-r">
      <div class="main-container  mt-40 mob-margin-0 pt-0">
         <div class="container">
            <div class="convertt arrow-vector connect">
               <div class="row">
                  <div class="col-lg-6 col-md-6 analyse">
                     <div class="bx-pad">
                        <div class="theme-title-one md-p0">
                           <p class="sub-title">engaging with customers</p>
                           <h2 class="main-title">Identify sales<br> opportunity quickly
                           </h2>
                        </div>
                        <p class="pb-40 pr-4">Getlead CRM provides you with the tools and insights to spot potential sales opportunities at a glance, helping you seize them before the competition does.</p>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 analyse">
                     <div class="main-img-box pos-r hide-pr md-mt-50 pt-40 pb-40">
                        <div class="img-one pos-r wow fadeIn" data-wow-duration="2s">
                           {{-- <img src="images/identify.svg" alt=""> --}}
                           {{ Html::image('website/images/identify.svg','Identify sales') }}
                        </div>
                        <div class="box-shape pos-r wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="main-container  mt-100 mob-margin-0 pt-0">
         <div class="container">
            <div class="analysee arrow-vector pt-40 pb-40">
               <div class="row">
                  <div class="col-lg-6 col-md-6">
                     <div class="main-img-box pos-r hide-pr  md-mt-50 pt-40 pb-40">
                        <div class="img-one pos-r wow fadeIn	" data-wow-duration="2s">
                           {{-- <img src="images/track.svg" alt=""> --}}
                           {{ Html::image('website/images/track.svg','track deals') }}
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="bx-pad">
                        <div class="theme-title-one md-p0">
                           <p class="sub-title">engaging with customers</p>
                           <h2 class="main-title">Track deals on the go</h2>
                        </div>
                        <p class="pb-40">
                           With Getlead CRM's mobile-friendly interface, you can stay in control of your deals and sales progress no matter where you are. Effortlessly manage and monitor your deals on the fly, ensuring nothing slips through the cracks.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clear"></div>
      </div>
      <div class="main-container align-items-center mt-100 pt-0">
         <div class="container">
            <div class=" convertt connect">
               <div class="row">
                  <div class="col-lg-6  col-md-6 col-12 ">
                     <div class="bx-pad">
                        <div class="theme-title-onemd-p0">
                           <p class="sub-title">engaging with customers</p>
                           <h2 class="main-title">Convert <br> Leads to deals</h2>
                        </div>
                        <p class="pb-40 pt-10">Streamline the lead-to-deal process effortlessly with Getlead CRM, ensuring your potential customers become loyal clients.
                        </p>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                     <div class="main-img-box pos-r hide-pr md-mt-50 pt-40 pb-40">
                        <div class="img-one pos-r wow fadeIn" data-wow-duration="2s">
                           {{-- <img src="images/lead-to-deal.png" alt=""> --}}
                           {{ Html::image('website/images/lead-to-deal.png','Leads to deals') }}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clear"></div>
      </div>
   </div>
</div>


<div class="two-col-sec pb-100 pt-100">
   <div class="container">
      <div class="header-contents">
         <h2>Gain full visibility & <br> control over your deals</h2>
         <p>
            In Getlead CRM, users have total visibility over all deals through a centralized dashboard. 
            Additionally you can<br> track all deal-related activities, including logs, emails, and call logs, 
            ensuring that users have a complete and<br> accurate history of each deal.
         </p>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md- col-sm-12">
            <div class="col-contents">
               {{-- <img src="images/predict.png" alt="getlead"> --}}
               {{ Html::image('website/images/rotten.svg','Predict Revenue') }}
               <h4>Predict Revenue</h4>
               <p>
                  Getlead CRM empowers you to forecast future revenue with precision and assurance, leveraging 
                  the platform's robust forecasting features. The advanced analysis of past data and trends enables 
                  you to detect patterns and make well-informed predictions about future sales.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="col-contents">
               {{-- <img src="images/rotten.png" alt="getlead"> --}}
               {{ Html::image('website/images/rotten.svg','Rotten Deals') }}
               <h4>Identify Rotten Deals</h4>
               <p>
                  By utilizing Getlead CRM's powerful deal tracking and analysis tools, you can effortlessly pinpoint 
                  and tackle problematic deals before they disrupt your sales process. This provides you with the 
                  opportunity to focus your attention and resources on deals that are more likely to succeed, increasing 
                  your chances of hitting your sales targets.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="col-contents">
               {{-- <img src="images/rotten.png" alt="getlead"> --}}
               {{ Html::image('website/images/empatise.png','Empathize customer') }}
               <h4>Empathize</h4>
               <p>
                  Our customers are the lifeblood of our  company, and we are dedicated to putting their needs first in everything we do.
               </p>
            </div>
         </div>
      </div>
   </div>
</div>




<div class="contact-form-2">
   <div class="container">
      <div class="header-text text-center">
         <h3 style="font-weight: 700;">Contact our team</h3>
         <p>Reach out to your target customer groups the way they want to be reached. <br> With the power of targeted SMS, emails,</p>
      </div>
      <form action="" class="pt-50">
         <div class="row">
            <div class="col-12 col-lg-6 col-md-6">
               <div class="form-group">
                  <label for="">First name <span>*</span></label>
                  <input type="text" class="form-control">
               </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6">
               <div class="form-group">
                  <label for="">Last name</label>
                  <input type="text" class="form-control">
               </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6">
               <div class="form-group">
                  <label for="">Email address <span>*</span></label>
                  <input type="text" class="form-control">
               </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6">
               <div class="form-group">
                  <label for="">Mobile number<span>*</span></label>
                  <input type="tel" class="form-control">
               </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6">
               <div class="form-group">
                  <label for="">Company name<span>*</span></label>
                  <input type="tel" class="form-control">
               </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6">
               <div class="form-group">
                  <label for="">Country<span>*</span></label>
                  <input type="tel" class="form-control">
               </div>
            </div>
            <div class="col-12">
               <div class="form-group">
                  <label for="">How can our team help you?</label>
                  <textarea class="form-control"></textarea>
               </div>
            </div>
            <div class="col-12">
               <div class="form-group">
                  <button class="submit-btn">Send</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>

<div class="container"><div class="sales-section sales-section-2 mt-80" style="padding-bottom: 50px;">
      <div class="row">
      

        <div class="col-lg-4 col-md-4 col-sm-12">
            {{ Html::image('website/images/sales-2.svg','getlead') }}
         </div>
         <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="sales-contents">
               <h3 class="text-left">Unlock Business success 
                  with GetLead
               </h3>
               <p>Multiple configurable features that empower the sales teams for tomorrow</p>
               <div class="sales-btns pt-4">
                 <div class="get-started">
                    <a href="{{ route('request-demo') }}" class="primary-btn" >Get a Demo Today</a>
                 </div>
                 <div class="see-demo ml-3">
                    <a class="secondary-btn" href="https://app.getleadcrm.com/register" target="_blank">Get 14 days free trial</a>
                 </div>
              </div>
  
         </div>
         </div>
      </div>
   </div>
</div>

@section('script')
@endsection
@endsection