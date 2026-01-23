@extends('website.layout.design')
@section('css')
<style>
.pagination-list ul{
   list-style-type: none;
   padding: 0;
   margin: 0;
   display: flex;
   align-items: center;
   justify-content: center;
}
</style>
@endsection
@section('code')
<div class="blog-banner rogan-hero-section-sec rogan-hero-section rogan-hero-section-v2 rogan-hero-five pt-150  md-pt-100 md-pb-50 pos-r">
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
 <div class="blog-section pt-100 pb pb-100">
    <div class="container">
       <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            @foreach ($blogs as $key=> $blog)
                <div class="blog-contents pb-60">
                <a href="{{ route('blog-details-page',$blog->slug) }}">
                    {{ Html::image('/Blog/'.$blog->blog_images,'getlead') }}
                        <h4>{{ $blog->blog_title }}</h4>
                        <p>{!! Str::limit($blog->blog_description, 150) !!}</p>
                        <span class="read-more-show" style="color:red; cursor: pointer;">Read More</span>
                        <!-- </p> -->
                    </a>
                    <div class="date-btn">
                        <p>Posted On {{ \Carbon\Carbon::parse($blog->created_at)->toFormattedDateString() }}</p>
                        <div class="crm-btn">
                            <a href="#">{{ $blog->blogType->name }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

          <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="featured-posts">
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
       <div class="pagination-list align-items-center">
          <ul>
             <li>
                {!! $blogs->links() !!}
             </li>
          </ul>
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
