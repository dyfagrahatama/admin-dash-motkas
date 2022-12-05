
<?php $__env->startSection('title', 'User'); ?>
<?php $__env->startSection('active-user', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.user', [])->html();
} elseif ($_instance->childHasBeenRendered('lsqMVAw')) {
    $componentId = $_instance->getRenderedChildComponentId('lsqMVAw');
    $componentTag = $_instance->getRenderedChildComponentTagName('lsqMVAw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('lsqMVAw');
} else {
    $response = \Livewire\Livewire::mount('admin.user', []);
    $html = $response->html();
    $_instance->logRenderedChild('lsqMVAw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:admin.user>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perpustakaan\resources\views/admin/user/index.blade.php ENDPATH**/ ?>