<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\SubdistrictController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ExtraController;
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

Route::get('/front', function () {
    return view('frontend.index');
});

Route::get('/home',[HomeController::class,'index'])->name('home'); 
//Categories Route------->
Route::get('/categories',[CategoryController::class,'index'])->name('categories');
Route::post('/store/categories',[CategoryController::class,'store'])->name('store.category');
Route::get('/delete/categories/{id}',[CategoryController::class,'destroy'])->name('delete.category');
Route::get('/edit/category/{id}',[CategoryController::class,'edit']);
Route::post('/update/categories/{id}',[CategoryController::class,'update'])->name('update.category');

//Subcategory Route--->>>
Route::get('/subcategories',[SubcategoryController::class,'index'])->name('subcategories');
Route::post('/store/subcategories',[SubcategoryController::class,'store'])->name('store.subcategories');
Route::get('/edit/subcategory/{id}',[SubcategoryController::class,'edit']);
Route::post('/update/subcategory/{id}',[SubcategoryController::class,'update'])->name('update.subcategory');
Route::get('/delete/subcategory/{id}',[SubcategoryController::class,'destroy'])->name('delete.subcategory');

//District Route-->>
Route::get('/district',[DistrictController::class,'index'])->name('district');
Route::post('/store/district',[DistrictController::class,'store'])->name('store.district');
Route::get('/delete/district/{id}',[DistrictController::class,'destroy'])->name('delete.district');
Route::get('/edit/district/{id}',[DistrictController::class,'edit']);
Route::post('/update/district/{id}',[DistrictController::class,'update'])->name('update.district');

//Subdistricts Route--->
Route::get('/subdistrict',[SubdistrictController::class,'index'])->name('subdistrict');
Route::post('/store/subdistrict',[SubdistrictController::class,'store'])->name('store.subdistrict');
Route::get('/edit/subdistrict/{id}',[SubdistrictController::class,'edit']);
Route::post('/update/subdistrict/{id}',[SubdistrictController::class,'update'])->name('update.subdistrict');
Route::get('/delete/subdistrict/{id}',[SubdistrictController::class,'destroy'])->name('delete.subdistrict');

//json multi Route--->>
Route::get('/get/subcat/{cat_id}',[PostController::class,'GetSubcat']);
Route::get('/get/subdist/{dist_id}',[PostController::class,'GetSubdist']);

//Post Route ---->>
Route::get('/insert/post',[PostController::class,'create'])->name('insert.post');
Route::post('/store/post',[PostController::class,'store'])->name('store.post');
Route::get('/all/post',[PostController::class,'allindex'])->name('all.post');
Route::get('/delete/post/{id}',[PostController::class,'destroy'])->name('delete.post');
Route::get('/edit/post/{id}',[PostController::class,'edit']);
Route::post('/update/post/{id}',[PostController::class,'update'])->name('update.post');  

//Setting  Social Route--->>
Route::get('/social/setting',[SettingController::class,'SocialSetting'])->name('social.setting');
Route::post('/update/social/{id}',[SettingController::class,'update'])->name('update.social');

//Setting SEO Route
Route::get('/seo/setting',[SettingController::class,'SeoSetting'])->name('seo.setting');
Route::post('/update/seo/{id}',[SettingController::class,'SEOupdate'])->name('update.seo');

//Namaz Setting Route
Route::get('/namaz/setting',[SettingController::class,'NamazSetting'])->name('namaz.setting');
Route::post('/update/namaz/{id}',[SettingController::class,'NamazUpdate'])->name('update.namaz');

//Live TV setting Route 
Route::get('/livetv/setting',[SettingController::class,'LivetvSetting'])->name('livetv.setting');
Route::post('/update/livetv/{id}',[SettingController::class,'Updatelivetv'])->name('update.livetv');
Route::get('/active/livetv',[SettingController::class,'ActiveLivetv'])->name('active.livetv');
Route::get('/deactive/livetv',[SettingController::class,'DeactiveLivetv'])->name('deactive.livetv');

//Notice Setting Route
Route::get('/notice/setting',[SettingController::class,'NoticeSetting'])->name('notice.setting');
Route::post('/update/notice/{id}',[SettingController::class,'UpdateNotice'])->name('update.notice');
Route::get('/active/notice',[SettingController::class,'ActiveNotice'])->name('active.notice');
Route::get('/deactive/notice',[SettingController::class,'DeactiveNotice'])->name('deactive.notice');

//Website Link Route
Route::get('/important/website',[SettingController::class,'ImportantWebsite'])->name('important.website');
Route::post('/store/website',[SettingController::class,'StoreWebsite'])->name('store.website');

//Gallery Route 
Route::get('/photo/gallery',[GalleryController::class,'PhotoGallery'])->name('photo.gallery');
Route::get('/video/gallery',[GalleryController::class,'VideoGallery'])->name('video.gallery');
Route::post('/store/gallery',[GalleryController::class,'StoreGallery'])->name('store.gallery');
Route::post('/store/video',[GalleryController::class,'StoreVideo'])->name('store.video');

//Language Route
Route::get('/lang/bangla',[ExtraController::class,'LangBangla'])->name('lang.bangla');
Route::get('/lang/english',[ExtraController::class,'LangEnglish'])->name('lang.english');






