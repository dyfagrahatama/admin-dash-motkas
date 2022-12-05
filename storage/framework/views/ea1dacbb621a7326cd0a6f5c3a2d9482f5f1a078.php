<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Keranjang</h1>
        </div>
    </div>

    <?php echo $__env->make('admin-lte/flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="row">
        <div class="col-md-12 mb-4">
            <label for="tanggal_pinjam">Tanggal Pinjam</label>
            <input wire:model="tanggal_pinjam" type="date" class="form-control" id="tanggal_pinjam">
            <?php $__errorArgs = ['tanggal_pinjam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-2">
            <?php if($keranjang->tanggal_pinjam): ?>
                <strong>Tanggal Pinjam: <?php echo e($keranjang->tanggal_pinjam); ?></strong>
            <?php else: ?>
                <button wire:click="pinjam(<?php echo e($keranjang->id); ?>)" class="btn btn-sm btn-success">Pinjam</button>
            <?php endif; ?>
            <strong class="float-right">Kode Pinjam : <?php echo e($keranjang->kode_pinjam); ?></strong>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
             <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Produktor</th>
                    <th>Rak</th>
                    <th>Baris</th>
                    <?php if(!$keranjang->tanggal_pinjam): ?>
                        <th></th>
                    <?php endif; ?>   
                </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $keranjang->detail_peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->motor->judul); ?></td>
                            <td><?php echo e($item->motor->produktor); ?></td>
                            <td><?php echo e($item->motor->rak->rak); ?></td>
                            <td><?php echo e($item->motor->rak->baris); ?></td>
                            <td>
                                <?php if(!$keranjang->tanggal_pinjam): ?>
                                    <button wire:click="hapus(<?php echo e($keranjang->id); ?>, <?php echo e($item->id); ?>)" class="btn btn-sm btn-danger">Hapus</button>
                                <?php endif; ?>       
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php if(!$keranjang->tanggal_pinjam): ?>
                 <button wire:click="hapusMasal" class="btn btn-sm btn-danger">Hapus Masal</button>
            <?php endif; ?>        
        </div>
    </div>
</div><?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perpustakaan\resources\views/livewire/peminjam/keranjang.blade.php ENDPATH**/ ?>