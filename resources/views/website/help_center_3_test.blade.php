@extends('website.layout.design')
@section('title')
<meta name="description" content="Get help with GetLead CRM through our comprehensive Help Center, featuring Onboarding, tutorials, and support. Find the answers you need to use GetLead CRM effectively and efficiently.
">
<title>GetLead CRM Help Center | Onboarding, Tutorials, and Support
</title>   
@endsection
@section('css')
<style>
    .no-data{
        color: #FF4B4B;
        display: flex;
        width: fit-content;
        margin: auto;
        font-weight: 1000 !important;
    }
</style>
@endsection
@section('code')
<div class="rogan-hero-section-sec rogan-hero-section-v2 rogan-hero-section rogan-hero-five pt-150 pb-130 md-pt-100  pos-r">
    <div class="container">
       <div class="main-wrapper pos-r">
          <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Getting started
          </h1>
          <p class="second-sub-title banner-sub-title pb-45 md-pb-30 wow fadeInUp animated" data-wow-delay="0.9s">Explore the complete range of lead management tools to get your<br>
             businessthe right leads to pursue and generate sales.
          </p>
          <div class="searchbar pb-60">
             {{-- <input type="text" placeholder="Search..."><button><i class="fa fa-search" aria-hidden="true"></i></button> --}}
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
 <div class="help-center-sec pt-85 pb-95">
    <div class="container">
       <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="articles-col">
               <h4>Related articles</h4>
               <ul class="article-list pt-30">
                   @foreach ($article_lists as $article)
                   <li>
                       <a href="{{ route('help-center-detail',['page' => $page,'slug' => $article->slug]) }}">
                       <span>
                       {{ Html::image('website/images/note-icon.svg','getlead') }}
                       </span>{{ $article->article_name }}
                       </a>
                   </li>
                   @endforeach
               </ul>
            </div>
         </div>
          <div class="col-lg-8 col-md-8 col-sm-12">
             <div class="about-crm-col">
            @if ($articles)
                @if ($articles->count() > 0)

                    @if ($articles->article_title)
                        <h4>{{ $articles->article_title }}</h4>
                    @endif

                    <p>
                        {{ $articles->article_description }}
                    </p>
                    @if ($article['articleImages'])
                       @foreach($article['articleImages'] as $k=> $image)
                            {{ Html::image('/Article/' . $image->article_image,'Getlead') }}
                       @endforeach
                    @endif
                    @foreach ($articles['articleDetails'] as $key => $article)
                        @if ($article->title)
                            <h5>{{ $article->title }}</h5>
                        @endif
                        <ol>
                        {!! $article->description !!}
                        </ol>
                        <br>
                        @if ($article->image)
                            {{ Html::image('/Article/' . $article->image,'Getlead') }}
                        @endif

                        <!-- @if ($article->note)
                            <div class="note-box">
                                <p><span>Note:-</span></p>
                                <p>{!! $article->note !!}</p>
                            </div>
                        @endif -->


                    @endforeach
                @else
                    <label class="no-data">No Data Found</label>
                @endif
                 
            @else
               <label class="no-data">No Data Found</label>
            @endif


             </div>
          </div>
       </div>
    </div>
 </div>

@section('script')
@endsection
@endsection
