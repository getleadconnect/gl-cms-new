@extends('website.layout.design')
@section('title')
<meta name="description" content="Join Getlead CRM as an Operations Manager. Drive operational excellence and support our scaling business.">
<title>Operations Manager - Career at Getlead CRM</title>
@endsection
@section('css')
<style>
   .job-detail-page {
      background: #f8f9fa;
   }
   .job-header-card {
      background: #fff;
      border-radius: 12px;
      padding: 40px;
      margin-bottom: 30px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
   }
   .job-header-card h2 {
      font-size: 32px;
      font-weight: 700;
      color: #2B2B32;
      margin-bottom: 20px;
   }
   .job-meta {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      margin-bottom: 25px;
      padding-bottom: 25px;
      border-bottom: 2px solid #f0f0f0;
   }
   .job-meta span {
      display: inline-flex;
      align-items: center;
      font-size: 14px;
      color: #666;
      background: #f8f9fa;
      padding: 8px 16px;
      border-radius: 20px;
      font-weight: 500;
   }
   .job-content-card {
      background: #fff;
      border-radius: 12px;
      padding: 40px;
      margin-bottom: 30px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
   }
   .job-content-card h3 {
      font-size: 24px;
      font-weight: 700;
      color: #2B2B32;
      margin-bottom: 20px;
   }
   .job-content-card p {
      color: #555;
      line-height: 1.8;
      margin-bottom: 20px;
   }
   .job-content-card ul {
      list-style: none;
      padding-left: 0;
      margin-bottom: 25px;
   }
   .job-content-card ul li {
      color: #555;
      line-height: 1.8;
      margin-bottom: 12px;
      padding-left: 25px;
      position: relative;
   }
   .job-content-card ul li:before {
      content: "✓";
      position: absolute;
      left: 0;
      color: #4340d3;
      font-weight: bold;
      font-size: 16px;
   }
   .job-content-card ul li strong {
      color: #2B2B32;
   }
   .apply-sidebar {
      position: sticky;
      top: 100px;
   }
   .apply-card {
      background: #fff;
      border-radius: 12px;
      padding: 35px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
   }
   .apply-card h3 {
      font-size: 24px;
      font-weight: 700;
      color: #2B2B32;
      margin-bottom: 25px;
   }
   .apply-card p {
      color: #555;
      line-height: 1.6;
   }
   .apply-card a[href^="tel"] {
      color: #E53977;
      text-decoration: none;
      font-weight: 600;
   }
   .apply-card a[href^="tel"]:hover {
      color: #F5D84C;
   }
   .divider-line {
      margin-top: 30px;
      padding-top: 30px;
      border-top: 2px solid #f0f0f0;
   }
   .contact-label {
      font-size: 14px;
      margin-bottom: 10px;
      font-weight: 600;
      color: #2B2B32;
   }
   .contact-info {
      font-size: 14px;
      line-height: 1.6;
      color: #555;
   }
   .apply-card .apply-btn {
      display: block;
      width: 100%;
      background: linear-gradient(45deg, #E53977 0%, #F5D84C 100%);
      background-size: 200% 200%;
      color: #fff;
      border: none;
      padding: 16px 40px;
      border-radius: 6px;
      font-size: 18px;
      font-weight: 700;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      transition: all 0.8s ease;
      text-transform: uppercase;
      animation: shiny 12s ease-in-out infinite;
   }
   .apply-card .apply-btn:hover {
      background-color: #f9a21f;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      text-decoration: none;
   }
   @keyframes shiny {
      0% {
         background-position: 0% 50%;
      }
      50% {
         background-position: 100% 50%;
      }
      100% {
         background-position: 0% 50%;
      }
   }
   @media (max-width: 991px) {
      .apply-sidebar {
         position: static;
         margin-top: 40px;
      }
      .job-header-card, .job-content-card {
         padding: 30px 20px;
      }
   }
</style>
@endsection
@section('code')
<div class="rogan-hero-section-sec rogan-hero-section-v2 rogan-hero-section rogan-hero-five pt-150 pb-100 md-pt-100 pos-r">
    <div class="container">
       <div class="main-wrapper pos-r">
          <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Operations Manager
          </h1>
          <p class="second-sub-title banner-sub-title pb-45 md-pb-30 wow fadeInUp animated" data-wow-delay="0.9s">
             Drive operational excellence and support our scaling business
          </p>
          <div class="clear"></div>
       </div>
    </div>
    <div class="chat-box">
       <a href="#">
       {{ Html::image('website/images/chat-box.svg','getlead') }}
       </a>
    </div>
 </div>

 <div class="job-detail-page pt-100 pb-110 sm-pb-50 md-pb-50">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-md-12 col-sm-12">

             <div class="job-header-card">
                <h2>Operations Manager</h2>
                <div class="job-meta">
                   <span>📍 Government Cyberpark, Calicut</span>
                   <span>⏰ Full-time</span>
                   <span>💼 4-6 years experience</span>
                </div>
             </div>

             <div class="job-content-card">
                <h3>Position Overview</h3>
                <p>
                  We are seeking an experienced Operations Manager to join our growing team. This role is critical to ensuring smooth day-to-day operations, optimizing processes, and supporting the scaling of our business. You'll work cross-functionally with Sales, Customer Success, Finance, and Engineering teams to drive operational excellence and efficiency.
                </p>
             </div>

             <div class="job-content-card">
                <h3>Key Responsibilities</h3>
                <ul>
                   <li><strong>Process Optimization & Implementation</strong> – Design, document, and implement operational processes across the organization</li>
                   <li><strong>Business Operations Management</strong> – Oversee day-to-day operational activities including scheduling, resource allocation, and vendor management</li>
                   <li><strong>Data & Analytics</strong> – Develop and maintain key operational metrics and KPIs across departments</li>
                   <li><strong>Sales & Customer Success Operations</strong> – Partner with Sales to optimize pipeline management, lead qualification, and CRM usage</li>
                   <li><strong>Project & Initiative Management</strong> – Lead cross-functional projects related to process improvement and tool implementation</li>
                   <li><strong>Compliance & Risk Management</strong> – Ensure compliance with relevant regulations, policies, and industry standards</li>
                   <li><strong>Team Support & Training</strong> – Onboard new team members and provide operational training</li>
                </ul>
             </div>

             <div class="job-content-card">
                <h3>Required Qualifications</h3>
                <ul>
                   <li>Bachelor's degree in Business Administration, Operations Management, or related field</li>
                   <li>4-6 years of operations management experience, preferably in a SaaS or technology company</li>
                   <li>Strong knowledge of CRM systems and B2B sales processes</li>
                   <li>Proven experience designing and implementing business processes and workflows</li>
                   <li>Proficiency with ERP systems, project management software, and data analytics platforms</li>
                   <li>Strong analytical and problem-solving skills</li>
                   <li>Excellent written and verbal communication skills</li>
                   <li>Experience with process documentation and creating SOPs</li>
                </ul>
             </div>

             <div class="job-content-card">
                <h3>What We Offer</h3>
                <ul>
                   <li>Competitive compensation package commensurate with experience</li>
                   <li>Growth opportunity in a rapidly scaling company with clear career progression</li>
                   <li>Professional development budget for courses, certifications, and conferences</li>
                   <li>Collaborative culture with a talented, supportive team</li>
                   <li>Direct visibility into how your work improves the business and customer experience</li>
                </ul>
             </div>

          </div>

          <div class="col-lg-4 col-md-12 col-sm-12">
             <div class="apply-sidebar">
                <div class="apply-card">
                   <h3>Ready to Join?</h3>
                   <p style="margin-bottom: 30px;">Submit your application and become part of our growing team. We're looking for talented individuals who are passionate about making an impact.</p>
                   <a href="https://hr.getleadcrm.com" target="_blank" class="apply-btn">Apply Now</a>
                   <div class="divider-line">
                      <p class="contact-label">Questions?</p>
                      <p class="contact-info">Contact us at<br><a href="tel:+918453555000">+91-8453 555 000</a></p>
                   </div>
                </div>
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
@section('script')
@endsection
@endsection
