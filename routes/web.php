<?php

use App\Events\PusherEvent;
use App\Events\SingleChat;
use App\Models\GroupConversation;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('login');
});

Route::middleware('auth')->group(function () {
	Route::get('/home',fn ()=> view('auth.home'))->name('home');
	//Porfil
	Route::get('profile',[App\Http\Controllers\ProfileUpdateController::class, 'index'])->name('profile');
	Route::post('profile',[App\Http\Controllers\ProfileUpdateController::class, 'update'])->name('profile');
	//Single Chat 
	Route::get('/chatroom/{id}',[App\Http\Controllers\SingleChatController::class, 'index']);
	Route::get('/massageget/{id}',[App\Http\Controllers\SingleChatController::class, 'getmassage']);
	Route::post('/chatroom',[App\Http\Controllers\SingleChatController::class, 'store']);
	Route::post('/deletesms/{id}',[App\Http\Controllers\SingleChatController::class, 'delete']);

	//Group Chat
	Route::post('/groupcreate',[App\Http\Controllers\GroupChatController::class, 'groupcreate'])->name('addgroup');
	Route::get('/groupchatroom/{id}',[App\Http\Controllers\GroupChatController::class, 'index']);
	Route::get('/groupdelet/{id}',[App\Http\Controllers\GroupChatController::class, 'groupdelet']);
	Route::get('/groupmassageget/{id}',[App\Http\Controllers\GroupChatController::class, 'getgroupsms']);
	Route::post('/groupchatroom',[App\Http\Controllers\GroupChatController::class, 'postgroupsms']);
	Route::post('/groupsmsdelete/{id}',[App\Http\Controllers\GroupChatController::class, 'deletegroupsms']);



	//Add To Group
	Route::get('/groupchatroom/member/{id}',[App\Http\Controllers\GroupChatController::class, 'memberview']);
	Route::get('/addtogroup/{gid}/{id}',[App\Http\Controllers\GroupChatController::class, 'memberadd']);
	Route::get('/removetogroup/{id}',[App\Http\Controllers\GroupChatController::class, 'memberremove']);


  
});


Route::get('/a',fn()=> view('chat.chat'));
Route::get('/b',fn()=> view('chat.group'));
Route::get('/aa',function(){ Broadcast(new PusherEvent('hello'));
return ['status' => 'success'] ;
});
// Route::get('/bb',function(){
// 	Broadcast(new SingleChat('hello'))->toOthers();
// 		return ['status' => 'success'] ;
// });


// Route::get('/c',function(){
// 	$a = ['resiver'=>'israfil','sender'=>'robin'];

// 	if (Arr::get($a,'resiver') == 'israfi' || Arr::get($a,'sender') == 'israfil' ) {
// return 't';		
// 	}
// 	return 'f';	
// });

// Route::get('j', function() {
//     return DB::table('conversations')->where('sender_id',Auth::id())->where('reciver_id',4)->orWhere('sender_id',4)->where('reciver_id',Auth::id()) ? 't' : 'f' ;
// });
Route::get('/kk',function(){
	return GroupConversation::where('group_id',2)->where('member_id',2)->first() ? 't' : 'f';
});