<?php $__env->startSection('title', 'Блог - Главная'); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-8">
        <h1 class="my-4" style="color:#C71585">Добро пожаловать<br>
            <small>Пожалуй, самый лучший в мире блог</small>
        </h1>

        <?php echo $__env->make('load', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="card mb-4">
                <img class="card-img-top" src="<?php echo e($post->img); ?>" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title" style="color:#008000"><?php echo e($post->title); ?></h2>
                    <p class="card-text"><?php echo e($post->body); ?> ...</p>
                </div>
                <div class="card-footer text-muted">
                    Создан: <?php echo e($post->created_at); ?> <br>
                    Автор: <a href="<?php echo e(route('posts_by_autor', $post->author->key)); ?>"><?php echo e($post->author->name); ?></a>
                    Категории:
                    <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <a href="<?php echo e(route('posts_by_category', $category->key)); ?>"><?php echo e($category->categories); ?>   </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
    </div>
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