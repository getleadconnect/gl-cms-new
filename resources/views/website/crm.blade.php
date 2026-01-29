@extends('website.layout.design')
@section('title')
<meta name="description" content="Getlead CRM is a powerful tool for managing your sales process. Customizable software, automated workflows, and powerful analytics.">
<title>Getlead CRM - The Complete CRM Solution for Your Business</title>
@endsection
@section('og_tags')
<meta property="og:title" content="Getlead CRM - Complete CRM Solution" />
<meta property="og:description" content="Powerful CRM for managing your sales process. Customizable, automated workflows, and analytics to close more deals." />
@endsection
@section('twitter_tags')
<meta name="twitter:title" content="Getlead CRM - Complete CRM Solution" />
<meta name="twitter:description" content="Powerful CRM for managing your sales process. Customizable, automated workflows, and analytics to close more deals." />
@endsection
@section('css')
@endsection
@section('code')
<div class="rogan-hero-section rogan-hero-section-v2 rogan-hero-five pt-150 pb-200 md-pt-100 md-pb-100 pos-r">
    <div class="shape-wrapper">
       {{ Html::image('website/images/main-banner.png','Getlead') }}
    </div>
    <div class="container">
       <div class="main-wrapper pos-r">
          {{-- <h5 class="service-title">CRM</h5> --}}
          <h2 class="banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Initiative lead <br>management system<br>
          </h2>
          <p class="banner-sub-title pb-45 md-pb-30 wow fadeInUp animated" data-wow-delay="0.9s">With tools that enable you to follow up, guide, and convert leads into <br>loyal customers, transform leads into lifelong customers with the most <br>effortless CRM ever built for small businesses.
          </p>
       </div>
    </div>
 </div>
 <div class="our-core-feature pt-150 pb-30 md-pt-80 pos-r bg-white	">
    <div class="shape-wrapper">
    </div>
    <div class="container">
       <div class="theme-title-one text-center pb-50 md-pb-50">
          <h2 class="main-title">This guys are using our service and they’re<br>
             more than happier ever.
          </h2>
          <h5 class="pt-4">Multiple configurable features that empower the sales teams for tomorrow</h5>
       </div>
    </div>
 </div>
 <div class="op-partner-section-one pb-110">
    <div class="container">
       <div class="row">
        @foreach ($clients as $client)
        <div class="col-lg-2 col-4 col-sm-2">
            <div class="img-box bx-a">
               <a href="#">
                {{ Html::image('/Clients/'.$client->image,'Getlead') }}
               </a>
            </div>
         </div>
        @endforeach
       </div>
    </div>
 </div>
 <div class="our-service-three bulk-sms pt-100 pos-r md-pb-100 md-pt-110">
    <div class="container">
       <div class="row">
          <div class="col-lg-6 ">
             <div class="bx-pad pl-0 pr-0 pb-75">
                <div class="theme-title-onemd-p0">
                   <h2 class="main-title">Cost-effective marketing </h2>
                </div>
                <p class="pb-40 pt-10">SMS costs are always low compared to other forms of marketing, making it the most preferred method for both service and product-based industries. services. GetLead comes across as a perfectly affordable solution for medium and small sized organizations</p>
                <p class="pb-40 pt-10">SMS costs are always low compared to other forms of marketing, making it the most preferred method for both service and product-based industries. services. GetLead comes across as a perfectly affordable solution for medium and small sized organizations</p>
                <a data-fancybox href="//fast.wistia.net/embed/iframe/zdjg44f4fi?autoPlay=true" class="fancybox video-button" data-fancybox data-type="iframe" data-width=730 data-height=411 ><i class="flaticon-play-button"></i> </a><span class="pl-2" style="    color: #781220;">See demo video</span>
             </div>
          </div>
          <div class="col-lg-5">
             {{ Html::image('website/images/crm-man.png','Getlead') }}
          </div>
       </div>
    </div>
 </div>
 <div class="inner-wrapper pos-r">
    <div class="main-container  mt-100 mob-margin-0">
       <div class="container">
          <div class="analysee arrow-vector">
             <div class="row">
                <div class="col-lg-6 col-md-6 analyse">
                   <div class="bx-pad">
                      <div class="theme-title-one md-p0">
                         <h2 class="main-title">Lead Management</h2>
                      </div>
                      <p class="pb-40 pr-4">Track, Organise and Prioritise your tasks the really simple way with Getlead CRM.<br><br>As your business grow, you will need help in capturing leads from multiple sources. Do not let your leads slip away.
                      </p>
                      <ul class="small-point">
                        <li class="d-flex align-items-center">
                            <span class="mr-2">
                                {{ Html::image('website/images/tick-2.svg','Getlead') }}
                            </span> Getlead CRM has a comprehensive set of lead management features that can help you convert leads in very less time and effort.
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="mr-2">
                                {{ Html::image('website/images/tick-2.svg','Getlead') }}
                            </span>Drive more sales effectively with our all in one and systematic lead management tool.
                        </li>
                      </ul>
                   </div>
                </div>
                <div class="col-lg-6 col-md-6 analyse">
                    <div class="main-img-box pos-r hide-pr md-mt-50">
                        <div class="img-one pos-r wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
                            {{ Html::image('website/images/lead-management.svg','Getlead') }}
                        </div>
                       <div class="box-shape pos-r wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeIn;">
                       </div>
                    </div>
                 </div>
             </div>
          </div>
       </div>
    </div>
    <div class="main-container  mt-100 mob-margin-0">
       <div class="container">
          <div class="convertt arrow-vector">
             <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="main-img-box pos-r hide-pr  md-mt-50">
                        <div class="img-one pos-r wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
                            {{ Html::image('website/images/deal.svg','Getlead') }}
                        </div>
                    </div>
                 </div>
                <div class="col-lg-6 col-md-6">
                   <div class="bx-pad">
                      <div class="theme-title-one pt-70 md-p0">
                         <h2 class="main-title">Deals</h2>
                      </div>
                      <p class="pb-40">The deal feature of the Getlead CRM helps you identify qualified leads for sales opportunities.
                         <br><br>Deal feature is a great opportunity that helps to alert your sales department regarding a sales opportunity that can close any time soon.
                      </p>
                      <ul class="small-point">
                        <li class="d-flex align-items-center">
                            <span class="mr-2">
                                {{ Html::image('website/images/tick-2.svg','Getlead') }}
                            </span>
                            With the Getlead CRM, you can prioritize and focus on the deals that have higher chances of closing soon.</li>
                        <li class="d-flex align-items-center">
                            <span class="mr-2">
                                {{ Html::image('website/images/tick-2.svg','Getlead') }}
                            </span>
                            A few clicks on our CRM is all it takes to activate a new deal. It is that simple.
                        </li>
                            <li class="d-flex align-items-center">
                                <span class="mr-2">
                                    {{ Html::image('website/images/tick-2.svg','Getlead') }}
                                </span>
                                Understand the strong and weak stages of your pipeline with our CRM.
                            </li>
                     </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="clear"></div>
    </div>
    <div class="main-container align-items-center mt-100">
       <div class="container">
          <div class="connect  arrow-vector">
             <div class="row">
                <div class="col-lg-6  col-md-6 col-12 ">
                   <div class="bx-pad">
                      <div class="theme-title-onemd-p0">
                         <h2 class="main-title">Task Management</h2>
                      </div>
                      <p class="pb-40 pt-10">Track, Organise and Prioritise your tasks the really simple way with Getlead CRM.<br><br>
                        Task management is very important for any business.This can be done effectively by taking help from a reliable and efficient CRM
                      </p>
                      <ul class="small-point">
                         <li class="d-flex align-items-center">
                            <span class="mr-2">
                                {{ Html::image('website/images/tick-2.svg','Getlead') }}
                            </span>Creating and connecting the appropriate tasks to leads, task reminders, organising and prioritising task and making sure that all deadlines are met is now possible with Getlead CRM.
                        </li>
                         <li class="d-flex align-items-center">
                            <span class="mr-2">
                                {{ Html::image('website/images/tick-2.svg','Getlead') }}
                            </span>The Getlead CRM has less fuzzy dashboards that flaunts all the necessary details in a simple way to help make your task management job easier.
                        </li>
                         <li class="d-flex align-items-center">
                            <span class="mr-2">
                                {{ Html::image('website/images/tick-2.svg','Getlead') }}
                            </span>Set deadlines and delegate activities easily with our effective task management tool.
                        </li>
                      </ul>
                   </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="main-img-box pos-r hide-pr md-mt-50 show-pr">
                       <div class="img-one pos-r wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
                        {{ Html::image('website/images/task.svg','Getlead') }}
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
           <div class="analysee arrow-vector">
              <div class="row">

                 <div class="col-lg-6 col-md-6 analyse">
                    <div class="bx-pad">
                       <div class="theme-title-one md-p0">
                          <h2 class="main-title">Help Desk & Support</h2>
                       </div>
                       <p class="pb-40 pr-4">Empower your business by taking the right action to all the customer grievances.<br><br>Our CRM has an integrated ticketing tool that can be a great addition to your customer support initiatives.
                       </p>
                       <ul class="small-point">
                          <li class="d-flex align-items-center">
                            <span class="mr-2">
                                {{ Html::image('website/images/tick-2.svg','Getlead') }}
                            </span>Customers contact you across multiple channels and you should never miss any communication.Answering them at the right time with the right context is important for any business.
                        </li>
                          <li class="d-flex align-items-center">
                            <span class="mr-2">
                                {{ Html::image('website/images/tick-2.svg','Getlead') }}
                            </span>Getlead has an effective ticketing system that can Improve your customer retention and increase sales with better customer support.
                        </li>
                       </ul>
                    </div>
                 </div>
                 <div class="col-lg-6 col-md-6 analyse">
                     <div class="main-img-box pos-r hide-pr md-mt-50">
                        <div class="img-one pos-r wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
                            {{ Html::image('website/images/support.svg','Getlead') }}
                        </div>
                        <div class="box-shape pos-r wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeIn;">
                        </div>
                     </div>
                  </div>
              </div>
           </div>
        </div>
     </div>
     <div class="main-container  mt-100 mob-margin-0">
        <div class="container">
           <div class="convertt arrow-vector">
              <div class="row">
                 <div class="col-lg-6 col-md-6">
                     <div class="main-img-box pos-r hide-pr  md-mt-50">
                        <div class="img-one pos-r wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
                            {{ Html::image('website/images/telecallingmode.svg','Getlead') }}
                        </div>
                     </div>
                  </div>
                 <div class="col-lg-6 col-md-6">
                    <div class="bx-pad">
                       <div class="theme-title-one pt-70 md-p0">
                          <h2 class="main-title">Telecalling</h2>
                       </div>
                       <p class="pb-40">Telecalling helps track, manage and engage leads effectively
                          <br><br>Getlead CRM provides a flawless solution by integrating information from your business calls and analyzing call performance. Streamline your telecalling process by integrating our CRM and accelerate your business effectively. Now you will need nothing else as this is one of the best solutions to build repeat business through great customer relationships and also to make new people love your brand.
                       </p>
                       <h4>GL Dialer</h4>
                       <p class="pb-40">
                        Our intelligent GL Dialer helps telecallers make calls easily and also to report and analyse the status of leads effectively. You will also get the advantage of running all your marketing CAMPAIGNS directly from the CRM. Getlead CRM has a campaign module that allows your marketing team to plan, produce, distribute and analyse marketing campaigns for the effective growth of your business.
                       </p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="clear"></div>
     </div>
     <div class="main-container align-items-center mt-100">
        <div class="container">
           <div class="connect  arrow-vector">
              <div class="row">
                 <div class="col-lg-6  col-md-6 col-12 ">
                    <div class="bx-pad">
                       <div class="theme-title-onemd-p0">
                          <h2 class="main-title">Automation</h2>
                       </div>
                       <p class="pb-40 pt-10">Customer management is a time-consuming task if done manually. Redundant and repetitive tasks will reduce the operational efficiency of your team. CRM automation by Getlead can streamline your entire marketing process with the help of an efficient and legible workflow. The Getlead CRM automation advantages are</p>
                       <ul class="small-point">
                          <li class="d-flex align-items-center"><span class="mr-2">
                            {{ Html::image('website/images/tick-2.svg','Getlead') }}
                        </span>Increased productivity
                    </li>
                          <li class="d-flex align-items-center"><span class="mr-2">
                            {{ Html::image('website/images/tick-2.svg','Getlead') }}
                        </span>Higher customer engagement
                    </li>
                          <li class="d-flex align-items-center"><span class="mr-2">
                            {{ Html::image('website/images/tick-2.svg','Getlead') }}
                        </span>Improved customer satisfaction
                    </li>
                          <li class="d-flex align-items-center"><span class="mr-2">
                            {{ Html::image('website/images/tick-2.svg','Getlead') }}
                        </span>More efficient sales cycles.
                    </li>
                        </ul>
                    </div>
                 </div>
                 <div class="col-lg-6 col-md-6 col-12">
                     <div class="main-img-box pos-r hide-pr md-mt-50 show-pr">
                        <div class="img-one pos-r wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
                            {{ Html::image('website/images/automation.svg','Getlead') }}
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
           <div class="analysee arrow-vector">
              <div class="row">
                 <div class="col-lg-6 col-md-6 analyse">
                    <div class="bx-pad">
                       <div class="theme-title-one md-p0">
                          <h2 class="main-title">GL Engage</h2>
                       </div>
                       <p class="pb-40 pr-4">The all in one and powerful tool for customer engagement.<br><br>This is yet another powerful feature by which you can create highly engaged customers who will buy from you, promote your business and also demonstrate more loyalty towards your business. Some techniques that you can use with this are
                       </p>
                    </div>
                 </div>
                 <div class="col-lg-6 col-md-6 analyse">
                     <div class="main-img-box pos-r hide-pr md-mt-50">
                        <div class="img-one pos-r wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
                            {{ Html::image('website/images/main-banner.png','Getlead') }}
                        </div>
                        <div class="box-shape pos-r wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeIn;">
                        </div>
                     </div>
                  </div>
              </div>
           </div>
        </div>
     </div>
     <div class="main-container  mt-100 mob-margin-0">
        <div class="container">
           <div class="convertt arrow-vector">
              <div class="row">
                 <div class="col-lg-6 col-md-6">
                     <div class="main-img-box pos-r hide-pr  md-mt-50">
                        <div class="img-one pos-r wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
                            {{ Html::image('website/images/analyse.png','Getlead') }}
                        </div>
                     </div>
                  </div>
                 <div class="col-lg-6 col-md-6">
                    <div class="bx-pad">
                       <div class="theme-title-one pt-70 md-p0">
                          <h2 class="main-title">Feedback</h2>
                       </div>
                       <p class="pb-40">Your business is all about your customers and their valuable feedbacks. Feedbacks are the only way that can tell you about the value of your product/service. The feedback module of Getlead CRM can help you with
                       </p>
                       <ul class="small-point">
                        <li class="d-flex align-items-center">
                            <span class="mr-2">
                                {{ Html::image('website/images/tick-2.svg','Getlead') }}
                            </span>Accurate customer insights that can help improve your business.
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="mr-2">
                                {{ Html::image('website/images/tick-2.svg','Getlead') }}
                            </span>Collecting and analyzing feedbacks that can improve customer retention strategies.
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="mr-2">
                                {{ Html::image('website/images/tick-2.svg','Getlead') }}
                            </span>Valuable insights that can help analyze strategies for attaining faster growth of your business.
                        </li>
                      </ul>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="clear"></div>
     </div>
     <div class="main-container align-items-center mt-100 mb-100">
        <div class="container">
           <div class="connect  arrow-vector">
              <div class="row">
                 <div class="col-lg-6  col-md-6 col-12 ">
                    <div class="bx-pad">
                       <div class="theme-title-onemd-p0">
                          <h2 class="main-title">Integration</h2>
                       </div>
                       <p class="pb-40 pt-10">Getlead CRM helps to seamlessly integrate the customer data of your business with third party systems.<br><br>
                        We make sure that the flow of information is streamlined between the various elements of the services that is being integrated. The advantages of our CRM Integrations are
                    </p>
                    <h5>Better customer communications</h5>
                    <p class="pb-40 pt-10">CRM integrations helps in better customer communication by the efficient access, control, and visibility of customers data across several channels.</p>
                    <h5>Improved organizational efficiency</h5>
                    <p class="pb-40 pt-10">Getlead CRM helps consolidate information into one system, which in turn increases the productivity of your business. People in your team need not have to toggle back and forth between different systems for customer data.</p>
                    </div>
                 </div>
                 <div class="col-lg-6 col-md-6 col-12">
                     <div class="main-img-box pos-r hide-pr md-mt-50 show-pr">
                        <div class="img-one pos-r wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
                            {{ Html::image('website/images/main-banner.png','Getlead') }}
                        </div>
                     </div>
                  </div>
              </div>
           </div>
        </div>
        <div class="clear"></div>
     </div>
 </div>
 <div class="our-core-feature style-two pt-100 pb-100  md-pt-50 md-pb-100 pos-r">
    <div class="shape-wrapper">
       <svg  class="img-shape shape-three">
          <path fill-rule="evenodd"  fill="rgb(165, 197, 255)"
             d="M10.000,20.000 C15.523,20.000 20.000,15.522 20.000,10.000 C20.000,4.477 15.523,-0.001 10.000,-0.001 C4.477,-0.001 -0.000,4.477 -0.000,10.000 C-0.000,15.522 4.477,20.000 10.000,20.000 Z"/>
       </svg>
       <svg  class="img-shape shape-four">
          <path fill-rule="evenodd"  fill="rgb(255, 212, 114)"
             d="M5.000,9.999 C7.761,9.999 10.000,7.761 10.000,5.000 C10.000,2.238 7.761,-0.000 5.000,-0.000 C2.239,-0.000 -0.000,2.238 -0.000,5.000 C-0.000,7.761 2.239,9.999 5.000,9.999 Z"/>
       </svg>
       <svg  class="img-shape shape-five">
          <path fill-rule="evenodd"  fill="rgb(167, 185, 255)"
             d="M5.000,9.999 C7.761,9.999 10.000,7.761 10.000,5.000 C10.000,2.238 7.761,-0.001 5.000,-0.001 C2.239,-0.001 -0.000,2.238 -0.000,5.000 C-0.000,7.761 2.239,9.999 5.000,9.999 Z"/>
       </svg>
       <svg  class="img-shape shape-six">
          <path fill-rule="evenodd"  fill="rgb(133, 255, 212)"
             d="M10.000,19.999 C15.523,19.999 20.000,15.522 20.000,10.000 C20.000,4.477 15.523,-0.000 10.000,-0.000 C4.477,-0.000 -0.000,4.477 -0.000,10.000 C-0.000,15.522 4.477,19.999 10.000,19.999 Z"/>
       </svg>
       <svg  class="img-shape shape-seven">
          <path fill-rule="evenodd"  fill="rgb(255, 196, 133)"
             d="M5.000,10.000 C7.761,10.000 10.000,7.761 10.000,4.999 C10.000,2.238 7.761,-0.000 5.000,-0.000 C2.238,-0.000 -0.000,2.238 -0.000,4.999 C-0.000,7.761 2.238,10.000 5.000,10.000 Z"/>
       </svg>
    </div>
    <div class="row">
       <div class="container">
          <div class="row">
             <div class="col-md-8 offset-md-2 text-center">
                <div class="theme-title-one ">
                   <h2 class="main-title text-center">One platform.<br>
                      Multiple benefits.
                   </h2>
                </div>
                <p class="pt-35 pb-55">Our complete range of marketing tools helps you manage leads wherever they are in your sales funnel.</p>
             </div>
          </div>
          <div class="col-lg-12 col-md-12">
             <div class="row feature-block-wrapper">
                <div class="col-md-4">
                   <div class="feature-block-one white hover-state mb-40  text-center">
                      <div class="icon icon-three tran3s">
                        {{ Html::image('website/images/marketing.svg','Getlead',array('width' => '80px','class' => 'm-auto d-block')) }}
                    </div>
                      <h5 class="pt-30 pb-25 tran3s title ">Shorter lead closing time</h5>
                      <p class="tran3s">Every tool required for helping customers is intuitively built into the platform based on where they are in the sales pipeline.</p>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="feature-block-one hover-state text-center">
                      <div class="icon icon-three tran3s">
                        {{ Html::image('website/images/sales.svg','Getlead',array('width'=>'80px','class' => 'm-auto d-block')) }}
                    </div>
                      <h5 class="pt-30 pb-25 tran3s title ">Team management done right</h5>
                      <p class="tran3s">Teams get worked assigned automatically without hassle. Ensure maximum productivity with better uniformity and resource management across the board.</p>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="feature-block-one hover-state sm-mt-40 text-center">
                      <div class="icon icon-three tran3s">
                        {{ Html::image('website/images/service.svg','Getlead',array('width'=>'80px','class'=>'m-auto d-block')) }}
                    </div>
                      <h5 class="pt-30 pb-25 tran3s title ">Customized notifications</h5>
                      <p class="tran3s">Teams get notifications for urgent items on their lead lists, enabling them to address customer queries more effectively and quickly.</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="newsletter-section newsletter-one pos-r pt-100">
    <div class="container">
       <div class="main-wrapper p-5 d-flex justify-content-center">
          <div class="theme-title-one text-center">
             <h2 class="main-title underline">Start using Getlead platform
                today
             </h2>
             <h5 class="des-title white">Get the full range of lead management tools on your phone today!</h5>
             <ul class="store d-flex justify-content-center mt-30">
                <li><a href="https://play.google.com/store/apps/details?id=com.getlead.app">
                    {{ Html::image('website/images/playstore.png','Getlead',array('width'=>'180px')) }}
                </a></li>
                <li><a href="https://apps.apple.com/in/app/getlead/id1557445421">
                    {{ Html::image('website/images/app-store.png','Getlead',array('width'=>'180px')) }}
                </a></li>
             </ul>
          </div>
       </div>
    </div>
 </div>
@section('script')
@endsection
@endsection
