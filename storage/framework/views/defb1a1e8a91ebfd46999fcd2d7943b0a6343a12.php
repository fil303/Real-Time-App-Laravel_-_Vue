<?php $__env->startSection('content'); ?>
  <div class="card">
  	<div class="text-center mt-2 mb-4  bg-success">Add Members</div>
  	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  	<?php {{  $u = App\Models\GroupConversation::where('group_id',$id)->where('member_id',$user->id)->first(); }} ?>
  	<?php if(!$u): ?>
  	<div class="row text-center mb-3 ">
  		<div class="col-4">
  			 <div class="profile"><img src="<?php echo e(asset('/profile_pic/'.$user->img)); ?>" height="50" alt="image"><span class=""></span></div>
  		</div>
  		<div class="col-4">
  			<?php echo e($user->name); ?>

  		</div>
  		<div class="col-4">
  			<a href="<?php echo e(url('/addtogroup/'.$id.'/'.$user->id)); ?>"><button type="button" class="btn btn-success btn-rounded btn-fw">Add</button></a>
  		</div>
  	</div>
  	<?php endif; ?>
  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<div class="text-center mt-2 mb-4 bg-success">Remove Members</div>
  	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  	<?php {{  $u = App\Models\GroupConversation::where('group_id',$id)->where('member_id',$user->id)->first(); }} ?>
  	<?php if($u): ?>
  	<div class="row text-center mb-3 ">
  		<div class="col-4">
  			 <div class="profile"><img src="<?php echo e(asset('/profile_pic/'.$user->img)); ?>" height="50" alt="image"><span class=""></span></div>
  		</div>
  		<div class="col-4">
  			<?php echo e($user->name); ?>

  		</div>
  		<div class="col-4">
  			<a href="<?php echo e(url('/removetogroup/'.$u->id)); ?>"><button type="button" class="btn btn-success btn-rounded btn-fw">Remove</button></a>
  		</div>
  	</div>
  	<?php endif; ?>
  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fil303/Desktop/htdocs/MoreApp/CanadianUniversity/resources/views/chat/memberview.blade.php ENDPATH**/ ?>