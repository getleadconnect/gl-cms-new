@extends('website.layout.design')
@section('title')
<meta name="description" content="Simple, transparent CRM pricing for every business. All features included in every plan. Start with a free trial today!">
<title>Getlead CRM Pricing - Simple Plans, All Features | Free Trial</title>
@endsection
@section('og_tags')
<meta property="og:title" content="Getlead CRM Pricing - Affordable Plans for Every Business" />
<meta property="og:description" content="Simple, transparent pricing. Choose a plan that fits your business. All features included. Start free today." />
@endsection
@section('twitter_tags')
<meta name="twitter:title" content="Getlead CRM Pricing - Affordable Plans for Every Business" />
<meta name="twitter:description" content="Simple, transparent pricing. Choose a plan that fits your business. All features included. Start free today." />
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

    .card-deckk .card {ackground-color: #fff;
    text-align: center;
    border-radius:12px;
    box-shadow: 15.436px 30.294px 50px 0px rgba(233, 236, 241, 0.5);
    border: 1px solid #ededed;}
.card-deckk .card h4{font-weight:600 !important;font-size:20px;color: #3a3a3a;}
    .card-deckk h3{font-weight:bold;color: #4340d3;}

    .card-header{background:none !important}
    .price-section .price-header p {
    
    line-height: 26px;
    padding-bottom:20px;
  
}

.card-body .primary-btn{background:#e53949 !important;border:1px solid #e53949 !important;font-weight:bold !important}

.card-body .primary-btn:hover{background-color: #f9a21f !important;
   border-color: #f9a21f !important;}


.pr-strike{ position: relative; }
.pr-strike:after {
	content: "";
	position: absolute;
	left: 0;
	top: 50%;
	margin-top: -3px; /* height/2 */
	width: 100%;
	height: 3px; /* Adjust */
	background: red;
	-webkit-transform: rotateZ(-10deg);
	-moz-transform: rotateZ(-10deg);
}

</style>
@endsection
@section('code')
<div class="rogan-hero-section-sec rogan-hero-section-v2 rogan-hero-section rogan-hero-five pt-150  md-pt-100  pos-r">
    <div class="container">
       <div class="main-wrapper pos-r">
          <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Our <span class="high">Pricing</span> is  simple with <br>
            no hidden fees
          </h1>
          <div class="clear"></div>
       </div>
    </div>
 </div>
 <div class="price-section pt-110 pb-0">
    <div class="container">
       <div class="price-header">
         <h2>Pricing</h2>
          <p>Choose your plan and get
            access to a wealth of features that will help you build <br>stronger relationships with your
            customers.
            </p>

            <!-- <div class="price-box"><span><b>Pricing</b> </span><br>
            <h6> {{$price}} </h6>
            <span>/User/Month.Billed Annually </span>  
         <br>
            <a class="third-btn mt-3" href="https://app.getleadcrm.comk/register" style="padding: 10px 45px;">Try for Free <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
               <path d="M20.4037 12.4951L14.4037 6.49512M20.4037 12.4951L14.4037 18.4951M20.4037 12.4951L9.90369 12.4951M4.40369 12.4951L6.90369 12.4951" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
           </svg></a>
         
         </div> -->  <div class="card-deckk mb-3 text-center mt-4">
<div class="row">
 
       

<div class="col-md-6 col-lg-6 col-sm-12 col-12"> 
<div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">1 Months</h4>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title">₹899 <small class="text-muted">/ mo</small></h3>
            <ul class="list-unstyled mt-3 mb-4">
              <li>User / Month</li>
              <li>Billed Monthly</li>
              <li><span style="color:red;">*</span> Training and Implementaion charges extra</li>
            </ul>
            <a href="https://app.getleadcrm.com/register" target="new" class="primary-btn w-100">TRY NOW</a> 
          </div>
        </div>   </div>
       
<!--	   <div class="col-md-6 col-lg-3 col-sm-12 col-12"> 
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">3 Months</h4>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title">₹899 <small class="text-muted">/ mo</small></h3>
            <ul class="list-unstyled mt-3 mb-4">
               <li>User / Month</li>
              <li>Billed Quaterly</li>
            
            </ul>
            <a href="https://app.getleadcrm.com/register" target="new" class="primary-btn w-100">TRY NOW</a> 
          </div> </div>
        </div>

        <div class="col-md-6 col-lg-3 col-sm-12 col-12"> 
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">6 Months</h4>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title">₹899 <small class="text-muted">/ mo</small></h3>
            <ul class="list-unstyled mt-3 mb-4">
               <li>User / Month</li>
              <li>Billed Half Yearly</li>
            
            </ul>
            <a href="https://app.getleadcrm.com/register" target="new" class="primary-btn w-100">TRY NOW</a>
          </div></div>
        </div>-->
		
		
		
        <div class="col-md-6 col-lg-6 col-sm-12 col-12"> 
        <div class="card mb-4 box-shadow ">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">12 Months</h4>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title"><span  class="pr-strike" style="font-size:30px;color:#8d8686;">₹899</span> ₹599 <small class="text-muted">/ mo</small></h3>
            <ul class="list-unstyled mt-3 mb-4">
              <li>User / Month</li>
              <li>Billed Yearly</li>
              <li><span style="color:red;">*</span> Training and Implementaion FREE</li>
            </ul>
            <a href="https://app.getleadcrm.com/register" target="new" class="primary-btn w-100">TRY NOW</a> 
            
          </div>
        </div> </div>
 
 
      </div>
        
       </div>
    </div>
 </div></div>

 

 
 
 <div class="crm-demo-section crm-demo-section-2">
   <div class="container">
      <div class="demo-col text-left">
         <div class="row">
            <div class="col-lg-7 col-md-7 col-12">
               <h2>Getlead standalone</h2>
               <p>Talk to us for a comprehensive solution that meets all your
                  enterprise needs</p>
                  <ul class="pl-3 pt-3 standlone" style="list-style-type:disc;">
                     <li>Optimise support and fine-tune change management with our most robust sandbox</li>
                     <li>Scale your business with our highest API rate limits</li> 
                     <li>Protect your operations with enhanced disaster recovery</li>
                  </ul>
               <div class="demo-ctn pt-30">
                  <a href="https://api.whatsapp.com/send?phone=+919020545373&text=Hello" target="new">Talk to our Sales Team</a>
               </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12">
               
            </div>
         </div>
         
      </div>
   </div>
</div>



 <div class="two-col-sec  contact-services pt-85 pb-90">
    <div class="container">
       <div class="header-contents">
          <h2>What's included? Absolutely everything.</h2>
          <p>Our CRM boasts a multitude of features that give you complete control over managing
            your customer relationships. Getlead CRM stands out from the competition by offering
            the most complete set of features on the market.Choose our CRM and experience the
            power of a feature-rich solution that brings your business to new heights of success.            
            
          </p>
       </div>
       <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 mb-20">
             <div class="contact-box">
                <div class="tick-col">
                   {{ Html::image('website/images/tick-new.svg','getlead') }}
                </div>
                <div class="contact-contents">
                   <h6>Lead Management</h6>
                   <p>Keep track of all your leads in one place, including their
                     contact information, lead source, and status.                     
                     </p>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 mb-20">
             <div class="contact-box">
                <div class="tick-col">
                   {{ Html::image('website/images/tick-new.svg','getlead') }}
                </div>
                <div class="contact-contents">
                   <h6>Task Management</h6>
                   <p>Create, assign, and track tasks to keep your team on track and
                     ensure nothing is left behind.</p>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 mb-20">
             <div class="contact-box">
                <div class="tick-col">
                   {{ Html::image('website/images/tick-new.svg','getlead') }}
                </div>
                <div class="contact-contents">
                   <h6>Deal Management</h6>
                   <p>Manage your sales pipeline and track deals from lead to close
                     with ease.
                     </p>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 mb-20">
             <div class="contact-box">
                <div class="tick-col">
                   {{ Html::image('website/images/tick-new.svg','getlead') }}
                </div>
                <div class="contact-contents">
                   <h6>Campaigns</h6>
                   <p>Create and track targeted campaigns to reach your customers with
                     the right message at the right time.</p>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 mb-20">
             <div class="contact-box">
                <div class="tick-col">
                   {{ Html::image('website/images/tick-new.svg','getlead') }}
                </div>
                <div class="contact-contents">
                   <h6>Integrations</h6>
                   <p>Connect your CRM to your favorite tools and apps to streamline
                     your workflows and save time.
                     </p>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 mb-20">
             <div class="contact-box">
                <div class="tick-col">
                   {{ Html::image('website/images/tick-new.svg','getlead') }}
                </div>
                <div class="contact-contents">
                   <h6>Mobile First</h6>
                   <p>Access your CRM from anywhere, at any time, with our mobile-first
                     approach and mobile app.</p>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 mb-20">
             <div class="contact-box">
                <div class="tick-col">
                   {{ Html::image('website/images/tick-new.svg','getlead') }}
                </div>
                <div class="contact-contents">
                   <h6>Call Management</h6>
                   <p>Call management feature allows for efficient customer support by logging, scheduling, recording, and tracking call analytics.
                     </p>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 mb-20">
             <div class="contact-box">
                <div class="tick-col">
                    {{ Html::image('website/images/tick-new.svg','getlead') }}
                </div>
                <div class="contact-contents">
                   <h6>Attendance Management</h6>
                   <p>Keep track of attendance and manage schedules for
                     your team with ease.
                     </p>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 mb-20">
             <div class="contact-box">
                <div class="tick-col">
                   {{ Html::image('website/images/tick-new.svg','getlead') }}
                </div>
                <div class="contact-contents">
                   <h6>Analytics</h6>
                   <p>Gain insights into your business performance with customizable reports
                     and analytics that show key metrics and trends.</p>
                </div>
             </div>
          </div>
       </div>
       {{-- <div class="enquiry">
          <p>Questions about our plans? Contact us at <a href="tel:+918453555000">+91-8453 555 000</a></p>
       </div> --}}

    </div>
 </div>


 


<div class="contact-form-2">
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
               <input type="text" class="form-control" name="first_name" id="first_name">
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <label for="">Last name</label>
               <input type="text"  class="form-control" name="last_name" id="last_name">
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
               <input type="tel" class="form-control" required> -->
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
               <input type="text" class="form-control"  name="country" id="country">
            </div>
         </div>
         <div class="col-12">
            <div class="form-group">
               <label for="">How can our team help you?</label>
               <textarea class="form-control"  name="comments"  id="comments"></textarea>
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
