

<?php $__env->startSection('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Insertions</h3>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><?php echo e($title); ?></h4>
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
                  <form class="forms-sample" <?php if(empty($location['id'])): ?> action="<?php echo e(url('admin/add-edit-location')); ?>" <?php else: ?> action="<?php echo e(url('admin/add-edit-location/'.$location['id'])); ?>" <?php endif; ?> method="post" name="updateLocationForm" id="updateLocationForm" enctype="multipart/form-data"><?php echo csrf_field(); ?>
                    <div class="form-group">
                      <label for="location_name">Location Name</label>
                      <input type="text" class="form-control" id="location_name" name="location_name" placeholder="Location Name" <?php if(!empty($location['id'])): ?> value="<?php echo e($location['name']); ?>" <?php else: ?> value="<?php echo e(old('location_name')); ?>" <?php endif; ?> required>
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
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thefastlane_app\resources\views/admin/locations/add_edit_location.blade.php ENDPATH**/ ?>