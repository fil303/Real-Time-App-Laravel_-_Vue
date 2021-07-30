<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileUpdateController extends Controller
{
    public function index(){
    	return view('auth.profile');
    }


    public function update(Request $request){
    	 $validated = $request->validate([
		        'First_Name' => 'required|max:12',
		        'Last_Name' => 'required|max:12',
		        'Email' => 'required|string|email',
		        'Mobile_Number' => 'required|string|min:11|max:11',
		        'Gender' => 'required',
		        'Date' => 'required',
    			]);
	    if($request->Image){
	    	$pic =rand(0,999999999999999).'.'.$request->Image->getClientOriginalExtension();
	        $request->Image->move(public_path('/profile_pic'), $pic);
	        unlink(public_path('/profile_pic/').Auth::user()->img);
	    }
	        $user = User::find(Auth::id());

	        $user->name = $request->First_Name.' '.$request->Last_Name;
	        $user->email = $request->Email ;
	        $user->phone = $request->Mobile_Number ;
	        $user->gender = $request->Gender ;
	        $user->DateOfBirth = $request->Date ;
	        if($request->Image){
	        $user->img = $pic ;
	    	}
	        $user->fname = $request->First_Name ;
	        $user->lname = $request->Last_Name ;
	        $user->save();

	        

        return redirect()->back();
    }

    
}
