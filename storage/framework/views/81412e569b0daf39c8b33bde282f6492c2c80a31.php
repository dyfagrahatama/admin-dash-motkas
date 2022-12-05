

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('peminjam.keranjang', [])->html();
} elseif ($_instance->childHasBeenRendered('1snT5bb')) {
    $componentId = $_instance->getRenderedChildComponentId('1snT5bb');
    $componentTag = $_instance->getRenderedChildComponentTagName('1snT5bb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1snT5bb');
} else {
    $response = \Livewire\Livewire::mount('peminjam.keranjang', []);
    $html = $response->html();
    $_instance->logRenderedChild('1snT5bb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:peminjam.keranjang>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perpustakaan\resources\views/peminjam/keranjang/index.blade.php ENDPATH**/ ?>