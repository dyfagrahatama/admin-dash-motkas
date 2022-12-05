

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('peminjam.motor', [])->html();
} elseif ($_instance->childHasBeenRendered('5rpy7Px')) {
    $componentId = $_instance->getRenderedChildComponentId('5rpy7Px');
    $componentTag = $_instance->getRenderedChildComponentTagName('5rpy7Px');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5rpy7Px');
} else {
    $response = \Livewire\Livewire::mount('peminjam.motor', []);
    $html = $response->html();
    $_instance->logRenderedChild('5rpy7Px', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:peminjam.motor>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perpustakaan\resources\views/peminjam/motor/index.blade.php ENDPATH**/ ?>