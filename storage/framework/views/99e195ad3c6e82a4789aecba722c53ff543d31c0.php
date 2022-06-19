

<?php $__env->startSection('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Movies</h4>
                       <a href="<?php echo e(url('admin/add-edit-movie')); ?>"><button class="font-weight-light small-text mb-0 btn-success">
                            Add Movies
                        </button>
                        </a>
                        <?php if(Session::has('success_message')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success: </strong> <?php echo e(Session::get('success_message')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php endif; ?>
                        <div class="table-responsive pt-3">
                            <table id="movies" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Location
                                        </th>
                                        <th>
                                            Movie Name
                                        </th>
                                        <th>
                                            Show Time
                                        </th>
                                        <th>
                                            Movie Price
                                        </th>
                                        <th>
                                            Genre
                                        </th>
                                        <th>
                                            Duration
                                        </th>
                                        <th>
                                            Image
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($movie['id']); ?>

                                        </td>
                                        <td>
                                            <?php echo e($movie['location']['name']); ?>

                                        </td>
                                        <td>
                                            <?php echo e($movie['movie_name']); ?>

                                        </td>
                                        <td>
                                            <?php echo e($movie['show_time']); ?>

                                        </td>
                                        <td>
                                            <?php echo e($movie['movie_price']); ?>

                                        </td>
                                        <td>
                                            <?php echo e($movie['genre']); ?>

                                        </td>
                                        <td>
                                            <?php echo e($movie['movie_duration']); ?>

                                        </td>
                                        <td>
                                            <img src="<?php echo e(asset('admin/images/movies/'.$movie['movie_image'])); ?>">
                                        </td>
                                        <td>
                                            <?php if($movie['status']==1): ?>
                                              <a class="updateMovieStatus" id="movie-<?php echo e($movie['id']); ?>" movie_id="<?php echo e($movie['id']); ?>" href="javascript:void(0)"><i style="font-size:25px" class="mdi mdi-bookmark-check" status="Active"></i></a>
                                            <?php else: ?>
                                              <a class="updateMovieStatus" id="movie-<?php echo e($movie['id']); ?>" movie_id="<?php echo e($movie['id']); ?>" href="javascript:void(0)"><i style="font-size:25px" class="mdi mdi-bookmark-outline" status="Inactive"></i></a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                              <a href="<?php echo e(url('admin/add-edit-movie/'.$movie['id'])); ?>"><i style="font-size:25px; color: #215123;" class="mdi mdi-pencil-box"></i></a>
                                              <?php /* <a title="Movie" class="confirmDelete" href="{{ url('admin/delete-movie/'.$movie['id']) }}"><i style="font-size:25px; color: #e0240a;" class="mdi mdi-file-excel-box"></i></a> */ ?>
                                              <a href="javascript:void(0)" class="confirmDelete" module="movie" moduleid="<?php echo e($movie['id']); ?>"><i style="font-size:25px; color: #e0240a;" class="mdi mdi-file-excel-box"></i></a>
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
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thefastlane_app\resources\views/admin/movies/movies.blade.php ENDPATH**/ ?>