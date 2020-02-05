<?php $__env->startSection('title', 'Блог - О нас'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="my-4">О нас <br></h1>
    <hr>
    <?php if(\Auth::check ()): ?>
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a class="page-link" href="#"> Редактировать посты </a></li>
        <li class="page-item"><a class="page-link" href="<?php echo e(route('admin_category')); ?>"> Редактировать категории </a></li>
        <li class="page-item"><a class="page-link" href="#"> Редактировать соц. сети </a></li>
    </ul>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>