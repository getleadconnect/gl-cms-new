@extends('website.layout.design')
@section('title')
<meta name="description" content="Close deals faster with GetLead CRM's deal management software. Automate workflows, access powerful analytics, and take control of your sales pipeline. Sign up now!
   ">
<title>Contact Management</title>
@endsection
@section('css')
@endsection
@section('code')
<div class="rogan-hero-section-sec rogan-hero-section rogan-hero-section-v2 rogan-hero-five pt-150  md-pt-100 pos-r">
   <div class="container">
      <div class="main-wrapper pos-r">
         <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">
           Enhance your contact management<br>
   
         </h1>
         <!-- <div class="banner-img" >
            {{ Html::image('website/images/contact-management.png','getlead') }}
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



<div class="single-text-section pt-150 pb-150">
   <div class="container">
       <div class="row text-banner align-items-center">
           <div class="col-lg-8 col-md-8 col-sm-12">
               <div class="">
                   <p class="sub-title">ABOUT LEAd MANAGEMENT</p>
                   <h2>
                     Contact Management Made Effortless
                   </h2>
                   <p class="pb-40">At Getlead, we understand the significance of nurturing and managing your contacts effectively. With our CRM, you can effortlessly organize, track, and engage with your contacts, ensuring that no valuable connection is overlooked. Our user-friendly platform streamlines contact management, allowing you to focus on building and strengthening customer relationships for lasting business success.</p>
                   <div class="yn-btn">
                       <a href="{{ route('request-demo') }}">
                           Explore more
                           
                       </a>
                   </div>
               </div>
           </div>
           <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="col-img">
               {{ Html::image('website/images/w-lead.svg','Contact Management ') }}
            </div>
           </div>
       </div>
   </div>
</div>


<div class="two-col-sec pb-100 pt-100">
   <div class="container">
      <div class="header-contents">
         <p class="sub-title">engaging with customers</p>
         <h2>Getlead's Contact Management 
         </h2>
         <p>Getlead's Contact Management empowers you to streamline your lead data, enhance contact profiles, maintain detailed communication records, and utilize advanced features like lead scoring, segmentation, and automation for a more efficient and effective sales process.</p>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6 col-sm-12 pb-30">
            <div class="col-contents">
               <h4>Streamline Lead Data</h4>
               <p>
                  Effortlessly organize and centralize your lead information for quick access and efficient management.

               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 pb-30">
            <div class="col-contents">
               <h4>Detailed Contact Profiles</h4>
               <p>
                  Create in-depth contact profiles, ensuring you have all the insights you need at your fingertips.

               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 pb-30">
            <div class="col-contents">
               <h4>Communication History</h4>
               <p>
                  Keep track of all interactions and communications with leads and customers for a complete overview.

               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 pb-30">
            <div class="col-contents">
               <h4>Lead Scoring</h4>
               <p>
                  Implement advanced lead-scoring techniques to identify and prioritize high-conversion prospects.

               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 pb-30">
            <div class="col-contents">
               <h4>Segmentation</h4>
               <p>
                  Categorize your leads into segments, allowing for tailored and effective marketing strategies.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 pb-30">
            <div class="col-contents">
               <h4>Automation</h4>
               <p>
                  Save time and stay engaged with automated follow-ups, nurturing leads through the entire sales cycle.

               </p>
            </div>
         </div>
      </div>
   </div>
</div>



<div class="about-us-block-two pb-100 md-pt-100 md-pb-100 pos-r">
   <div class="shape-wrapper">
   </div>
   <div class="inner-wrapper pos-r">

      <div class="main-container  mt-100 mob-margin-0">
         <div class="container">
            <div class="convertt arrow-vector connect">
               <div class="row">
                  <div class="col-lg-6 col-md-6">
                     <div class="bx-pad">
                        <div class="theme-title-one pt-70 md-p0">
                           <p class="sub-title">engaging with customers</p>
                           <h2 class="main-title">Activity reminder</h2>
                        </div>
                        <p class="pb-40">
                           Never miss a beat with Getlead CRM's activity reminder feature. Stay on top of your tasks and appointments to ensure nothing falls through the cracks.
                        </p>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="main-img-box pos-r hide-pr  md-mt-50 ">
                        <div class="img-one pos-r wow fadeIn	" data-wow-duration="2s">
                            {{ Html::image('website/images/at-reminder.svg','Activity reminder') }}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clear"></div>
      </div>

      <div class="main-container  mt-100 mob-margin-0">
         <div class="container">
            <div class="arrow-vector">
               <div class="row">
                  <div class="col-lg-6 col-md-6 analyse">
                     <div class="main-img-box pos-r hide-pr md-mt-50">
                        <div class="img-one pos-r wow fadeIn" data-wow-duration="2s">
                            {{ Html::image('website/images/im-exp.svg','engaging customer') }}
                        </div>
                        <div class="box-shape pos-r wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 analyse">
                     <div class="bx-pad">
                        <div class="theme-title-one md-p0">
                           <p class="sub-title">engaging with customers</p>
                           <h2 class="main-title">Import & export</h2>
                        </div>
                        <p class="pb-40 pr-4">
                           Effortlessly transfer your valuable data into Getlead CRM and export it when needed. Seamlessly manage your information across platforms with our intuitive import and export features.                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      

   </div>
</div>




<div class="container"><div class="sales-section sales-section-2 mt-80" style="padding-bottom: 50px;">
      <div class="row">
      

        <div class="col-lg-4 col-md-4 col-sm-12">
            {{ Html::image('website/images/sales-2.svg','getlead crm') }}
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