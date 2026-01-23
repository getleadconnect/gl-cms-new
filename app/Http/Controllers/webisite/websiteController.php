<?php

namespace App\Http\Controllers\webisite;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleDetail;
use App\Models\Blog;
use App\Models\BlogDetail;
use App\Models\BlogType;
use App\Models\Client;
use App\Models\Faq;
use App\Models\Testimonial;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function indexPage()
    {
        $clients = Client::inRandomOrder()->where('status',1)->get()->take(12);
        $testimonials = Testimonial::where('status',1)->get();
        return view('website.index',compact('clients','testimonials'));
    }

    public function leadManagement()
    {
        return view('website.lead_management');
    }

public function sitemap()
    {
        return view('website.sitemap');
    }

public function educationConsultancyCrm()
    {
        return view('website.education_consultancy_crm');
    }

    public function facebookCrm()
    {
        return view('website.facebook_crm');
    }
    
    public function informationTechnology()
    {
        return view('website.information_technology');
    }

    public function pagenotfound()
    {
        return view('website.pagenotfound');
    }

    
    
    public function manufacturingCrm()
    {
        return view('website.manufacturing_crm');
    }
    
    public function realEstateCrm()
    {
        return view('website.real_estate_crm');
    }
    
  
    public function travelCrm()
    {
        return view('website.travel_crm');
    }
    
    public function whatsappCrm()
    {
        return view('website.whatsapp_crm');
    }
    

    public function telecalling()
    {
        return view('website.telecalling');
    }


    public function taskPage()
    {
        return view('website.task');
    }

    public function dealManagementPage()
    {
        return view('website.deal_management');
    }

    public function campaignPage()
    {
        return view('website.campaign');
    }

    public function integrationPage()
    {
        return view('website.integrations');
    }

    public function contactUsPage()
    {
        return view('website.contact_us');
    }


	public function salesFlowProcess()
    {
        return view('website.sales_flow_process');
    }



    public function pricePage(){
        $price = "";
        try{
            $response = file_get_contents('http://ip-api.com/json/'.$this->getIp());
            $response = json_decode($response);
            if($response->status == 'success')
            {
                if($response){
                    if($response->countryCode == "IN"){
                        $price = "₹599";
                    }else{
                        $price = "$12";
                    }
                }else{
                    $price = "₹599";
                }
            }else{
                 /*** Geo Location */
                 $ipdat = @json_decode(file_get_contents( 
                    "http://www.geoplugin.net/json.gp?ip=".$this->getIp()));                
                    
                if($ipdat){
                    if($ipdat->geoplugin_countryCode == "IN"){
                        $price = "₹599";
                    }else{
                        $price = "$12";
                    }
                }else{
                    $price = "₹599";
                }
            }
        }catch(\Exception $e){
           \Log::info($e->getMessage()); 
           $price = "₹599";
        }

        return view('website.price')->with('price',$price);
    }

    // public function pricePage(Request $request)
    // {
    //     $ip = $request->getClientIp(true);
    //     $currentUserInfo = Location::get($ip);
    //     if ($currentUserInfo->countryCode == "IN") {
    //         $price = "599 INR";
    //     }else {
    //         $price = "12 USD";
    //     }
    //     return view('website.price')->with('price',$price);
    // }

    public function aboutUsPage()
    {
        return view('website.about_us');
    }

    public function faqPage(Request $request)
    {
        
        $faqs = Faq::where('status',1);
        $searchKey = $request->searchKey;
        if ($searchKey) {
            $faqs = $faqs->where(function($q) use($searchKey){
                $q->where('question','LIKE','%'.$searchKey.'%')
                    ->orWhere('answer','LIKE','%'.$searchKey.'%');
            });
        }
        $faqs=$faqs->get();
        return view('website.faq',compact('faqs','searchKey'));
    }

    public function helpCenterPage()
    {
        return view('website.help_center');
    }

    public function helpCenterPageList(Request $request,$page)
    {
        $articles = Article::where('type_id',$page)->where('status',1);
        $searchKey = $request->searchKey;
        if ($searchKey) {
            $articles = $articles->where(function($q) use($searchKey){
                $q->where('article_name','LIKE','%'.$searchKey.'%')
                    ->orWhere('article_title','LIKE','%'.$searchKey.'%');
            });
        }
        $articles = $articles->get();
        if ($page == 'account-signup-setup') {
            $heading = 'Account signup & Setup';
            $text = 'Explore the complete range of lead management tools to get your business.';
        }elseif ($page == 'lead-management') {
            $heading = 'Lead Management';
            $text = 'User onboarding is the process of guiding new users to become familiar with and proficient in using a product or service.';
        }elseif ($page == 'deal-managament') {
            $heading = 'Deal Managament';
            $text = 'Explore the complete range of lead management tools to get your business.';
        }elseif($page == 'import-and-export-with-excel') {
            $heading = 'Import & export with Excel';
            $text = 'Explore the complete range of lead management tools to get your business.';
        }elseif($page == 'task-setup') {
            $heading = 'Task Setup';
            $text = 'Explore the complete range of lead management tools to get your business.';
        }elseif($page == 'campaign-management') {
            $heading = 'Campaign Management';
            $text = 'Explore the complete range of lead management tools to get your business.';
        }elseif($page == 'integrations') {
            $heading = 'Integrations';
            $text = 'Explore the complete range of lead management tools to get your business.';
        }





        return view('website.help_center_2',compact('articles','page','searchKey','heading','text'));

    }

    public function helpCenterPageDetailTest($page,$slug)
    {
        $article = Article::where('status',1);

        $articles = (clone $article)->where('slug',$slug)->with(['articleDetails' => function($q){
            $q->where('status',1);
        },'articleImages'])->first();
        // $images= ArticleImage::where('article_id',$articles->id)->get();
        $article_lists = $article->get();
        return view('website.help_center_3',compact('articles','article_lists','page'));
    }

    public function helpCenterPageDetail($page)
    {
        $article = Article::where('status',1)->where('type_id',$page);

        $articles = (clone $article)->with(['articleDetails' => function($q){
            $q->where('status',1);
        }])->first();
        $article_lists = $article->get();
        return view('website.help_center_3',compact('articles','article_lists','page'));
    }

    public function helpCenterSidebarData(Request $request)
    {
        $article = Article::where('id',$request->article_id)->with(['articleImages'])->first();
        $article_details=ArticleDetail::where('article_id',$request->article_id)->where('sub_id',$request->sub_id)
        //  ->where(function($q)use($request){
        //     $q->where('sub_id',$request->sub_id)
        //     ->orWhere('sub_head_id',$request->sub_id);
        //  })
         ->get();
        $data=['article'=>$article,'article_details'=>$article_details];
        return $data;
    }
    
    public function articleSearchData(Request $request)
    {
        $searchKey=$request->search;
        $type=$request->type;
        $article = Article::where('type_id',$type)->where(function($q) use($searchKey){
            $q->where('article_name','LIKE','%'.$searchKey.'%')
                ->orWhere('article_title','LIKE','%'.$searchKey.'%');
        })->with(['articleImages'])->first();
        $article_details=ArticleDetail::where(function($q)use($searchKey){
            $q->where('title','LIKE','%'.$searchKey.'%');
         })->whereHas('article',function($qu)use($type){
             $qu->where('type_id',$type);
         });
        //  if($article)
        //  {
        //     $article_details=$article_details->where('article_id',$article->id);
        //  }
         $article_details=$article_details->get();
        $data=['article'=>$article,'article_details'=>$article_details];
        return $data;
    }

    public function helpCenterSearch(Request $request)
    {
        $articles = Article::where('status',1);
        $searchKey = $request->get('query');
        
        if ($searchKey) {
            $articles = $articles->where(function($q) use($searchKey){
                $q->where('article_name','LIKE','%'.$searchKey.'%')
                    ->orWhere('article_title','LIKE','%'.$searchKey.'%');
            });
        }
        $articles = $articles->get();
        return response()->json($articles);

    }

    // public function helpCenterPage3($slug)
    // {
    //     $article = Article::where('status',1);
    //     $articles = (clone $article)->where('slug',$slug)->with(['articleDetails' => function($q){
    //         $q->where('status',1);
    //     }])->first();
    //     $article_lists = $article->get();
    //     return view('website.help_center_3',compact('articles','article_lists'));
    // }

    public function developerHubPage()
    {
        return view('website.developer_hub');
    }

    public function blogPage()
    {
        $blog = Blog::where('status',1);
        $blogs = (clone $blog)->latest()->paginate(2);
        $featured = $blog->where('featured',1)->latest()->get();
        //  dump($featured);dd($blogs);
        return view('website.blog',compact('blogs','featured'));
    }

    public function blogDetailsPage($slug)
    {
        $blog = Blog::where('status',1);
        $details = (clone $blog)->where('slug',$slug)->with(['blogDetails' => function($q){
            $q->where('status',1);
        }])->first();
        $types = BlogType::where('status',1)->get();
        $featured = (clone $blog)->where('featured',1)->latest()->get();
        return view('website.blog_details',compact('details','types','featured'));
    }

    public function crmPage()
    {
        $clients = Client::where('status',1)->get();
        return view('website.crm',compact('clients'));
    }

    public function privacyPolicyPage()
    {
        return view('website.privacy_policy');
    }
    public function termsConditions()
    {
        return view('website.terms_and_conditions');
    }
    public function whatsNewPage()
    {
        return view('website.whats_new');
    }

    public function careersPage()
    {
        return view('website.careers');
    }

    public function careerDetailsPage()
    {
        return view('website.career_details');
    }

    public function careerSalesExecutivePage()
    {
        return view('website.career_sales_executive');
    }

    public function careerOperationsManagerPage()
    {
        return view('website.career_operations_manager');
    }


    public function mobileApp()
    {
        return view('website.mobile_app');
    }
    public function demoVideo()
    {
        return view('website.demo_video');
    }
    public function requestDemo()
    {
        return view('website.request_demo');
    }
    public function thankyouPage()
    {
        return view('website.thankyou_page');
    }
    public function featurePage()
    {
        return view('website.features');
    }
    public function industryPage()
    {
        return view('website.industries');
    }
    public function automativeCrm()
    {
        return view('website.automative_crm');
    }
    public function medicalIndustry()
    {
        return view('website.medical');
    }
    public function financialPage()
    {
        return view('website.financial');
    }
    public function retailPage()
    {
        return view('website.retail');
    }
    public function consultingPage()
    {
        return view('website.consulting');
    }
    public function salesPipeline()
    {
        return view('website.sales_pipeline');
    }
    public function contactManagement()
    {
        return view('website.contact_management');
    }
    public function manufacturingPage()
    {
        return view('website.manufacturing');
    }public function technologyPage()
    {
        return view('website.technology');
    }public function toursTravelsPage()
    {
        return view('website.tours-travels');
    }public function chemicalPage()
    {
        return view('website.chemical');
    }public function foodPage()
    {
        return view('website.food');
    }public function textilePage()
    {
        return view('website.textile');
    }








    public static function getIp()
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
    }
}
