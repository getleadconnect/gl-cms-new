@extends('website.layout.design')
@section('title')
<meta name="description" content="Explore career opportunities at Getlead CRM and join our team of talented professionals. We offer a collaborative and dynamic work environment, competitive compensation, and opportunities for growth and development. Apply now and take the next step in your career.">
<title>Join Our Team | Career Opportunities at Getlead CRM
</title>
@endsection
@section('css')
<style>
   .careers-page {
      background: #f8f9fa;
   }
   .careers-intro {
      text-align: center;
      max-width: 800px;
      margin: 0 auto 60px;
   }
   .careers-intro h2 {
      font-size: 36px;
      font-weight: 700;
      color: #2B2B32;
      margin-bottom: 20px;
   }
   .careers-intro p {
      font-size: 18px;
      color: #555;
      line-height: 1.8;
   }
   .job-listing-card {
      background: #fff;
      border-radius: 12px;
      padding: 40px;
      margin-bottom: 30px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 30px;
   }
   .job-listing-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 30px rgba(0,0,0,0.12);
   }
   .job-info {
      flex: 1;
   }
   .job-info h3 {
      font-size: 26px;
      font-weight: 700;
      color: #2B2B32;
      margin-bottom: 10px;
   }
   .job-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 15px;
   }
   .job-tag {
      display: inline-flex;
      align-items: center;
      font-size: 13px;
      color: #666;
      background: #f8f9fa;
      padding: 6px 12px;
      border-radius: 20px;
      font-weight: 500;
   }
   .job-description {
      color: #555;
      line-height: 1.7;
      font-size: 15px;
   }
   .job-action {
      flex-shrink: 0;
   }
   .view-details-btn {
      background: linear-gradient(45deg, #E53977 0%, #F5D84C 100%);
      background-size: 200% 200%;
      color: #fff;
      padding: 14px 35px;
      border-radius: 6px;
      font-size: 16px;
      font-weight: 700;
      text-decoration: none;
      display: inline-block;
      text-transform: uppercase;
      transition: all 0.8s ease;
      animation: shiny 12s ease-in-out infinite;
      white-space: nowrap;
   }
   .view-details-btn:hover {
      background-color: #f9a21f;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      text-decoration: none;
      color: #fff;
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
   .why-join-section {
      background: #fff;
      border-radius: 12px;
      padding: 50px;
      margin-top: 60px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
   }
   .why-join-section h2 {
      font-size: 32px;
      font-weight: 700;
      color: #2B2B32;
      margin-bottom: 30px;
      text-align: center;
   }
   .benefits-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      margin-top: 40px;
   }
   .benefit-item {
      text-align: center;
      padding: 20px;
   }
   .benefit-icon {
      font-size: 48px;
      margin-bottom: 15px;
   }
   .benefit-item h4 {
      font-size: 18px;
      font-weight: 600;
      color: #2B2B32;
      margin-bottom: 10px;
   }
   .benefit-item p {
      font-size: 14px;
      color: #666;
      line-height: 1.6;
   }
   .contact-cta {
      background: linear-gradient(135deg, #E53977 0%, #F5D84C 100%);
      border-radius: 12px;
      padding: 40px;
      text-align: center;
      color: #fff;
      margin-top: 60px;
   }
   .contact-cta h3 {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 15px;
   }
   .contact-cta p {
      font-size: 16px;
      margin-bottom: 20px;
      opacity: 0.95;
   }
   .contact-cta a {
      color: #fff;
      font-weight: 700;
      text-decoration: none;
      font-size: 20px;
      transition: all 0.3s ease;
   }
   .contact-cta a:hover {
      color: #2B2B32;
   }
   @media (max-width: 768px) {
      .job-listing-card {
         flex-direction: column;
         align-items: flex-start;
         padding: 30px 20px;
      }
      .job-action {
         width: 100%;
      }
      .view-details-btn {
         width: 100%;
         text-align: center;
      }
      .careers-intro h2 {
         font-size: 28px;
      }
      .why-join-section {
         padding: 30px 20px;
      }
   }
</style>
@endsection
@section('code')
<div class="rogan-hero-section-sec rogan-hero-section-v2 rogan-hero-section rogan-hero-five pt-150 pb-100 md-pt-100 pos-r">
    <div class="container">
       <div class="main-wrapper pos-r">
          <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Work at Getlead
          </h1>
          <p class="second-sub-title banner-sub-title pb-45 md-pb-30 wow fadeInUp animated" data-wow-delay="0.9s">
             Join our team and be part of a fast-growing SaaS company.<br> Build your career while making a real impact.
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
 <div class="careers-page pt-100 pb-110 sm-pb-50 md-pb-50">
    <div class="container">
       <div class="careers-intro">
          <h2>Change Your Life with Getlead</h2>
          <p>A career at Getlead is more than just a job. It's an opportunity to make a difference and grow your skills. We invite you to explore our open positions and join us on this exciting journey.</p>
       </div>

       <!-- CRM Sales Executive -->
       <div class="job-listing-card">
          <div class="job-info">
             <h3>CRM Sales Executive</h3>
             <div class="job-tags">
                <span class="job-tag">📍 Government Cyberpark, Calicut</span>
                <span class="job-tag">⏰ Full-time</span>
                <span class="job-tag">💼 0-2 years experience</span>
             </div>
             <p class="job-description">Join our sales team and help businesses transform their customer relationships. Work directly with mid-market companies to introduce them to our intuitive CRM platform.</p>
          </div>
          <div class="job-action">
             <a href="{{ route('career-sales-executive') }}" class="view-details-btn">View Details</a>
          </div>
       </div>

       <!-- Operations Manager -->
       <div class="job-listing-card">
          <div class="job-info">
             <h3>Operations Manager</h3>
             <div class="job-tags">
                <span class="job-tag">📍 Government Cyberpark, Calicut</span>
                <span class="job-tag">⏰ Full-time</span>
                <span class="job-tag">💼 4-6 years experience</span>
             </div>
             <p class="job-description">Drive operational excellence and support our scaling business. Work cross-functionally with Sales, Customer Success, Finance, and Engineering teams.</p>
          </div>
          <div class="job-action">
             <a href="{{ route('career-operations-manager') }}" class="view-details-btn">View Details</a>
          </div>
       </div>

       <!-- Why Join Section -->
       <div class="why-join-section">
          <h2>Why Join Getlead?</h2>
          <div class="benefits-grid">
             <div class="benefit-item">
                <div class="benefit-icon">🚀</div>
                <h4>Fast-Growing Startup</h4>
                <p>Be part of a rapidly scaling SaaS company and make a real impact on our growth journey</p>
             </div>
             <div class="benefit-item">
                <div class="benefit-icon">💡</div>
                <h4>Learning & Development</h4>
                <p>Access to training, courses, and professional development opportunities</p>
             </div>
             <div class="benefit-item">
                <div class="benefit-icon">🤝</div>
                <h4>Collaborative Culture</h4>
                <p>Work with talented, supportive team members in a positive environment</p>
             </div>
             <div class="benefit-item">
                <div class="benefit-icon">📈</div>
                <h4>Career Growth</h4>
                <p>Clear paths for advancement and opportunities to take on new challenges</p>
             </div>
             <div class="benefit-item">
                <div class="benefit-icon">💰</div>
                <h4>Competitive Compensation</h4>
                <p>Attractive salary packages with performance-based incentives</p>
             </div>
             <div class="benefit-item">
                <div class="benefit-icon">🏢</div>
                <h4>Modern Workspace</h4>
                <p>Work from our office at Government Cyberpark, Calicut</p>
             </div>
          </div>
       </div>

       <!-- Contact CTA -->
       <div class="contact-cta">
          <h3>Have Questions?</h3>
          <p>We'd love to hear from you! Reach out to learn more about opportunities at Getlead.</p>
          <a href="tel:+918453555000">📞 +91-8453 555 000</a>
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
