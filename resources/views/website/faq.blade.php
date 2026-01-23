@extends('website.layout.design')
@section('title')
<meta name="description" content="Find answers to the most commonly asked questions about GetLead CRM. Learn more about our features, pricing, integrations, and more. Get started with confidence knowing you have the support you need.">
<title>GetLead CRM FAQ - Frequently Asked Questions
</title>   
@endsection
@section('css')
@endsection
@section('code')
<div class="rogan-hero-section-sec rogan-hero-section-v2 rogan-hero-section rogan-hero-five pt-150  md-pt-100  pos-r">
    <div class="container">
       <div class="main-wrapper pos-r">
          <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Frequently asked questions
          </h1>
          <p class="second-sub-title banner-sub-title pb-45 md-pb-30 wow fadeInUp animated" data-wow-delay="0.9s">Explore the complete range of lead management tools to get your<br>
             businessthe right leads to pursue and generate sales.
          </p>
          <div class="searchbar pb-60">
             <input type="text" placeholder="Search..."  value="@if($searchKey) {{ $searchKey }} @endif" id="search_term" ><button><i class="fa fa-search" id="search_btn" aria-hidden="true"></i></button>
          </div>
          <div class="clear"></div>
       </div>
       <!-- /.main-wrapper -->
    </div>
    <!-- /.container -->
    <div class="chat-box">
       <a href="#">
       {{ Html::image('website/images/chat-box.svg','getlead') }}
       </a>
    </div>
 </div>
 <!-- /.rogan-hero-section -->
 <!--- Support section ---->
 <div class="single-text-content pt-65 pb-100">
    <div class="container">
       <ul class="faq-accordion" id="faq">
        @foreach ($faqs as $faq)
            <li class="single-faq">
                <div class="faq-head" id="faqhead3{{ $faq->id }}">
                <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq3{{ $faq->id }}"
                    aria-expanded="true" aria-controls="faq3{{ $faq->id }}">{{ $faq->question }}</a>
                </div>
                <div id="faq3{{ $faq->id }}" class="collapse" aria-labelledby="faqhead3{{ $faq->id }}" data-parent="#faq">
                <div class="faq-body">
                    {{ $faq->answer }}.</div>
                </div>
            </li>
        @endforeach
       </ul>
    </div>
 </div>




 <div class="container"><div class="sales-section sales-section-2 mt-80" style="padding-bottom: 50px;">
      <div class="row">
      

        <div class="col-lg-4 col-md-4 col-sm-12">
            {{ Html::image('website/images/sales-2.svg','getlead crm') }}
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
 <script>
    $(document).ready(function () {
        $(document).on('click','#search_btn',function() {
            var url = @json(url()->current());
            location.href= url+'?searchKey='+$('#search_term').val();
        })

        $(document).keypress(function (event) {
            if (event.keyCode == 13) {
                var url = @json(url()->current());
                location.href= url+'?searchKey='+$('#search_term').val();
            }
        });
    });

</script>
 @endsection
 @endsection
