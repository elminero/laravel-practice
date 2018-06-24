

<?php $__env->startSection('contents'); ?>

        <div class="blog-post">
            <h2 class="blog-post-title"><?php echo e($post->title); ?></h2>
            <p class="blog-post-meta"><?php echo e($post->created_at->diffForHumans()); ?> by <a href="#">Rob</a></p>

            <?php echo e($post->body); ?>


        </div><!-- /.blog-post -->

        <form method="post" action="/posts/<?php echo e($post->id); ?>/comment">

            <?php echo e(csrf_field()); ?>


            <div class="form-group">
                <label for="body">Comment</label>
                <textarea id="body" class="form-control" name="body"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary form-control">Add Comment</button>
            </div>

            <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </form>


        <div class="comments">
            <ul class="list-group">
                <?php $__currentLoopData = $post->comments->reverse(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group">
                        <strong>
                            <?php echo e($comment->created_at->diffForHumans()); ?>: &nbsp; <?php echo e($comment->user->name); ?>

                        </strong>
                        <?php echo e($comment->body); ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>