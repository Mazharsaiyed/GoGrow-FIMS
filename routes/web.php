<?php

Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('categories/check_slug', 'CategoryController@check_slug')->name('categories.check_slug');
Route::get('categories/{slug}/{category}', 'CategoryController@show')->name('categories.show');
Route::get('tags/check_slug', 'TagController@check_slug')->name('tags.check_slug');
Route::get('tags/{slug}/{tag}', 'TagController@show')->name('tags.show');
Route::get('articles/check_slug', 'ArticleController@check_slug')->name('articles.check_slug');
Route::get('articles/{slug}/{article}', 'ArticleController@show')->name('articles.show');
Route::get('articles', 'ArticleController@index')->name('articles.index');
Route::get('faq', 'FaqController@index')->name('faq.index');
Route::get('sign-up', 'HomeController@register')->name('sign-up');
Route::get('sign-in', 'HomeController@login')->name('sign-in');
Route::get('forget-password', 'HomeController@forgetPassword')->name('forget-password');
Route::post('store-user', 'HomeController@registerStore')->name('store-user');
Route::match(['get', 'post'], '/botman', 'HomeController@handle');
Route::get('products/crop',  'HomeController@product_crop')->name('products.crop');
Route::get('products/seed',  'HomeController@product_seed')->name('products.seed');
Route::get('products/soil',  'HomeController@product_soil')->name('products.soil');
Route::get('products/pesticide',  'HomeController@product_pesticide')->name('products.pesticide');
Route::get('products/land',  'HomeController@product_land')->name('products.land');
Route::get('products/fertilizer',  'HomeController@product_fertilizer')->name('products.fertilizer');
Route::get('useful-link',  'HomeController@usefullink')->name('useful-link');
Route::post('feedback-form',  'HomeController@feedback_form')->name('feedback-form');
Route::post('feedback-form-store',  'HomeController@forgetPasswordStore')->name('feedback-form-store');
Route::post('detail-mail',  'HomeController@detail_mail')->name('detail-mail');
// Route::get('open-ai', 'HomeController@open_ai')->name('open-ai');
Route::get('/write', function () {
    $title = '';
    $content = '';
    return view('openAi', compact('title', 'content'));
});
Route::post('/write/generate', 'HomeController@open_ai')->name('write');
Route::get('openAi', 'HomeController@openAi')->name('openAi');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {

    Route::post('db-backup','HomeController@postDbBackUp')->name('db-backup');

    Route::get('logout', 'HomeController@logout');
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Categories
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoriesController');

    // Crop
    Route::delete('crops/destroy', 'CropController@massDestroy')->name('crops.massDestroy');
    Route::resource('crops', 'CropController');

    // Fertilizers
    Route::delete('fertilizers/destroy', 'FertilizersController@massDestroy')->name('fertilizers.massDestroy');
    Route::resource('fertilizers', 'FertilizersController');

    // pesticides 
    Route::delete('pesticides/destroy', 'PesticidesController@massDestroy')->name('pesticides.massDestroy');
    Route::resource('pesticides', 'PesticidesController');

    // seeds
    Route::delete('seeds/destroy', 'SeedsController@massDestroy')->name('seeds.massDestroy');
    Route::resource('seeds', 'SeedsController');

    // land
    Route::delete('land/destroy', 'LandController@massDestroy')->name('land.massDestroy');
    Route::resource('land', 'LandController');

    // soil
    Route::delete('soil/destroy', 'SoilController@massDestroy')->name('soil.massDestroy');
    Route::resource('soil', 'SoilController');

    // Useful Link
    Route::delete('useful-links/destroy', 'UsefulLinkController@massDestroy')->name('useful-links.massDestroy');
    Route::resource('useful-links', 'UsefulLinkController');

    // feedback
    Route::delete('feedback/destroy', 'FeedbackController@massDestroy')->name('feedback.massDestroy');
    Route::resource('feedback', 'FeedbackController');

    // Tags
    Route::delete('tags/destroy', 'TagsController@massDestroy')->name('tags.massDestroy');
    Route::resource('tags', 'TagsController');

    // Articles
    Route::delete('articles/destroy', 'ArticlesController@massDestroy')->name('articles.massDestroy');
    Route::resource('articles', 'ArticlesController');

    // Faq Categories
    Route::delete('faq-categories/destroy', 'FaqCategoryController@massDestroy')->name('faq-categories.massDestroy');
    Route::resource('faq-categories', 'FaqCategoryController');

    // Faq Questions
    Route::delete('faq-questions/destroy', 'FaqQuestionController@massDestroy')->name('faq-questions.massDestroy');
    Route::resource('faq-questions', 'FaqQuestionController');
});
