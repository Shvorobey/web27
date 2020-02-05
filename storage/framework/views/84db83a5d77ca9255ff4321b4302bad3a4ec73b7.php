<?php $__env->startSection('title', 'Посты категории'); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-8">
        <h1 class="my-4" style="color:#800080">Все посты категории <u style="color:#ff0000"> <?php echo e($category->categories); ?> </u>



        </h1>

    <?php $__currentLoopData = $category->post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Blog Post -->
            <div class="card mb-4">
                <img class="card-img-top" src="<?php echo e($post->img); ?>" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title" style="color:#006400"><?php echo e($post->title); ?></h2>
                    <p class="card-text"><?php echo e(mb_substr($post->body,0 , 200)); ?> ...</p>
                    <a href="<?php echo e(route('single_post', $post->id)); ?>" class="btn btn-primary">Читать дальше &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Создан: <?php echo e($post->created_at); ?>  <br>
                    Автор: <a href="<?php echo e(route('posts_by_autor', $post->author->key)); ?>"> <?php echo e($post->author->name); ?> </a>
                    Категории:
                    <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('posts_by_category', $category->key)); ?>"> <?php echo e($category->categories); ?>   </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
                <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
                <a class="page-link" href="#">Newer &rarr;</a>
            </li>
        </ul>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('categories'); ?>
    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Категории</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">

                        <?php $category = app('App\Category_for_sidebar'); ?>

                        <div>

                            <?php echo e($category->show_category()); ?> <br>

                        </div>

                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('autors'); ?>
    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Популярные авторы</h5>

















    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('search'); ?>
    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Поиск</h5>
        <div class="card-body">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Найти">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Искать</button>
                </span>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('advertising'); ?>
    <!-- Advertising Widget -->
    <div class="card my-4">
        <h5 class="card-header">Рекламный блок</h5>
        <div class="card-body" >
            <strong style="color:#ff0000"> Покупайте наших слонов </strong>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>