<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            <?php $__currentLoopData = $tanggal_pengembalian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($item); ?>,
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ],
        datasets: [{
            label: 'Selesai Dipinjam',
            data: [
                <?php $__currentLoopData = $count; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($item); ?>,
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ],
            backgroundColor: '#f012be',
            borderWidth: 1
        }]
    },
    options: {
        events: ['mouseout', 'touchstart', 'touchmove'],
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

Livewire.on('ubahBulanTahun', (count, tanggal_pengembalian) => {
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: tanggal_pengembalian,
            datasets: [{
                label: 'Selesai Dipinjam',
                data: count,
                backgroundColor: '#f012be',
                borderWidth: 1
            }]
        },
        options: {
            events: ['mouseout', 'touchstart', 'touchmove'],
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
})
</script>
<?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perpustakaan\resources\views/livewire/petugas/chart-script.blade.php ENDPATH**/ ?>