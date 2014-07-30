<?php

/*
|--------------------------------------------------------------------------
| Application Routes
| 应用程序路由
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| 在这里你可以为应用程序注册所有的路由。
| It's a breeze. Simply tell Laravel the URIs it should respond to
| 这非常的容易。简单的告诉 Laravel 这些 URI 应该响应，
| and give it the Closure to execute when that URI is requested.
| 并且给它一个闭包，当那个URI发起请求后执行它。
|
*/

Route::get('/', function()
{

	return View::make('hello');
});

Route::get('/show_env', function()
{
    echo '<pre>';
    echo  '环境:' ,App::environment(), '-----是否开启debug:', true === Config::get('app.debug')? '是':'否' , '---------';
    print_r(Config::get('database.connections')); 
    echo '</pre>';
    return ; 
});

Route::group(array('prefix'=>'user', 'before'=>'isLogin'), function() {
    Route::get('name/{name}', function($name) {
        $string = "我的名字是 -- {$name}";
        echo $string;
        return;
    })->where(array('name'=>'[a-zA-Z]+'));
    Route::get('id/{id}', array(function($id) {
        $string = "我的id号是 -- {$id}";
        echo $string;
        return;
    }))->where(array('id'=>'[0-9]+'));
});

Route::filter('isLogin', function() {
    if(Session::get('userId', 0) === 0) {
        return '对不起,请登录<a href="http://www.baidu.com">百度</a>';
    }
});

// Route::controller('/admin', 'Admin\MyHomeController');


Route::group(array('prefix'=>'admin'), function() {
    Route::controller('my_home', 'Admin\MyHomeController');
    Route::controller('post', 'Admin\PostController');
    Route::controller('user', 'Admin\UserController');
});

#################多钱网项目路由###################

Route::group(array('prefix'=>'iduoqian'), function() {
    Route::get('', array('as'=>'index', 'uses'=>'Iduoqian\IndexController@showIndex'));
    Route::get('gonglue', 'Iduoqian\GongLueController@showIndex');
});

################################################






