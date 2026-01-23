@extends('website.layout.design')
@section('title')
<meta name="description" content="Get help with GetLead CRM through our comprehensive Help Center, featuring Onboarding, tutorials, and support. Find the answers you need to use GetLead CRM effectively and efficiently.
">
<title>GetLead CRM Help Center | Onboarding, Tutorials, and Support
</title>   
@endsection
@section('css')
@endsection
@section('code')
<div class="rogan-hero-section-sec rogan-hero-section-v2 rogan-hero-section rogan-hero-five pt-150 md-pt-100 pos-r" style="    background: #fbd15b;">
    <div class="container">
       <div class="main-wrapper pos-r">
          <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">How we can help?
          </h1>
          {{-- <p class="second-sub-title banner-sub-title pb-45 md-pb-30 wow fadeInUp animated" data-wow-delay="0.9s">Explore the complete range of lead management tools to get your<br>
             businessthe right leads to pursue and generate sales.
          </p> --}}
          <div class="searchbar pb-60">
              <input type="text" placeholder="Search..." id="search"><button><i class="fa fa-search" aria-hidden="true"></i></button>  
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
 <div class="support-section pt-110 pb-120">
    <div class="container">
       <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 pb-40">
             <div class="support-col">
                <h4>Account signup <br>& Setup</h4>
                <p>Adapt our CRM to your specific business requirements. We provide solutions that can be customised to fit your procedures and operations.</p>
                <div class="article-btn pt-30">
                   <a href="{{ route('help-center-list','account-signup-setup') }}">See all articles</a>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pb-40">
            <div class="support-col">
               <h4>Master settings </h4>
               <p>Adapt our CRM to your specific business requirements. We provide solutions that can be customised to fit your procedures and operations.</p>
               <div class="article-btn pt-30">
                  <a href="{{ route('help-center-list','master-settings') }}">See all articles</a>
               </div>
            </div>
         </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pb-40">
             <div class="support-col user-onboarding">
                <h4>Lead <br>
                  Management</h4>
                <p>Maximize your lead potential with our lead nurturing tools. We help you efficiently manage, track, and convert leads into loyal customers.</p>
                <div class="article-btn pt-30">
                   <a href="{{ route('help-center-list','lead-management') }}">See all articles</a>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pb-40">
            <div class="support-col imp-exp">
               <h4>Task Management</h4>
               <p>Build stronger customer relationships by leveraging our CRM. Improve customer loyalty and satisfaction with tailored interactions.               </p>
               <div class="article-btn pt-30">
                  <a href="{{ route('help-center-list','task-setup') }}">See all articles</a>
               </div>
            </div>
         </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pb-40">
             <div class="support-col customization">
                <h4>Deal<br>
                  Management</h4>
                <p>Boost your sales team's performance with data-driven insights, real-time analytics, and automation. Witness increased sales and revenue.               </p>
                <div class="article-btn pt-30">
                   <a href="{{ route('help-center-list','deal-managament') }}">See all articles</a>
                </div>
             </div>
          </div>
         
          <div class="col-lg-4 col-md-6 col-sm-12 pb-40">
             <div class="support-col imp-exp">
                <h4>Campaign<br>
                  Management</h4>
                <p>Improve your marketing efforts with our CRM's marketing automation features. Execute targeted campaigns, analyze results, and refine your strategies.               </p>
                <div class="article-btn pt-30">
                   <a href="{{ route('help-center-list','campaign-management') }}">See all articles</a>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pb-40">
            <div class="support-col imp-exp">
               <h4>Integration Management</h4>
               <p>Unlock growth opportunities with our CRM. Identify trends, streamline processes, and make informed decisions to expand your business.
               </p>
               <div class="article-btn pt-30">
                  <a href="{{ route('help-center-list','integrations') }}">See all articles</a>
               </div>
            </div>
         </div>
       </div>
    </div>
 </div>

@section('script')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
    </script>
   <script type="text/javascript">
        var route = "{{ url('search-help-center') }}";
        $('#search').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                  console.log(data);
                  $.each(data, function (key, value) {
                     var da='<a href="{{ route('help-center-detail',['page' => '+ value.type_id+','slug' => '+value.slug+']) }}"><p class="tick-img"><label class="tick-label">'+value.article_name+'</p></a>';
                     return process(da);
                  });
                    
                });
            }
        });
    </script>
@endsection
@endsection
