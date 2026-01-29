@extends('website.layout.design')
@section('title')
<meta name="description" content="Connect your favorite tools and streamline your workflows with GetLead CRM integrations. Manage sales and marketing processes more efficiently. Sign up now!">
<title>CRM Integrations - Connect Your Tools | Getlead</title>
@endsection
@section('og_tags')
<meta property="og:title" content="Getlead CRM Integrations - Connect Your Favorite Tools" />
<meta property="og:description" content="Seamlessly integrate with WhatsApp, Facebook, Zapier, and more. Streamline workflows and boost productivity with Getlead CRM." />
@endsection
@section('twitter_tags')
<meta name="twitter:title" content="Getlead CRM Integrations - Connect Your Favorite Tools" />
<meta name="twitter:description" content="Seamlessly integrate with WhatsApp, Facebook, Zapier, and more. Streamline workflows and boost productivity with Getlead CRM." />
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
<div class="rogan-hero-section-sec rogan-hero-section-v2 rogan-hero-section rogan-hero-five pt-150  md-pt-100  pos-r">
   <div class="container">
      <div class="main-wrapper pos-r">
         <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated"
            data-wow-delay="0.4s">Easily connect and utilize<br> all your preferred tools in one place
         </h1>
         <p class="second-sub-title banner-sub-title pb-45 md-pb-30 wow fadeInUp animated" data-wow-delay="0.9s">
            The process of converting leads to deals is straightforward and simple. Once a lead has been qualified  <br>
            and engaged with, the next step is to convert them into a paying customer.
         </p>
         <!-- <div class="int-clients">
            <div class="client-single">
               {{ Html::image('website/images/woo.svg','getlead') }}
            </div>
            <div class="client-single">
               {{ Html::image('website/images/shiprocket.svg','getlead') }}
            </div>
            <div class="client-single">
               {{ Html::image('website/images/whatsapp.svg','getlead') }}
            </div>
         </div>
         <div class="int-clients int-clients-2">
            <div class="client-single">
               {{ Html::image('website/images/webhook.svg','getlead') }}
            </div>
            <div class="client-single">
               {{ Html::image('website/images/indiamart.svg','getlead') }}
            </div>
            <div class="client-single">
               {{ Html::image('website/images/bonvoice.svg','getlead') }}
            </div>
         </div>
         <div class="int-clients">
            <div class="client-single">
               {{ Html::image('website/images/voxbay.svg','getlead') }}
            </div>
            <div class="client-single">
               {{ Html::image('website/images/gupshup.svg','getlead') }}
            </div>
            <div class="client-single">
               {{ Html::image('website/images/shiprocket.svg','getlead') }}
            </div>
         </div> -->
         <div class="clear"></div>
      </div>
   </div>
   <div class="chat-box">
      <a href="#">
         {{ Html::image('website/images/chat-box.svg','getlead') }}
      </a>
   </div>
</div>



<div class="about-us-block-two pos-r">
   <div class="shape-wrapper">
   </div>
   <div class="inner-wrapper pos-r">
      <div class="main-container ">
         <div class="container">
            <div class="arrow-vector">
               <div class="row">
                  
                  <div class="col-lg-6 col-md-6 analyse">
                     <div class="bx-pad">
                        <div class="theme-title-one md-p0">
                          <p class="sub-title">engaging with customers</p>
                           <h2 class="main-title">Track progress with automated task management
                           </h2>
                        </div>
                        <p class="pb-40 pr-4">
                           Effortlessly monitor progress and boost productivity with Getlead CRM's automated task management system, ensuring nothing falls through the cracks
                        </p>
                     </div>
                  </div>

                  <div class="col-lg-6 col-md-6 analyse">
                    <div class="main-img-box pos-r hide-pr md-mt-50">
                       <div class="img-one pos-r wow fadeIn" data-wow-duration="2s">
                          {{-- <img src="images/identify.svg" alt=""> --}}
                          {{ Html::image('website/images/intgrations.svg','automated task management') }}
                      </div>
                       <div class="box-shape pos-r wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                       </div>
                    </div>
                 </div>
                  
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="integration-sec two-col-sec pt-100 pb-110 sm-pb-50 md-pb-50">
   <div class="container">
      <div class="header-contents">
         <h2>Our Most Popular Integrations</h2>
         <p>
            Streamline your workflow with Getlead CRM by connecting seamlessly to leading platforms, <br> enhancing your sales and customer management experience.
         </p>
      </div>
      <div class="row ">
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col">
               {{ Html::image('website/images/whatsapp.svg','WhatsApp integration') }}
               <h6>WhatsApp</h6>
               <p>
                  Enhance your customer engagement with WhatsApp integration, enabling direct communication and efficient support.

               </p>
            </div>
         </div>
		 
		 <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-8">
               {{ Html::image('website/images/facebook.png','Facebook Integration') }}
               <h6>Facebook</h6>
               <p>Facebook is a powerful social media platform that empowers businesses to connect and engage with their customers. 
               </p>
            </div>
         </div>
		 
		 <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-6">
               {{ Html::image('website/images/voxbay.svg','voxbay integration') }}
               <h6>Voxbay</h6>
               <p>Elevate your communication with Voxbay integration, enabling voice and video calls within your CRM for personalized interactions.

               </p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-7">
               {{ Html::image('website/images/bonvoice.svg','bonvoice integration') }}
               <h6>Bonvoice</h6>
               <p>Streamline your invoicing and billing processes with Bonvoice integration, ensuring efficient financial management.
               </p>
            </div>
         </div>
		 
		 <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-8">
               {{ Html::image('website/images/gupshup.svg','Gupshup integration') }}
               <h6>Gupshup</h6>
               <p>Enhance your messaging capabilities with Gupshup integration, providing a comprehensive solution for SMS and chat automation
               </p>
            </div>
         </div>
		 
		 
		 <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-8">
               {{ Html::image('website/images/wabis.png','Wabis Integration') }}
               <h6>Wabis</h6>
               <p>Wabis' integration with GetLead CRM streamlines customer communication by centralizing it within the CRM. 
               </p>
            </div>
         </div>
		 
		 
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-2">
               {{ Html::image('website/images/woo.svg','WooCommerce integration') }}
               <h6>WooCommerce</h6>
               <p>
                  Sync your online store effortlessly with Getlead CRM through WooCommerce integration, optimizing your e-commerce sales tracking.
               </p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-3">
               {{ Html::image('website/images/shiprocket.svg','shiprocket integration') }}
               <h6>Shiprocket</h6>
               <p>Simplify order fulfilment and shipping processes with Shiprocket integration, ensuring smooth delivery management.

               </p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-4">
               {{ Html::image('website/images/webhook.svg','webhook integration') }}
               <h6>WebHooks</h6>
               <p>Stay updated in real-time with WebHooks integration, receiving instant notifications and enhancing your CRM capabilities.
               </p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-5">
               {{ Html::image('website/images/indiamart.svg','indiamart integration') }}
               <h6>Indiamart</h6>
               <p>Expand your reach and manage leads effectively with Indiamart integration, harnessing the power of India's largest B2B marketplace.
               </p>
            </div>
         </div>

		 
		<div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-8">
               {{ Html::image('website/images/telinfy.png','telinfy Integration') }}
               <h6>Telinfy</h6>
               <p>Telinfy empowers businesses to harness the full potential of business communication.
               </p>
            </div>
         </div>

		<div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-8">
               {{ Html::image('website/images/chatspaz.png','Chatspaz Integration') }}
               <h6>Chatspaz</h6>
               <p>Chatspaz is a messaging platform that enables smooth communication and interaction between businesses and customers.
               </p>
            </div>
         </div>


		<div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-8">
               {{ Html::image('website/images/picky_assist.png','Picky Assist Integration') }}
               <h6>Picky Assist</h6>
               <p>GetLead CRM's integration with Picky Assist streamlines customer communication by centralizing it within the CRM. 
               </p>
            </div>
         </div>
		 
		



		<div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-8">
               {{ Html::image('website/images/doubletick.png','Wabis Integration') }}
               <h6>DoubleTick</h6>
               <p>DoubleTick' integration with GetLead CRM streamlines customer communication by centralizing it within the CRM. 
               </p>
            </div>
         </div>
		 
		 <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-8">
               {{ Html::image('website/images/mailer_cloud.png','MailerCloud Integration') }}
               <h6>MailerCloud</h6>
               <p>MailerCloud is a powerful cloud email delivery service integrating with CRMs, allowing businesses to send personalized transactional and marketing emails.
               </p>
            </div>
         </div>
		 
		 <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-8">
               {{ Html::image('website/images/coremicron.png','Coremicron Integration') }}
               <h6>Coremicron</h6>
               <p>Coremicron integrates with GetLead CRM, optimizing accounting processes and lead management.
               </p>
            </div>
         </div>
		 
		 <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-8">
               {{ Html::image('website/images/happilee.jpg','Happilee Integration') }}
               <h6>Happilee</h6>
               <p>Happilee's integration with WhatsApp is customer communication by centralizing it within the CRM. This integration enables effective management of customer interactions.
               </p>
            </div>
         </div>
		 
		 
		 <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="client-col color-8">
               {{ Html::image('website/images/gallabox.svg','Gallabox Integration') }}
               <h6>Gallabox</h6>
               <p>Gallabox's integration with WhatsApp is customer communication by centralizing it within the CRM. 
               </p>
            </div>
         </div>
		 

      </div>
   </div>
</div>
<div class="single-text-section single-text-section-2 pt-100 pb-110 sm-pt-50 md-pt-50">
   <div class="container">
      <div class="header-contents">
         <p class="sub-title">engaging with customers</p>
         <h2>A few clicks will enable <br> any integration.</h2>
         
         <div class="text-center mt-20">
            {{ Html::image('website/images/int-banner.svg','crm integration',['style' => 'margin: auto;']) }}
         </div>
         <p class="pt-40">
            Getlead CRM makes integrating with your favourite tools and platforms a breeze. Boost your <br> efficiency and expand your CRM capabilities effortlessly.         </p>
         
      </div>
   </div>
</div>



<div class="n-simp-sec">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="bx-pad">
               <div class="theme-title-onemd-p0">
                  <p class="sub-title">engaging with customers</p>
                  <h2 class="main-title">Integrate your favorite tools with Getlead CRM</h2>
               </div>
               <p class="pb-40 pt-10">
                  Seamlessly connect and enhance your CRM experience by integrating the tools you love, streamlining your workflow, and boosting productivity.               </p>
               <div class="yn-btn">
                  <a href="{{ route('request-demo') }}">
                   Request a Demo
                      
                  </a>
              </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12"></div>
      </div>
   </div>
</div>


<div class="contact-form-2 bg-none">
   <div class="container">
      <div class="header-text text-center">
         <h3 style="font-weight: 700;">Contact our team</h3>
         <p>Reach out to our experts for personalized assistance and discover how <br> Getlead CRM can revolutionize your business.</p>
     </div>
     <form  class="pt-50" id="contactUsForm" action="{{ route('store-contact-us') }}" method="GET" enctype="multipart/form-data">
     @csrf
     <div class="row">
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <label for="">First name <span>*</span></label>
               <input type="text" class="form-control" name="first_name" id="first_name">
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <label for="">Last name</label>
               <input type="text" class="form-control" name="last_name" id="last_name">
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <label for="">Email address <span>*</span></label>
               <input type="email" class="form-control" name="email" id="email">
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
               <input type="text" class="form-control" name="company_name" id="company_name">
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <label for="">Country<span>*</span></label>
               <input type="text" class="form-control" name="country" id="country">
            </div>
         </div>
         <div class="col-12">
            <div class="form-group">
               <label for="">How can our team help you?</label>
               <textarea class="form-control" name="comments" id="comments"></textarea>
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
