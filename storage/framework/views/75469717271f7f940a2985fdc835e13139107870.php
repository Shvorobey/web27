<?php $__env->startSection('title', 'Блог - Контакты'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="my-4">О нас <br> <hr>

        <?php if(isset($page)): ?>
            <small><?php echo $page->text; ?></small>
        <?php else: ?>
            <p>Мы работаем над нашим описанием</p>
        <?php endif; ?>

    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('advertising'); ?>
    <!-- Advertising Widget -->
    <div class="card my-4">
        <h5 class="card-header">Мы в соц. сетях</h5>

        <?php $network = app('App\Social_network'); ?>
        <div>

            Категории: <br> <?php echo e($network->show_social_network()); ?>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>