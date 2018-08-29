<?php
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

Route::get('administrador', function()
{
    return redirect('auth/login');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function ()
{
    Route::get('home', [
        'as' => 'admin.home',
        'uses' => 'HomeController@Index'
    ]);

    ////////////////USERS
    Route::get('users', [
        'as' => 'admin.users.index',
        'uses' => 'UsersController@index'
    ]);

    Route::get('users/create', [
        'as' => 'admin.users.create',
        'uses' => 'UsersController@create'
    ]);

    Route::post('users/create', [
        'as' => 'admin.users.save',
        'uses' => 'UsersController@save'
    ]);

    Route::get('users/edit/{id}', [
        'as' => 'admin.users.edit',
        'uses' => 'UsersController@edit'
    ]);

    Route::post('users/edit/{id}', [
        'as' => 'admin.users.update',
        'uses' => 'UsersController@update'
    ]);

    Route::get('users/delete/{id}', [
        'as' => 'admin.users.delete',
        'uses' => 'UsersController@delete'
    ]);

    //Services
    Route::get('services', [
        'as' => 'admin.services.index',
        'uses' => 'ServicesController@index'
    ]);

    Route::get('services/crop/{id}', [
        'as' => 'admin.services.crop',
        'uses' => 'ServicesController@crop'
    ]);

    Route::post('services/crop/{id}', [
        'as' => 'admin.services.cropSave',
        'uses' => 'ServicesController@cropSave'
    ]);

    Route::get('services/create', [
        'as' => 'admin.services.create',
        'uses' => 'ServicesController@create'
    ]);

    Route::post('services/create', [
        'as' => 'admin.services.save',
        'uses' => 'ServicesController@save'
    ]);

    Route::get('services/edit/{id}', [
        'as' => 'admin.services.edit',
        'uses' => 'ServicesController@edit'
    ]);

    Route::post('services/edit/{id}', [
        'as' => 'admin.services.update',
        'uses' => 'ServicesController@update'
    ]);

    Route::get('services/order', [
        'as' => 'admin.services.order',
        'uses' => 'ServicesController@order'
    ]);

    Route::post('services/order/{categoryId}', [
        'as' => 'admin.services.orderSave',
        'uses' => 'ServicesController@orderSave'
    ]);

    Route::get('services/delete/{id}', [
        'as' => 'admin.services.delete',
        'uses' => 'ServicesController@delete'
    ]);

    //Projects
    Route::get('projects', [
        'as' => 'admin.projects.index',
        'uses' => 'ProjectsController@index'
    ]);

    Route::get('projects/crop/{id}', [
        'as' => 'admin.projects.crop',
        'uses' => 'ProjectsController@crop'
    ]);

    Route::post('projects/crop/{id}', [
        'as' => 'admin.projects.cropSave',
        'uses' => 'ProjectsController@cropSave'
    ]);

    Route::get('projects/create', [
        'as' => 'admin.projects.create',
        'uses' => 'ProjectsController@create'
    ]);

    Route::post('projects/create', [
        'as' => 'admin.projects.save',
        'uses' => 'ProjectsController@save'
    ]);

    Route::get('projects/edit/{id}', [
        'as' => 'admin.projects.edit',
        'uses' => 'ProjectsController@edit'
    ]);

    Route::get('projects/order', [
        'as' => 'admin.projects.order',
        'uses' => 'ProjectsController@order'
    ]);

    Route::post('projects/order/{categoryId}', [
        'as' => 'admin.projects.orderSave',
        'uses' => 'ProjectsController@orderSave'
    ]);

    Route::post('projects/edit/{id}', [
        'as' => 'admin.projects.update',
        'uses' => 'ProjectsController@update'
    ]);

    Route::get('projects/delete/{id}', [
        'as' => 'admin.projects.delete',
        'uses' => 'ProjectsController@delete'
    ]);

    //Projects Categories
    Route::get('projectscategories', [
        'as' => 'admin.projects_category.index',
        'uses' => 'ProjectsCategoriesController@index'
    ]);

    Route::get('projectscategories/create', [
        'as' => 'admin.projects_category.create',
        'uses' => 'ProjectsCategoriesController@create'
    ]);

    Route::post('projectscategories/create', [
        'as' => 'admin.projects_category.save',
        'uses' => 'ProjectsCategoriesController@save'
    ]);

    Route::get('projectscategories/edit/{id}', [
        'as' => 'admin.projects_category.edit',
        'uses' => 'ProjectsCategoriesController@edit'
    ]);

    Route::post('projectscategories/edit/{id}', [
        'as' => 'admin.projects_category.update',
        'uses' => 'ProjectsCategoriesController@update'
    ]);

    Route::get('projectscategories/delete/{id}', [
        'as' => 'admin.projects_category.delete',
        'uses' => 'ProjectsCategoriesController@delete'
    ]);

    //White papers
    Route::get('whitepapers', [
        'as' => 'admin.whitepapers.index',
        'uses' => 'WhitepapersController@index'
    ]);

    Route::get('whitepapers/create', [
        'as' => 'admin.whitepapers.create',
        'uses' => 'WhitepapersController@create'
    ]);

    Route::post('whitepapers/create', [
        'as' => 'admin.whitepapers.save',
        'uses' => 'WhitepapersController@save'
    ]);

    Route::get('whitepapers/edit/{id}', [
        'as' => 'admin.whitepapers.edit',
        'uses' => 'WhitepapersController@edit'
    ]);

    Route::post('whitepapers/edit/{id}', [
        'as' => 'admin.whitepapers.update',
        'uses' => 'WhitepapersController@update'
    ]);
    Route::get('whitepapers/crop/{id}', [
        'as' => 'admin.whitepapers.crop',
        'uses' => 'WhitepapersController@crop'
    ]);

    Route::post('whitepapers/crop/{id}', [
        'as' => 'admin.whitepapers.cropSave',
        'uses' => 'WhitepapersController@cropSave'
    ]);
    Route::get('whitepapers/delete/{id}', [
        'as' => 'admin.whitepapers.delete',
        'uses' => 'WhitepapersController@delete'
    ]);


    //Para la pagina principal. Luego cambia
    Route::get('orders', [
        'as' => 'admin.orders.index',
        'uses' => 'OrdersController@index'
    ]);
    Route::get('products', [
        'as' => 'admin.products.index',
        'uses' => 'ProductsController@index'
    ]);
    Route::get('categories', [
        'as' => 'admin.categories.index',
        'uses' => 'CategoriesController@index'
    ]);
    Route::get('news', [
        'as' => 'admin.news.index',
        'uses' => 'NewsController@index'
    ]);

    //Contacts
    Route::get('contacts', [
        'as' => 'admin.contacts.index',
        'uses' => 'ContactsHistoryController@index'
    ]);

    Route::get('contacts/create', [
        'as' => 'admin.contacts.create',
        'uses' => 'ContactsHistoryController@create'
    ]);

    Route::post('contacts/create', [
        'as' => 'admin.contacts.save',
        'uses' => 'ContactsHistoryController@save'
    ]);

    Route::get('contacts/edit/{id}', [
        'as' => 'admin.contacts.edit',
        'uses' => 'ContactsHistoryController@edit'
    ]);

    Route::post('contacts/edit/{id}', [
        'as' => 'admin.contacts.update',
        'uses' => 'ContactsHistoryController@update'
    ]);

    Route::get('contacts/delete/{id}', [
        'as' => 'admin.contacts.delete',
        'uses' => 'ContactsHistoryController@delete'
    ]);

    //Newsletter
    Route::get('newsletter', [
        'as' => 'admin.newsletter.index',
        'uses' => 'NewsletterController@index'
    ]);

    Route::get('newsletter/create', [
        'as' => 'admin.newsletter.create',
        'uses' => 'NewsletterController@create'
    ]);

    Route::post('newsletter/create', [
        'as' => 'admin.newsletter.save',
        'uses' => 'NewsletterController@save'
    ]);

    Route::get('newsletter/edit/{id}', [
        'as' => 'admin.newsletter.edit',
        'uses' => 'NewsletterController@edit'
    ]);

    Route::post('newsletter/edit/{id}', [
        'as' => 'admin.newsletter.update',
        'uses' => 'NewsletterController@update'
    ]);

    Route::get('newsletter/delete/{id}', [
        'as' => 'admin.newsletter.delete',
        'uses' => 'NewsletterController@delete'
    ]);

});

///////////////////////////////////////////////////////////////////////////////////////////////////
//FRONT
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localizationRedirect', 'localize']
], function()
{
    Route::get(LaravelLocalization::transRoute('routes.home'), [
        'as' => 'home',
        'uses' => 'HomeController@index'
    ]);


    //Projects
    Route::get(LaravelLocalization::transRoute('routes.projects'), ['as' => 'projects','uses' => 'ProjectController@projects']);
    Route::get(LaravelLocalization::transRoute('routes.project'), ['as' => 'project','uses' => 'ProjectController@detail']);

    //White papers
    Route::get(LaravelLocalization::transRoute('routes.whitepapers'), ['as' => 'whitepapers','uses' => 'WhitepapersController@whitepapers']);
    Route::get(LaravelLocalization::transRoute('routes.detailwhitepaper'), ['as' => 'detailwhitepaper','uses' => 'WhitepapersController@detail']);
    //Newsletter
    Route::post(LaravelLocalization::transRoute('routes.newsletter'), ['as' => 'newsletter','uses' => 'NewsletterController@add']);
    //Agency
    Route::get(LaravelLocalization::transRoute('routes.agency'), ['as' => 'agency','uses' => 'StaticController@agency']);
    Route::get(LaravelLocalization::transRoute('routes.aviso'), ['as' => 'aviso','uses' => 'StaticController@aviso']);
    Route::get(LaravelLocalization::transRoute('routes.politica'), ['as' => 'politica','uses' => 'StaticController@politica']);
    Route::get(LaravelLocalization::transRoute('routes.generals'), ['as' => 'generals','uses' => 'StaticController@generals']);

    //Specializations
    Route::get(LaravelLocalization::transRoute('routes.specialization1'), ['as' => 'specialization1','uses' => 'SpecializationController@specialization1']);
    Route::get(LaravelLocalization::transRoute('routes.specialization2'), ['as' => 'specialization2','uses' => 'SpecializationController@specialization2']);
    Route::get(LaravelLocalization::transRoute('routes.specialization3'), ['as' => 'specialization3','uses' => 'SpecializationController@specialization3']);
    Route::get(LaravelLocalization::transRoute('routes.specialization4'), ['as' => 'specialization4','uses' => 'SpecializationController@specialization4']);



    //Contact
    Route::get(LaravelLocalization::transRoute('routes.contact'), ['as' => 'contact','uses' => 'ContactController@contact']);
    Route::post(LaravelLocalization::transRoute('routes.contact'), ['as' => 'contact','uses' => 'ContactController@send']);

    //Services
    Route::get(LaravelLocalization::transRoute('routes.service'), ['as' => 'service','uses' => 'ServiceController@service']);
    Route::post(LaravelLocalization::transRoute('routes.service'), ['as' => 'service','uses' => 'ContactController@sendShort']);

});


/* PAYMENTS */

//TPV
Route::post('payment/tpv', ['as' => 'payments.tpv', 'uses' => 'TpvController@Tpv']);
Route::post('payment/tpv/response', ['as' => 'payments.tpv.response', 'uses' => 'TpvController@TpvResponse']);
Route::get('payment/tpv/ok', ['as' => 'payments.tpv.ok', 'uses' => 'TpvController@TpvOk']);
Route::get('payment/tpv/ko', ['as' => 'payments.tpv.ko', 'uses' => 'TpvController@TpvKo']);

//TPV
Route::post('payment/paypal', ['as' => 'payments.paypal', 'uses' => 'PaypalController@Paypal']);
Route::post('payment/paypal/response', ['as' => 'payments.paypal.response', 'uses' => 'PaypalController@PaypalResponse']);
Route::get('payment/paypal/ok', ['as' => 'payments.paypal.ok', 'uses' => 'PaypalController@PaypalOk']);
Route::post('payment/paypal/ok', ['as' => 'payments.paypal.ok', 'uses' => 'PaypalController@PaypalOk']);
Route::get('payment/paypal/ko', ['as' => 'payments.paypal.ko', 'uses' => 'PaypalController@PaypalKo']);

//TRANSFER
Route::post('payment/transfer', ['as' => 'payments.transfer', 'uses' => 'TransferController@Transfer']);
