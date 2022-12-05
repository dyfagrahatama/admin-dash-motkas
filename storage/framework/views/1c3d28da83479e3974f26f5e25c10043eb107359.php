
<?php $__env->startSection('title', 'Kategori'); ?>
<?php $__env->startSection('active-kategori', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.kategori', [])->html();
} elseif ($_instance->childHasBeenRendered('1nNMNwa')) {
    $componentId = $_instance->getRenderedChildComponentId('1nNMNwa');
    $componentTag = $_instance->getRenderedChildComponentTagName('1nNMNwa');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1nNMNwa');
} else {
    $response = \Livewire\Livewire::mount('petugas.kategori', []);
    $html = $response->html();
    $_instance->logRenderedChild('1nNMNwa', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.kategori>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perpustakaan\resources\views/petugas/kategori/index.blade.php ENDPATH**/ ?>