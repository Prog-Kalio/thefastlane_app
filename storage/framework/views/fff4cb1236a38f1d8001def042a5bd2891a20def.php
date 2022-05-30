

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
                  <h4 class="card-title">Update Admin Password</h4>
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
                  <form class="forms-sample" action="<?php echo e(url('admin/update-admin-password')); ?>" method="post" name="updateAdminPasswordForm" id="updateAdminPasswordForm"><?php echo csrf_field(); ?>
                    <div class="form-group">
                      <label>Admin Username/Email</label>
                      <input class="form-control" value="<?php echo e($adminDetails['email']); ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label>Admin Type</label>
                      <input class="form-control" value="<?php echo e($adminDetails['type']); ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="current_password">Current Password</label>
                      <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Enter Current Password" required>
                      <span id="check_password"></span>
                    </div>
                    <div class="form-group">
                      <label for="new_password">New Password</label>
                      <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Enter New Password" required>
                    </div>
                    <div class="form-group">
                      <label for="confirm_password">Confirm Password</label>
                      <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
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
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thefastlane_app\resources\views/admin/settings/update_admin_password.blade.php ENDPATH**/ ?>