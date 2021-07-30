<?php

namespace App\Http\Controllers;

use App\Events\GroupChat;
use App\Models\Group;
use App\Models\GroupConversation;
use App\Models\GroupMassage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Str;

class GroupChatController extends Controller
{
	public function index($id){
   		$group = Group::find($id);
		return view('chat.group',compact('group'));
	}

   public function groupcreate(Request $r){
   	$group = Group::create([
   			'name' => $r->name,
   			'onwer_id' => Auth::id(),
   			'channel' => Str::random(32),
   		]);
   	GroupConversation::create([
   		'group_id' => $group->id,
   		'channel' => $group->channel,
   		'member_id' => Auth::id(),
   	]);

   	return redirect()->back();
   }

   public function groupdelet($id){
   		GroupConversation::where('group_id',$id)->delete();
   		Group::find($id)->delete();
   		return redirect()->route('home');
   }

   public function memberview($id){
   	    $users = User::get();
   		return view('chat.memberview',compact('id','users'));
   }

   public function memberadd($gid,$id){
   		$group = Group::find($gid);

	   	GroupConversation::create([
	   		'group_id' => $group->id,
	   		'channel' => $group->channel,
	   		'member_id' => $id,
	   	]);
   	   	return redirect()->back();
   }

   public function memberremove($id){
	   	GroupConversation::find($id)->delete();
	   	return redirect()->back();
   }

   public function getgroupsms($id){
   	 return GroupMassage::where('group_id',$id)->get();
   }

   public function postgroupsms(Request $r){
   		$massage = GroupMassage::create([
   			'sender_id' => $r->sender_id,
   			'group_id' => $r->group_id,
   			'massage' => $r->massage,
   			'sender_name' => $r->sender_name,
   			'channel' => $r->channel,
   		])->id;
    	$data = [
            'sender_id'=> $r->sender_id,
            'group_id' => $r->group_id,
            'id' => $massage,
            'massage'=>$r->massage,
            'sender_name' => $r->sender_name,
            'channel' => $r->channel,
        ];
        Broadcast(new GroupChat($data))->toOthers();
        return $massage;
   }

   public function deletegroupsms($id){
   		return GroupMassage::find($id)->delete();
   }
}
