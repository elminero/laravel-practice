

<?php $__env->startSection('contents'); ?>

    <h3>Sign In</h3>

    <form method="post" action="/login">

        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label for="name">eMail:</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Sign In</button>
        </div>

        <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>