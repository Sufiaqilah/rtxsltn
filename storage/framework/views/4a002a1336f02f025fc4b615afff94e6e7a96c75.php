<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <table class="table table-bordered">
        <tr>
            <th scope="col" colspan="3" class="text-center">User Dashboard</th>
        </tr>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User's Checklist</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Upload Bluecard</td>
            <td class="text-center">
                <?php if(count($user->bluecards)>0): ?>
                    <img src="https://img.icons8.com/office/40/000000/checked-2--v1.png"/>

                    <?php else: ?>
                    <a class="btn btn-primary btn-md" href="/bluecards/create" role="button">Upload Your Bluecard</a>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Upload Insurance</td>
            <td class="text-center">
                <?php if(count($user->insurances)>0): ?>
                    <img src="https://img.icons8.com/office/40/000000/checked-2--v1.png"/>

                    <?php else: ?>
                    <a class="btn btn-primary btn-md" href="/insurances/create" role="button">Upload Your Insurance</a>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Approval From Admin</td>
            <td class="text-center">

                <?php if(count($user->roadtaxes) > 0): ?>
                    <?php $__currentLoopData = $user->roadtaxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roadtax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <h5><?php echo e($roadtax->approval); ?></h5>

                    <?php if($roadtax->approval == 'Rejected'): ?>
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading"></h4>
                            <p><?php echo e($roadtax->reason); ?></p>
                        </div>
                    <?php endif; ?>

                    <?php else: ?>
                    <h5>You haven't submitted anything yet</h5>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>Payment</td>
            <td class="text-center">
                <button class="btn btn-primary">$<?php echo e($roadtax->price); ?></button>
            </td>
        </tr>
    </table>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rxsltn\resources\views/dashboard.blade.php ENDPATH**/ ?>