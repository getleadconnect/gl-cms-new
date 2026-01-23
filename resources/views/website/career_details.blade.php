@extends('website.layout.design')
@section('css')
@endsection
@section('code')
<div class="rogan-hero-section-sec rogan-hero-section-v3 rogan-hero-section rogan-hero-five pt-150 pb-200 md-pt-100  pos-r" style="background-color:#1c1d2d;">
    <div class="container">
       <div class="main-wrapper pos-r pb-70">
          <h1 class="secondary-title banner-main-title pt-15 pb-0 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Job Details
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
 <div class="help-center-sec pt-100 pb-110 sm-pb-50 md-pb-50">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">

             <div class="about-crm-col pb-40">

                <h4 style="font-size:25px;">I. Business Development Executive</h4>
                <p class="carr-desig" style="padding: 0;">Freshers - No experiance required</p>
                <!--<p>
                   A pipeline is sequential list of stages a lead/deal goes through until they are converted or lost. Each stage in a pipeline has a probability of winning associated with it, which makes it easier for sales professionals to prioritize their prospects based on the pipeline stages. The stages of a pipeline varies from business to business. So Kylas CRM gives provision for creating custom pipelines which suits the business of the selling organization.
                   <br><br>
                   The stages of a pipeline varies from business to business. So Kylas CRM gives provision for creating custom pipelines which suits the business of the selling organization.
                </p>-->

                <h5>About the role</h5>
                <p>
                  We are looking for a proactive and goal-driven Business Development Executive to help grow our client base and identify new market opportunities. You will be responsible for building strong relationships, presenting solutions, and supporting the company’s overall sales strategy.
                </p>

                 <h5 class="mt-20">Your experience & skills</h5>
                  <ul style="background-color:#fff;">
                     <li>No experience required – freshers are welcome</li>
                     <li>Good communication and interpersonal skills</li>
                     <li>Positive attitude and willingness to learn</li>
                     <li>Basic understanding of sales or marketing is a plus</li>
                     <li>Ability to work independently and meet targets</li>
                  </ul>

                <!--<ul>
                   <li>Working on cutting-edge technologies.</li>
                   <li>Focusing on complex technical design architecture.</li>
                   <li>Utilize our unique understanding of business and financial aspects to design solutions that accommodate both</li>
                   <li>Working closely with our sales and partners departments.</li>
                   <li>Solving real complex problems at scale.</li>
                   <li>Improve your skills and learn from top-notch engineers.</li>
                </ul>
                <h5 class="mt-20">Your experience & skills</h5>
                <ul>
                   <li>Experience building complex large scale web applications from scratch.</li>
                   <li>Experience with Micro Services architecture, Event Sourcing and modern frameworks.</li>
                   <li>Experience working with databases - Mysql, Postgres, Elastic search, Redis, etc.</li>
                   <li>Strong technical and coding skills..</li>
                   <li>Develop clean, high-quality code and automated tests to verify its operation.</li>
                   <li>Team player, egoless, strong communication skills, and empathy.</li>
                </ul> -->
             </div>

             <div class="about-crm-col pb-40">
                <h4 style="font-size:25px">II. Operations Manager</h4>
                <p class="carr-desig" style="padding: 0;">Freshers - No experiance required</p>
                <!--<p>
                   A pipeline is sequential list of stages a lead/deal goes through until they are converted or lost. Each stage in a pipeline has a probability of winning associated with it, which makes it easier for sales professionals to prioritize their prospects based on the pipeline stages. The stages of a pipeline varies from business to business. So Kylas CRM gives provision for creating custom pipelines which suits the business of the selling organization.
                   <br><br>
                   The stages of a pipeline varies from business to business. So Kylas CRM gives provision for creating custom pipelines which suits the business of the selling organization.
                </p>-->

                <h5>About the role</h5>
                <p>
                  We are seeking a motivated individual to assist in managing daily operations and supporting multiple departments. You will help coordinate tasks, ensure smooth workflow, and learn how to oversee operational processes.
                </p>

                 <h5 class="mt-20">Your experience & skills</h5>
                  <ul style="background-color:#fff;">
                     <li>No experience required – freshers are welcome</li>
                     <li>Good organizational and problem-solving skills</li>
                     <li>Strong communication and teamwork abilities</li>
                     <li>Willingness to learn operational processes</li>
                     <li>Ability to multitask and work efficiently</li>
                  </ul>
             </div>

        </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
             <div class="apply-col">
                <h4>Apply to this job</h4>
                <form class="contact-form pt-30">
                   <div class="form-group">
                      <label>First name<span>*</span></label>
                      <input type="text">
                   </div>
                   <div class="form-group">
                      <label>Email address<span>*</span></label>
                      <input type="email">
                   </div>
                   <div class="form-group">
                      <label>Mobile number<span>*</span></label>
                      <input type="tel">
                   </div>
                   <div class="form-group">
                      <label>Attach Resume<span>*</span></label>
                      <input type="file" placeholder="Upload file here">
                   </div>
                   <div class="submit-btn pt-20">
                      <button>Apply </button>
                   </div>
                </form>
             </div>
          </div>
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
@section('')
@endsection
@endsection
