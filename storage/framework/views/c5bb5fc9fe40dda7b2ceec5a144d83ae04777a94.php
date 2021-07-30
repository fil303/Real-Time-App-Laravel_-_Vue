<?php $__env->startSection('content'); ?>

<div id="app">
	
<groupchat-component :user="<?php echo e(Auth::user()); ?>" :group="<?php echo e($group); ?>"/>

</div>


<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fil303/Desktop/htdocs/MoreApp/CanadianUniversity/resources/views/chat/group.blade.php ENDPATH**/ ?>