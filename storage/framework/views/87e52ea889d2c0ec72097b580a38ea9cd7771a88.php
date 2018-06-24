<div class="p-3">
    <h4 class="font-italic">Archives</h4>
    <ol class="list-unstyled mb-0">

        <?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <!--<li><a href="?month=$archive->month}}&year=$archive->year}}">date("F", mktime(0, 0, 0, $archive->month , 10)) }} $archive->year}}</a></li>-->

            <li><a href="/?month=<?php echo e($archive->month); ?>&year=<?php echo e($archive->year); ?>"><?php echo e($archive->month); ?> <?php echo e($archive->year); ?></a></li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ol>
</div>