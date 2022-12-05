
<?php $__env->startSection('title', 'Penerbit'); ?>
<?php $__env->startSection('active-penerbit', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.penerbit', [])->html();
} elseif ($_instance->childHasBeenRendered('c0jAAUO')) {
    $componentId = $_instance->getRenderedChildComponentId('c0jAAUO');
    $componentTag = $_instance->getRenderedChildComponentTagName('c0jAAUO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('c0jAAUO');
} else {
    $response = \Livewire\Livewire::mount('petugas.penerbit', []);
    $html = $response->html();
    $_instance->logRenderedChild('c0jAAUO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.penerbit>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perpustakaan\resources\views/petugas/penerbit/index.blade.php ENDPATH**/ ?>