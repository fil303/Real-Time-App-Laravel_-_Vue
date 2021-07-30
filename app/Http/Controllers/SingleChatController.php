<?php

namespace App\Http\Controllers;

use App\Events\SingleChat;
use App\Models\Conversation;
use App\Models\Massage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SingleChatController extends Controller
{
    public function index($id){
    	$Conversation = DB::table('conversations')->where('sender_id',Auth::id())->where('reciver_id',$id)->orWhere('sender_id',$id)->where('reciver_id',Auth::id())->first();
    	if (!$Conversation) {
     	Conversation::create([
     		'sender_id'=>Auth::id(),
     		'reciver_id'=>$id,
     		'channel'=>Str::random(32),
    	]);   		
    	}

    	$channel = DB::table('conversations')->where('sender_id',Auth::id())->where('reciver_id',$id)->orWhere('sender_id',$id)->where('reciver_id',Auth::id())->first();
        $name = User::find($id);
    

    	return view('chat.chat',compact('id','channel','name')); 
    }

    public function getmassage($id){
    	$Conversation = DB::table('conversations')->where('sender_id',Auth::id())->where('reciver_id',$id)->orWhere('sender_id',$id)->where('reciver_id',Auth::id())->first();
    		return $massage = Massage::where('channel',$Conversation->channel)->get();

    }

    public function store(Request $req){
    	$massage = Massage::create([
    		'sender_id'=> Auth::id(),
    		'reciver_id'=>$req->reciver_id,
    		'massage'=>$req->massage,
    		'sender_name'=>Auth::user()->username,
    		'channel'=> $req->channel,
    	])->id;
    	$data = [
            'sender_id'=> Auth::id(),
            'reciver_id'=>$req->reciver_id,
            'id' => $massage,
            'massage'=>$req->massage,
            'sender_name'=>Auth::user()->username,
            'channel'=> $req->channel,
        ];

        Broadcast(new SingleChat($data))->toOthers();

        return $massage ;
    }

    public function delete ($id){
        return Massage::find($id)->delete();
    }
}
