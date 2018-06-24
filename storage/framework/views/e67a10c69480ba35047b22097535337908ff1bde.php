

<?php $__env->startSection('contents'); ?>

    <h3>Register</h3>

    <form method="post" action="/register">

        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="name">eMail:</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Password Confirmation:</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Sign Up!</button>
        </div>

        <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>