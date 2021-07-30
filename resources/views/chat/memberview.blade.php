@extends('layout.app')
@section('content')
  <div class="card">
  	<div class="text-center mt-2 mb-4  bg-success">Add Members</div>
  	@foreach($users as $user)
  	@php {{  $u = App\Models\GroupConversation::where('group_id',$id)->where('member_id',$user->id)->first(); }} @endphp
  	@if(!$u)
  	<div class="row text-center mb-3 ">
  		<div class="col-4">
  			 <div class="profile"><img src="{{ asset('/profile_pic/'.$user->img) }}" height="50" alt="image"><span class=""></span></div>
  		</div>
  		<div class="col-4">
  			{{ $user->name }}
  		</div>
  		<div class="col-4">
  			<a href="{{ url('/addtogroup/'.$id.'/'.$user->id) }}"><button type="button" class="btn btn-success btn-rounded btn-fw">Add</button></a>
  		</div>
  	</div>
  	@endif
  	@endforeach

	<div class="text-center mt-2 mb-4 bg-success">Remove Members</div>
  	@foreach($users as $user)
  	@php {{  $u = App\Models\GroupConversation::where('group_id',$id)->where('member_id',$user->id)->first(); }} @endphp
  	@if($u)
  	<div class="row text-center mb-3 ">
  		<div class="col-4">
  			 <div class="profile"><img src="{{ asset('/profile_pic/'.$user->img) }}" height="50" alt="image"><span class=""></span></div>
  		</div>
  		<div class="col-4">
  			{{ $user->name }}
  		</div>
  		<div class="col-4">
  			<a href="{{ url('/removetogroup/'.$u->id) }}"><button type="button" class="btn btn-success btn-rounded btn-fw">Remove</button></a>
  		</div>
  	</div>
  	@endif
  	@endforeach

  </div>
@endsection

