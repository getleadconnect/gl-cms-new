@extends('website.layout.design')
@section('title')
<meta name="description" content="Have a question or need support with our CRM? Get in touch with the GetLead CRM team today. We are here to help you streamline your sales process and grow your business. Contact us now!">
<title>Contact Us | Get in Touch with GetLead CRM Team
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
    .error{
        color: red !important;
    }
</style>
@endsection
@section('code')

<div class="rogan-hero-section-sec rogan-hero-section-v2 rogan-hero-section rogan-hero-five pt-150 pb-100 md-pt-100  pos-r">
    <div class="container">
        <div class="main-wrapper pos-r">
            <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated"
                data-wow-delay="0.4s">Contact us
            </h1>
            <div class="clear"></div>
        </div>
    </div>
    <div class="chat-box">
        <a href="#">
            {{ Html::image('website/images/chat-box.svg','getlead') }}
        </a>
    </div>
</div>
<div class="contact-section pt-100 pb-120 ">
    <div class="container">
        <div class="contact-header text-center">
            <h2>Contact our team
            </h2>
            <p>Reach out to our dedicated team of experts for personalized support and guidance. We're here to assist you on your journey to CRM success.</p>
        </div>
    </div>
    <div class="container">
        <div class="row contact-cols pt-65 justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contact-details">
                    {{ Html::image('website/images/chat.svg','getlead') }}
                    <p class="pt-30 pb-25">Talk to a member of 
                        our Sales team</p>
                    <div class="cont-btn">
                        <a href="https://api.whatsapp.com/send?phone=+919020545373&text=Hello">Contact now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contact-details">
                    {{ Html::image('website/images/demo.svg','getlead') }}
                    <p class="pt-30 pb-25">Product &
                        account support</p>
                    <div class="cont-btn">
                        <a href="https://app.getleadcrm.com/register">Contact now</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="two-col-sec pb-130 pt-100">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 col-12">
                <div class="contact-form-col ">
                    <h3>Contact our Sales team</h3>
                    <p>Reach out to your target customer groups the way they want to be reached. With the power of targeted SMS, emails,</p>
                    <form class="contact-form pt-70" id="contactUsForm" action="{{ route('store-contact-us') }}" method="GET" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 pb-30">
                                <label>First Name&nbsp;<span>*</span></label>
                                <input type="text" name="first_name" id="first_name" placeholder="First Name" autocomplete="off">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 pb-30">
                                <label>Last Name</label>
                                <input type="text" name="last_name" id="last_name" placeholder="Last name" autocomplete="off">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 pb-30">
                                <label>Email Address&nbsp;<span>*</span></label>
                                <input type="email" name="email" id="email" placeholder="Email id" autocomplete="off">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 pb-30">
                            <div class="form-group">
                                <div class="form-group form-feild-row  country-code-row text-left position-relative">
                                    <label class="sign-label">Mobile Number&nbsp;<span>*</span></label>
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
                            <div class="col-lg-6 col-md-6 col-sm-12 pb-30">
                                <label>Company Name&nbsp;</label>
                                <input type="text" name="company_name" id="company_name" placeholder="Company Name" autocomplete="off">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 pb-30">
                                <label>Country&nbsp;<span>*</span></label>
                                <input type="text" name="country" id="country" placeholder="Country" autocomplete="off">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 pb-30">
                                <label>How can our team help you?</label>
                                <textarea name="comments" placeholder="How can our team help you?" id="comments" autocomplete="off"></textarea>
                            </div>
                        </div>
                        <div class="submit-btn">
                            <button>Send support request</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="quarter-col">
                    <h3>Our Headquarters</h3>
                    <h6>Getlead Analytics Private Limited</h6>
                    <p>Unit-2, Upper Basement <br>
                        Sahya Building, Govt. CyberPark <br>
                        Kozhikode, Kerala 673016</p>
                    <ul class="social-contact pt-25">
                        <li class="d-flex align-items-center pb-2">
                            {{ Html::image('website/images/at-symbol.svg','getlead') }}<a class="pl-2" href="mailto:support@getlead.co.uk">support@getleadcrm.com</a>
                        </li>
                        <li class="d-flex align-items-center ">
                            {{ Html::image('website/images/c-contact.svg','getlead') }}<a class="pl-2" href="tel:+91-8453 555 000">+91-8453 555 000</a>
                        </li>   
                    </ul>
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
                // last_name: "required",
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
                // company_name:"required",
                country:"required",
                // comments:"required",
            },
            // in 'messages' user have to specify message as per rules
            messages: {
                first_name: " Please enter your firstname",
                // last_name: " Please enter your lastname",
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
                // company_name:"Please enter company name",
                country:"Please enter Country",
                // comments:"Please enter",
            }
        });
    });
</script>
@endsection
@endsection
