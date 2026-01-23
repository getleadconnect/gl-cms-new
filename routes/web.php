<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\webisite\websiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('test', function () {
    return view('profile.profile');
});

Route::get('/',[websiteController::class,'indexPage']);

//Auth
Route::controller(AuthController::class)->group(function(){
    Route::get('login','loginPage')->name('login-page');
    Route::post('log-in','login')->name('log-in');
    Route::get('log-out','logout')->name('log-out');
    Route::get('register-page','registerPage')->name('register-page');
    Route::post('register-user','register')->name('register-user');
});
Route::controller(ContactUsController::class)->group(function(){
    Route::get('store-contact-us','storeContactUs')->name('store-contact-us');
});

Route::middleware(['auth_check'])->group(function(){

    Route::prefix('admin')->group(function(){

        Route::get('dashboard', function () {
            return view('app.design');
        });

        // testimonial
        Route::controller(TestimonialController::class)->group(function () {
            Route::get('get-testimonial-data','getTestimonialData')->name('testimonial.get-data');
            Route::post('testimonial-change-status','changeStatus')->name('testimonial-change-status');
            Route::post('delete-testimonial','deleteTestimonial')->name('testimonial.delete');
            Route::get('get-add-tesimonial-page','index')->name('get-add-tesimonial-page');
            Route::post('store-testimonial-data','store')->name('store-testimonial-data');
            Route::get('get-edit-testimonial-page/{slug}','edit')->name('edit.testimonial-page');
            Route::post('update-testimonial-data','update')->name('update.testimonial-page');
        });

        // Client
        Route::controller(ClientController::class)->group(function () {
            Route::get('get-client-data','getClientData')->name('client.get-data');
            Route::post('client-change-status','changeStatus')->name('client-change-status');
            Route::post('delete-client','deleteClient')->name('client.delete');
            Route::post('store-client-data','store')->name('store-client-data');
            Route::get('get-add-client-page','getClientAddPage')->name('get-add-client-page');
            Route::get('get-edit-client-page/{slug}','edit')->name('edit.client-page');
            Route::post('update-client-data','update')->name('update.client-page');
        });

        //Faq
        Route::controller(FaqController::class)->group(function(){
            Route::get('get-faq-data','getFaqData')->name('get-faq-data');
            Route::get('get-add-faq-page','getFaqAddPage')->name('get-add-faq-page');
            Route::post('faq-change-status','changeStatus')->name('faq-change-status');
            Route::post('faq-delete','deleteFaq')->name('faq-delete');
            Route::post('store-faq-data','storeFaqData')->name('store-faq-data');
            Route::get('get-edit-faq-page/{id}','edit')->name('edit-faq-page');
            Route::post('update-faq-data','updateFaq')->name('update-faq-data');
        });

        //profile
        Route::controller(UserController::class)->group(function(){
            Route::get('get-profile-page','profilePage')->name('get-profile-page');
            Route::post('update-user-details','updateUserDetails')->name('update-user-details');
        });

        //articles
        Route::controller(ArticleController::class)->group(function(){
            Route::get('article-page','showArticlePage')->name('article-page');
            Route::get('add-article-page','addArticlePage')->name('add-article-page');
            Route::get('add-more-article-page/{id}','addMoreArticlePage')->name('add-more-article-page');
            Route::get('list-more-article-page/{id}','listMoreArticlePage')->name('list-more-article-page');
            Route::get('list-more-article-page-data','listMoreArticlePageData')->name('list-more-article-page-data');
            Route::get('list-article-details-page-data','listArticleDetailPageData')->name('list-article-details-page-data');
            Route::get('add-article-detail-page/{id}','addArticleDetailPage')->name('add-article-detail-page');
            Route::post('store-article-data','storeArticleData')->name('store-article-data');
            Route::post('store-article-details-data','storeArticleDetailsData')->name('store-article-details-data');
            Route::post('store-article-topic-data','storeTopicData')->name('store-article-topic-data');
            Route::post('store-article-details-image','storeArticleDetailsImage')->name('store-article-details-image');
            Route::post('article-change-status','changeStatus')->name('article-change-status');
            Route::post('article-delete','deleteArticle')->name('article-delete');
            Route::get('edit-article-page/{id}','editArticle')->name('edit-article-page');
            Route::post('update-article-data','updateArticleData')->name('update-article-data');
            Route::get('article-image-delete/{id}','deleteArticleImage')->name('delete-article-image');
            Route::post('article-detail-change-status','detailStatusChange')->name('article-detail-change-status');
            Route::get('detail-edit-page/{slug}','detailEditPage')->name('detail-edit-page');
            Route::get('topic-edit-page/{slug}','topicEditPage')->name('topic-edit-page');
            Route::post('article-details-delete','deleteArticleDetails')->name('article-details-delete');
            Route::post('update-article-details-data','updateDetailsData')->name('update-article-details-data');
            Route::post('article-topic-delete','deleteArticleTopic')->name('article-topic-delete');
            Route::post('update-article-topic-data','updateTopicData')->name('update-article-topic-data');
        });

        //contact-us
        Route::controller(ContactUsController::class)->group(function(){
            Route::get('get-contact-us','getContactUsData')->name('get-contact-us');
        });

        //Blog
        Route::controller(BlogController::class)->group(function(){
            Route::get('get-blog-page','getBlogData')->name('get-blog-page');
            Route::get('add-blog-page','addBlogPage')->name('add-blog-page');
            Route::post('store-blog-data','storeBlogData')->name('store-blog-data');
            Route::get('edit-blog-page/{slug}','editBlogPage')->name('edit-blog-page');
            Route::post('blog-change-status','changeBlogStatus')->name('blog-change-status');
            Route::post('blog-delete','deleteBlog')->name('blog-delete');
            Route::post('update-blog-data','updateBlogData')->name('update-blog-data');

            Route::get('add-blog-details-page/{id}','addBlogDetailsPage')->name('add-blog-details-page');
            Route::post('store-blog-details-data','storeBlogDetailsData')->name('store-blog-details-data');
            Route::get('blog-detail-edit-page/{slug}','blogDetailEditPage')->name('blog-detail-edit-page');
            Route::post('update-blog-details-data','updateBlogDetailsData')->name('update-blog-details-data');
            Route::post('blog-detail-change-status','detailStatusChange')->name('blog-detail-change-status');
            Route::post('blog-details-delete','blogDetailDelete')->name('blog-details-delete');
        });

    });
});

//website
Route::controller(websiteController::class)->group(function(){
    Route::get('/','indexPage');
    Route::get('lead-management-crm','leadManagement')->name('lead-management-page');
    Route::get('task-management','taskPage')->name('task-page');
    Route::get('deal-management-crm','dealManagementPage')->name('deal-management-page');
    Route::get('campaign-management','campaignPage')->name('campaign-page');
    Route::get('integrations','integrationPage')->name('integration-page');
    Route::get('contact-us','contactUsPage')->name('contact-us-page');
    Route::get('pricing','pricePage')->name('price-page');
    Route::get('about-us','aboutUsPage')->name('about-us-page');
    Route::get('faq','faqPage')->name('faq-page');
    Route::get('help-center','helpCenterPage')->name('help-center-page');
    Route::get('help-center/{page}','helpCenterPageDetail')->name('help-center-list');
    // Route::get('help-center/{page}','helpCenterPageList')->name('help-center-list');
    Route::get('help-center/{page}/{slug}','helpCenterPageDetail')->name('help-center-detail');
    Route::get('help-center-test/{page}/{slug}','helpCenterPageDetailTest')->name('help-center-detail-test');
    Route::post('help-center-sidebar','helpCenterSidebarData')->name('article-sidebar-data');
    Route::post('article-search-data','articleSearchData')->name('article-search-data');
    Route::get('search-help-center','helpCenterSearch')->name('search-help-center');
    Route::get('developer-hub','developerHubPage')->name('developer-hub-page');
    //Route::get('blog','blogPage')->name('blog-page');
    //Route::get('blog/{slug}','blogDetailsPage')->name('blog-details-page');
    Route::get('CRM','crmPage')->name('crm-page');
    Route::get('sitemap','sitemap')->name('sitemap');
    Route::get('telecalling-crm','telecalling')->name('telecalling');
    Route::get('education-consultancy-crm','educationConsultancyCrm')->name('education-consultancy-crm');
    Route::get('pagenotfound', 'pagenotfound')->name('pagenotfound');
    Route::get('facebook-crm', 'facebookCrm')->name('facebook-crm');
    Route::get('information-technology-crm', 'informationTechnology')->name('information-technology');
    Route::get('manufacturing-crm', 'manufacturingCrm')->name('manufacturing-crm');
    Route::get('real-estate-crm', 'realEstateCrm')->name('real-estate-crm');
    Route::get('travel-crm', 'travelCrm')->name('travel-crm');
    Route::get('whatsapp-crm', 'whatsappCrm')->name('whatsapp-crm');
    
    Route::get('privacy-policy','privacyPolicyPage')->name('privacy-policy-page');
    Route::get('terms_and_conditions','termsConditions')->name('terms-and-conditions');
    Route::get('terms-and-conditions','termsConditions')->name('terms-and-conditions');
    Route::get('careers','careersPage')->name('career-page');
    Route::get('career-details-page','careerDetailsPage')->name('career-details-page');
    Route::get('career/sales-executive','careerSalesExecutivePage')->name('career-sales-executive');
    Route::get('career/operations-manager','careerOperationsManagerPage')->name('career-operations-manager');
   
    Route::get('Whats-new','whatsNewPage')->name('whats_new');
    Route::get('crm-mobile-app','mobileApp')->name('crm-mobile-app');
    Route::get('demo','demoVideo')->name('demo');


    Route::get('request-demo','requestDemo')->name('request-demo');
    Route::get('thank-you','thankyouPage')->name('thank-you');
    Route::get('features','featurePage')->name('features');
    Route::get('industries','industryPage')->name('industries');
    Route::get('automotive-crm','automativeCrm')->name('automative-CRM');
    Route::get('healthcare-crm','medicalIndustry')->name('healthcare');
    Route::get('financial-crm','financialPage')->name('financial');
    Route::get('retail-crm','retailPage')->name('retail');
    Route::get('consulting-crm','consultingPage')->name('consulting');
    Route::get('sales-pipeline','salesPipeline')->name('sales-pipeline');
    Route::get('contact-management-crm','contactManagement')->name('contact-management');
    Route::get('manufacturing','manufacturingPage')->name('manufacturing');
    Route::get('technology','technologyPage')->name('technology');
    Route::get('tours-travels','toursTravelsPage')->name('tours-travels');
    Route::get('chemical','chemicalPage')->name('chemical');
    Route::get('food','foodPage')->name('food-crm');
    Route::get('textile','textilePage')->name('textile');
	
	Route::get('how-to-setup-sales-flow-in-your-crm','salesFlowProcess')->name('how-to-setup-sales-flow-in-your-crm');
   
   
});

Route::get('/sitemap.xml', function () {
    return response()->file(base_path('sitemap.xml'));
});
// Route::get('sitemap.xml', [SitemapController::class, 'index']);

