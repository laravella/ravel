<?php


Route::filter('ravelauth', function()
{
	if(Request::ajax())
	{
		if (Auth::guest()){
			App::abort(403);
		}
	}

	if (Auth::guest()) return Redirect::action('AdminUserLoginController@getIndex');
});

Route::get('/admin', function()
{
    return Redirect::to('/admin/pages/index');
});

Route::group(array('prefix'=>_ADMIN_BASE_),function()
{
	//Route::get('/','Controllers\\Admin\\DashboardAdminController@index');
	Route::get('/dashboard','Controllers\\Admin\\DashboardAdminController@dashboard');
	Route::get('/logout',array('uses'=>'AdminUserLoginController@getLogout','as'=>'ravellogout'));
	Route::controller("/posts", 'PostsAdminController');
	Route::controller("/categories",'PostsCategoriesAdminController');
	Route::controller("/pages", 'PagesAdminController');
	Route::controller("/login", 'AdminUserLoginController');
	Route::controller("/settings/users", 'UsersAdminController');
	Route::controller('/medias','MediaAdminController');
	Route::controller('/menus','MenusAdminController');
});

