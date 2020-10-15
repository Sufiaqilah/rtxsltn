<?php $__env->startSection('content'); ?>
    <div class="container py-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Your Profile</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">User Name</th>
                    <td><?php echo e(Auth::user()->username); ?></td>
                </tr>
                <tr>
                    <th scope="row">Full Name</th>
                    <td><?php echo e(ucwords(Auth::user()->fullname)); ?></td>
                </tr>
                <tr>
                    <th scope="row">Ic - Number</th>
                    <td><?php echo e(Auth::user()->ic); ?></td>
                </tr>
                <tr>
                    <th scope="row">Phone Number</th>
                    <td><?php echo e(Auth::user()->phone_number); ?></td>
                </tr>
                <tr>
                    <th scope="row">Address</th>
                    <td><?php echo e(Auth::user()->address); ?></td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td><?php echo e(ucfirst(Auth::user()->email)); ?></td>
                </tr>
            </tbody>
        </table>

        <a class="btn btn-primary" href="<?php echo e(route('profiles.edit', Auth::user()->ic)); ?>" role="button">Edit Profile</a>
        <br>

        <?php if(count($user->bluecards) > 0): ?>
            <?php if(auth()->user()->ic == $user->ic): ?>
            <br>
                <?php $__currentLoopData = $user->bluecards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bluecard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="/bluecards/<?php echo e($bluecard->id); ?>" class="btn btn-secondary"><?php echo e($bluecard->plate_number); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            <?php else: ?>
            <br>
            <h4>You haven't upload any Bluecard yet</h4>
        <?php endif; ?>

        <br><br>
        <a class="btn btn-primary" href="/bluecards/create" role="button">Upload Bluecard</a>

        <hr>

            <?php if(count($user->insurances) > 0): ?>
                <?php if(auth()->user()->ic == $user->ic): ?>
                <br>
                    <?php $__currentLoopData = $user->insurances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insurance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="/insurances/<?php echo e($insurance->id); ?>" class="btn btn-secondary"><?php echo e($insurance->plate_number); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <?php else: ?>
                    <br>
                    <h4>No Insurance found</h4>
            <?php endif; ?>

        <br><br>
        <a class="btn btn-primary" href="/insurances/create" role="button">Upload Insurance</a>
        <hr>

        <div class="visible-print text-center">
            <?php echo QrCode::size(100)->generate(Request::url());; ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rxsltn\resources\views/profiles/show.blade.php ENDPATH**/ ?>