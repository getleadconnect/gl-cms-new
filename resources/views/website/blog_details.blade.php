@extends('website.layout.design')
@section('css')
@endsection
@section('code')
<div class="blog-banner rogan-hero-section-sec rogan-hero-section rogan-hero-five pt-100 md-pt-100 md-pb-50 pos-r">
    <div class="container">
       <div class="main-wrapper pos-r">
          <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Blog
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
 <div class="blog-section pt-50 pb pb-50">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
             <div class="blog-contents pb-60">
            @if ($details) 
                <h4>{{ $details->blog_title }}</h4>
                <div class="date-btn pb-30 pt-0">
                   <p>Posted On {{ \Carbon\Carbon::parse($details->created_at)->toFormattedDateString() }}</p>
                </div>
                {{ Html::image('/Blog/'.$details->blog_images,'getlead') }}
                <p class="pt-30 pb-10">{!! $details->blog_description !!} </p>
                    @foreach ($details->blogDetails as $detail)
                        {{ Html::image('/Blog/'.$detail->images,'getlead',array('class' => 'mt-30 mb-20')) }}
                        <p>
                        <span>
                        @if ($detail != null)
                           {!! $detail->description !!}
                        @endif
                        </span>
                        </p>
                    @endforeach
            @else
               <div class="date-btn pb-30 pt-0">
                   <p><label style="color :red; display:flex; align-item:center; justify-content:center;">No data Found!</label></p>
                </div>
            @endif
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
             <div class="featured-posts featured-detail">
                <!-- <h4>Explore more content</h4>
                <ul class="exp-cont pb-40">
                    @foreach ($types as $type)
                    <li>
                        <a href="{{ route('blog-details-page',$type->slug) }}">{{ $type->name }}</a>
                    </li>
                    @endforeach
                </ul> -->
                <h4>Featured post</h4>
                @foreach ($featured as $key=> $feature)
                    <div class="blog-contents">
                        {{ Html::image('/Blog/'.$feature->blog_images,'getlead') }}
                        <a href="{{ route('blog-details-page',$feature->slug) }}"><h6>{{ $feature->blog_title }}</h6></a>
                        <div class="date-btn">
                            <div class="crm-btn">
                                <a href="#">{{ $feature->blogType->name }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
             </div>
          </div>
       </div>
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
@endsection
@endsection
