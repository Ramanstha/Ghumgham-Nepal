<?php

use Illuminate\Support\Facades\Route;


/////////////////// Admin///////////////////
Route::get('/admin',[App\Http\Controllers\backend\DashboardController::class,'Dashboard'])->name('dashboard');

//////////Notices
Route::get('/notice',[App\Http\Controllers\backend\NoticeController::class,'Notice'])->name('create.notice');
Route::post('/notice-store',[App\Http\Controllers\backend\NoticeController::class,'Store'])->name('store.notice');
Route::get('/notice-view',[App\Http\Controllers\backend\NoticeController::class,'View'])->name('view.notice');
Route::get('/notice-edit/{id}',[App\Http\Controllers\backend\NoticeController::class,'Edit'])->name('edit.notice');
Route::post('/notice-update/{id}',[App\Http\Controllers\backend\NoticeController::class,'Update'])->name('update.notice');
Route::get('/notice-delete/{id}',[App\Http\Controllers\backend\NoticeController::class,'Delete'])->name('delete.notice');
Route::get('/notice-status',[App\Http\Controllers\backend\NoticeController::class,'Noticestatus'])->name('status.notice');

//////////Special message
Route::get('/smessage',[App\Http\Controllers\backend\SmessageController::class,'Smessage'])->name('create.smessage');
Route::post('/smessage-store',[App\Http\Controllers\backend\SmessageController::class,'Store'])->name('store.smessage');
Route::get('/smessage-view',[App\Http\Controllers\backend\SmessageController::class,'View'])->name('view.smessage');
Route::get('/smessage-edit/{id}',[App\Http\Controllers\backend\SmessageController::class,'Edit'])->name('edit.smessage');
Route::post('/smessage-update/{id}',[App\Http\Controllers\backend\SmessageController::class,'Update'])->name('update.smessage');
Route::get('/smessage-delete/{id}',[App\Http\Controllers\backend\SmessageController::class,'Delete'])->name('delete.smessage');

//////////Message
Route::get('/message',[App\Http\Controllers\backend\MessageController::class,'Message'])->name('create.message');
Route::post('/message-store',[App\Http\Controllers\backend\MessageController::class,'Store'])->name('store.message');
Route::get('/message-view',[App\Http\Controllers\backend\MessageController::class,'View'])->name('view.message');
Route::get('/message-edit/{id}',[App\Http\Controllers\backend\MessageController::class,'Edit'])->name('edit.message');
Route::post('/message-update/{id}',[App\Http\Controllers\backend\MessageController::class,'Update'])->name('update.message');
Route::get('/message-delete/{id}',[App\Http\Controllers\backend\MessageController::class,'Delete'])->name('delete.message');

//////////Socialmedia
Route::get('/socialmedia',[App\Http\Controllers\backend\SocialmediaController::class,'Socialmedia'])->name('create.socialmedia');
Route::post('/socialmedia-store',[App\Http\Controllers\backend\SocialmediaController::class,'Store'])->name('store.socialmedia');
Route::get('/socialmedia-view',[App\Http\Controllers\backend\SocialmediaController::class,'View'])->name('view.socialmedia');
Route::get('/socialmedia-edit/{id}',[App\Http\Controllers\backend\SocialmediaController::class,'Edit'])->name('edit.socialmedia');
Route::post('/socialmedia-update/{id}',[App\Http\Controllers\backend\SocialmediaController::class,'Update'])->name('update.socialmedia');
Route::get('/socialmedia-delete/{id}',[App\Http\Controllers\backend\SocialmediaController::class,'Delete'])->name('delete.socialmedia');

//////////Destination
Route::get('/destination',[App\Http\Controllers\backend\DestinationController::class,'Destination'])->name('create.destination');
Route::post('/destination-store',[App\Http\Controllers\backend\DestinationController::class,'Store'])->name('store.destination');
Route::get('/destination-view',[App\Http\Controllers\backend\DestinationController::class,'View'])->name('view.destination');
Route::get('/destination-edit/{id}',[App\Http\Controllers\backend\DestinationController::class,'Edit'])->name('edit.destination');
Route::post('/destination-update/{id}',[App\Http\Controllers\backend\DestinationController::class,'Update'])->name('update.destination');
Route::get('/destination-delete/{id}',[App\Http\Controllers\backend\DestinationController::class,'Delete'])->name('delete.destination');
Route::get('/destination-status',[App\Http\Controllers\backend\DestinationController::class,'destinationtatus'])->name('status.destination');

//////////academic
Route::get('/academic',[App\Http\Controllers\backend\AcademicController::class,'Academic'])->name('create.academic');
Route::post('/academic-store',[App\Http\Controllers\backend\AcademicController::class,'Store'])->name('store.academic');
Route::get('/academic-view',[App\Http\Controllers\backend\AcademicController::class,'View'])->name('view.academic');
Route::get('/academic-edit/{id}',[App\Http\Controllers\backend\AcademicController::class,'Edit'])->name('edit.academic');
Route::post('/academic-update/{id}',[App\Http\Controllers\backend\AcademicController::class,'Update'])->name('update.academic');
Route::get('/academic-delete/{id}',[App\Http\Controllers\backend\AcademicController::class,'Delete'])->name('delete.academic');
Route::post('/select-programcategory',[App\Http\Controllers\backend\AcademicController::class,'selectprogramCategory'])->name('select.programcategory');

//////////aboutus
Route::get('/aboutus',[App\Http\Controllers\backend\AboutusController::class,'Aboutus'])->name('create.aboutus');
Route::post('/aboutus-store',[App\Http\Controllers\backend\AboutusController::class,'Store'])->name('store.aboutus');
Route::get('/aboutus-view',[App\Http\Controllers\backend\AboutusController::class,'View'])->name('view.aboutus');
Route::get('/aboutus-edit/{id}',[App\Http\Controllers\backend\AboutusController::class,'Edit'])->name('edit.aboutus');
Route::post('/aboutus-update/{id}',[App\Http\Controllers\backend\AboutusController::class,'Update'])->name('update.aboutus');
Route::get('/aboutus-delete/{id}',[App\Http\Controllers\backend\AboutusController::class,'Delete'])->name('delete.aboutus');
Route::post('/select-aboutcategory',[App\Http\Controllers\backend\AboutusController::class,'selectaboutCategory'])->name('select.aboutcategory');

//////////video
Route::get('/video',[App\Http\Controllers\backend\VideoController::class,'Video'])->name('create.video');
Route::post('/video-store',[App\Http\Controllers\backend\VideoController::class,'Store'])->name('store.video');
Route::get('/video-view',[App\Http\Controllers\backend\VideoController::class,'View'])->name('view.video');
Route::get('/video-edit/{id}',[App\Http\Controllers\backend\VideoController::class,'Edit'])->name('edit.video');
Route::post('/video-update/{id}',[App\Http\Controllers\backend\VideoController::class,'Update'])->name('update.video');
Route::get('/video-delete/{id}',[App\Http\Controllers\backend\VideoController::class,'Delete'])->name('delete.video');
Route::get('/video-status',[App\Http\Controllers\backend\VideoController::class,'Videostatus'])->name('status.video');
//Banner
Route::get('/banner-create',[App\Http\Controllers\backend\BannerController::class,'Banner'])->name('create.banner');
Route::get('/banner-view',[App\Http\Controllers\backend\BannerController::class,'View'])->name('view.banner');
Route::post('/banner-store',[App\Http\Controllers\backend\BannerController::class,'Store'])->name('store.banner');
Route::get('/banner-edit/{id}',[App\Http\Controllers\backend\BannerController::class,'Edit'])->name('edit.banner');
Route::post('/banner-update/{id}',[App\Http\Controllers\backend\BannerController::class,'Update'])->name('update.banner');
Route::get('/banner-delete/{id}',[App\Http\Controllers\backend\BannerController::class,'Delete'])->name('delete.banner');

//Sidesetting 
Route::get('/sitesetting-create',[App\Http\Controllers\backend\SitesettingController::class,'Sitesetting'])->name('create.sitesetting');
Route::post('/sitesetting-store',[App\Http\Controllers\backend\SitesettingController::class,'Store'])->name('store.sitesetting');
Route::get('/sitesetting-view',[App\Http\Controllers\backend\SitesettingController::class,'View'])->name('view.sitesetting');
Route::get('/sitesetting-edit/{id}',[App\Http\Controllers\backend\SitesettingController::class,'Edit'])->name('edit.sitesetting');
Route::post('/sitesetting-update/{id}',[App\Http\Controllers\backend\SitesettingController::class,'Update'])->name('update.sitesetting');
Route::get('/sitesetting-delete/{id}',[App\Http\Controllers\backend\SitesettingController::class,'Delete'])->name('delete.sitesetting');

//Contact
Route::get('/contact-create',[App\Http\Controllers\backend\ContactController::class,'Contact'])->name('create.contact');
Route::post('/contact-store',[App\Http\Controllers\backend\ContactController::class,'Store'])->name('store.contact');
Route::get('/contact-view',[App\Http\Controllers\backend\ContactController::class,'View'])->name('view.contact');
Route::get('/contact-edit/{id}',[App\Http\Controllers\backend\ContactController::class,'Edit'])->name('edit.contact');
Route::post('/contact-update/{id}',[App\Http\Controllers\backend\ContactController::class,'Update'])->name('update.contact');
Route::get('/contact-delete/{id}',[App\Http\Controllers\backend\ContactController::class,'Delete'])->name('delete.contact');

Route::get('/user-message/{id}',[App\Http\Controllers\backend\ContactController::class,'viewUserMessage'])->name('view_user_message.contact');
Route::get('/user-contact-message',[App\Http\Controllers\backend\ContactController::class,'viewUserContactMessage'])->name('view_user.contact');
Route::get('/user-contact-delete/{id}',[App\Http\Controllers\backend\ContactController::class,'userMessageDelete'])->name('delete_user.contact');

//Gallery and Fee Structure
Route::get('/galleryandfee-create',[App\Http\Controllers\backend\GalleryFeeStructureController::class,'GalleryAndFee'])->name('create.galleryandfee');
Route::post('/galleryandfee-store',[App\Http\Controllers\backend\GalleryFeeStructureController::class,'Store'])->name('store.galleryandfee');
Route::get('/galleryandfee-view',[App\Http\Controllers\backend\GalleryFeeStructureController::class,'View'])->name('view.galleryandfee');
Route::get('/galleryandfee-edit/{id}',[App\Http\Controllers\backend\GalleryFeeStructureController::class,'Edit'])->name('edit.galleryandfee');
Route::post('/galleryandfee-update/{id}',[App\Http\Controllers\backend\GalleryFeeStructureController::class,'Update'])->name('update.galleryandfee');
Route::get('/galleryandfee-delete/{id}',[App\Http\Controllers\backend\GalleryFeeStructureController::class,'Delete'])->name('delete.galleryandfee');

//Governance
Route::get('/governance-create',[App\Http\Controllers\backend\GovernanceController::class,'CampusAssembly'])->name('create.governance');
Route::post('/governance-store',[App\Http\Controllers\backend\GovernanceController::class,'Store'])->name('store.governance');
Route::get('/governance-view',[App\Http\Controllers\backend\GovernanceController::class,'View'])->name('view.governance');
Route::get('/governance-edit/{id}',[App\Http\Controllers\backend\GovernanceController::class,'Edit'])->name('edit.governance');
Route::post('/governance-update/{id}',[App\Http\Controllers\backend\GovernanceController::class,'Update'])->name('update.governance');
Route::get('/governance-delete/{id}',[App\Http\Controllers\backend\GovernanceController::class,'Delete'])->name('delete.governance');
Route::get('/governance-status',[App\Http\Controllers\backend\GovernanceController::class,'Governancestatus'])->name('status.governance');
Route::post('/select-category',[App\Http\Controllers\backend\GovernanceController::class,'selectaboutCategory'])->name('select.category');

//Publication
Route::get('/publication-create',[App\Http\Controllers\backend\PublicationController::class,'Publication'])->name('create.publication');
Route::post('/publication-store',[App\Http\Controllers\backend\PublicationController::class,'Store'])->name('store.publication');
Route::get('/publication-view',[App\Http\Controllers\backend\PublicationController::class,'View'])->name('view.publication');
Route::get('/publication-edit/{id}',[App\Http\Controllers\backend\PublicationController::class,'Edit'])->name('edit.publication');
Route::post('/publication-update/{id}',[App\Http\Controllers\backend\PublicationController::class,'Update'])->name('update.publication');
Route::get('/publication-delete/{id}',[App\Http\Controllers\backend\PublicationController::class,'Delete'])->name('delete.publication');
Route::get('/publication-status',[App\Http\Controllers\backend\PublicationController::class,'publicationstatus'])->name('status.publication');

//Testimonial
Route::get('/testimonial-create',[App\Http\Controllers\backend\TestimonialController::class,'Testimonial'])->name('create.testimonial');
Route::post('/testimonial-store',[App\Http\Controllers\backend\TestimonialController::class,'Store'])->name('store.testimonial');
Route::get('/testimonial-view',[App\Http\Controllers\backend\TestimonialController::class,'View'])->name('view.testimonial');
Route::get('/testimonial-edit/{id}',[App\Http\Controllers\backend\TestimonialController::class,'Edit'])->name('edit.testimonial');
Route::post('/testimonial-update/{id}',[App\Http\Controllers\backend\TestimonialController::class,'Update'])->name('update.testimonial');
Route::get('/testimonial-delete/{id}',[App\Http\Controllers\backend\TestimonialController::class,'Delete'])->name('delete.testimonial');
Route::get('/testimonial-status',[App\Http\Controllers\backend\TestimonialController::class,'testimonialstatus'])->name('status.testimonial');

/////////////////// user///////////////////
Route::get('/',[App\Http\Controllers\User\HomeController::class,'Home'])->name('Home');
Route::get('/aboutus',[App\Http\Controllers\User\AboutusController::class,'Aboutus'])->name('Aboutus');
Route::get('/contactus',[App\Http\Controllers\User\ContactusController::class,'Contact'])->name('Contact');
