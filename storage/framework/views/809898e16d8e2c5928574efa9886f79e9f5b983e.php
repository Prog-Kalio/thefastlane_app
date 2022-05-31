

<?php $__env->startSection('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo e($title); ?></h4>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            Admin ID
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Type
                                        </th>
                                        <th>
                                            Mobile
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Image
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($admin['id']); ?>

                                        </td>
                                        <td>
                                            <?php echo e($admin['name']); ?>

                                        </td>
                                        <td>
                                            <?php echo e($admin['type']); ?>

                                        </td>
                                        <td>
                                            <?php echo e($admin['mobile']); ?>

                                        </td>
                                        <td>
                                            <?php echo e($admin['email']); ?>

                                        </td>
                                        <td>
                                            <img src="<?php echo e(asset('admin/images/photos/'.$admin['image'])); ?>">
                                        </td>
                                        <td>
                                            <?php if($admin['status']==1): ?>
                                              <a class="updateAdminStatus" id="admin-<?php echo e($admin['id']); ?>" admin_id="<?php echo e($admin['id']); ?>" href="javascript:void(0)"><i style="font-size:25px" class="mdi mdi-bookmark-check" status="Active"></i></a>
                                            <?php else: ?>
                                              <a class="updateAdminStatus" id="admin-<?php echo e($admin['id']); ?>" admin_id="<?php echo e($admin['id']); ?>" href="javascript:void(0)"><i style="font-size:25px" class="mdi mdi-bookmark-outline" status="Inactive"></i></a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <?php echo $__env->make('admin.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
    <!-- partial -->
</div>
<!-- main-panel ends -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thefastlane_app\resources\views/admin/admins/admins.blade.php ENDPATH**/ ?>