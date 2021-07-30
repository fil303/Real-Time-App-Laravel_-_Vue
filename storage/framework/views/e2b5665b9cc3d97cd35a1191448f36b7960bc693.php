<?php $__env->startSection('content'); ?>

<div id="app">


<singlechat-component :reciver_id="<?php echo e($id); ?>" name="<?php echo e($name->name); ?>" code="<?php echo e($channel->channel); ?>" :user="<?php echo e(Auth::user()); ?>" />
</div>

  <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fil303/Desktop/htdocs/MoreApp/CanadianUniversity/resources/views/chat/chat.blade.php ENDPATH**/ ?>