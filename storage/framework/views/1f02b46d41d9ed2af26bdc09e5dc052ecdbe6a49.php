<?php $__env->startSection('navigation'); ?>
    <?php echo $__env->make('layouts.navUser', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('/css/extra-diet.css')); ?>?<?php echo e(time()); ?>" rel="stylesheet" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(!isset(Auth::user()->email)): ?>
        <script>window.location = "Login";</script>
    <?php endif; ?>
    <div class="jumbotron bg-white rounded-bottom border bg-secondary mx-2">
        <form action="<?php echo e(url('StoreVeggies')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <!-- Three columns of text below the carousel -->
            <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="container text-center">
                <div class="row">
                    <div class="col align-self-center">
                        <?php
                            $data=DB::table('summernotes')->where("item_id","=",9)->value('content'); //diet 2 page data stored in html retrives from summernote table
                        ?>
                        <?php echo $data; ?>

                        <br>
                        <p>Serves of Vegetables: <span id="veggieAmount" class="text-success"></span></p>
                        <input id="slider" type="number" data-slider-id='sliderID' data-slider-min="0"
                               data-slider-max="8"
                               data-slider-step="0.5" data-slider-value="3" name="veggies"/>
                    </div>
                </div>
                <hr>
            </div>
            <!-- /END THE FEATURETTES -->
            <!--/Start NAV Buttons -->
            <div class="av1">
                <button class="btn btn-outline-secondary btn-lg mr-5 " type="button" onclick="location.href = 'Diet1'">
                    Back
                </button>
                <input type="submit" value="Next" class="btn btn-primary btn-lg ">
            </div>
        </form>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!--Slider java script-->
    <script>
        var slider = new Slider('#slider', {
            formatter: function (value) {
                $('#veggieAmount').html(value);

                if (value == 8) {
                    $('#veggieAmount').html("More than 7");
                }
            }
        });

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>