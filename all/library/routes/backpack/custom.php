<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
	'guard'      => config('backpack.base.guard'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('author', 'AuthorCrudController');
    Route::crud('book', 'BookCrudController');
    Route::crud('theme', 'ThemeCrudController');
    Route::crud('keyword', 'KeywordCrudController');
    Route::crud('contact', 'ContactCrudController');
    Route::get('charts/weekly-users', 'Charts\WeeklyUsersChartController@response')->name('charts.weekly-users.index');
    Route::get('charts/weekly-downloads', 'Charts\WeeklyDownloadsChartController@response')->name('charts.weekly-downloads.index');

    if (config('backpack.base.setup_dashboard_routes')) {
        Route::get('dashboard', 'AdminController@dashboard')->name('backpack.dashboard');
    }
}); // this should be the absolute last line of this file