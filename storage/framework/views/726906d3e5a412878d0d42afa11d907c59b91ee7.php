        <?php $__env->startSection('title', 'Блог - Главная'); ?>
        <?php $__env->startSection('content'); ?>
            <div class="col-md-8">
                <h1 class="my-4" style="color:#C71585">Добро пожаловать<br>
                    <small>Пожалуй, самый лучший в мире блог</small>
                </h1>



                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-4">
                        <img class="card-img-top" src="<?php echo e($post->img); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title" style="color:#008000"><?php echo e($post->title); ?></h2>
                            <p class="card-text"><?php echo e(mb_substr($post->body,0 , 200)); ?> ...</p>
                            <a href="<?php echo e(route('single_post', $post->id)); ?>" class="btn btn-primary">Читать дальше &rarr;</a>
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <ul class="pagination justify-content-center mb-4">
                    <?php if($posts->currentPage()!=1): ?>
                        <li class="page-item"><a class="page-link" href="?page=1"> Первая страница </a></li>
                        <li class="page-item"><a class="page-link" href="<?php echo e($posts->previousPageUrl()); ?>"> < </a></li>
                    <?php endif; ?>
                    <?php if($posts->count ()>0): ?>
                        <?php for($count=1; $count<=$posts->lastPage(); $count++): ?>
                            <?php if($count>$posts->currentPage()-3 and $count<$posts->currentPage()+3): ?>
                                <li class="page-item <?php if($count==$posts->currentPage()): ?> active <?php endif; ?>">
                                    <a class="page-link" href="?page=<?php echo e($count); ?>"> <?php echo e($count); ?> </a></li>
                            <?php endif; ?>
                        <?php endfor; ?>
                    <?php else: ?>
                        <h1><font size="15" color="aqua" face="Arial"> Мы работаем над тем, чтобы здесь что-то появилось
                                ;) </font></h1>
                    <?php endif; ?>
                    <?php if($posts->currentPage() != $posts->lastPage()): ?>
                        <li class="page-item"><a class="page-link" href="<?php echo e($posts->nextPageUrl()); ?>"> > </a></li>
                        <li class="page-item"><a class="page-link" href="?page=<?php echo e($posts->lastPage()); ?>"> Последняя страница </a>
                        </li>
                    <?php endif; ?>
                </ul>
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