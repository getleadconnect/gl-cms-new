@extends('website.layout.design') @section('title')
<meta name="description" content="Find top CRM software in India at Getlead. Perfect for any business size, our best CRM offers a free package and is a full CRM solution.">
<title>Getlead - Best CRM Software in India | Top CRM Platform</title>
@endsection
@section('og_tags')
<meta property="og:title" content="Getlead - Best CRM Software in India | Free Trial" />
<meta property="og:description" content="India's top CRM for lead management, sales tracking & customer relationships. Free package available. Start your free trial today!" />
@endsection
@section('twitter_tags')
<meta name="twitter:title" content="Getlead - Best CRM Software in India | Free Trial" />
<meta name="twitter:description" content="India's top CRM for lead management, sales tracking & customer relationships. Free package available. Start your free trial today!" />
@endsection
@section('css') <style>
  .testimonial-image {
    border-radius: 50% !important;
  }

  .testimonial-section-classic .inner-container p span {
    font-family: "Poppins", sans-serif !important;
    font-weight: normal;
    font-size: 14px !important;
    line-height: 24px !important;
    color: #696969 !important;
  }
</style> @endsection @section('code') <div class="rogan-hero-section rogan-hero-five pt-150 md-pt-100 pos-r">
  <!-- <div class="shape-wrapper">
        {{ Html::image('website/images/main-banner-2.png', 'Getlead') }}
    </div> -->
  <div class="container">
    <div class="main-wrapper pos-r text-center">
      <h1>
        <span style="color:#f91942 !important">Ready, Set, Sell: </span>
        <br>The Easy CRM for Busy Teams
      </h1>
      <p class="banner-sub-title md-pb-10 mb-30  ">Explore the complete range of lead management tools to get your <br> business the right leads to pursue and generate sales. </p>
      <!-- <p class="subscription-description ">Join over 1,500 happy businesses using Getlead's superior solutions in a worldwide community.</p> -->
      <div class="clear"></div>
      <form class="ajax-sub-form " method="post">
        <div class="banner-btns">
          <div class="get-started text-center m-auto">
            {{-- <a href="//fast.wistia.net/embed/iframe/zdjg44f4fi?autoPlay=true" data-fancybox data-type="iframe" data-width="730" data-height="411" class="fancybox start-btn">Get free demo</a> --}}
            <a href="https://app.getleadcrm.com/register" class="start-btn m-auto" target="_blank">Get free demo</a>
          </div>
          {{-- <div class="see-demo">
									<a class="fancybox demo-btn" href="//fast.wistia.net/embed/iframe/zdjg44f4fi?autoPlay=true" data-fancybox data-type="iframe" data-width="730" data-height="411">See Demo</a>
								</div>
                    --}}
        </div>
      </form>
      {{ Html::image('website/images/banner-top.webp', 'Getlead', ['class' => 'img-fluid']) }}
      <div class="clear"></div>
    </div>
  </div>
  <div class="chat-box">
    <a href="#">
      {{ Html::image('website/images/chat-box.svg', 'chat-box') }}
    </a>
  </div>
</div>
<div class="our-service-three pt-120 pos-r pb-150 md-pb-100 md-pt-120">
  <div class="container">
    <div class="theme-title-one text-center pb-30 md-pb-30">
      <p class="sub-title">engaging with customers</p>
      <h2 class="">
        <span class="red">Powerful CRM features</span> for enhanced <br> Business Success
      </h2>
    </div>
    <ul id="tabs" class="nav nav-tabs justify-content-center mb-40" role="tablist">
      <li class="nav-item">
      <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab" aria-controls="pane-A" aria-selected="true">Lead management</a>
      </li>
      <li class="nav-item">
      <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab" aria-controls="pane-B" aria-selected="false">Deal management</a>
      </li>
      <li class="nav-item">
      <a id="tab-C" href="#pane-C" class="nav-link" data-toggle="tab" role="tab" aria-controls="pane-C" aria-selected="false">Task management</a>
      </li>
      <li class="nav-item">
      <a id="tab-D" href="#pane-D" class="nav-link" data-toggle="tab" role="tab" aria-controls="pane-D" aria-selected="false">Campaign management</a>
      </li>
    </ul>
    <div class="service-tab-sec">
      <div id="content" class="tab-content" role="tablist">
        <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
          <div class="card-header" role="tab" id="heading-A">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                <span>Lead management</span>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
            </h5>
          </div>
          <div id="collapse-A" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
            <div class="row">
              <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="layout-content">
                  <h4> Lead Management Excellence </h4>
                  <p> Effortlessly streamline your lead management process with Getlead CRM. Our powerful tools ensure that no lead goes unnoticed, allowing you to prioritize and nurture prospects effectively. Maximize conversions and business growth by mastering the art of lead management with our intuitive platform. </p>
                  <div class="yn-btn">
                    <a href="{{ route('lead-management-page') }}"> Explore more </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="layout-img">
                  {{ Html::image('website/images/lm.svg', 'Lead Management Excellence') }}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
          <div class="card-header" role="tab" id="heading-B">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                <span>Deal management</span>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
            </h5>
          </div>
          <div id="collapse-B" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-B">
            <div class="row">
              <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="layout-content">
                  <h4> Optimized Deal Management </h4>
                  <p> Win deals with precision and confidence using Getlead CRM's focus, clarity, and context, ensuring every opportunity is maximized for success. </p>
                  <div class="yn-btn">
                    <a href="{{ route('deal-management-page') }}"> Explore more </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="layout-img">
                  {{ Html::image('website/images/deal-tab.svg', 'Optimized Deal Management') }}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
          <div class="card-header" role="tab" id="heading-C">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="false" aria-controls="collapse-C">
                <span>Task management</span>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
            </h5>
          </div>
          <div id="collapse-C" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-C">
            <div class="row">
              <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="layout-content">
                  <h4> Task Management Mastery </h4>
                  <p> Efficiently organize and monitor tasks with Getlead CRM's intuitive task management system. Streamline your workflow, assign tasks, and meet deadlines effortlessly, ensuring nothing falls through the cracks in your sales process. </p>
                  <div class="yn-btn">
                    <a href="{{ route('task-page') }}"> Explore more </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="layout-img">
                  {{ Html::image('website/images/task-tab.svg', 'Task Management Mastery') }}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="pane-D" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
          <div class="card-header" role="tab" id="heading-D">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapse-D" aria-expanded="false" aria-controls="collapse-D"> Campaign <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
            </h5>
          </div>
          <div id="collapse-D" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-D">
            <div class="row">
              <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="layout-content">
                  <h4> Campaign management </h4>
                  <p> Experience efficient issue tracking and resolution with Getlead CRM's ticket system. Simplify customer support, assign tickets, and deliver timely solutions, enhancing your customer service and satisfaction. </p>
                  <div class="yn-btn">
                    <a href="#"> Explore more </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="layout-img">
                  {{ Html::image('website/images/campaign.svg', ' Campaign management') }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="our-core-feature pt-0 pb-30 md-pt-0 pos-r bg-white">
  <div class="shape-wrapper"></div>
  <div class="container">
    <div class="theme-title-one text-center pb-50 md-pb-50">
      <h3 class="text-center">Forward-looking teams choose <span class="getlead">Getlead</span>
      </h3>
    </div>
  </div>
</div>
<div class="op-partner-section-one pb-60">
  <div class="container">
    <div class="row"> @foreach ($clients as $client) <div class="col-lg-2 col-4 col-sm-2">
        <div class="img-box bx-a">
          <a href="#">
            {{ Html::image('/Clients/' . $client->image,'Getlead') }}
          </a>
        </div>
      </div> @endforeach </div>
  </div>
</div>
<div class="about-us-block-two pb-80 md-pt-80 md-pb-60 pos-r">
  <div class="shape-wrapper"></div>
  <div class="inner-wrapper pos-r">
    <div class="align-items-center">
      <div class="container">
        <div class="theme-title-one text-center pb-50 md-pb-50">
          <h2 class="">
            <span class="red"> The all-in-one solution </span>for mastering sales, marketing, customer service, and lead management. </span>
          </h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12 ">
            <div class="connect">
              <div class="img-two pos-r wow fadeIn" data-wow-duration="2s">
                {{ Html::image('website/images/integration.svg','connect') }}
              </div>
              <div class="bx-pad">
                <div class="theme-title-onemd-p0">
                  <h3 class="">Connect</h3>
                </div>
                <p class="pt-10"> Connect effortlessly with your leads and supercharge your sales journey with Getlead CRM's powerful tools and automation features. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12 ">
            <div class="connect">
              <div class="img-two pos-r wow fadeIn" data-wow-duration="2s">
                {{ Html::image('website/images/analyse-two.svg','analyse') }}
              </div>
              <div class="bx-pad">
                <div class="theme-title-onemd-p0">
                  <h3 class="">Analyse</h3>
                </div>
                <p class="pt-10"> Unlock the secrets of success with Getlead CRM's robust analytics, turning customer data into actionable insights for smarter decisions</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="connect">
              <div class="img-two pos-r wow fadeIn" data-wow-duration="2s">
                {{ Html::image('website/images/convert-two.svg','convert') }}
              </div>
              <div class="bx-pad">
                <div class="theme-title-onemd-p0">
                  <h3 class="">Convert</h3>
                </div>
                <p class="pt-10">Turn leads into revenue and watch your business thrive with Getlead CRM's expert sales conversion tools and strategies</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="sell-layout-sec main-container mt-60 mob-margin-0 mb-80 pb-80" style="padding-bottom:0px">
  <div class="container">
    <div class="convertt">
      <div class="row home-flex">
        <div class="col-lg-6 col-md-6">
          <div class="main-img-box pos-r hide-pr md-mt-0" style="height: 100%">
            <div class="img-one pos-r wow fadeIn" data-wow-duration="2s">
              {{ Html::image('website/images/sell-layout.png','Sell better
                                        faster & together',['style' => 'width: 100%;']) }}
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="bx-pad pb-50">
            <div class="theme-title-one">
              <p class="sub-title">engaging with customers</p>
              <h2 class="pb-20">Sell better <br> faster & together </h2>
            </div>
            <p class="pb-40"> Supercharge your sales journey with Getlead CRM and sell better, faster, and together, harnessing the power of teamwork and efficiency. </p>
            <ul class="small-point">
              <li class="d-flex align-items-center">
                <span class="mr-2">
                  {{ Html::image('website/images/tick-2.svg','Collaboration') }}
                </span> Collaborate seamlessly
              </li>
              <li class="d-flex align-items-center">
                <span class="mr-2">
                  {{ Html::image('website/images/tick-2.svg','sales') }}
                </span> Accelerate sales
              </li>
              <li class="d-flex align-items-center">
                <span class="mr-2">
                  {{ Html::image('website/images/tick-2.svg','CRM') }}
                </span> Maximize results
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
</div>
<div class="testimonial-section-classic style-two pos-r">
  <div class="container">
    <div class="theme-title-one text-center">
      <h2>They talk about it better than us</h2>
    </div>
    <div class="">
      <div class="inner-container">
        <div class="main-content">
          <div class="testimonial-slider" >
            {{-- @foreach ($testimonials as $testimonial)
                        
									<div class="item">
										<div class="client-prof">
											<!-- {{ Html::image('/images/'.$testimonial->image,'getlead',array('width'=>'50px','border-radius'=>'50%')) }} --> {{ Html::image('/images/'.$testimonial->image,'Getlead',array('class' => 'testimonial-image')) }}
          </div>
          <p>{!! $testimonial->description !!}</p>
          <p class="name">{{ $testimonial->name }} - {{ $testimonial->designation }}</p>
        </div> @endforeach --}} {{-- @foreach ($testimonials as $testimonial)
                        
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
      <img src="https://profile.getleadcrm.com/images/1682745319.jpg" class="testimonial-image" alt="Testimonial from Aswin Pradeep" />
      </div>
      <div class="client-text pl-3">
        <p>Myself Aswin Pradeep, CEO – The Exodus felt it as an easy ride being associated with GETLEAD. They provided a wide range of solutions for all spheres of our business. The software is user friendly and the team is readily available for the support needed.
          <!--We are very satisfied with the work the GETLEAD team has performed, and we would like to highlight the high level of technical expertise, coherence and also the after sales assistance they are providing. -->
        </p>
        <p class="cl-name">Aswin Pradeep</p>
        <p class="cl-desig">CEO EXODUS</p>
      </div>
    </div>
  </div>
</div>
</div>
</div> @endforeach --}} <div class="item">
  <div class="client-prof">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="testi-col d-flex align-items-center">
          <div class="client-img">
            {{-- <img src="https://getleadcrm.com/images/1677819095.jpg" class="testimonial-image" alt="" /> --}}
            <img src="https://profile.getleadcrm.com/images/1682745319.jpg" class="testimonial-image" alt="Testimonial from Bastin Joseph" />
          </div>
          <div class="client-text pl-3">
            <p>Getlead has created a remarkable change in the way we handle our database. We overcame the daunting task of manual sorting of data and maintaining follow-up contact with our customers.
              <!-- Our customers’ travel requirements and privacy concerns are imperative to us and Getlead is a safe and reliable support system with an easy-to-use interface for our Tourism business. Thank you Getlead -->
            </p>
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
            <p>Myself Aswin Pradeep, CEO – The Exodus felt it as an easy ride being associated with GETLEAD. They provided a wide range of solutions for all spheres of our business. The software is user friendly and the team is readily available for the support needed.
              <!-- We are very satisfied with the work the GETLEAD team has performed, and we would like to highlight the high level of technical expertise, coherence and also the after sales assistance they are providing. -->
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
<div class="faq-sec pt-80">
  <div class="container">
    <div class="header-text text-center">
      <h2>FAQ’s</h2>
      <p>Explore the complete range of lead management tools to get your businessthe right leads to pursue and generate sales.</p>
    </div>
    <div class="faq-col">
  <div id="accordion">
    <div class="acc-group">
      <div id="headingOne">
        <a class="" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          What is Getlead CRM and how does it work?
          <span><i class="fa-solid fa-plus"></i></span>
        </a>
      </div>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="collapse-para">
          Getlead CRM is a software-as-a-service (SAAS) customer relationship management tool that helps businesses manage their customer interactions, sales and marketing activities, and data all in one place. It allows you to track leads, manage contacts and accounts, automate sales tasks, and create reports and analyses to help you better understand your customer data.
        </div>
      </div>
    </div>
    <div class="acc-group">
      <div id="headingTwo">
        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          How can Getlead CRM help my business?
          <span><i class="fa-solid fa-plus"></i></span>
        </a>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="collapse-para">
          Getlead CRM can help your business by providing a central location for all your customer data, allowing you to manage sales and marketing activities more efficiently, and providing valuable insights into customer behavior and preferences.
        </div>
      </div>
    </div>
    <div class="acc-group">
      <div id="headingThree">
        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          How much does Getlead CRM cost? Are there any hidden fees?
          <span><i class="fa-solid fa-plus"></i></span>
        </a>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="collapse-para">
          The cost of Getlead CRM will depend on the specific pricing plans offered by the company. You can find the pricing details on the Getlead CRM website. There may be additional costs or fees associated with additional features or integrations, but this would be disclosed in the pricing information.
        </div>
      </div>
    </div>
    <div class="acc-group">
      <div id="headingFour">
        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Can I try Getlead CRM before I subscribe?
          <span><i class="fa-solid fa-plus"></i></span>
        </a>
      </div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
        <div class="collapse-para">
          Getlead offers a demo version of CRM that you can use to test the software and see if it's right for your business before subscribing. Contact the Getlead CRM customer support team to check if this is available.
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
</div>
<div class="container">
  <div class="sales-section sales-section-2 mt-80" style="padding-bottom: 50px;">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        {{ Html::image('website/images/sales-2.svg','crm success') }}
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="sales-contents">
          <h3 class="text-left">Unlock Business success with GetLead </h3>
          <p>Multiple configurable features that empower the sales teams for tomorrow</p>
          <div class="sales-btns pt-4">
            <div class="get-started">
              <a href="{{ route('request-demo') }}" class="primary-btn">Get a Demo Today</a>
            </div>
            <div class="see-demo ml-3">
              <a class="secondary-btn" href="https://app.getleadcrm.com/register" target="_blank">Get 7 days free trial</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> @section('script') {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script> --}} @endsection @endsection
