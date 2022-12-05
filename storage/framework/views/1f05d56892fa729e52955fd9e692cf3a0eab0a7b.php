
<?php $__env->startSection('title', 'Rak'); ?>
<?php $__env->startSection('active-rak', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.rak', [])->html();
} elseif ($_instance->childHasBeenRendered('umGxUFw')) {
    $componentId = $_instance->getRenderedChildComponentId('umGxUFw');
    $componentTag = $_instance->getRenderedChildComponentTagName('umGxUFw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('umGxUFw');
} else {
    $response = \Livewire\Livewire::mount('petugas.rak', []);
    $html = $response->html();
    $_instance->logRenderedChild('umGxUFw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.rak>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perpustakaan\resources\views/petugas/rak/index.blade.php ENDPATH**/ ?>