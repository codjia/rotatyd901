<?php

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

Route::prefix('/')->group(function (){

    Route::prefix('/')->group(function (){
        Route::get('/', 'Website\HomeController@index')->name('website.home');
        Route::get('/home/blog/{id}/view', 'Website\HomeController@view')->name('website.home.blog.view');
        Route::post('/home/blog/{id}/comment/add', 'Website\BlogController@add_comment')->name('website.home.blog.comment.add');


//        About Us
        Route::get('/who_we_are', 'Website\HomeController@whoweare')->name('website.whoweare');
        Route::get('/meeting_info_and_location', 'Website\HomeController@meeting_info_loc')->name('website.meeting.info.location');
        Route::get('/history', 'Website\HomeController@history')->name('website.history');

        //        committee
        Route::get('/committee', 'Website\CommitteeController@index')->name('website.committee');
        Route::get('/committee/{id}/members', 'Website\CommitteeController@member')->name('website.committee.members');


      //Route::get('/committee_members', 'Website\HomeController@committee_members')->name('website.committee.members');
        Route::get('/birthdays_and_anniversaries', 'Website\AnniversaryController@index')->name('website.birthdays.anniversary');
        Route::get('/downloads', 'Website\HomeController@downloads')->name('website.downloads');
        //        directory
        Route::get('/directory', 'Website\HomeController@directory')->name('website.directory');
        Route::get('/directory/clubs', 'Website\ClubController@index')->name('website.directory.clubs');
        Route::get('/directory/district_leaders', 'Website\District_leaderController@index')->name('website.directory.district_leaders');


       Route::get('/directory_detail', 'Website\ClubController@index')->name('website.directory.detail');

        Route::get('/executives_and_directors', 'Website\ExecutivedirectorController@index')->name('website.executive.directors');
       // Route::get('/executives_and_directors', 'Website\HomeController@executive_directors')->name('website.executive.directors');

//        What is Rotary


//        Get Involved
        Route::get('/give', 'Website\HomeController@give')->name('website.give');
  //Route::post('/give/payment/donate','Website\CashDonationController@donateCash')->name('website.give.payment.donate');
        Route::post('/give/payment/donate','Website\DonationController@donateCash')->name('website.give.payment.donate');

//        News and Updates
        Route::get('/club_news', 'Website\HomeController@club_news')->name('website.club_news');
        Route::get('/stories', 'Website\HomeController@stories')->name('website.stories');
        //categoty photos
        Route::get('/member/login', 'Website\CategoryController@memberlogin')->name('website.member.login');
        Route::post('/photo_album_category', 'Website\CategoryController@index')->name('website.photo.category');
        Route::get('/photo_album/{id}/photo', 'Website\CategoryController@photo')->name('website.photo_album');
        //        blog
        Route::get('/blog', 'Website\BlogController@index')->name('website.blog');
        Route::get('/blog/{id}/view', 'Website\BlogController@view')->name('website.blog.view');
        Route::post('/blog/{id}/comment/add', 'Website\BlogController@add_comment')->name('website.blog.comment.add');


//        Calendar

        //public photos
        Route::get('/gallery', 'Website\PublicphotoController@photo')->name('website.gallery');

//        Contact Us
        Route::get('/contact', 'Website\HomeController@contact')->name('website.contact');

        //       Thanks
        Route::get('/thanks', 'Website\HomeController@thanks')->name('front.thanks');
        Route::get('/thanks_voda', 'Website\HomeController@thanks_voda')->name('website.thanks_voda');

    });


    Route::prefix('admin')->group(function (){

        Route::get('/'     , 'Auth\LoginController@showLoginForm');
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login');
        Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        Route::group(['middleware' => 'auth'], function () {
            Route::get('/dashboard', 'Admin\HomeController@index')->name('admin.dashboard.page');
        });

        Route::get('/history','HistoryController@index')->name('history.index');
        Route::get('history/create','HistoryController@create')->name('history.create');
        Route::post('history/store','HistoryController@store')->name('history.store');
        // Route::get('history/{$id}/show','HistoryController@show')->name('history.show');
         Route::any('history/edit/{id}','HistoryController@edit')->name('history.edit');
        Route::put('history/update/{id}','HistoryController@update')->name('history.update');
    });


});

