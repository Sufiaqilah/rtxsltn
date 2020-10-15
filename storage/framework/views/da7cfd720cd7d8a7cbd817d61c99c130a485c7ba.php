<?php $__env->startSection('content'); ?>
    <div class="container py-4">
        <div class="card text-center">
            <h5 class="card-header">Select Digital Bluecard</h5>
            <div class="card-body">
                <p class="card-text">
                    <?php echo Form::open(['action' => 'RoadtaxController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

                    <div class="form-group row">
                        <label class="col-md-6" for="selectedBluecard">Your Digital Bluecard</label>
                        <select class="form-control col-md-3" name="selectedBluecard">
                            <?php if($user->bluecards): ?>
                                <?php $__currentLoopData = $user->bluecards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bluecard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option class="dropdown-item"  value="<?php echo e($bluecard->id); ?>"><?php echo e($bluecard->plate); ?><?php echo e($bluecard->number); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php else: ?>
                                <p class="card-text">You don't have any Digital Bluecard</p>
                            <?php endif; ?>
                        </select>
                    </div>
                </p>
            </div>
        </div>

            <br><br>

        <div class="card text-center">
            <h5 class="card-header">Select Insurance</h5>
            <div class="card-body">
                <p class="card-text">
                    <div class="form-group row">
                        <label class="col-md-6" for="selectedInsurance">Your Insurance</label>
                        <select class="form-control col-md-3" name="selectedInsurance">
                            <?php if($user->insurances): ?>
                                <?php $__currentLoopData = $user->insurances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insurance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option class="dropdown-item" value="<?php echo e($insurance->id); ?>"><?php echo e($insurance->plate_number); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php else: ?>
                                <p class="card-text">You don't have any Insurance</p>
                            <?php endif; ?>
                        </select>
                    </div>
                </p>
            </div>
        </div>
        <br>
        <div class="text-center">
            <?php echo e(Form::submit('Submit', ['class'=>'btn-lg btn-primary'])); ?>

            <?php echo Form::close(); ?>

        </div>

    </div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f8837c02901b9207693b03b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rxsltn\resources\views/roadtax/show.blade.php ENDPATH**/ ?>