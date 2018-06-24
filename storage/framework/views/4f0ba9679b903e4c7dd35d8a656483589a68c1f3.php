

<?php $__env->startSection('contents'); ?>

    <form action="/posts/create" method="post">

        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="body" class="form-control" name="body"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Post It !</button>
        </div>

        <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </form>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>