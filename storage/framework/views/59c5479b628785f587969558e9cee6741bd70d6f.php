<?php $__env->startSection('title', 'Блог - Главная'); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-8">
        <h1 class="my-4" style="color:#C71585">Добро пожаловать<br>
            <small>Пожалуй, самый лучший в мире блог</small>
        </h1>
    </div>


    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

<form action="add_post" method="post" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <h1>Добавить пост</h1>
    <input type="text" placeholder="author_name" name="author_name" value="<?php echo e(old('author_name')); ?>"><br>
    <input type="text" placeholder="title" name="title" value="<?php echo e(old('title')); ?>"><br>
    <textarea placeholder="body" name="body"><?php echo e(old('body')); ?></textarea><br>
    <input type="file" name="image"><br>
    <input type="submit" value="Сохранить">
</form>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('categories'); ?>
    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Категории:</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <?php $categories = app('App\Category_for_sidebar'); ?>
                        <div>
                            <?php echo e($categories->show_category()); ?><br>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('autors'); ?>
    <?php if(Auth::check()): ?>
        <!-- Categories Widget -->
        <div class="card my-4">
            <h5 class="card-header">Мы в соц. сетях</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <?php $networks = app('App\Show_social_networks'); ?>
                            <div>
                                <?php echo e($networks->show_social_network()); ?><br>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('search'); ?>
    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Курсы валют</h5>
        <div class="card-body">
            <?php $currency = app('App\Get_currency'); ?>
            <?php echo e($currency->show_currency()); ?><br>
        </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('advertising'); ?>
        <!-- Advertising Widget -->
            <div class="card my-4">
                <h5 class="card-header">Рекламный блок</h5>
                <div class="card-body">
                    <strong style="color:#ff0000"> Покупайте наших слонов </strong>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>