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
         <h1 class="secondary-title banner-main-title pt-40 pb-65 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Sitemap </h1>
         
         <!-- <div class="banner-img">
            {{ Html::image('website/images/lead-banner.svg','Getlead') }}
         </div> -->
         <div class="clear"></div>
      </div>
   </div>

   <div class="chat-box">
      <a href="#">
         {{ Html::image('website/images/chat-box.svg','Getlead') }}
      </a>
   </div>

</div>


<div class="pt-80 pb-80">
   <div class="container">
       <div class="row">
  <div class="col-sm-6 row"> <h3 class="text-left pb-20">  Sitemap</h3></div>    
       <div class="col-lg-12">

       <ul class="sitemap">
       
      
       
    <li><a href="https://getleadcrm.com/">Home</a></li>
    <li><a href="https://getleadcrm.com/features">Features</a></li>
    <li><a href="https://getleadcrm.com/lead-management-crm">Lead Management CRM</a></li>
    <li><a href="https://getleadcrm.com/task-management">Task Management</a></li>
    <li><a href="https://getleadcrm.com/deal-management-crm">Deal Management CRM</a></li>
    <li><a href="https://getleadcrm.com/campaign-management">Campaign Management</a></li>
    <li><a href="https://getleadcrm.com/integrations">Integrations</a></li>
    <li><a href="https://getleadcrm.com/crm-mobile-app">CRM Mobile App</a></li>
    <li><a href="https://getleadcrm.com/industries">Industries</a></li>
    <li><a href="https://getleadcrm.com/automotive-crm">Automotive CRM</a></li>
    <li><a href="https://getleadcrm.com/healthcare-crm">Healthcare CRM</a></li>
    <li><a href="https://getleadcrm.com/financial-crm">Financial CRM</a></li>
    <li><a href="https://getleadcrm.com/consulting-crm">Consulting CRM</a></li>
    <li><a href="https://getleadcrm.com/retail-crm">Retail CRM</a></li>
    <li><a href="https://getleadcrm.com/pricing">Pricing</a></li>
    <li><a href="https://getleadcrm.com/about-us">About Us</a></li>
    <li><a href="https://getleadcrm.com/request-demo">Request a Demo</a></li>
    <li><a href="https://getleadcrm.com/developer-hub">Developer Hub</a></li>
    <li><a href="https://getleadcrm.com/faq">FAQ</a></li>
    <li><a href="https://getleadcrm.com/blog">Blog</a></li>
    <li><a href="https://getleadcrm.com/contact-us">Contact Us</a></li>
    <li><a href="https://getleadcrm.com/contact-management-crm">Contact Management CRM</a></li>
    <li><a href="https://getleadcrm.com/sales-pipeline">Sales Pipeline</a></li>
    <li><a href="https://getleadcrm.com/Whats-new">What's New</a></li>
    
</ul>

             
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
