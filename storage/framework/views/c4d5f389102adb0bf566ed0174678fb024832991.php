<?php $__env->startSection('title', 'Блог - Главная'); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-8">
        <h1 class="my-4" style="color:#C71585">Добро пожаловать<br>
            <small>Пожалуй, самый лучший в мире блог</small>
        </h1>

        

        <a href=" <?php echo e(route('add_post_get')); ?> "> Добавить пост </a>
        <div class="card mb-4">
            <h2>Удаление постов</h2>
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <a ></a>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($post->id); ?></th>
                        <td><?php echo e($post->title); ?></td>
                        <td>
                            <form action="/admin/edit_post/<?php echo e($post->id); ?>" method="get">


                                <button type="submit" class="btn btn-outline-danger">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('delete')); ?>

                                <input type="hidden" name="id" value="<?php echo e($post->id); ?>">
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
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