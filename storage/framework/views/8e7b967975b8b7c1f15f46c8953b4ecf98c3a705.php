<?php $__env->startSection('content'); ?>
    <div class="container py-4">
        <h1>Insert Bluecard</h1>

        <?php echo Form::open(['action' => 'BluecardsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

            <div class="form-group row">
                <div class="col-2">
                    <?php echo e(Form::label('plate', 'Plate')); ?>

                    <?php echo e(Form::text('plate', $plate = Request::get('plate'), ['class'=>'form-control', 'placeholder'=>'BAA'])); ?>

                </div>
                <div class="col-3">
                    <?php echo e(Form::label('number', 'Number')); ?>

                    <?php echo e(Form::text('number', $number = Request::get('number'), ['class'=>'form-control', 'placeholder'=>'1234'])); ?>

                </div>
            </div>
            <div class="form-group">
                <?php echo e(Form::label('exp', 'Expiry Date')); ?>

                <?php echo e(Form::date('exp', '', ['class'=>'form-control', 'placeholder'=>'Expiry Date'])); ?>

            </div>

            <div class="row">
                <div class="col"><p>Example for Bluecard</p></div>
            </div>
            <div class="row">
                <div class="col"><img src="<?php echo e(asset('bluecard-example.jpg')); ?>" alt="Example for Bluecard" style="max-width: 60%"></div>
                <div class="col"><span>Please take note! <br> Image must be clear and you can either scan or take picture of it </span></div>
            </div>
            <br>
        <div class="form-group">
            <?php echo e(Form::file('upload_img')); ?>

        </div>

    <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rxsltn\resources\views/bluecards/create.blade.php ENDPATH**/ ?>