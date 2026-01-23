@extends('website.layout.design')
@section('title')
<meta name="description" content="Schedule a demo with GetLead CRM to see how our customizable CRM software can help streamline your sales pipeline and boost your conversions. Sign up now!
">
<title>Schedule a Demo with GetLead CRM | GetLead CRM
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
<div class="rogan-hero-section-sec rogan-hero-section-v2 rogan-hero-section rogan-hero-five pt-150 pb-150 md-pt-100 pos-r">
    <div class="container">
       <div class="main-wrapper pos-r">
          <h1 class="secondary-title banner-main-title pt-15 pb-0 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Request a demo
          </h1>
          <div class="clear"></div>
       </div>
    </div>
 </div>

<div class="req-demo-sec pb-100">
    <div class="container">
        <div class="rq-form-col">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="re-callback d-flex align-items-center justify-content-end flex-column">
                        {{ Html::image('website/images/chat.svg','getlead') }}
                        <h4 class="pt-30 bp-20">Request a Callback</h4>
                        <p class="text-center">Interested in learning more about 
                            Getlead CRM? Fill out the form below, and 
                            one of our product experts will contact you 
                            to gain a better understanding of your requirements.</p>
                        <div class="req-contact">
                            <p class="pb-20">You can also call us directly at</p>
                            <div class="d-flex align-items-center">
                                {{ Html::image('website/images/re-call.svg','getlead') }}
                                <div style="padding-left: 10px;">
                                    <a href="tel:+91 8453 555 000">+91 8453 555 000</a>
                             
                                <br>
                                    <!-- <a href="tel: +91 8453 111 222"> +91 8453 111 222</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="col-lg-7 col-md-6 col-12">
                   <form  class="pt-50" id="contactUsForm" action="{{ route('store-contact-us') }}" method="GET" enctype="multipart/form-data">
                   @csrf
                    <div class="re-form">
                        
                         <div class="form-group">
                            <label for="">First name<span>*</span></label>
                            <input type="text" class="form-control" name="first_name" id="first_name">
                         </div>
                         <div class="form-group">
                            <label for="">Email address <span>*</span></label>
                            <input type="email" class="form-control" name="email" id="email">
                         </div>
                         <div class="form-group">
                            <!-- <label for="">Mobile number</label>
                            <input type="tel" class="form-control" name="first_name" id="first_name"> -->
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
                         <div class="form-group">
                            <label for="">Country <span>*</span></label>
                            <input type="text" class="form-control" name="country" id="country">
                         </div>
                         <div class="form-group">
                            <label for="">Location</label>
                            <input type="text" class="form-control" name="location" id="location">
                            <input type="hidden" class="form-control" value="1" name="demo" id="demo">
                         </div>
                         <div class="form-group">
                            <label for="">How can our team help you?</label>
                            <textarea class="form-control" name="comments" id="comments" cols="30" rows="10"></textarea>
                         </div>
                         <button style="background: #EB5757; border:unset;min-height: 50px;font-weight:700;" class="primary-btn w-100 mt-50 ">Submit a Request</button>
                    </div>
                   </form>
                </div>
                
            </div>
        </div>
    </div>
</div>









@section('script')
<script>
   window.onload = function(){
      document.getElementById('demoBtn').click();
   }
</script>
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
