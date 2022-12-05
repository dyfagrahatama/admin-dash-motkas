<div class="row">
    <div class="col-12">

    <?php echo $__env->make('admin-lte/flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('petugas/rak/create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('petugas/rak/edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('petugas/rak/delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="card">
        <div class="card-header">
        <span wire:click="create" class="btn btn-sm btn-primary">Tambah</span>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                <select wire:model="search" class="form-control float-right" id="exampleFormControlSelect1">
                    <?php $__currentLoopData = $count; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->rak); ?>"><?php echo e($item->rak); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <div class="input-group-append">
                    <button wire:click="formatSearch" type="submit" class="btn btn-default">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
                </div>
            </div>
            </div>
            <!-- /.card-header -->
            <?php if($raks->isNotEmpty()): ?>
            <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th width="10%">No</th>
                    <th>Rak</th>
                    <th>Baris</th>
                    <th>Kategori</th>
                    <th width="15%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $raks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->rak); ?></td>
                        <td><?php echo e($item->baris); ?></td>
                        <td><?php echo e($item->kategori->nama); ?></td>
                        <td>
                            <div class="btn-group">
                                <span wire:click="edit(<?php echo e($item->id); ?>)" class="btn btn-sm btn-primary mr-2">Edit</span>
                                <span wire:click="delete(<?php echo e($item ->id); ?>)" class="btn btn-sm btn-danger">Hapus</span>
                            </div>
                        </td>
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
        <?php echo e($raks->links()); ?>

    </div>

    <?php if($raks->isEmpty()): ?>
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
<!-- /.row --><?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perpustakaan\resources\views/livewire/petugas/rak.blade.php ENDPATH**/ ?>