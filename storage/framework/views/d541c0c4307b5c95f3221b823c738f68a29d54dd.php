

<?php $__env->startSection('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Settings</h3>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Admin Details</h4>
                  <?php if(Session::has('error_message')): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Error: </strong> <?php echo e(Session::get('error_message')); ?>

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php endif; ?>
                  <?php if(Session::has('success_message')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success: </strong> <?php echo e(Session::get('success_message')); ?>

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php endif; ?>
                  <?php if($errors->any()): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <?php endif; ?>
                  <form class="forms-sample" action="<?php echo e(url('admin/update-admin-details')); ?>" method="post" name="updateAdminDetailsForm" id="updateAdminDetailsForm" enctype="multipart/form-data"><?php echo csrf_field(); ?>
                    <div class="form-group">
                      <label>Admin Username/Email</label>
                      <input class="form-control" value="<?php echo e(Auth::guard('admin')->user()->email); ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label>Admin Type</label>
                      <input class="form-control" value="<?php echo e(Auth::guard('admin')->user()->type); ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="admin_name">Name</label>
                      <input type="text" class="form-control" id="admin_name" name="admin_name" value="<?php echo e(Auth::guard('admin')->user()->name); ?>" required>
                      <span id="check_password"></span>
                    </div>
                    <div class="form-group">
                      <label for="admin_mobile">Mobile</label>
                      <input type="text" class="form-control" id="admin_mobile" name="admin_mobile" value="<?php echo e(Auth::guard('admin')->user()->mobile); ?>" required maxlength="11" minlength="11">
                    </div>
                    <div class="form-group">
                      <label for="admin_image">Image</label>
                      <input type="file" class="form-control" id="admin_image" name="admin_image">
                      <?php if(!empty(Auth::guard('admin')->user()->image)): ?>
                        <a target="_blank" href="<?php echo e(url('admin/images/photos/'.Auth::guard('admin')->user()->image)); ?>"><small>View Image</small></a>
                        <input type="hidden" name="current_admin_image" value="<?php echo e(Auth::guard('admin')->user()->image); ?>">
                      <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <?php echo $__env->make('admin.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>       
    <!-- partial -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thefastlane_app\resources\views/admin/settings/update_admin_details.blade.php ENDPATH**/ ?>