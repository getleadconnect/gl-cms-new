@extends('website.layout.design')
@section('title')
<meta name="description" content="Getlead offers free CRM for lead management and sales process software. Streamline your sales with top tools and boost your business success today.">
<title>Free CRM for Lead Management, Lead Management Tools, Getlead</title>   
@endsection
@section('css')
{{ Html::style('css/jquery.ccpicker.css') }}
<style>
    .phone-field{
        padding-left: 100px !important;
    }
    .cc-picker-code-select-enabled {
        cursor: pointer;
        padding-right: 15px;
        position: absolute;
        left: 19px;
        top: 38px;
        z-index: 1000;
    }
    .text-left {
        text-align: left!important;
        position: relative;
        z-index: 10000;
    }
    .cc-picker-code-list {
        list-style: none;
        margin: 0;
        padding: 1px;
        max-height: 200px;
        overflow-y: scroll;
        position: absolute;
        border: 1px solid #dad8d8;
        background-color: #fff;
        min-width: 348px;
        max-width: 348px;
        font-size: 12px;
        top: 100px;
    }
    .cc-picker-code-filter {
        margin: 0;
        min-width: 348px;
        height: 30px;
        position: absolute;
        border: 1px solid #dad8d8;
        font-size: 12px;
        padding: 0 15px;
        left: 0;
        top: 71px;
    }
    .cc-picker-code-select-enabled::after{
        top: 8px;
    }
    .cc-picker-code{
      color:#2B2B32 !important;
   }
    .error{
        color: red !important;
    }
</style>
@endsection
@section('code')

<div class="rogan-hero-section-sec rogan-hero-section rogan-hero-section-v2  rogan-hero-five pt-150 pb-0 md-pt-100 pos-r">
   <div class="container">
      <div class="main-wrapper pos-r">
         <h1 class="secondary-title banner-main-title pt-40 pb-65 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Effortlessly convert leads with <br> 
            Powerful <Span class="high">Lead management</Span> tool </h1>
         <p class="second-sub-title banner-sub-title pb-45 md-pb-30 wow fadeInUp animated" data-wow-delay="0.9s"> Capture, qualify, and track leads, analyze customer data to tailor your marketing<br>
            efforts, and effectively manage your sales pipeline.
         </p>
         <!-- <div class="banner-img">
            {{ Html::image('website/images/lead-banner.svg','Getlead') }}
         </div> -->
         <div class="clear"></div>
      </div>
   </div>

   <div class="chat-box">
      <a href="#">
         {{ Html::image('website/images/chat-box.svg','chat box') }}
      </a>
   </div>

</div>


<div class="single-text-section pt-150">
   <div class="container">
       <div class="row row text-banner align-items-center">

       <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="col-img">
               {{ Html::image('website/images/w-lead.svg','lead management') }}
            </div>
           </div>
           <div class="col-lg-8 col-md-8 col-sm-12">
               <div class="">
                   <p class="sub-title">ABOUT LEAd MANAGEMENT</p>
                   <h2>
                     What is lead management?
                   </h2>
                   <p>Lead management is the process of capturing, organizing, nurturing, and converting potential customers or "leads" into loyal, paying clients. It involves a systematic approach to identifying and prioritizing leads, tracking their interactions with your business, and guiding them through the sales funnel. 
                     <br> <br>
                     Effective lead management, like that offered by Getlead CRM, ensures that no opportunity is missed, and every lead has the potential to become a valuable customer. It streamlines your sales efforts, boosts conversion rates, and ultimately drives business growth by optimizing how you handle and engage with your prospects.
                  </p>
                   <!-- <div class="yn-btn">
                       <a href="{{ route('request-demo')}}">
                           Explore more
                           
                       </a>
                   </div> -->
               </div>
           </div>
          
       </div>
   </div>
</div>


<div class="our-service-three pt-100 pos-r pt-0  md-pb-100 lead-tab-sec">
   <div class="container">
      <div class="theme-title-one text-center pb-60 md-pb-30">
         <p class="sub-title">engaging with customers</p>
         <h2 class="main-title">Powerful CRM features for enhanced <br> Business Success
         </h2>
      </div><ul id="tabs" class="nav nav-tabs justify-content-center mb-40" role="tablist">
            <li class="nav-item">
               <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Capture leads</a>
            </li>
            <li class="nav-item">
               <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Quality score</a>
            </li>
            <li class="nav-item">
               <a id="tab-C" href="#pane-C" class="nav-link" data-toggle="tab" role="tab">Lead distribution</a>
            </li>
            <li class="nav-item">
               <a id="tab-C" href="#pane-D" class="nav-link" data-toggle="tab" role="tab">Dashboards & reports</a>
            </li>
         </ul>
      <div class="service-tab-sec">
         
         <div id="content" class="tab-content" role="tablist">
            <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
               <div class="card-header" role="tab" id="heading-A">
                  <h5 class="mb-0">
                     <a data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                     <span>Capture leads</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
                     </a>
                  </h5>
               </div>
               <div id="collapse-A" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
                  <div class="row align-items-lg-center">
                     <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="layout-img mt-30">
                           {{ Html::image('website/images/capture.svg','lead capture') }}
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="layout-content">
                           {{-- <h4>Win deals with focus <br>
                              clarity & context

                           </h4> --}}
                           <p>Elevate your business with Getlead CRM's lead-capturing prowess. Here are three key features that empower you to capture leads effectively and drive success:
                        </p>
                        <ul class="small-point pt-3">
                           <li class="d-flex align-items-center">
                               <span class="mr-2">
                                   {{ Html::image('website/images/tick-2.svg','Getlead') }}
                               </span>
                               Seamless Lead Management
                           </li>
                           <li class="d-flex align-items-center">
                               <span class="mr-2">
                                   {{ Html::image('website/images/tick-2.svg','Getlead') }}
                               </span>
                               Advanced Lead Scoring 
                           </li>
                           <li class="d-flex align-items-center">
                               <span class="mr-2">
                                   {{ Html::image('website/images/tick-2.svg','Getlead') }}
                               </span>
                               Automation Capabilities
                           </li>
                       </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
               <div class="card-header" role="tab" id="heading-B">
                  <h5 class="mb-0">
                     <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                     <span>Quality score</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
                     </a>
                  </h5>
               </div>
               <div id="collapse-B" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-B">
                  <div class="row">
                     <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="layout-img mt-30">
                           {{ Html::image('website/images/score.svg','getlead') }}
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="layout-content">
                           {{-- <h4>Evaluating and improving the overall quality of your customer interactions</h4> --}}
                           <p>
                              Unlock the full potential of your business with Getlead CRM's powerful features designed to boost your quality score and drive success. Here are three distinctive qualities that make us unique.                            </p>
                            <ul class="small-point pt-3">
                              <li class="d-flex align-items-center">
                                  <span class="mr-2">
                                      {{ Html::image('website/images/tick-2.svg','lead scoring') }}
                                  </span>
                                  Advanced Lead Scoring

                              </li>
                              <li class="d-flex align-items-center">
                                  <span class="mr-2">
                                      {{ Html::image('website/images/tick-2.svg','analytics') }}
                                  </span>
                                  Comprehensive Analytics

                              </li>
                              <li class="d-flex align-items-center">
                                  <span class="mr-2">
                                      {{ Html::image('website/images/tick-2.svg','task automation') }}
                                  </span>
                                  Efficient Task Automation
                              </li>
                          </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
               <div class="card-header" role="tab" id="heading-C">
                  <h5 class="mb-0">
                     <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="false" aria-controls="collapse-C">
                     <span>Lead Distribution</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                     </a>
                  </h5>
               </div>
               <div id="collapse-C" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-C">
                  <div class="row">
                     <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="layout-img mt-30">
                           {{ Html::image('website/images/lead-distribution.svg','getlead') }}
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="layout-content">
                           <h4>Powerful CRM Features for Enhanced Business Success: Lead Distribution</h4>
                           <p>
                              Maximize your business potential with Getlead CRM's lead distribution capabilities. Here are three key features that empower you to efficiently manage and distribute leads for better results:
                           </p>
                           <ul class="small-point pt-3">
                              <li class="d-flex align-items-center">
                                  <span class="mr-2">
                                      {{ Html::image('website/images/tick-2.svg','Getlead') }}
                                  </span>
                                  Automated Lead Routing
                              </li>
                              <li class="d-flex align-items-center">
                                  <span class="mr-2">
                                      {{ Html::image('website/images/tick-2.svg','Getlead') }}
                                  </span>
                                  Customizable Lead Assignment
                              </li>
                              <li class="d-flex align-items-center">
                                  <span class="mr-2">
                                      {{ Html::image('website/images/tick-2.svg','Getlead') }}
                                  </span>
                                  Real-time Lead Monitoring

                              </li>
                          </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="pane-D" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
               <div class="card-header" role="tab" id="heading-D">
                  <h5 class="mb-0">
                     <a class="collapsed" data-toggle="collapse" href="#collapse-D" aria-expanded="false" aria-controls="collapse-D">
                     <span>Dashboards & reports</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
                     </a>
                  </h5>
               </div>
               <div id="collapse-D" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-D">
                  <div class="row">
                     <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="layout-img mt-30">
                           {{ Html::image('website/images/Dash-reports.svg','getlead') }}
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="layout-content">
                           {{-- <h4>Master your sales process with intuitive dashboard and reporting</h4> --}}
                           <p>
                              Unlock the potential of your business with Getlead CRM's dynamic Dashboard and reports. Here's how it empowers your success:
                           </p>
                           <ul class="small-point pt-3">
                              <li class="d-flex align-items-center">
                                  <span class="mr-2">
                                      {{ Html::image('website/images/tick-2.svg','Getlead') }}
                                  </span>
                                  Real-Time Insights
                              </li>
                              <li class="d-flex align-items-center">
                                  <span class="mr-2">
                                      {{ Html::image('website/images/tick-2.svg','Getlead') }}
                                  </span>
                                  Customizable Dashboards

                              </li>
                              <li class="d-flex align-items-center">
                                  <span class="mr-2">
                                      {{ Html::image('website/images/tick-2.svg','Getlead') }}
                                  </span>
                                  Comprehensive Reporting

                              </li>
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


<div class="two-col-sec two-col-sec-camp pt-100 pb-60">
   <div class="container">
      <div class="header-contents">
         <h2>Completed lead Tracking</h2>
         <p>
         Streamline your sales process and gain valuable insights with Getlead CRM's Completed Lead Tracking feature.
         </p>
      </div>
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6 pb-40">
            <div class="col-contents">
               
            {{ Html::image('website/images/role-based.svg','lead tracking') }}
               <h4>Completed lead Tracking</h4>
               <p>
               Streamline your sales process and gain valuable insights with Getlead CRM's Completed Lead Tracking feature.</p>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 pb-40">
            <div class="col-contents">
               
            {{ Html::image('website/images/role-based.svg','role based permission') }}
               <h4>Role-based permission</h4>
               <p>
               Enhance security and control with Getlead CRM's Role-Based Permission feature. </p>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 pb-40">
            <div class="col-contents">
               
            {{ Html::image('website/images/lead-deal.svg','leads to deal') }}
               <h4>Convert
               Leads to Deals
               </h4>
               <p>
               Transform potential into profit with Getlead CRM's seamless lead-to-deal conversion process. Effortlessly transition leads into revenue-generating deals and drives business growth.
               </p>
            </div>
         </div>

         <div class="col-lg-6 col-md-6 col-sm-6 pb-40">
            <div class="col-contents">
               
            {{ Html::image('website/images/c-facebook.png','Getlead') }}
               <h4>Convert leads
from Facebook
               </h4>
               <p>
               Utilise Getlead CRM to maximise the potential of your Facebook leads.. Seamlessly integrate and convert leads from your social media campaigns into valuable customers. Streamline your sales process and harness the power of social media to boost your business growth.
               </p>
            </div>
         </div>
      </div>
   </div>
</div>















 

<div class="contact-form-2 bg-none">
   <div class="container">
      <div class="header-text text-center">
         <h3 style="font-weight: 700;">Contact our team</h3>
         <p>Reach out to your target customer groups the way they want to be reached. <br> With the power of targeted SMS, emails,</p>
     </div>
     <form  class="pt-50" id="contactUsForm" action="{{ route('store-contact-us') }}" method="GET" enctype="multipart/form-data">
     @csrf
      <div class="row">
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <label for="">First name <span>*</span></label>
               <input type="text" name="first_name" id="first_name" class="form-control">
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <label for="">Last name</label>
               <input type="text" name="last_name" id="last_name" class="form-control">
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <label for="">Email address <span>*</span></label>
               <input type="email"  name="email" id="email"class="form-control">
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <!-- <label for="">Mobile number<span>*</span></label>
               <input type="tel" class="form-control"> -->
               <div class="form-group form-feild-row  country-code-row text-left position-relative">
                  <label class="sign-label">Mobile Number<span>*</span></label>
                  <input class="form-control form-control-solid h-auto phone-field text-input" type="number" placeholder="mobile number" name="mobile" id="phoneField1" autocomplete="off"/>
                  <input type="hidden" id="country_code" value="IN">
               </div>
               @if ($errors->any())
                  <div class="alert alert-danger">
                        <ul>
                           @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                  </div>
               @endif
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <label for="">Company name</label>
               <input type="text" name="company_name" id="company_name" class="form-control">
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <label for="">Country<span>*</span></label>
               <input type="text"  name="country" id="country" class="form-control">
            </div>
         </div>
         <div class="col-12">
            <div class="form-group">
               <label for="">How can our team help you?</label>
               <textarea class="form-control" name="comments"  id="comments"></textarea>
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
{{ Html::script('/js/jquery.ccpicker.js') }}
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
    var countryCode=$('#country_code').val();
    $("#phoneField1").CcPicker();
    $("#phoneField1").CcPicker("setCountryByCode", countryCode);

    $(document).ready(function () {
    
      @if(session('message'))
        flashy('Successfully Submit your Request', {
          type : 'flashy__success',
          timeout: 5000, 
        });
        @endif
      
        $("#contactUsForm").validate({
            // in 'rules' user have to specify all the constraints for respective fields
            rules: {
                first_name: "required",
               //  last_name: "required",
                username: {
                    required: true,
                    minlength: 2 //for length of lastname
                },
                email: {
                    required: true,
                    email: true
                },
                mobile:{
                    required:true,
                    digits:true,
                    minlength: 7,
                    maxlength: 12,
                },
               //  company_name:"required",
                country:"required",
               //  comments:"required",
            },
            // in 'messages' user have to specify message as per rules
            messages: {
                first_name: " Please enter your firstname",
               //  last_name: " Please enter your lastname",
                email:{
                    required:"Please enter email id",
                    email:"please enter valid email id",
                },
                mobile:{
                    required: "Please enter mobile number",
                    digits:"please enter only number",
                    minlength: "Please enter valid number",
                    maxlength:"Please enter valid number"

                },
               //  company_name:"Please enter company name",
                country:"Please enter Country",
               //  comments:"Please enter",
            }
        });
    });
</script>
@endsection
@endsection
