@extends('website.layout.design')
@section('title')
<meta name="description" content="GetLead CRM's mobile app gives you real-time access to your sales and marketing data. Stay connected and productive on the go with customizable dashboards and powerful integrations. Download GetLead CRM mobile app now.">
<title>Take Your Sales on the Go with GetLead CRM Mobile App
</title>   
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
<div class="rogan-hero-section-sec rogan-hero-section-v2 rogan-hero-section rogan-hero-five pt-150 pb-0 md-pt-100 pos-r">
    <div class="container">
       <div class="main-wrapper pos-r">
          <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Experience CRM On the Go <br>
            with Our Mobile App
          </h1>
          <p class="second-sub-title banner-sub-title pb-45 md-pb-60 wow fadeInUp animated" data-wow-delay="0.9s">Stay Connected and Productive Anywhere, Anytime
          </p>
          <!-- <div class="banner-img">
            {{ Html::image('website/images/mobile-banner.png','getlead') }}
         </div> -->
          <div class="clear"></div>
       </div>
    </div>
 </div>
    

 <div class="single-text-section pt-120 pb-100">
   <div class="container">
      <div class="row text-banner align-items-center">
         <div class="col-lg-5 col-md-12 col-sm-12">
            {{ Html::image('website/images/w-image-2.png','getlead',['style' => 'width:100%;']) }}
         </div>
         <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="">
               <p class="sub-title">START CAMPAIGN</p>
               <h2>
                  Supercharge your Marketing with Advanced Campaign Features
               </h2>
               <p class="pb-40"> Take your marketing to the next level with GetLead CRM's advanced campaign features.

               </p>
               <div class="yn-btn">
                  <a href="{{ route('request-demo') }}">
                     Request a Demo
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                           <path d="M20.4037 12.4951L14.4037 6.49512M20.4037 12.4951L14.4037 18.4951M20.4037 12.4951L9.90369 12.4951M4.40369 12.4951L6.90369 12.4951" stroke="#222935" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                     </span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="about-us-block-two pb-40 md-pt-100 md-pb-50 pos-r">
   <div class="shape-wrapper">
   </div>
   <div class="inner-wrapper pos-r">
      <div class="main-container  mt-100 mob-margin-0" style="padding:0px">
         <div class="container">
            <div class=" arrow-vector">
            <div class="col-md-10 offset-md-1">
            <div class="row">
                 <div class="col-lg-7 col-md-7 analyse">
                    <div class="">
                       <div class="theme-title-one md-p0">
                          <p class="sub-title">LEAD MANAGEMENT</p>
                          <h2 class="main-title">Connect with 
                           customers effortlessly.
                          </h2>
                       </div>
                       <p class="pb-40 pr-4">
                        Reach out to your target customer groups the way they want to be reached. With the power of targeted SMS, emails, and voice SMS, broadcast marketing messages.                       </p>
                    </div>
                 </div>
                  <div class="col-lg-5 col-md-5 analyse">
                     <div class="main-img-box pos-r hide-pr md-mt-50 mobile-crm">
                        <div class="img-one pos-r wow fadeIn" data-wow-duration="2s">
                           {{ Html::image('website/images/mobile-1.png','mobile crm') }}
                       </div>
                        <div class="box-shape pos-r wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="main-container  mt-100 mob-margin-0" style="padding:0px">
         <div class="container">
            <div class="convertt arrow-vector pt-40 pb-40">
            <div class="col-md-10 offset-md-1 mobile-crm">
            <div class="row">
                 <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="main-img-box pos-r hide-pr  md-mt-50 ">
                       <div class="img-one pos-r wow fadeIn	" data-wow-duration="2s">
                          {{ Html::image('website/images/mobile-2.png','Connect with customers') }}
                      </div>
                    </div>
                 </div>
                  <div class="col-lg-7 col-md-7 col-sm-12">
                     <div class="">
                        <div class="theme-title-one md-p0">
                          <p class="sub-title">ACTIVITY REPORTS</p>
                           <h2 class="main-title">Access insights precisely 
                              when you require them.</h2>
                        </div>
                        <p class="pb-40">
                        Unlock timely insights on-demand with Getlead, reshaping the CRM and Mobile App industry, offering powerful solutions tailored to enhance your sales journey.                          </p>
                     </div>
                  </div>
               </div>
            </div>   </div>
         </div>
         <div class="clear"></div>
      </div>
      <div class="main-container align-items-center mt-100" style="padding:0px">
         <div class="container">
            <div class=" arrow-vector">
              

                <div class="col-md-10 offset-md-1 mobile-crm">
 <div class="row">

                 <div class="col-lg-6  col-md-6 col-12 ">
                    <div class=" ">
                       <div class="theme-title-onemd-p0">
                         <p class="sub-title">engaging with customers</p>
                          <h2 class="main-title">Manage your teams
                           task in one touch</h2>
                       </div>
                       <p class="pb-40 pt-10">Elevate task management with one touch: Getlead's CRM mobile app revolutionizes team productivity, enhancing efficiency in the CRM and Mobile App industry.
                         </p>
                    </div>
                 </div>
                  <div class="col-lg-6 col-md-6 col-12">
                     <div class="main-img-box pos-r hide-pr md-mt-50">
                        <div class="img-one pos-r wow fadeIn" data-wow-duration="2s">
                           {{ Html::image('website/images/mobile-3.png','Access insights') }}
                       </div>
                     </div>
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

<div class="about-us-block-two mobile-banner pt-150 pb-150">
   <div class="main-container align-items-center">
      <div class="container">
         <div class=" arrow-vector">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-12">
                  {{-- <div class="main-img-box pos-r hide-pr md-mt-50">
                     <div class="img-one pos-r wow fadeIn" data-wow-duration="2s">
                        {{ Html::image('website/images/mobile-4.png','manage your teams task') }}
                     </div>
                  </div> --}}
               </div>
            <div class="col-lg-6  col-md-6 col-12 ">
               <div class="bx-pad">
                  <div class="theme-title-onemd-p0">
                     <p class="sub-title">engaging with customers</p>
                     <h2 class="main-title">Mobile App Integration </h2>
                  </div>
                  <p class="pb-40 pt-10">Seamlessly merge CRM capabilities with your mobile app, enhancing user engagement and efficiency in the dynamic world of CRM and Mobile App industry.
                     </p>
                     <div class="yn-btn">
                        <a href="{{ route('request-demo') }}">
                           Request a Demo
                           <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                 <path d="M20.4037 12.4951L14.4037 6.49512M20.4037 12.4951L14.4037 18.4951M20.4037 12.4951L9.90369 12.4951M4.40369 12.4951L6.90369 12.4951" stroke="#222935" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </span>
                        </a>
                     </div>
               </div>
            </div>
            </div>
         </div>
      </div>
      <div class="clear"></div>
   </div>
</div>


<div class="two-col-sec-mobile pt-100 pb-60">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6 col-sm-12 pb-40">
            <div class="col-contents">
               {{-- <img src="images/circle-new.svg" alt="getlead"> --}}
               {{ Html::image('website/images/mob-1.svg','Automated notifications') }}
               <h4 class="pt-3">Automated notifications:</h4>
               <p>
                  Getlead CRM empowers you to forecast future revenue with precision and assurance, leveraging the platform's robust forecasting features.               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 pb-40">
            <div class="col-contents">
               {{-- <img src="images/circle-new.svg" alt="getlead"> --}}
               {{ Html::image('website/images/mob-2.svg','Improved productivity') }}
               <h4 class="pt-3">Improved productivity</h4>
               <p>
                  By utilizing Getlead CRM's powerful deal tracking and analysis tools, you can effortlessly pinpoint and tackle problematic deals before they disrupt your sales process.               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 pb-40">
            <div class="col-contents">
               {{-- <img src="images/circle-new.svg" alt="getlead"> --}}
               {{ Html::image('website/images/mob-3.svg','Better time management') }}
               <h4 class="pt-3">Better time management
               </h4>
               <p>
                  Our customers are the lifeblood of our  company, and we are dedicated to putting their needs first in everything we do.
               </p>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="download-sec">
   <div class="container">
      <div class="row pt-90 pb-75">
         <div class="col-lg-6 col-md-6 col-12">
            <div class="app-contents">
               <h2>Download GetLead <br> Mobile App</h2>
                  <p class="pt-20 pb-30">Keep expanding your business from anywhere with <br>
                     Getlead CRM mobile app.</p>
                  <div class="d-flex align-items-center">
                     <div class="down-link mr-3">
                     <a href="https://play.google.com/store/apps/details?id=com.getlead.app" target="_blank">
                           {{ Html::image('website/images/playstore.png','playstore crm') }}
                        </a>
                     </div>
                     <div class="down-link ">
                        <a href="https://apps.apple.com/in/app/getlead/id1557445421" target="_blank">
                           {{ Html::image('website/images/app-store.png','app store crm') }}
                        </a>
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="contact-form-2">
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
