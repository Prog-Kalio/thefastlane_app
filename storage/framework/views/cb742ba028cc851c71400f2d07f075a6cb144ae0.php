

<?php $__env->startSection('content'); ?>

    <div class="container-fluid bg-light">
        <?php 
            use App\Models\Location;
            $locations = Location::locations();
            // echo "<pre>"; print_r($locations); die;  
        ?>
        <h4>Movie Premier </h4>

        <div class="row flex-row d-flex justify-content-around align-items-center bg-dark text-muted p-4">
            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 card flex text-justify">
                <div>
                    <div class="text-center p-3"><img class="img-fluid" src="<?php echo e(asset('admin/images/movies/'.$location['movie'][0]['movie_image'])); ?>"></div>
                    <h5>Movie name: <?php echo e($location['movie'][0]['movie_name']); ?> </h5>
                    <div><small>Price: <?php echo e($location['movie'][0]['movie_price']); ?> </small></div>
                    <div><small>Duration: <?php echo e($location['movie'][0]['movie_duration']); ?> </small></div>
                    <div><small>Location: <?php echo e($location['name']); ?> </small></div>
                    <div><small>Show Time: <?php echo e($location['movie'][0]['show_time']); ?> </small></div>
                    <div><small>Description: <?php echo e($location['movie'][0]['description']); ?> </small></div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
        <div class="row flex-row d-flex justify-content-around align-items-center bg-dark text-muted p-4">
            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 card flex text-justify">
                <div>
                    <div class="text-center p-3"><img class="img-fluid" src="<?php echo e(asset('admin/images/movies/'.$location['movie'][1]['movie_image'])); ?>"></div>
                    <h5>Movie name: <?php echo e($location['movie'][1]['movie_name']); ?> </h5>
                    <div><small>Price: <?php echo e($location['movie'][1]['movie_price']); ?> </small></div>
                    <div><small>Duration: <?php echo e($location['movie'][1]['movie_duration']); ?> </small></div>
                    <div><small>Location: <?php echo e($location['name']); ?> </small></div>
                    <div><small>Show Time: <?php echo e($location['movie'][1]['show_time']); ?> </small></div>
                    <div><small>Description: <?php echo e($location['movie'][1]['description']); ?> </small></div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div><a href="<?php echo e(url('/admin/login')); ?>"><b><i><small class="text-danger">Admin Login</small></i></b></a></div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.frontlayout.front_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thefastlane_app\resources\views/front/index.blade.php ENDPATH**/ ?>