

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('peminjam.motor', [])->html();
} elseif ($_instance->childHasBeenRendered('iCuQ02q')) {
    $componentId = $_instance->getRenderedChildComponentId('iCuQ02q');
    $componentTag = $_instance->getRenderedChildComponentTagName('iCuQ02q');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iCuQ02q');
} else {
    $response = \Livewire\Livewire::mount('peminjam.motor', []);
    $html = $response->html();
    $_instance->logRenderedChild('iCuQ02q', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:peminjam.motor>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perp_backup\laravel8_perpustakaan\resources\views/peminjam/motor/index.blade.php ENDPATH**/ ?>