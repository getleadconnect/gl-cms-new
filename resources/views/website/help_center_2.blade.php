@extends('website.layout.design')
@section('title')
<meta name="description" content="Get help with GetLead CRM through our comprehensive Help Center, featuring Onboarding, tutorials, and support. Find the answers you need to use GetLead CRM effectively and efficiently.
">
<title>GetLead CRM Help Center | Onboarding, Tutorials, and Support
</title>   
@endsection
@section('css')
<style>
   .tick-img{
      display: flex;
      align-items: center;
   }
   .tick-label{
      width:20px;
   }
   a.search_button{
        background: #FF4B4B;
        border-radius: 0px 6px 6px 0px;
        border: none;
        outline: none;
        padding: 14px 18px;
        cursor: pointer;
   }
   a.search_button i{
    color: #fff;
   }
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
<div class="rogan-hero-section-sec rogan-hero-section-v2 rogan-hero-section rogan-hero-five pt-150 md-pt-100  pos-r">
    <div class="container">
       <div class="main-wrapper pos-r">
          <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">{{$heading}}
          </h1>
          <p class="second-sub-title banner-sub-title pb-45 md-pb-30 wow fadeInUp animated" data-wow-delay="0.9s">{{$text}}
          </p>
          <div class="searchbar pb-60">
            <input type="text" placeholder="Search..." value="@if($searchKey) {{ $searchKey }} @endif" id="search_term">
            <a href="#" class="search_button" id="search_btn">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
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
 <div class="single-text-content pt-65 pb-100">
    <div class="container">
       <div class="features-col">
            @if ($articles->count() > 0)
                @foreach ($articles as $article)
                    <a href="{{ route('help-center-detail',['page' => $page,'slug' => $article->slug]) }}">
                        <p class="tick-img"><label class="tick-label">{{ Html::image('website/images/tick-new.svg','getlead') }}</label>&nbsp; {{ $article->article_name }}</p>
                    </a>
                @endforeach
            @else
                    <label class="no-data">No Data Found</label>
            @endif
       </div>
    </div>
 </div>



@endsection
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
