@extends('website.layout.design')
@section('title')
<meta name="description" content="Boost productivity and stay organized with GetLead CRM's task management software. Streamline your workflows, automate reminders, and stay on top of your to-do list. Sign up now!">
<title>Streamline Your Workflows with GetLead CRM Task Management
</title>   
@endsection
@section('css')
@endsection
@section('code')
<div class="rogan-hero-section-sec rogan-hero-section rogan-hero-section-v2 rogan-hero-five pt-150 md-pt-100  pos-r">
    <div class="container">
       <div class="main-wrapper pos-r">
          <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Efficiently Manage Your Tasks
          </h1>
          <p class="second-sub-title banner-sub-title pb-45 md-pb-30 wow fadeInUp animated" data-wow-delay="0.9s">We've developed a powerful task management system that empowers you to take
            control of your workflow, prioritize your tasks, and increase your productivity. Our
            system is designed to simplify your work process, help you stay organized, and ensure
            you never miss a deadline
          </p>
          <!-- <div class="banner-img">
             {{ Html::image('website/images/task-banner.svg','getlead') }}
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



 <div class="single-text-section pt-150">
   <div class="container">
       <div class="row text-banner align-items-center">
           <div class="col-lg-8 col-md-8 col-sm-12">
               <div class="">
                   <p class="sub-title">ABOUT task MANAGEMENT</p>
                   <h2>
                     Instantly track the 
                     progress of every Deal 
                     with a single glance.
                   </h2>
                   <p class="pb-40">
                     Reach out to your target customer groups the way they want to be reached. With the power of targeted SMS, emails, and voice SMS, broadcast marketing messages.                  </p>
                   <div class="yn-btn">
                       <a href="{{ route('request-demo') }}">
                        Request a Demo
                           <span>
                               <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                   <path
                                       d="M20.4037 12.4951L14.4037 6.49512M20.4037 12.4951L14.4037 18.4951M20.4037 12.4951L9.90369 12.4951M4.40369 12.4951L6.90369 12.4951"
                                       stroke="#222935"
                                       stroke-width="1.5"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                   ></path>
                               </svg>
                           </span>
                       </a>
                   </div>
               </div>
           </div>
           <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="col-img">
               {{ Html::image('website/images/task-layout.png','task management') }}
            </div>
           </div>
       </div>
   </div>
</div>


 <div class="about-us-block-two pos-r" style="padding:0px">
    <div class="shape-wrapper">
    </div>
    <div class="inner-wrapper pos-r">
       <div class="main-container " style="padding:0px">
          <div class="container">
             <div class=" arrow-vector">
                <div class="row">
                  <div class="col-lg-6 col-md-6 analyse">
                     <div class="bx-pad">
                        <div class="theme-title-one md-p0">
                           <p class="sub-title">engaging with customers</p>
                           <h2 class="main-title">Focus on What Matters Most with Customizable Prioritization
                           </h2>
                        </div>
                        <p class="pb-40 pr-4">
                          In Getlead CRM You can prioritize your tasks based on their urgency and importance. You can also create custom priority levels to ensure that you focus on what matters most. This feature can help you maximize your productivity and achieve your goals.
                        </p>
                     </div>
                  </div>
                   <div class="col-lg-6 col-md-6 analyse">
                      <div class="main-img-box pos-r hide-pr md-mt-50">
                         <div class="img-one pos-r wow fadeIn" data-wow-duration="2s">
                            {{ Html::image('website/images/roles.png','task automation') }}
                        </div>
                         <div class="box-shape pos-r wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="mob-margin-0">
          <div class="container">
             <div class="convertt arrow-vector pt-40 pb-40">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="main-img-box pos-r hide-pr  md-mt-50 ">
                        <div class="img-one pos-r wow fadeIn	" data-wow-duration="2s">
                           {{ Html::image('website/images/setup-task.png','team task') }}
                       </div>
                     </div>
                  </div>
                   <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="bx-pad">
                         <div class="theme-title-one md-p0">
                           <p class="sub-title">engaging with customers</p>
                            <h2 class="main-title">Work Together More Efficiently with Our Team Collaboration Features</h2>
                         </div>
                         <p class="pb-40">
                           Getlead task management system allows you to collaborate with your team members seamlessly. You can share tasks, assign them to team members, and track their progress in real-time. You can also leave comments, attach files, and communicate with your team directly within the system.
                           </p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="clear"></div>
       </div>
       <div class="align-items-center">
          <div class="container">
             <div class=" arrow-vector">
                <div class="row">
                  <div class="col-lg-6  col-md-6 col-12 ">
                     <div class="bx-pad">
                        <div class="theme-title-onemd-p0">
                          <p class="sub-title">engaging with customers</p>
                           <h2 class="main-title">Track progress with automated task management</h2>
                        </div>
                        <p class="pb-40 pt-10">GetLeadCRM's task management system automatically adds completed tasks to your
                          activities timeline, ensuring you have a complete record of your progress. This feature
                          eliminates the need to manually track completed tasks, allowing you to focus on your
                          work while maintaining an accurate record of your activities.
                          </p>
                     </div>
                  </div>
                   <div class="col-lg-6 col-md-6 col-12">
                      <div class="main-img-box pos-r hide-pr md-mt-50">
                         <div class="img-one pos-r wow fadeIn" data-wow-duration="2s">
                            {{ Html::image('website/images/com-tasks.png','engaging customers') }}
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
 <div class="two-col-sec two-col-sec-camp pt-100 pb-60">
   <div class="container">
      <div class="header-contents">
         <h2>Gain full visibility &  <br>
            control over all tasks</h2>
         <p>
            Reach out to your target customer groups the way they want to be reached. With the power of targeted <br> SMS, emails, and voice SMS, broadcast marketing messages to preset customer segments and increase engagement with the least effort.
         </p>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6 col-sm-12 pb-40">
            <div class="col-contents">
               {{-- <img src="images/circle-new.svg" alt="getlead"> --}}
               {{ Html::image('website/images/mob-1.svg','automated notification') }}
               <h4>Automated notifications:</h4>
               <p>
                  Getlead CRM empowers you to forecast future revenue with precision and assurance, leveraging the platform's robust forecasting features.               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 pb-40">
            <div class="col-contents">
               {{-- <img src="images/circle-new.svg" alt="getlead"> --}}
               {{ Html::image('website/images/mob-2.svg','Improve productivity') }}
               <h4>Improved productivity</h4>
               <p>
                  By utilizing Getlead CRM's powerful deal tracking and analysis tools, you can effortlessly pinpoint and tackle problematic deals before they disrupt your sales process.               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 pb-40">
            <div class="col-contents">
               {{-- <img src="images/circle-new.svg" alt="getlead"> --}}
               {{ Html::image('website/images/mob-3.svg','Better time management') }}
               <h4>Better time management
               </h4>
               <p>
                  Our customers are the lifeblood of our  company, and we are dedicated to putting their needs first in everything we do.
               </p>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="contact-form-2 bg-none">
   <div class="container">
      <div class="header-text text-center">
         <h3 style="font-weight: 700;">Contact our team</h3>
         <p>Reach out to our experts for personalized assistance and discover how <br> Getlead CRM can revolutionize your business.</p>
     </div>
     <form action="" class="pt-50">
      <div class="row">
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <label for="">First name <span>*</span></label>
               <input type="text" class="form-control">
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <label for="">Last name</label>
               <input type="text" class="form-control">
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <label for="">Email address <span>*</span></label>
               <input type="email" class="form-control">
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <label for="">Mobile number<span>*</span></label>
               <input type="tel" class="form-control">
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <label for="">Company name<span>*</span></label>
               <input type="text" class="form-control">
            </div>
         </div>
         <div class="col-12 col-lg-6 col-md-6">
            <div class="form-group">
               <label for="">Country<span>*</span></label>
               <input type="text" class="form-control">
            </div>
         </div>
         <div class="col-12">
            <div class="form-group">
               <label for="">How can our team help you?</label>
               <textarea class="form-control"></textarea>
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
 @endsection
 @endsection
