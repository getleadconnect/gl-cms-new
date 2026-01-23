@extends('website.layout.design')
@section('title')
<meta name="description" content="Explore career opportunities at GetLead CRM and join our team of talented professionals. We offer a collaborative and dynamic work environment, competitive compensation, and opportunities for growth and development. Apply now and take the next step in your career.">
<title>Join Our Team | Career Opportunities at GetLead CRM
</title>   
@endsection
@section('css')
@endsection
@section('code')
<div class="rogan-hero-section-sec rogan-hero-section-v3 rogan-hero-section rogan-hero-five pt-150 pb-200 md-pt-100  pos-r" style="background-color:#1c1d2d !important;" >
    <div class="container">
       <div class="main-wrapper pos-r">
          <h1 class="secondary-title banner-main-title pt-15 pb-0 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Work at GetLead
          </h1>
          <p class="second-sub-title banner-sub-title pb-45 md-pb-30 wow fadeInUp animated pt-15" data-wow-delay="0.9s">Affordable CRM plans with zero hidden costs.
          </p>
          <div class="banner-img " style="width: 50%; margin: auto;">
             {{ Html::image('website/images/career-banner.png','getlead') }}
          </div>
          <div class="clear"></div>
       </div>
    </div>
    <div class="chat-box">
       <a href="#">
       {{ Html::image('website/images/chat-box.svg','getlead') }}
       </a>
    </div>
 </div>
 <div class="integration-sec pt-100 pb-110 sm-pb-50 md-pb-50">
    <div class="container">
       <div class="header-contents pb-40">
          <h2>Change your life with GetLead</h2>
          <p>A career at GetLead is more than just a job. It's an opportunity to make a difference and grow your skills. We invite you to explore our open positions and join us on this exciting journey.</p>
       </div>

	<div class="gl-vacancies">
          <div class="job-deatils">
             <h6>Business Development Executive -   <span>Fresher</span></h6>
             <p>Getlead is looking for a Business Development Executive to join our growing Business Operation team for improving our external client facing processes and planning.
             </p>
          </div>
          <div class="apply-now">
             <a href="{{ route('career-details-page') }}" class="start-btn ">Apply now</a>
          </div>
       </div>

       <div class="gl-vacancies">
          <div class="job-deatils">
             <h6>Operation Manager -   <span>Fresher</span></h6>
             <p>Getlead is looking for a Operation Manager to join our growing Business Operation team for improving our external client facing processes and planning.
             </p>
          </div>
          <div class="apply-now">
             <a href="{{ route('career-details-page') }}" class="start-btn ">Apply now</a>
          </div>
       </div>


       <div class="enquiry pt-50">
          <p>Questions about our plans? Contact us at <a href="tel:+9184535 55000">+91-8453 555 000</a></p>
       </div>
    </div>
 </div>
 <div class="sales-section">
    <div class="container">
       <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
             {{ Html::image('website/images/sales-2.svg','getlead') }}
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
             <div class="sales-contents">
                <h2>Close deals<br>
                   on the go with<br>
                   Getlead CRM
                </h2>
                <div class="sales-btns">
                  <div class="get-started">
                     <a href="https://app.getleadcrm.com/register" class="start-btn " target="_blank">Signup for Free</a>
                  </div>
                  <div class="see-demo">
                     <a href="{{ route('price-page') }}">See plans & pricing</a>
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
