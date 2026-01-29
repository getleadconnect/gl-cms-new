@extends('website.layout.design') @section('title')
<meta name="description" content="Learn about GetLead CRM's story, mission, and team. Discover how our powerful and customizable CRM software can help you streamline your sales and marketing processes and grow your business." />
<title>About GetLead CRM - Our Story and Mission | GetLead CRM</title>
@endsection
@section('og_tags')
<meta property="og:title" content="About Getlead CRM - Our Story and Mission" />
<meta property="og:description" content="Learn about Getlead CRM's story, mission, and team. Discover how our powerful CRM can help streamline your sales processes." />
@endsection
@section('twitter_tags')
<meta name="twitter:title" content="About Getlead CRM - Our Story and Mission" />
<meta name="twitter:description" content="Learn about Getlead CRM's story, mission, and team. Discover how our powerful CRM can help streamline your sales processes." />
@endsection
@section('css') @endsection @section('code')
<div class="rogan-hero-section-sec rogan-hero-section-v2 rogan-hero-section rogan-hero-five pb-0 pt-150 md-pt-100 pos-r">
    <div class="container">
        <div class="main-wrapper pos-r">
            <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">
                Empowering organizations to run<br />
                High velocity Sales at scale
            </h1>
            <p class="second-sub-title banner-sub-title pb-45 md-pb-30 wow fadeInUp animated" data-wow-delay="0.9s">
                Explore the complete range of lead management tools to get your<br />
                businessthe right leads to pursue and generate sales.
            </p>
            <div class="banner-img">
                {{ Html::image('website/images/banner-img-2.png', 'getlead', ['style' => 'width: auto;']) }}
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
<div class="img-layout-sec pt-80">
    <div class="container">
        <div class="layo-contents">
            <h2>Let's talk numbers</h2>
            <p>
                Our commitment to delivering exceptional results has earned us a loyal following of satisfied <br> clients. With over 1000 organizations across various industries using our CRM, we take pride <br> in the trust that our clients place
                in us.
            </p>
            <div class="row users-list pt-60">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="users-count">
                        <div>
                            {{ Html::image('website/images/user-1.svg','crm customer') }}
                            <h5>1000+</h5>
                            <p>Registred Customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="users-count">
                        <div>
                            {{ Html::image('website/images/user-1.svg','Customer Retention Rate') }}
                            <h5>95%</h5>
                            <p>Customer Retention Rate</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="users-count">
                        <div>
                            {{ Html::image('website/images/user-1.svg','crm agents') }}
                            <h5>3500+</h5>
                            <p>Agents</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-text-section single-text-section-v2 pt-150 pb-160">
    <div class="container">
        <div class="row text-banner">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="">
                    <p class="sub-title">OUR MISSION</p>
                    <h2>
                        Dominate Your<br />
                        sales goals
                    </h2>
                    <p class="pb-40">Reach out to your target customer groups the way they want to be reached. With the power of targeted SMS, emails, and voice SMS, broadcast marketing messages.</p>
                    <div class="yn-btn">
                        <a href="{{ route('request-demo') }}">
                            Request Demo
                            
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12"></div>
        </div>
    </div>
</div>
<div class="two-col-sec pt-100 pb-100">
    <div class="container">
        <div class="header-contents">
            <h2>Our Approach to Work </h2>
            <p>Delivering customer engagement on their terms. Utilize targeted SMS, emails, and voice messages to effortlessly connect with tailored customer segments, effortlessly boosting engagement.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 pb-40">
                <div class="col-contents">
                    {{ Html::image('website/images/c.svg','Customer-centric') }}
                    <h4>Customer-centric </h4>
                    <p>At Getlead, being customer-centric is not just a motto; it's our DNA. We prioritize your business's success by putting your customers at the heart of our CRM solutions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-40">
                <div class="col-contents">
                    {{ Html::image('website/images/e.svg','Agility') }}
                    <h4>Agility </h4>
                    <p>The CRM strategy at Getlead is built around agility. We provide dynamic solutions that adapt to your business's changing needs, ensuring you stay ahead in a fast-paced market.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-40">
                <div class="col-contents">
                    {{ Html::image('website/images/a.svg','Empathize') }}
                    <h4>Empathize </h4>
                    <p>We don't just provide CRM solutions; we empathize with your business challenges and tailor our services to ensure your success. We understand your needs because we care about your growth.</p>
                </div>
            </div>
        </div>
        <!-- <div class="btm-team">
         <div class="text-contents">
            <p class="sub-title">OUR MISSION</p>
            <h2>Unleash the power of Getlead CRM</h2>
         </div>
        </div> -->
    </div>
</div>




<div class="team-section">
   <div class="container">

   </div>
</div>



{{-- <div class="team-sec">
    <div class="container">
        <div class="header-text text-center">
            <p class="sub-title">Empowering Success Through Teamwork</p>
            <h2>Our Cohesive Team</h2>
        </div>
        <div class="team-col">
            <div class="team-member">
                <div class="t-img">
                    {{ Html::image('website/images/team-1.png','getlead') }}
                </div>
                <div class="about-memb">
                    <p class="t-name">Ajay Ashok</p>
                    <p class="t-desig">Senior Laravel developer</p>
                </div>
            </div>
            <div class="team-member">
                <div class="t-img">
                    {{ Html::image('website/images/team-2.png','getlead') }}
                </div>
                <div class="about-memb">
                    <p class="t-name">Sharon Naz</p>
                    <p class="t-desig">Senior Laravel developer</p>
                </div>
            </div>
            <div class="team-member">
                <div class="t-img">
                    {{ Html::image('website/images/team-3.png','getlead') }}
                </div>
                <div class="about-memb">
                    <p class="t-name">Akhil</p>
                    <p class="t-desig">Sales Executive</p>
                </div>
            </div>
            <div class="team-member">
                <div class="t-img">
                    {{ Html::image('website/images/team-4.png','getlead') }}
                </div>
                <div class="about-memb">
                    <p class="t-name">Haris P</p>
                    <p class="t-desig">Sales Head</p>
                </div>
            </div>
            <div class="team-member">
                <div class="t-img">
                    {{ Html::image('website/images/team-5.png','getlead') }}
                </div>
                <div class="about-memb">
                    <p class="t-name">Vysakh</p>
                    <p class="t-desig">Flutter developer</p>
                </div>
            </div>
            <div class="team-member">
                <div class="t-img">
                    {{ Html::image('website/images/team-6.png','getlead') }}
                </div>
                <div class="about-memb">
                    <p class="t-name">Sanofer</p>
                    <p class="t-desig">Project co-ordinator</p>
                </div>
            </div>
            <div class="team-member">
                <div class="t-img">
                    {{ Html::image('website/images/team-7.png','getlead') }}
                </div>
                <div class="about-memb">
                    <p class="t-name">Ashir</p>
                    <p class="t-desig">Digital marketing executive</p>
                </div>
            </div>
            <div class="team-member">
                <div class="t-img">
                    {{ Html::image('website/images/team-8.png','getlead') }}
                </div>
                <div class="about-memb">
                    <p class="t-name">Vismaya</p>
                    <p class="t-desig">QA analyst</p>
                </div>
            </div>
            <div class="team-member">
                <div class="t-img">
                    {{ Html::image('website/images/team-9.png','getlead') }}
                </div>
                <div class="about-memb">
                    <p class="t-name">Navar Ahammed</p>
                    <p class="t-desig">front-end developer</p>
                </div>
            </div>
            <div class="team-member">
                <div class="t-img">
                    {{ Html::image('website/images/team-10.png','getlead') }}
                </div>
                <div class="about-memb">
                    <p class="t-name">Sumisha</p>
                    <p class="t-desig">Customer support</p>
                </div>
            </div>
            <div class="team-member">
                <div class="t-img">
                    {{ Html::image('website/images/team-11.png','getlead') }}
                </div>
                <div class="about-memb">
                    <p class="t-name">Athira</p>
                    <p class="t-desig">HR executive</p>
                </div>
            </div>
            <div class="team-member">
                <div class="t-img">
                    {{ Html::image('website/images/team-12.png','getlead') }}
                </div>
                <div class="about-memb">
                    <p class="t-name">Shadil</p>
                    <p class="t-desig">Accountant</p>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="testimonial-section-classic style-two pos-r">
    <div class="container">
        <div class="theme-title-one text-center">
            <h2>They talk about it better than us</h2>
        </div>
        <div class="">
            <div class="inner-container">
                <div class="main-content">
                    <div class="testimonial-slider">
                        {{-- @foreach ($testimonials as $testimonial)
                        <div class="item">
                            <div class="client-prof">
                                <!-- {{ Html::image('/images/'.$testimonial->image,'getlead',array('width'=>'50px','border-radius'=>'50%')) }} -->
                                {{ Html::image('/images/'.$testimonial->image,'Getlead',array('class' => 'testimonial-image')) }}
                            </div>
                            <p>{!! $testimonial->description !!}</p>
                            <p class="name">{{ $testimonial->name }} - {{ $testimonial->designation }}</p>
                        </div>
                        @endforeach --}}


                        {{-- @foreach ($testimonials as $testimonial)
                        <div class="item">
                            <div class="client-prof">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="testi-col d-flex align-items-center">
                                            <div class="client-img">
                                             {{ Html::image('/images/'.$testimonial->image,'Getlead',array('class' => 'testimonial-image')) }}
                                            </div>
                                            <div class="client-text pl-3">
                                                <p>{!! $testimonial->description !!}</p>
                                                <p class="cl-name">{{ $testimonial->name }}</p>
                                                <p class="cl-desig">{{ $testimonial->designation }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="testi-col d-flex align-items-center">
                                            <div class="client-img">
                                                <img src="https://profile.getleadcrm.com/images/1682745319.jpg" class="testimonial-image" alt="" />
                                            </div>
                                            <div class="client-text pl-3">
                                                <p>Myself Aswin Pradeep, CEO – The Exodus felt it as an easy ride being associated with GETLEAD. They provided a wide range of solutions for all spheres of our business. The software is user friendly and the team is readily available for the support needed. <!--We are very satisfied with the work the GETLEAD team has performed, and we would like to highlight the high level of technical expertise, coherence and also the after sales assistance they are providing. --></p>
                                                <p class="cl-name">Aswin Pradeep</p>
                                                <p class="cl-desig">CEO EXODUS</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach --}}

                        <div class="item">
                            <div class="client-prof">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="testi-col d-flex align-items-center">
                                            <div class="client-img">
                                                {{-- <img src="https://getleadcrm.com/images/1677819095.jpg" class="testimonial-image" alt="" /> --}}
                                                <img src="https://getleadcrm.com/images/1682745319.jpg" class="testimonial-image" alt="" />
                                            </div>
                                            <div class="client-text pl-3">
                                                <p>Getlead has created a remarkable change in the way we handle our database. We overcame the daunting task of manual sorting of data and maintaining follow-up contact with our customers. <!-- Our customers’ travel requirements and privacy concerns are imperative to us and Getlead is a safe and reliable support system with an easy-to-use interface for our Tourism business. Thank you Getlead --></p>
                                                <p class="cl-name">Bastin Joseph</p>
                                                <p class="cl-desig">CEO, FORTUNE TRAVELS</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="testi-col d-flex align-items-center">
                                            <div class="client-img">
                                                {{-- <img src="https://profile.getleadcrm.com/images/1682745319.jpg" class="testimonial-image" alt="" /> --}}
                                                 {{-- <img src="https://profile.getleadcrm.com/images/1682745319.jpg" class="testimonial-image" alt="" />  --}}
                                            </div>
                                            <div class="client-text pl-3">
                                                <p>Myself Aswin Pradeep, CEO – The Exodus felt it as an easy ride being associated with GETLEAD. They provided a wide range of solutions for all spheres of our business. The software is user friendly and the team is readily available for the support needed.<!-- We are very satisfied with the work the GETLEAD team has performed, and we would like to highlight the high level of technical expertise, coherence and also the after sales assistance they are providing. -->
</p>
                                                <p class="cl-name">Aswin Pradeep</p>
                                                <p class="cl-desig">CEO EXODUS</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="faq-sec pt-100">
   <div class="container">
       <div class="header-text text-center">
           <h2>FAQ’s</h2>
           <p>Explore the complete range of lead management tools to get your businessthe right leads to pursue and generate sales.</p>
       </div>
       <div class="faq-col">
           <div id="accordion">
               <div class="acc-group">
                   <div class="" id="headingOne">
                       <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       How do I subscribe to Getlead CRM? <span><i class="fa-solid fa-plus"></i></span>
                       </a>
                   </div>

                   <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                       <div class="collapse-para">
                       You can subscribe to Getlead CRM by visiting the company's website and choosing the pricing plan that best suits your needs. You may create an account and provide payment information to complete the subscription process.
                       </div>
                   </div>
               </div>
               <div class="acc-group">
                   <div class="" id="headingTwo">
                       <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                       Can I cancel my subscription at any time?<span><i class="fa-solid fa-plus"></i></span>
                       </a>
                   </div>
                   <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                       <div class="collapse-para">
                       You can usually cancel your subscription at any time by contacting the Getlead CRM customer support team, but it's worth checking out the terms and conditions to confirm if the same applies to your subscription.
                       </div>
                   </div>
               </div>
               <div class="acc-group">
                   <div class="" id="headingThree">
                       <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                       How do I upgrade or downgrade my subscription?
                       <span><i class="fa-solid fa-plus"></i></span>
                       </a>
                   </div>
                   <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                       <div class="collapse-para">
                       You can usually upgrade or downgrade your subscription by contacting the Getlead CRM customer support team or by logging into your account and making the change.
                       </div>
                   </div>
               </div>

               <div class="acc-group">
                   <div class="" id="headingfour">
                       <a class="collapsed" data-toggle="collapse" data-target="#collapsefour  " aria-expanded="false" aria-controls="collapseThree">
                       Can I import my existing customer data into Getlead CRM?<span><i class="fa-solid fa-plus"></i></span>
                       </a>
                   </div>
                   <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                       <div class="collapse-para">
                       Getlead CRM allows you to import your existing customer data in the form of CSV or Excel files or via API or integration. Contact the Getlead CRM support team to check available data import options.
                       </div>
                   </div>
               </div>
           </div>
       </div>
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

@section('script') @endsection @endsection
