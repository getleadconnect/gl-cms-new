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




    .help-center-sec ul {
    list-style-type: inherit;
    /* padding: 15px !important; */
    background: #28283b;
    border-radius: 8px;
    font-family: "Poppins", sans-serif !important;

}
.help-center-sec ul li{list-style: none;padding: 10px;}
.help-center-sec ul li:hover{color: #263238;border-radius: 4px;}


.help-center-sec .articles-col .article-list li .active{background: #FBD15B;border-radius: 4px;}

.help-center-sec .articles-col .article-list li:last-child{border:none}

.help-center-sec .carr-desig {
    
    font-size: 16px;
    line-height: 20px;
}


    .accordion {
  width: 100%;
  max-width: 360px;
  margin: 0px auto 20px;
  background: #fff;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  box-shadow: 0 4px 58px -10px rgba(0, 0, 0, 0.2);
}

.accordion .link {
    cursor: pointer;
    display: block;
    padding: 25px 15px 15px 52px;
    color: #3a3a3a;
    font-size: 15px;
    border-bottom: 1px solid #f1f1f1;
    position: relative;
    -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
    font-weight: 600;
}

.accordion li:last-child .link { border-bottom: 0; }

.accordion li i {
  position: absolute;
  top: 26px;
  left: 22px;
  font-size: 18px;
  color: #595959;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.about-crm-col{padding-left: 20px}
.accordion li i.fa-chevron-down {
  right: 22px;
  left: auto;
  font-size: 13px;
}
.submenu span{padding-right: 5px}
.accordion li.open .link { /* color: #b63b4d; */} 

.accordion li.open i { /* color: #b63b4d; */}

.accordion li.open i.fa-chevron-down {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}

.submenu {
  display: none;
  background: #444359;
  font-size: 14px;
}

.submenu li { border-bottom: 1px solid #4f4e65; }

.submenu a {
  display: block;
  text-decoration: none;
  color: #d0d0d0 !important;
  padding: 12px;
  padding-left: 52px;
  -webkit-transition: all 0.25s ease;
  -o-transition: all 0.25s ease;
  transition: all 0.25s ease;
  font-size: 13px;
  cursor: pointer;
}

.submenu a:hover {
    background: #FBD15B;
    color: #232323 !important;
}

.prev-next a{color: #353535;font-weight: 500}
.prev-next a:hover{color: #bc2626;}

.prev-next a i{padding: 5px}

.prev-next{margin-top: 30px}
.breadcrumb-bar a{float: left;}
.breadcrumb-bar{width: 100%;clear: both;display: flex;margin-bottom: 20px}

.breadcrumb-bar a{float: left;color: #3535359a;padding-right: 10px;}
.breadcrumb-bar a i{padding-left: 5px}

.breadcrumb-bar a:last-child{color: #353535;pointer-events: none;}
 

.breadcrumb-bar a {
    float: none;
    color: #3535359a;
    padding-right: 10px;
    font-size: 12px;
    line-height: 15px;
}

p strong{color: #0090e1}
#article_data p{padding-bottom: 10px}
ol{padding-left: 10px;margin-left: 0px}

ol p{padding-left: 0px;margin-left: 0px !important}

#article_data{    font-family: "Poppins", sans-serif !important;}

#article_data p, ol p span{        color: #4f4f4f;
    font-size: 14px;
    padding-top: 15px;
    line-height: 22.5px;
    letter-spacing: 0.3px;
    font-weight: 400;
    font-family: "Poppins", sans-serif !important;
} 
#article_data h5, #article_content h5{font-weight: bold;color: #232323}
#sel_sub .mark, #sel_sub mark{background: none !important;color:#232323;font-size: 18px}
.mark, mark{background-color: none
}

#article_data h4{font-weight: bold;}

@media (max-width: 768px) {

.breadcrumb-bar a {font-size: 13px;line-height: 17px;}
.search-banner{padding:30px 50px}
.rogan-hero-section.rogan-hero-five .banner-main-title {
    font-size: 28px !important;
    line-height: normal;
}
}


</style>



@endsection
@section('code')
<div class="rogan-hero-section-sec rogan-hero-section-v2 rogan-hero-section rogan-hero-five pt-100 pb-60 md-pt-100  pos-r search-banner">
    <div class="container">
       <div class="main-wrapper pos-r">
          <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Help center
          </h1>
         
          </p>
          <div class="searchbar ">
           <input type="text" placeholder="Search..." id="art_search_data"><button id="art_search"><i class="fa fa-search" aria-hidden="true"></i></button>  
          
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
 <div class="pt-50 pb-50">
    <div class="container">
       <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="articles-col">
             
               {{-- <ul class="article-list pt-30">
                   @foreach ($article_lists as $article)
                   <li>
                       <a href="{{ route('help-center-detail',['page' => $page,'slug' => $article->slug]) }}">
                       <span>
                       {{ Html::image('website/images/note-icon.svg','getlead') }}
                       </span>{{ $article->article_name }}
                       </a>
                   </li>
                   @endforeach
               </ul> --}}

{{-- <ul class="article-list pt-30">
                  <li><a href=""><span>
                    {{ Html::image('website/images/note-icon.svg','getlead') }}
                    </span>Hello sharun</a></li>
               </ul> --}}


               <ul id="accordion" class="accordion">
                @foreach ($article_lists as $article)
                <li>
                 
                  <div class="link"><i class="fas {{$article->icon}}"></i>{{$article->article_title}}
                    <i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                    @foreach ($article['articleDetails'] as $key => $sub)
                    @if($sub->title)
                       <li><a class="side_bar_content" data-val="{{$sub->article_id}}"  data-id="{{$sub->id}}" data-subid="{{$sub->sub_id}}"><span></span> {{$sub->title}}</a></li>
                    @endif
                    {{-- <li><a href="#"><span>02. </span>Read our simple guide </a></li>
                    <li><a href="#"><span>03.</span> CSS</a></li> --}}
                    @endforeach
                  </ul>
                </li>
                @endforeach
                
                {{-- <li>
                  <div class="link"><i class="fas fa-users"></i>Lead
                    Management<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                    <li><a href="#"><span>01.</span> Photoshop</a></li>
                    <li><a href="#"><span>02. </span>Read our simple guide </a></li>
                    <li><a href="#"><span>03.</span> CSS</a></li>
                  </ul>
                </li>
                <li>
                  <div class="link"><i class="fas fa-handshake"></i>Deal
                    Managament<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                    <li><a href="#"><span>01.</span> Photoshop</a></li>
                    <li><a href="#"><span>02. </span>Read our simple guide </a></li>
                    <li><a href="#"><span>03.</span> CSS</a></li>
                  </ul>
                </li>
                <li>
                  <div class="link"><i class="fas fa-tasks"></i>Task
                    Setup<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                    <li><a href="#"><span>01.</span> Photoshop</a></li>
                    <li><a href="#"><span>02. </span>Read our simple guide </a></li>
                    <li><a href="#"><span>03.</span> CSS</a></li>
                  </ul>
                </li> --}}


{{-- <li>
                  <div class="link"><i class="fas fa-bullhorn"></i>Campaign
                    Management<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                    <li><a href="#">Google</a></li>
                    <li><a href="#">Bing</a></li>
                    <li><a href="#">Yahoo</a></li>
                  </ul>
                </li> --}}
{{-- 
<li>
                  <div class="link"><i class="fas fa-cogs"></i>Integrations<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                    <li><a href="#">Google</a></li>
                    <li><a href="#">Bing</a></li>
                    <li><a href="#">Yahoo</a></li>
                  </ul>
                </li> --}}
                
              </ul>



           

               
            </div>
         </div>
          <div class="col-lg-8 col-md-8 col-sm-12">
             <div class="about-crm-col" >

                 <div class="breadcrumb-bar">
                    <a href="">Account signup & setup<i class="fas fa-angle-right"></i></a>
                    <a href="">Getlead account signup<i class="fas fa-angle-right"></i></a>
                    <a href="">How to create an account </a>
                </div>



            @if ($articles)
                @if ($articles->count() > 0)
                <input type="hidden" id="art_type" value="{{$articles->type_id}}">
                  <div  id="article_data">
                      @if ($articles->article_title)
                          <h4>{{ $articles->article_title }}</h4>
                      @endif

                      {{-- <p>
                          {{ $articles->article_description }}
                      </p> --}}
                      @if ($article['articleImages'])
                        @foreach($article['articleImages'] as $k=> $image)
                            {{ Html::image('/Article/' . $image->article_image,'Getlead') }}
                        @endforeach
                      @endif
                  </div>
                
                  <div  id="article_content">
                    {{-- @foreach ($articles['articleDetails'] as $key => $article) --}}
                  
                     @if($articles['articleDetails']->count() != 0)
                        @if ($articles['articleDetails'][0]->title)
                            <h5>{{ $articles['articleDetails'][0]->title }}</h5>
                        @endif
                        <ol>
                        {!! $articles['articleDetails'][0]->description !!}
                        </ol>
                        <br>
                         @if ($articles['articleDetails'][0]->image)
                            {{ Html::image('/Article/' . $article->image,'Getlead') }}
                        @endif

                        <!-- @if ($articles['articleDetails'][0]->note)
                            <div class="note-box">
                                <p><span>Note:-</span></p>
                                <p>{!! $articles['articleDetails'][0]->note !!}</p>
                            </div>
                        @endif -->
                      @else
                        <label class="no-data">No Data Found</label>
                        {{-- @endforeach --}}
                      @endif
                  </div>
                 
                   {{-- <div id="prev_content"></div> <div id="next_content"></div> --}}
                @else
                    <label class="no-data">No Data Found</label>
                @endif
                 
            @else
               <label class="no-data">No Data Found</label>
            @endif



<div class="row">
              <div class="col-sm-12 prev-next">

              <a  class="float-left" id="prev_content" style="cursor: grab;"><i class="fas fa-angle-left"></i> Previous topic</a>
              <a  class="float-right" id="next_content" style="cursor: grab;">Next topic<i class="fas fa-angle-right"></i></a>

              </div>
</div>


             </div>
          </div>
       </div>
    </div>
 </div>

@section('script')
<script>
  var articles='{!!$articles!!}'; console.log(articles.length);
  

    // window.onload = function() {
    //     articleDetailShow(articleDetails['article_details'][0]['article_id'],articleDetails['article_details'][0]['sub_id']);
    // }
    
    // function articleDetailShow(id,sub)
    // {
        
    //     var data='';
    //     $.each(articleDetails['article_details'],function(index,value){ 
    //         if(value.sub_id==sub && value.article_id==id)
    //         {
    //         var title='';
    //         var des='';
    //         if (value.title)
    //           var title=value.title;
    //         if(value.description)
    //            var des=value.description;  
    //         data=data+'<h5>'+title+'</h5><ol>'+des+'</ol><br>'; 
    //         if (value.image)
    //         {
    //             data=data+'<img src="https://getleadcrm.com/Article/'+ value.image +'"></img>';
    //         }
    //         if (value.note)
    //         {
    //             data=data+'<div class="note-box"><p><span>Note:-</span></p><p>'+ value.note+'</p></div>';
    //         } 
         
    //         $('#article_content').html(data);
            
    //         var next='<a class="float-right" style="cursor: grab;" id="next_content" data-val="'+value.article_id +'" data-id="'+value.id +'" data-subid="'+value.sub_id +'">Next topic<i class="fas fa-angle-right"></i></a>'
    //         // var next='<button  id="next"  data-val="'+value.article_id +'" data-id="'+value.sub_id +'" >Next</button>';
    //         $('#next_content').html(next);
    //         var prev= '<a  class="float-left" style="cursor: grab;" id="prev_content" data-val="'+value.article_id +'"  data-id="'+value.id +'" data-subid="'+value.sub_id +'"><i class="fas fa-angle-left"></i> Previous topic</a>'
    //         // var prev='<button  id="prev"  data-val="'+value.article_id +'" data-id="'+value.sub_id +'" >Previous</button>';
    //         $('#prev_content').html(prev);  
    //     }
    //     });
    // }
    function articleListShow(article_id,id,sub_id)
    {
        $.ajax({
                type:'POST',
                url:"{{ route('article-sidebar-data') }}",
                data:{
                        "_token": "{{ csrf_token() }}",
                        "id" : id,
                        "article_id": article_id,
                        "sub_id":sub_id
                    },
                success:function(res) {
                    var article=res.article;
                    // if (data.status == 1) {
                    //     toastr.success(data.message);
                    // }else{
                    //     toastr.error(data.message);
                    // }
                    da='';
                    if (article.article_title)
                       da=da+'<h4>'+article.article_title+'</h4>';
                  
                    // da=da+'<p>'+article.article_description+'</p>';
                    console.log(article.articleImages);
                    if (article.article_images) 
                     {
                       $.each(article.article_images,function(index,val){ 
                        da=da+'<img src="https://getleadcrm.com/Article/'+ val.article_image +'" ></img>';
                        // da=da+'Html::image("/Article/"'+ val.article_image + ',"Getlead")';
                       });
                      }
                    $('#article_data').html(da);
                    
          var data='';
           $.each(res.article_details,function(index,value){ 
            // if(value.sub_id==sub && value.article_id==id)
            // {
              
            var title='';
            var des='';
            if (value.title)
              var title=value.title;
            if(value.description)
               var des=value.description;  
               if(id== value.id)
               {
                  data=data+'<h5 id="sel_sub"><mark>'+title+' </mark></h5><ol>'+des+'</ol><br>';
                //  console.log('elemntid'); console.log(document.getElementById("mytext").focus());
                //   $('#sel_sub').focus();
               }
               else{
                data=data+'<h5>'+title+'</h5><ol>'+des+'</ol><br>'; 
               }
            if (res.image)
            {
                data=data+'<img src="https://getleadcrm.com/Article/'+ value.image +'"></img>';
            }
            if (res.note)
            {
                data=data+'<div class="note-box"><p><span>Note:-</span></p><p>'+ value.note+'</p></div>';
            } 
         
            $('#article_content').html(data);
         
            // var n=parseInt(value.sub_id)+1;
            // var p=value.sub_id-1
          
            var next='<a class="float-right" style="cursor: grab;" id="next_content" data-id="'+id +'" data-val="'+article_id +'" data-subid="'+sub_id +'">Next topic<i class="fas fa-angle-right"></i></a>'
            // var next='<button  id="next"  data-val="'+value.article_id +'" data-id="'+value.sub_id +'" >Next</button>';
            $('#next_content').html(next);
            var prev= '<a  class="float-left" style="cursor: grab;" id="prev_content" data-id="'+id +'" data-val="'+article_id +'" data-subid="'+sub_id +'"><i class="fas fa-angle-left"></i> Previous topic</a>'
            // var prev='<button  id="prev"  data-val="'+value.article_id +'" data-id="'+value.sub_id +'" >Previous</button>';
            $('#prev_content').html(prev);  
        // }
        });
        }
         });

    }
    $(document).on('click', '.side_bar_content', function () {
        
       var id= $(this).data('id');
       var article_id=  $(this).data('val');
       var sub_id=  $(this).data('subid');
       articleListShow(article_id,id,sub_id);
    });
    $(document).on('click', '#next_content', function () {
       var id= $(this).data('id');
       var sub_id=$(this).data('subid')+1;
      //  var subid=parseInt(sub_id)+1;
       var article_id=  $(this).data('val');
      
       articleListShow(article_id,id,sub_id);
    });
    $(document).on('click', '#prev_content', function () {

        if($(this).data('id')==1)
          var sub_id=$(this).data('subid');
        else
            var sub_id= $(this).data('subid')-1;

       var article_id=  $(this).data('val');
       var id= $(this).data('id');

       articleListShow(article_id,id,sub_id);
    });
    $(document).on('click', '#art_search', function () {
      var art_type=$('#art_type').val();
        $.ajax({
                type:'POST',
                url:"{{ route('article-search-data') }}",
                data:{
                        "_token": "{{ csrf_token() }}",
                        "search" : $('#art_search_data').val(),
                        'type': art_type
                        
                    },
                success:function(res) {

                  $('#article_content').html('');
                  $('#article_data').html('');
                 
                  if(res.article == null && res.article_details.length==0)
                  {
                 
                    var da='<label class="no-data">No Data Found</label>';
                      $('#article_data').html(da);
                      $('#prev_content').html(''); 
                      $('#next_content').html(''); 
                  }else{
                    
                    var article=res.article;
                    da='';
                    if(article !=null){
                        if (article.article_title)
                            {  da=da+'<h4>'+article.article_title+'</h4>';}
                        // da=da+'<p>'+article.article_description+'</p>';
                        if (article.article_images)
                        {
                          $.each(article.article_images,function(index,val){ 
                              da=da+'<img src="https://getleadcrm.com/Article/'+ val.article_image +'"></img>';
                          });
                          }
                        $('#article_data').html(da);
                      }
                    var data='';
                    $.each(res.article_details,function(index,value){ 
                      var title='';
                      var des='';
                      if (value.title)
                          var title=value.title;
                      if(value.description)
                          var des=value.description;  
              
                      data=data+'<h5>'+title+'</h5><ol>'+des+'</ol><br>'; 
               
                      if (res.image)
                      {
                          data=data+'<img src="https://getleadcrm.com/Article/'+ value.image +'"></img>';
                      }
                      if (res.note)
                      {
                          data=data+'<div class="note-box"><p><span>Note:-</span></p><p>'+ value.note+'</p></div>';
                      } 
           
                      $('#article_content').html(data);
         
                      // var n=parseInt(value.sub_id)+1;
                      // var p=value.sub_id-1
          
                      var next='<a class="float-right" style="cursor: grab;" id="next_content" data-id="'+value.id +'" data-val="'+article.id +'" data-subid="'+value.sub_id +'">Next topic<i class="fas fa-angle-right"></i></a>'
                      // var next='<button  id="next"  data-val="'+value.article_id +'" data-id="'+value.sub_id +'" >Next</button>';
                      $('#next_content').html(next);
                      var prev= '<a  class="float-left" style="cursor: grab;"  id="prev_content" data-id="'+value.id +'" data-val="'+article.id +'" data-subid="'+value.sub_id +'"><i class="fas fa-angle-left"></i> Previous topic</a>'
                      // var prev='<button  id="prev"  data-val="'+value.article_id +'" data-id="'+value.sub_id +'" >Previous</button>';
                      $('#prev_content').html(prev);  
    
                    });
                  }
                }
        });
     })

</script>

<script>
    $(function() {
      var Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;
  
        var links = this.el.find('.link');
        links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown);
      };
  
      Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el,
            $this = $(this),
            $next = $this.next();
  
        $next.slideToggle();
        $this.parent().toggleClass('open');
  
        if (!e.data.multiple) {
          $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
        }
      };
  
      var accordion = new Accordion($('#accordion'), false);
    });
  </script>
@endsection
@endsection
