
<?php $__env->startSection('title', 'Chart'); ?>
<?php $__env->startSection('active-chart', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.chart', [])->html();
} elseif ($_instance->childHasBeenRendered('zet5fuJ')) {
    $componentId = $_instance->getRenderedChildComponentId('zet5fuJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('zet5fuJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zet5fuJ');
} else {
    $response = \Livewire\Livewire::mount('petugas.chart', []);
    $html = $response->html();
    $_instance->logRenderedChild('zet5fuJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.chart>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('admin-lte/script/chart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('chart-script'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.chart-script', [])->html();
} elseif ($_instance->childHasBeenRendered('cNgV3zH')) {
    $componentId = $_instance->getRenderedChildComponentId('cNgV3zH');
    $componentTag = $_instance->getRenderedChildComponentTagName('cNgV3zH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cNgV3zH');
} else {
    $response = \Livewire\Livewire::mount('petugas.chart-script', []);
    $html = $response->html();
    $_instance->logRenderedChild('cNgV3zH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.chart-script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perpustakaan\resources\views/petugas/chart/index.blade.php ENDPATH**/ ?>