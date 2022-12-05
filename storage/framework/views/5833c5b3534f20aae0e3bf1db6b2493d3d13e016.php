<div class="row">
    <div class="col-12">

    <?php echo $__env->make('admin-lte/flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('admin/user/create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="btn-group mb-3">
        <button wire:click="format" class="btn btn-sm bg-teal mr-2">Semua</button>
        <button wire:click="admin" class="btn btn-sm bg-indigo mr-2">Admin</button>
        <button wire:click="petugas" class="btn btn-sm bg-olive mr-2">Petugas</button>
        <button wire:click="peminjam" class="btn btn-sm bg-fuchsia mr-2">Peminjam</button>
    </div>

    <div class="card">
        <div class="card-header">
            <?php if($admin || $petugas || $peminjam): ?>
                 <span wire:click="create" class="btn btn-sm btn-primary">Tambah</span>
            <?php endif; ?>

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
            <?php if($user->isNotEmpty()): ?>
            <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th width="10%">No</th>
                    <th>Nama</th>
                    <th>Role</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td>
                            <?php if($item->roles[0]->name == 'admin'): ?>
                                <span class="badge bg-indigo">Admin</span>
                            <?php elseif($item->roles[0]->name == 'petugas'): ?>
                                <span class="badge bg-olive">Petugas</span>
                            <?php else: ?>
                                <span class="badge bg-fuchsia">Peminjam</span>
                            <?php endif; ?>
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
        <?php echo e($user->links()); ?>

    </div>

    <?php if($user->isEmpty()): ?>
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
<!-- /.row --><?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perpustakaan\resources\views/livewire/admin/user.blade.php ENDPATH**/ ?>