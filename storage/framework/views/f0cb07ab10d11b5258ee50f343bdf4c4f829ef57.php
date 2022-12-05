<div class="row">
    <div class="col-12">

    <?php echo $__env->make('admin-lte/flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="btn-group mb-3">
        <button wire:click="format" class="btn btn-sm bg-teal mr-2">Semua</button>
        <button wire:click="belumDipinjam" class="btn btn-sm bg-indigo mr-2">Belum Dipinjam</button>
        <button wire:click="sedangDipinjam" class="btn btn-sm bg-olive mr-2">Sedang Dipinjam</button>
        <button wire:click="selesaiDipinjam" class="btn btn-sm bg-fuchsia mr-2">Selesai Dipinjam</button>
    </div>

    <div class="card">
        <div class="card-header">
        <span wire:click="create" class="btn btn-sm btn-primary">Tambah</span>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                <input wire:model="search" type="search" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                    </button>
                </div>
                </div>
            </div>
            </div>
            <!-- /.card-header -->
            <?php if($transaksi->isNotEmpty()): ?>
            <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th width="10%">No</th>
                    <th>Kode Pinjam</th>
                    <th>Motor</th>
                    <th>Lokasi</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Denda</th>
                    <th>Status</th>
                   <?php if(!$selesai_dipinjam): ?>
                        <th width="15%">Aksi</th>
                   <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->kode_pinjam); ?></td>
                        <td>
                            <ul>
                                <?php $__currentLoopData = $item->detail_peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail_peminjaman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($detail_peminjaman->motor->judul); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </td>
                       <td>
                            <ul>
                                <?php $__currentLoopData = $item->detail_peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail_peminjaman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($detail_peminjaman->motor->rak->lokasi); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </td>
                        <td><?php echo e($item->tanggal_pinjam); ?></td>
                        <td><?php echo e($item->tanggal_kembali); ?></td>
                        <td><?php echo e($item->denda); ?></td>
                        <td>
                            <?php if($item->status == 1): ?>
                                <span class="badge bg-indigo">Belum Dipinjam</span>
                            <?php elseif($item->status == 2): ?>
                                <span class="badge bg-olive">Sedang Dipinjam</span>
                            <?php else: ?>
                                <span class="badge bg-fuchsia">Selesai Dipinjam</span>
                            <?php endif; ?>
                        </td>
                       <?php if(!$selesai_dipinjam): ?>
                            <td>
                                <?php if($item->status == 1): ?>
                                    <span wire:click="pinjam(<?php echo e($item->id); ?>)" class="btn btn-sm btn-success mr-2">Pinjam</span>
                                <?php elseif($item->status == 2): ?>
                                    <span wire:click="kembali(<?php echo e($item->id); ?>)" class="btn btn-sm btn-primary mr-2">Kembali</span>
                                <?php endif; ?>
                            </td>
                       <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
      <?php endif; ?>
    </div>
    <!-- /.card -->

     <div class="row justify-content-center">
        <?php echo e($transaksi->links()); ?>

    </div>

    <?php if($transaksi->isEmpty()): ?>
        <div class="card">
            <div class="card-body">
                <div class="alert alert-warning">
                    Anda tidak memiliki data
                </div>
            </div>
        </div>
    <?php endif; ?>

    </div>
</div>
<!-- /.row --><?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perpustakaan\resources\views/livewire/petugas/transaksi.blade.php ENDPATH**/ ?>