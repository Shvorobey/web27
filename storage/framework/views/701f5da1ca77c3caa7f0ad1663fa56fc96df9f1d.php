<?php $__env->startSection('title', 'Блог - О нас'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="my-4">О нас <br></h1>
    <hr>
    <?php if(\Auth::check ()): ?>
        <ul class="pagination justify-content-center mb-4">
            <li class="page-item"><a class="page-link" href="#"> Редактировать посты </a></li>
            <li class="page-item"><a class="page-link" href="#"> Редактировать категории </a></li>
            <li class="page-item"><a class="page-link" href="#"> Редактировать соц. сети </a></li>
        </ul>
        <form align="center">
            <input type="text" name="key" > Ключ
            <input type="text" name="caterories" > Название
            <input type="submit" value="Добавить">
        </form>
        <hr>
        <form align="center">
            <table bordercolor="blue" align="center">
                <tr>
                    <th>Id</th>
                    <th>Ключ</th>
                    <th>Название</th>
                    <th></th>
                </tr>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caregory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($caregory->id); ?> </td>
                        <td><input type="text" value="<?php echo e($caregory->key); ?>"></td>
                        <td><input type="text" value="<?php echo e($caregory->categories); ?>"></td>
                        <td><input type="button" value="Delete"></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <input type="submit" value="Save all">
        </form>
    <?php endif; ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>