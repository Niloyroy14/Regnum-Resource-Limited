<?php

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


Route::get('/','PagesController@index')->name('index');

/*About us */
Route::get('/companybackground','PagesController@company_background')->name('company.background');
Route::get('/managingdirector','PagesController@managing_director')->name('managing.director');
Route::get('/directormessage','PagesController@director_message')->name('director.message');


/*Our Project*/ 

Route::get('/alexload-conrol-system','PagesController@alex_load')->name('about.alexload');
Route::get('/toll-management-system','PagesController@toll_management')->name('about.tollmanagement');
Route::get('/smart-marketing-system','PagesController@smart_marketing')->name('about.smart_marketing');



/*Our Products*/ 


Route::get('/regnum-it','PagesController@regnum_it')->name('product.regnumit');

Route::get('/regnum-architecture','PagesController@regnum_architecture')->name('product.regnum-architecture');


/*gallery*/

Route::get('/gallery','PagesController@gallery')->name('gallery');

/*gallery read more page*/ 

Route::get('/gallery/mj_signing','PagesController@mj_signing')->name('gallery.mj_signing');
Route::get('/gallery/axleload_signing','PagesController@axleload_signing')->name('gallery.axleload_signing');
Route::get('/gallery/sitakund_signing','PagesController@sitakund_signing')->name('gallery.sitakund_signing');
Route::get('/gallery/opening_signing','PagesController@opening_signing')->name('gallery.opening_signing');



/*Contact Us*/ 

Route::get('/contact','PagesController@contact_us')->name('contact');






/*Admin route*/



 Route::get('/admin','AdminPagesController@index')->name('admin.index');


 //admin Slider route

Route::get('/admin/slider','AdminSliderController@manage_slider')->name('admin.slider');

Route::get('/admin/slider/create','AdminSliderController@create')->name('admin.slider.create');

Route::post('/admin/slider/store','AdminSliderController@slider_store')->name('admin.slider.store');

Route::post('/admin/slider/update/{id}','AdminSliderController@slider_update')->name('admin.slider.update');

Route::get('/admin/slider/edit/{id}','AdminSliderController@slider_edit')->name('admin.slider.edit');

Route::get('/admin/slider/delete/{id}','AdminSliderController@slider_delete')->name('admin.slider.delete');



//admin category route

Route::get('/admin/category','AdminSlidercategoryController@manage_slidercategory')->name('admin.slidercategory');

Route::get('/admin/slidercategory/create','AdminSlidercategoryController@create_slidercategory')->name('admin.slidercategory.create');

Route::post('/admin/slidercategory/store','AdminSlidercategoryController@slidercategory_store')->name('admin.slidercategory.store');

Route::get('/admin/slidercategory/edit/{id}','AdminSlidercategoryController@slidercategory_edit')->name('admin.slidercategory.edit');

Route::post('/admin/slidercategory/update/{id}','AdminSlidercategoryController@slidercategory_update')->name('admin.slidercategory.update');

Route::get('/admin/slidercategory/delete/{id}','AdminSlidercategoryController@slidercategory_delete')->name('admin.slidercategory.delete');




//Admin Gallery Route

Route::get('/admin/gallery','AdminGalleryController@manage_gallery')->name('admin.gallery');

Route::get('/admin/gallery/create','AdminGalleryController@create')->name('admin.gallery.create');

Route::post('/admin/gallery/store','AdminGalleryController@gallery_store')->name('admin.gallery.store');

Route::post('/admin/gallery/update/{id}','AdminGalleryController@gallery_update')->name('admin.gallery.update');

Route::get('/admin/gallery/edit/{id}','AdminGalleryController@gallery_edit')->name('admin.gallery.edit');

Route::get('/admin/gallery/delete/{id}','AdminGalleryController@gallery_delete')->name('admin.gallery.delete');



//our projects

//Admin our projects Controller

Route::get('/admin/ourproject','AdminOurProjectController@manage_ourproject')->name('admin.ourproject');

Route::get('/admin/ourproject/create','AdminOurProjectController@create')->name('admin.ourproject.create');

Route::post('/admin/ourproject/store','AdminOurProjectController@ourproject_store')->name('admin.ourproject.store');

Route::post('/admin/ourproject/update/{id}','AdminOurProjectController@ourproject_update')->name('admin.ourproject.update');

Route::get('/admin/ourproject/edit/{id}','AdminOurProjectController@ourproject_edit')->name('admin.ourproject.edit');

Route::get('/admin/ourproject/delete/{id}','AdminOurProjectController@ourproject_delete')->name('admin.ourproject.delete');






//our products

//Admin Regnum Architecture Controller

Route::get('/admin/architecture','ourproducts\AdminRegnumArchitectureController@manage_architecture')->name('admin.architecture');

Route::get('/admin/architecture/create','ourproducts\AdminRegnumArchitectureController@create')->name('admin.architecture.create');

Route::post('/admin/architecture/store','ourproducts\AdminRegnumArchitectureController@architecture_store')->name('admin.architecture.store');

Route::post('/admin/architecture/update/{id}','ourproducts\AdminRegnumArchitectureController@architecture_update')->name('admin.architecture.update');

Route::get('/admin/architecture/edit/{id}','ourproducts\AdminRegnumArchitectureController@architecture_edit')->name('admin.architecture.edit');

Route::get('/admin/architecture/delete/{id}','ourproducts\AdminRegnumArchitectureController@architecture_delete')->name('admin.architecture.delete');




//Admin Regnum Architecture Portfolio Controller

Route::get('/admin/ArchitecturePortfolio','ourproducts\AdminArchitecturePortfolioController@manage_architecturePortfolio')->name('admin.architectureportfolio');

Route::get('/admin/ArchitecturePortfolio/create','ourproducts\AdminArchitecturePortfolioController@create')->name('admin.architectureportfolio.create');

Route::post('/admin/ArchitecturePortfolio/store','ourproducts\AdminArchitecturePortfolioController@ArchitecturePortfolio_store')->name('admin.architectureportfolio.store');

Route::post('/admin/ArchitecturePortfolio/update/{id}','ourproducts\AdminArchitecturePortfolioController@ArchitecturePortfolio_update')->name('admin.architectureportfolio.update');

Route::get('/admin/ArchitecturePortfolio/edit/{id}','ourproducts\AdminArchitecturePortfolioController@ArchitecturePortfolio_edit')->name('admin.architectureportfolio.edit');

Route::get('/admin/ArchitecturePortfolio/delete/{id}','ourproducts\AdminArchitecturePortfolioController@ArchitecturePortfolio_delete')->name('admin.architectureportfolio.delete');




//Admin Regnum IT Services  Controller

Route::get('/admin/itservice','ourproducts\AdminRegnumITServiceController@manage_itservice')->name('admin.itservice');

Route::get('/admin/itservic/create','ourproducts\AdminRegnumITServiceController@create')->name('admin.itservice.create');

Route::post('/admin/itservic/store','ourproducts\AdminRegnumITServiceController@itservice_store')->name('admin.itservice.store');

Route::post('/admin/itservic/update/{id}','ourproducts\AdminRegnumITServiceController@itservice_update')->name('admin.itservice.update');

Route::get('/admin/itservic/edit/{id}','ourproducts\AdminRegnumITServiceController@itservice_edit')->name('admin.itservice.edit');

Route::get('/admin/itservic/delete/{id}','ourproducts\AdminRegnumITServiceController@itservice_delete')->name('admin.itservice.delete');




//Admin Regnum IT Portfolio  Controller

Route::get('/admin/itportfolio','ourproducts\AdminRegnumITPortfolioController@manage_portfolio')->name('admin.itportfolio');

Route::get('/admin/itportfolio/create','ourproducts\AdminRegnumITPortfolioController@create')->name('admin.itportfolio.create');

Route::post('/admin/itportfolio/store','ourproducts\AdminRegnumITPortfolioController@portfolio_store')->name('admin.itportfolio.store');

Route::post('/admin/itportfolio/update/{id}','ourproducts\AdminRegnumITPortfolioController@portfolio_update')->name('admin.itportfolio.update');

Route::get('/admin/itportfolio/edit/{id}','ourproducts\AdminRegnumITPortfolioController@portfolio_edit')->name('admin.itportfolio.edit');

Route::get('/admin/itportfolio/delete/{id}','ourproducts\AdminRegnumITPortfolioController@portfolio_delete')->name('admin.itportfolio.delete');




//Admin Regnum IT Testomonial Controller

Route::get('/admin/testomonial','ourproducts\AdminRegnumITTstomonialController@manage_testomonial')->name('admin.testomonial');

Route::get('/admin/testomonial/create','ourproducts\AdminRegnumITTstomonialController@create')->name('admin.testomonial.create');

Route::post('/admin/testomonial/store','ourproducts\AdminRegnumITTstomonialController@testomonial_store')->name('admin.testomonial.store');

Route::post('/admin/testomonial/update/{id}','ourproducts\AdminRegnumITTstomonialController@testomonial_update')->name('admin.testomonial.update');

Route::get('/admin/testomonial/edit/{id}','ourproducts\AdminRegnumITTstomonialController@testomonial_edit')->name('admin.testomonial.edit');

Route::get('/admin/testomonial/delete/{id}','ourproducts\AdminRegnumITTstomonialController@testomonial_delete')->name('admin.testomonial.delete');




//Admin Regnum IT Contact Us Controller

Route::get('/admin/itcontactus','ourproducts\AdminRegnumITcontactusController@manage_itcontactus')->name('admin.itcontactus');


Route::post('/admin/itcontactus/store','ourproducts\AdminRegnumITcontactusController@itcontactus_store')->name('admin.itcontactus.store');

Route::post('/admin/itcontactus/update/{id}','ourproducts\AdminRegnumITcontactusController@itcontactus_update')->name('admin.itcontactus.update');

Route::get('/admin/itcontactus/edit/{id}','ourproducts\AdminRegnumITcontactusController@itcontactus_edit')->name('admin.itcontactus.edit');

Route::get('/admin/itcontactus/delete/{id}','ourproducts\AdminRegnumITcontactusController@itcontactus_delete')->name('admin.itcontactus.delete');





//Admin Contact Us Controller

Route::get('/admin/contactus','AdminContactusController@manage_contactus')->name('admin.contactus');

Route::post('/admin/contactus/store','AdminContactusController@contactus_store')->name('admin.contactus.store');

Route::post('/admin/contactus/update/{id}','AdminContactusController@contactus_update')->name('admin.contactus.update');

Route::get('/admin/contactus/edit/{id}','AdminContactusController@contactus_edit')->name('admin.contactus.edit');

Route::get('/admin/contactus/delete/{id}','AdminContactusController@contactus_delete')->name('admin.contactus.delete');



/*Admin Authentication Route*/

Route::get('/admin/login','AdminPagesController@login')->name('admin.login'); 
Route::get('/admin/logout','AdminPagesController@logout')->name('admin.logout'); 
Route::post('/admin/login/store','AdminPagesController@checklogin')->name('admin.login.store'); 