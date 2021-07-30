<?php $__env->startSection('content'); ?>

            <div class=" grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="ModalLabel">Update Profile</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="<?php echo e(route('profile')); ?>" method="post" enctype="multipart/form-data">
                          	<?php echo csrf_field(); ?>


                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">First Name:</label>
                              <input value="<?php echo e(Auth::user()->fname); ?>" type="text" class="form-control" id="recipient-name" name="First_Name">
                            </div>


                          	
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Last Name:</label>
                              <input value="<?php echo e(Auth::user()->lname); ?>" type="text" class="form-control" id="recipient-name" name="Last_Name">
                            </div>



                          	
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Email:</label>
                              <input value="<?php echo e(Auth::user()->email); ?>" type="text" class="form-control" id="recipient-name" name="Email">
                            </div>



                          	
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Phone:</label>
                              <input value="<?php echo e(Auth::user()->phone); ?>" type="text" class="form-control" id="recipient-name" name="Mobile_Number">
                            </div>


                
			                <div class="form-group">
			                  <label>Gender</label>
			                  <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="Gender">
			                    <option <?php Auth::user()->gender == 'Male' ? 'selected' : ''; ?> value="Male">Male</option>
			                    <option <?php Auth::user()->gender == 'Female' ? 'selected' : ''; ?> value="Female">Female</option>
			                  </select>
			                </div> 


                          	
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Date of Birth:</label>
                              <input value="<?php echo e(Auth::user()->DateOfBirth); ?>" type="text" class="form-control" id="recipient-name" name="Date">
                            </div>


			               	<div class="form-group">
			                    <label>Profile Picture</label>
			                    <input type="file" name="Image" class="file-upload-default">
			                    <div class="input-group col-xs-12">
			                    <input type="text" class="form-control file-upload-info" disabled=""placeholder="Upload Image">
			                    <span class="input-group-append">
			                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
			                    </span>
			                    </div>
			                 	<?php $__errorArgs = ['Image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								    <div class="alert alert-danger"><?php echo e($message); ?></div>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			                 </div>
  						<div class="modal-footer">
                          <input type="submit" value="Send message" class="btn btn-success">
                          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                          </form>
                        </div>
                      
                      </div>
                    </div>
                  </div>



              
                <div class="card-body text-center">
                  <div class="mb-4">
                    <img src="<?php echo e(asset('/profile_pic/'.Auth::user()->img)); ?>" class="img-lg rounded-circle mb-2" alt="profile image">
                    <h4><?php echo e(Auth::user()->name); ?></h4>
                    <p class="text-muted mb-0"><?php echo e(Auth::user()->username); ?></p>
                  </div>

                  <div>
                    Email : <?php echo e(Auth::user()->email); ?>

                  </div>


                  <div>
                    Mobile Number : <?php echo e(Auth::user()->phone); ?>

                  </div>

                  
                  <div>
                    Gender : <?php echo e(Auth::user()->gender); ?>

                  </div>

                  
                  <div>
                    Date of Birth : <?php echo e(Auth::user()->DateOfBirth); ?>

                  </div>

                  
                  
                  <button class="btn btn-info btn-sm mt-3 mb-4" data-toggle="modal" data-target="#exampleModal-4" data-whatever="@mdo">Edit</button>
                  
                </div>
            

                  
                </div>
              </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fil303/Desktop/htdocs/MoreApp/CanadianUniversity/resources/views/auth/profile.blade.php ENDPATH**/ ?>