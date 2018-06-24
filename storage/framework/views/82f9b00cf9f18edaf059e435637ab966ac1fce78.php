

<?php $__env->startSection('features'); ?>
    <?php echo $__env->make('layouts.top-featured', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row mb-2">

        <?php echo $__env->make('layouts.left-featured', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->make('layouts.right-featured', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="blog-post">
        <h2 class="blog-post-title"><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h2>
        <p class="blog-post-meta"><?php echo e($post->created_at->diffForHumans()); ?> by <a href="#"><?php echo e($post->user->name); ?></a></p>

        <?php echo e($post->body); ?>


    </div><!-- /.blog-post -->

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
</nav>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>